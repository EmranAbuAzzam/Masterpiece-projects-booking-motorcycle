<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Throwable;

class motorcycle extends Model
{
  use HasFactory;

  protected $fillable =
  [
    'cat_name', 'num_of_motorcycle', 'motorcycle_price',
    'status', 'motorcycle_img', 'motorcycle_img1','motorcycle_img2','motorcycle_description', 'name','special_request'
  ];


  public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(category::class);
  }

  public function reviews()
  {
    return $this->hasMany(review::class);
  }


  public function bookForUser($userId, $motorcycleId, $start_date, $end_date, $price,$special_request)
  {

    //1. check the motorcycle availability

    if ($end_date <= $start_date) {
      abort(403, "invalid date");
    }

    $from = $start_date->toDateString();
    $to = $end_date->toDateString();


    $diff = $start_date->diffInDays($end_date);

    $totalPrice = ($diff * $price);
    $tax = $totalPrice * 16 / 100;
    $finalAmount =  $tax + $totalPrice;


    // $reserved = Booking::where('motorcycle_id', $motorcycleId)
    //   ->where('checkIn_date', '<=', $from)
    //   ->where('checkOut_date', '>=', $to)
    //   ->orWhereBetween('checkOut_date', [$from, $to])
    //   ->count();

    $reserved = Booking::where('motorcycle_id', $motorcycleId)
    ->where('checkIn_date', '<=', $from)
    ->where('checkOut_date', '>=', $to)
    ->orWhereBetween('checkOut_date', [$from, $to])
    ->where('motorcycle_id', $motorcycleId)->count();;










    $reserved2 = Booking::where('motorcycle_id', $motorcycleId)
      ->whereBetween('checkIn_date', [$from, $to])->count();



    // Show results of log

    if ($reserved2 > 0 || $reserved > 0)

      abort(403, "The motorcycle is not available for this date. Please selected different date.");


    //2. Book the motorcycle

    $booking = new Booking();
    $booking->user_id = $userId;
    $booking->motorcycle_id = $motorcycleId;
    $booking->totalAmount = $finalAmount;
    $booking->checkIn_date = $from;
    $booking->checkOut_date = $to;
    $booking->special_request = $special_request;

    $booking->save();

    return $booking;
  }
}
