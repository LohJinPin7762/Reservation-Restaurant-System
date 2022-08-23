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
                        <td>Email</td>
                        <td>Gender</td>
                        <td>Comment</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->catName}}</td>
                        <td>{{$comment->comment}}</td>
                        <td><a href="{{route('editComment',['id'=>$comment->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteComment',['id'=>$comment->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection