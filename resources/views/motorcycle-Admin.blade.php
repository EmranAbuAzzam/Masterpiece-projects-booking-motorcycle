@extends('layouts.app')

@extends('layouts.nav')

@section('content')


    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                {{ $message }}
            </div>
        @endif


        <h1 class="text-center">All motorcycle</h1>
        <a class="btn btn-success" href="{{ route('admin.motorcycleAdmin.create') }}">Add a motorcycle</a>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-sm float-end"> Go Back</a>
        <br><br>

        <table class="table table-striped">
            <thead>
                <th>motorcycle Number</th>
                <th>Number of motorcycle</th>
                <th>motorcycle Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Description</th>
                <th>Image</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>



                {{-- {{$categories}}
{{$motorcycle}} --}}


                @foreach ($motorcycle as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->num_of_motorcycle }}</td>
                        <td>{{ $row->cat_name }}</td>
                        <td>{{ $row->motorcycle_price }} $</td>
                        <td>
                            @if ($row->status == 1)
                                {{ 'Avillable' }}
                            @else
                                {{ 'Bocked' }}
                            @endif
                        </td>

                        <td>{{ $row->motorcycle_description }}</td>

                        <td><img width="50px" height="50px" src="{{ asset('images/' . $row->motorcycle_image) }}"></td>
                        <td><a href="{{ route('admin.motorcycleAdmin.edit', $row->id) }}"
                                class="btn btn-warning btn-sm">Edit</a></td>
                        <form class="float-end" method="post" action="{{ route('admin.motorcycleAdmin.destroy', $row->id) }}">
                            @csrf
                            @method('DELETE')
                            <td><input onclick="return confirm('Are you sure you want to delete this motorcycle?')" type="submit"
                                    class="btn btn-danger btn-sm" value="Delete" /></td>
                        </form>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>







@endsection
