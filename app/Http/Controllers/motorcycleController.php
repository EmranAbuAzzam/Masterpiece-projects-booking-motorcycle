<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\motorcycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class motorcycleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $categories = category::all();
        // $motorcycle = motorcycle::all();
        $motorcycle = DB::table('motorcycles')
        ->join('categories', 'motorcycles.cat_id', '=', 'categories.id')
        ->select('motorcycles.*', 'categories.cat_name')
        ->get();

        return view('motorcycle-Admin', ['motorcycle' =>$motorcycle]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = category::all();
        return view('add_motorcycle', [
            'categories'=>$categories,
            'auth_user'=>Auth::user(),

        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'num_of_motorcycle'          => 'required',

            'motorcycle_price'        => 'required',
            'motorcycle_description'   => 'required',
            'motorcycle_image'           => 'required|image',
            'motorcycle_image1'           => 'required|image',
            'motorcycle_image2'           => 'required|image'
        ]);

        $file_name = time() . '.' . request()->motorcycle_image->getClientOriginalExtension();

        request()->motorcycle_image->move(public_path('images'), $file_name);

        $file_name1 = time() .'img1'. '.' . request()->motorcycle_image1->getClientOriginalExtension();

        request()->motorcycle_image1->move(public_path('images'), $file_name1);

        $file_name2 = time() .'img2'. '.' . request()->motorcycle_image2->getClientOriginalExtension();

        request()->motorcycle_image2->move(public_path('images'), $file_name2);

        $motorcycle = new motorcycle;

        $motorcycle->num_of_motorcycle = $request->num_of_motorcycle;
        $motorcycle->cat_id = $request->cat_name;
        $motorcycle->motorcycle_price = $request->motorcycle_price;
        $motorcycle->motorcycle_description = $request->motorcycle_description;
        $motorcycle->motorcycle_image = $file_name;
        $motorcycle->motorcycle_image1 = $file_name1;
        $motorcycle->motorcycle_image2 = $file_name2;

        $motorcycle->save();

        return redirect('admin/motorcycleAdmin')->with('success', 'motorcycle Data Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = category::all();
        $motorcycle = motorcycle::find($id);
        return view('edit_motorcycle', [
            'categories'=>$categories,
            'motorcycle'=>$motorcycle,
            'auth_user'=>Auth::user(),

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'num_of_motorcycle'          => 'required',
            'cat_id'          => 'required',
            'motorcycle_price'        => 'required',
            'motorcycle_description'   => 'required',
            'status'        => 'required',
            'motorcycle_image'           => 'image',
            'motorcycle_image1'           => 'image',
            'motorcycle_image2'           => 'image'

        ]);



        if ($request->motorcycle_image != "") {
            $motorcycle_image = time() . '.' . request()->motorcycle_image->getClientOriginalExtension();
            request()->motorcycle_image->move(public_path('images'), $motorcycle_image);
        } 
        
        else {
            $motorcycle_image = $request->hidden_img;
        }
        //img1
        if ($request->motorcycle_image1 != "") {
            $motorcycle_image1 = time().'img1' . '.' . request()->motorcycle_image1->getClientOriginalExtension();
            request()->motorcycle_image1->move(public_path('images'), $motorcycle_image1);
        } 
        
        else {
            $motorcycle_image1 = $request->hidden_img1;
        }
        //img2
        if ($request->motorcycle_image2  != "") {
            $motorcycle_image2  = time() .'img2'. '.' . request()->motorcycle_image2 ->getClientOriginalExtension();
            request()->motorcycle_image2 ->move(public_path('images'), $motorcycle_image2 );
        } 
        
        else {
            $motorcycle_image2  = $request->hidden_img2;
        }


        $motorcycle = motorcycle::find($id);
        $motorcycle->num_of_motorcycle = $request->num_of_motorcycle;
        $motorcycle->cat_id = $request->cat_id;
        $motorcycle->motorcycle_price = $request->motorcycle_price;
        $motorcycle->motorcycle_description = $request->motorcycle_description;
        $motorcycle->status = $request->status;
        $motorcycle->motorcycle_image = $motorcycle_image;
        $motorcycle->motorcycle_image1 = $motorcycle_image1;
        $motorcycle->motorcycle_image2 = $motorcycle_image2;

        $motorcycle->save();

        return redirect('admin/motorcycleAdmin')->with('success', 'motorcycle Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDestroy = motorcycle::find($id);
        $userDestroy->destroy($id);
        return redirect('admin/motorcycleAdmin')->with('success', ' motorcycle Data deleted successfully');
    }
}
