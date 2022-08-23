@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>My Reservation</h3>
            <div class="row">    
                @foreach($reservations as $reservation)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$reservation->image)}}" alt="Reservation Image" style='max-height: 250px;'>
                    <div class="card-body">        
                        <p class="card-text">Restaurant Name :{{$reservation->restaurant}}</p>              
                        <p class="card-text">Your Name :{{$reservation->name}}</p>
                        <p class="card-text">Contact Number :{{$reservation->contact}}</p>
                        <p class="card-text">Reservation Date : {{$reservation->date}}</p>
                        <p class="card-text">Reservation Time : {{$reservation->time}}</p>
                        <p class="card-text">Number of Reservation : {{$reservation->available}}</p>
                        
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