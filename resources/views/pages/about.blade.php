@extends('pages.master.master')
@section('content')
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/listing-page-header-img0.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn " data-wow-delay="0.1s">
        <div class="container ">
            <div class="bg-white shadow-lg " style="padding: 35px;">
                <div class="row g-2">
                    <h4 class=" mb-4 text-center text-primary text-uppercase "> If you want to be happy for a day, drink.
                        If you want to be happy for a year, marry.
                      <br>
                      If you want to be happy for a lifetime, ride a motorcycle,</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">ONLINE BIKE RENTAL</span></h1>
                    <p class="mb-4">We care about everything from giving you a choice of exciting rental motorbikes to guiding you through every mile, smile and mountain road in jordan. Motorbike Trip is built on passion: the passion to enjoy 
                        exceptional motorcycles in exceptional riding conditions..
                    </p>


                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ DB::table('motorcycles')->count() }}</h2>
                                    <p class="mb-0">motorcycle</p>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">12</h2>
                                    <p class="mb-0">Staffs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ DB::table('users')->count() }}</h2>
                                    <p class="mb-0">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/#more">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/gerbing-heated-jacket-2-646x340.jpg"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/harley-davidson-3794909__340.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/Southern_California_Norton_Owner's_Club_Cambria_Ride_on_hwy_41_near_Creston,_CA.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/US-learn-ride-1410x793.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Team Start -->
   
    <!-- Team End -->












    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">For more information please <span
                                    class="text-primary text-uppercase">Contact US</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">

                                <a type="button" href="{{ route('contactus.index') }}"
                                    class="btn btn-primary py-2 px-3 position-center absolute top-0 end-0 mt-2 me-2">Contact
                                    US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->


    <!-- Footer Start -->
@endsection
