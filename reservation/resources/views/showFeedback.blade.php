@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>User Name</td>
                        <td>User Email</td>
                        <td>User Feedback</td>
                        <td>Gender</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $feedback)
                    <tr>
                        <td>{{$feedback->id}}</td>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{$feedback->feedback}}</td>
                        <td>{{$feedback->catName}}</td>
                        <td><a href="{{route('editFeedback',['id'=>$feedback->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteFeedback',['id'=>$feedback->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection