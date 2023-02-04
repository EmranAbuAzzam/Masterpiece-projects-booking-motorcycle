<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\category;
use App\Models\motorcycle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class motorcycleListingController extends Controller
{

    public function index()
    {
        $cat=category::all();
        $motorcycle = DB::table('motorcycles')
        ->join('categories', 'motorcycles.cat_id', '=', 'categories.id')
        ->select('motorcycles.*', 'categories.cat_name')->where('status','=','1')
        ->get();
        return view('pages.motorcycle', ['motorcycle' => $motorcycle,
        'cat'=>$cat
    ]);
    }


    public function avilable(Request $request){

        $cat=category::all();
        $user_date_input=Booking::where('checkIn_date','>=',"{$request->from}")
                                ->where('checkOut_date','<=',"{$request->to}")
                                ->get("motorcycle_id");
                                // ->orWhereBetween('checkOut_date', [$request->from, $request->to])

        $available=motorcycle::whereNotIn('id',$user_date_input)->get();
        $available= $available->where('cat_id',$request->cat_id)
        ;
     
 

       return view('pages.motorcycle',[
           'motorcycle'=>$available,
           'cat'=>$cat
           


       ]);


    }


    public function book($id)
    {
             

        
        $motorcycle = motorcycle::find($id);
        $user = Auth::user();
        return view('pages.booking', [
             'motorcycle' => $motorcycle,
             'user' => $user
            ]);
    }


    public function confirm($id, Request $request)
    {
        try {

            $motorcycle = motorcycle::find($id);
            $user = Auth::user();
            $insert = new motorcycle();

            $start_date = Carbon::parse($request->input('checkin'));
            $end_date = Carbon::parse($request->input('checkout'));
            $price = $motorcycle->motorcycle_price;
            $special_request=$request->special_request ;

            $booking = $insert->bookForUser($user->id, $motorcycle->id, $start_date, $end_date, $price,$special_request);

            return redirect('userprofile');


        } catch(\Exception $e) {
          
            return redirect()->route('motorcycle.book',$motorcycle->id)->with('errorx',  $e->getMessage());
        }
    }


}
