@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>Restaurant</h3>
            <div class="row">    
                @foreach($restaurants as $restaurant)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                <h6 class="card-title" style="text-align: center;margin-top: 7px;">Restaurant Name: {{$restaurant->name}}</h6>
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$restaurant->image)}}" alt="Restaurant Image" style='max-height: 250px;'>
                    <div class="card-body">
                        
                        <p class="card-text">Restaurant Type : {{$restaurant->type}}</p>
                        <p class="card-text">Restaurant Contact Number: {{$restaurant->contact}}</p>
                        <p class="card-text">Restaurant Available: {{$restaurant->available}}</p>
                        <p class="card-text">Time:  {{$restaurant->time}}</p>
                        <td colspan="left"><a href="{{ url('/addComment')}}" class="btn btn-warning btn-xs">Comment</a></td>
                        <td colspan="right"><a href="{{ url('/viewComments')}}" class="btn btn-danger btn-xs" > View Comment</a></td>
                        <a href="{{ route('restaurant.detail', $restaurant->id) }}" class="btn btn-primary" style="margin-left:105px">View</a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>    
            <br><br>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection