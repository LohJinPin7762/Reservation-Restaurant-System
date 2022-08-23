@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>Admins</h3>
            <div class="row">    
                @foreach($admins as $admin)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <img class="card-img-top img-fluid" src="{{asset('images/'.$admin->image)}}" alt="Admin Image" style='max-height: 250px;'>
                    <div class="card-body">    
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">Admin Name: {{$admin->name}}</h6>
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">Admin Email: {{$admin->email}}</h6>                    
                        <h6 class="card-text">Contact Number: {{$admin->number}}</h6>
                        <a href="{{ url('/addContact')}}" class="btn btn-primary" style="margin-left:105px">Contact Us</a>
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