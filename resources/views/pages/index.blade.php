@extends('pages.master.master')

@section('content')
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/front-image.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">ONLINE BIKE RENTAL</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">FIND YOUR PERFECT BIKE</h1>


                            <a href="{{ route('motorcycle') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A
                                motorcycle</a>



                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/2021-Yamaha-MT09TRGT-EU-Icon_Performance_-Action-003-03.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">ONLINE BIKE RENTAL</h6>
                            <h1 class="display-3 text-white mb-4 animated slideInDown">FIND YOUR PERFECT BIKE</h1>


                            <a href="{{ route('motorcycle') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A
                                motorcycle</a>


                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn " data-wow-delay="0.1s">
        <div class="container ">
            <div class="bg-white shadow-lg " style="padding: 35px;">
                <div class="row g-2">
                    <h4 class=" mb-4 text-center text-primary text-uppercase ">You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! <br>
                        We have best bikes with best deals.</h4>

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
                    <p class="mb-4">WE ARE THE BIKE RENTAL MANAGER. The only 100% dedicated bike rental booking website. The first Bike Rental Manager (BRM) shop was our own bike shop. Ever Since it has been our aim to make bike rental easier for everyone,
                         everywhere.We focus on making bike rentals easier for you.Your rental business has a unique set of challenges. We are the only dedicated bike rental site and will be able to offer you a solution to match your needs.Get in touch with us today! We provide affordable bike rates, we hae lost of Satiisfied customers feedback, you can have a look at our home page too!!
                    </p>


                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ DB::table('motorcycles')->count()+30 }}</h2>
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
                                    <h2 class="mb-1" data-toggle="counter-up">{{ DB::table('users')->count()+100 }}</h2>
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
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/HP-Slider-8S-mobile.jpg"
                                style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/index_key_005_sp.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/EUiWsmsWAAAeMtM.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/17892751-0-112342321.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->





    <!-- Video Start -->
    <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our motorcycle</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">motorcycle</span></h1>
        </div>
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">ONLINE BIKE RENTAL</h6>
                    <h1 class="text-white mb-4">Why Biking</h1>
                    <p class="text-white mb-4">
                        Biking is not just a passion, it is a lifestyle. No other joy on the planet can compare the joy of hitting the long winding highways on the bike. 
                        Such happiness can’t be put in words, however, we’ve tried to capture its essence in these quotes so here are the some of the best biker quotes and 
                        sayings that any biker or motorcyclist can live by.
                    </p>
                    <a href="{{ route('motorcycle') }}" class="btn btn-primary py-md-3 px-md-5 me-3">Our motorcycle</a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src=""
                        data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="916" height="515" src="https://www.youtube.com/embed/XiAqmlIEFi0"
                       
                            title="DELPHIN BOTANIK PLATINUM HOTEL -  Promotion Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Start -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div id="more" class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item rounded" href="{{ route('motorcycle') }}">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-dharmachakra fa-2x text-primary"></i>
                              

                            </div>
                        </div>
                        <h5 class="mb-3">7/24 motorcycle support</h5>
                        
                    </a>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a class="service-item rounded" href="Food&Restaurant">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="fa fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Reservation anytime</h5>
                        
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item rounded" href="Spa&Fitness">
                        <div class="service-icon bg-transparent border rounded p-1">
                            <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                <i class="bi bi-geo-alt-fill fa-2x"></i>


                            </div>
                        </div>
                        <h5 class="mb-3">Lost of Locations</h5>
                       
                    </a>
                </div>

            

            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php $array = DB::table('reviews')->get(); ?>

    <!-- Testimonial Start -->
    <div>
        <br><br><br>
        <div id="testimonial" class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Our Customers <span class="text-primary text-uppercase">Reviews</span></h1>
        </div>
    </div>


    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">

        <div class="container">


            <div class="owl-carousel testimonial-carousel py-5">

                @foreach ($array as $item)
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">

                        <p>{{ $item->Review }}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                                <small>Customer</small>
                            </div>
                        </div>

                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>
                @endforeach

            </div>

        </div>

    </div>



    <!-- Testimonial End -->




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
