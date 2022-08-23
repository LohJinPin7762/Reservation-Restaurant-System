@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>My Deposit</h3>
            <div class="row">    
                @foreach($deposits as $deposit)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$deposit->image)}}" alt="Deposit Image" style='max-height: 250px;'>
                    <div class="card-body">
                        
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">User Name :{{$deposit->name}}</h6>
                        <h6 class="card-text" style="text-align: center;">User Email :{{$deposit->email}}</h6>
                        <h6 class="card-text" style="text-align: center;">User Card Number: RM {{$deposit->number}}</h6>
                        <h6 class="card-text" style="text-align: center;">Deposit Price: RM {{$deposit->price}}</h6>
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