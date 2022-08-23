@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>My Refund Deposit</h3>
            <div class="row">    
                @foreach($refunds as $refund)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$refund->image)}}" alt="Refund Image" style='max-height: 250px;'>
                    <div class="card-body">
                        
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">Your Name :{{$refund->name}}</h6>
                        <h6 class="card-text" style="text-align: center;">Your Email :{{$refund->email}}</h6>
                        <h6 class="card-text" style="text-align: center;">Your Card Number: RM {{$refund->number}}</h6>
                        <h6 class="card-text" style="text-align: center;">Deposit Price: RM {{$refund->price}}</h6>
                        <a href="{{ url('/viewAdmins')}}" class="btn btn-primary" style="margin-left:105px">Find Admin</a>
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