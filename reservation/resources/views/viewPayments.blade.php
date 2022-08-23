@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>My Payment Record</h3>
            <div class="row">    
                @foreach($payments as $payment)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$payment->image)}}" alt="Payment Image" style='max-height: 250px;'>
                    <div class="card-body">
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">Your Name :{{$payment->name}}</h6>
                        <h6 class="card-text" style="text-align: center;">Payment Type :{{$payment->type}}</h6>
                        <h6 class="card-text" style="text-align: center;">Price: RM {{$payment->price}}</h6>
                        <h6 class="card-text" style="text-align: center;">Card Number : {{$payment->number}}</h6>
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