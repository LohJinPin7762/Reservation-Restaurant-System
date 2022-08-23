@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>Feedback</h3>
            <div class="row">    
                @foreach($feedback as $feedback)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    
                    <div class="card-body">    
                        <h6 class="card-title" style="text-align: center;margin-top: 7px;">User Name: {{$feedback->name}}</h6>                 
                        <h6 class="card-text">User Email : {{$feedback->email}}</h6>
                        <h6 class="card-text">User For This System Feedback : {{$feedback->feedback}}</h6>
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