@extends('layout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <br><br>
            <h3>User For This Restaurant Comment</h3>
            <div class="row">    
                @foreach($comments as $comment)
                <div class="col-sm-4">
                <div class="card" style="width: 19rem; height:98%;">
                    <div class="card-body">    
                        <a class="card-title">User Name: {{$comment->name}}</a>                 
                        <h6 class="card-text">User Contact Number: {{$comment->email}}</h6>
                        <h6 class="card-text">Comment : {{$comment->comment}}</h6>
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