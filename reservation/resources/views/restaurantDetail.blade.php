@extends('layout')
@section('content')
<div class="row">
    @foreach($restaurants as $restaurant)
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="card-body">
            <div class="row">
                    @CSRF
                <div class="col-md-3">
                    <h5 class="card-title">Restaurant Name :{{$restaurant->name}}</h5>
                    <input type="hidden" name="restaurantID" value="{{$restaurant->id}}">
                    <img src="{{asset('images/')}}/{{$restaurant->image}}" alt="" width="100%" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">Restaurant Type :{{$restaurant->type}}</p>
                    <p class="card-text">Contact Number :{{$restaurant->contact}}</p>
                    <p class="card-text">Restaurant Open Time :{{$restaurant->time}}</p>
                    <div class="card-heading">Available :{{$restaurant->available}}</div><br><br>
                    <a href="{{ url('/addDeposit')}}" class="btn btn-primary" style="margin-left:105px">Reservation</a><br>
                </div>

                <iframe src= "{{$restaurant->map}}" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection