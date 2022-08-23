@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Action</td>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Restaurant Fname</td>
                        <td>Type</td>
                        <td>Contact Number</td>
                        <td>Time</td>
                        <td>Available</td>
                        <td>Map</td>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($restaurants as $restaurant)
                    <tr>
                    <td>
                        <a href="{{route('editRestaurant',['id'=>$restaurant->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteRestaurant',['id'=>$restaurant->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                        <td>{{$restaurant->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$restaurant->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$restaurant->name}}</td>
                        <td>{{$restaurant->type}}</td>
                        <td>{{$restaurant->contact}}</td>
                        <td>{{$restaurant->time}}</td>
                        <td>{{$restaurant->available}}</td>
                        <td>{{$restaurant->map}}</td>
                        <td>{{$restaurant->catName}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection