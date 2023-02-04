@extends('layouts.app')
@extends('layouts.nav')
@section('content')

    <div class="container col-6 mt-2">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">Edit motorcycle details
                <a href="{{ route('admin.motorcycleAdmin.index') }}" class="btn btn-secondary btn-sm float-end"> Go Back</a>
            </div>

            <div class="card-body">
                <form method="post" action="{{ route('admin.motorcycleAdmin.update', $motorcycle->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')


                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Number of motorcycle : </label>
                        <div class="col-sm-10">
                            <input type="text" name="num_of_motorcycle" class="form-control"
                                value="{{ $motorcycle->num_of_motorcycle }}" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Category: </label>
                        <div class="col-sm-10">
                        <select name="cat_id" class="form-control">
                            <option  disabled="">Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
              
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Status </label>
                        <div class="col-sm-10">
                        <select name="status" class="form-control">
                            <option value="none" selected="" disabled="">Booking status</option>

                            <option value="1">Avillable</option>
                            <option value="0">Booked</option>



                        </select>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Price : </label>
                        <div class="col-sm-10">
                            <input type="text" name="motorcycle_price" class="form-control" value="{{ $motorcycle->motorcycle_price}}">
                        </div>
                    </div>


                    <div class="row mb-4">
                        <label class="col-sm-2 col-label-form">Description : </label>
                        <div class="col-sm-10">
                            <textarea type="text" name="motorcycle_description" class="form-control" rows="3">{{ $motorcycle->motorcycle_description }}</textarea>
                        </div>
                    </div>




                    <img src="{{ asset('images/' . $motorcycle->motorcycle_image) }}" width="100" class="img-thumbnail" />
                    <div class="form-group mb-5">
                        <input class="form-control" type="file" id="image" name="motorcycle_image">
                    </div>
                    <input type="hidden" name="hidden_img" value="{{ $motorcycle->motorcycle_image }}" />




                    
                    <img src="{{ asset('images/' . $motorcycle->motorcycle_image1) }}" width="100" class="img-thumbnail" />
                    <div class="form-group mb-5">
                        <input class="form-control" type="file" id="image1" name="motorcycle_image1">
                    </div>
                    <input type="hidden" name="hidden_img1" value="{{ $motorcycle->motorcycle_image1 }}" />



                    



                    <img src="{{ asset('images/' . $motorcycle->motorcycle_image2) }}" width="100" class="img-thumbnail" />
                    <div class="form-group mb-5">
                        <input class="form-control" type="file" id="image2" name="motorcycle_image2">
                    </div>
                    <input type="hidden" name="hidden_img2" value="{{ $motorcycle->motorcycle_image2 }}" />

                    <div class="text-center">
                        <input type="submit" class="btn btn-primary float-end" value="Update details" />
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
