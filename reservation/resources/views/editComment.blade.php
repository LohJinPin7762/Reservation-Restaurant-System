@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Comments</h3>
        <form action="{{ route('updateComment') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($comments as $comment)
            <div class="form-group">
                <label for="commentName">User Name</label>
                <input type="text" class="form-control" id="commentName" name="commentName" value="{{$comment->name}}"> 
                <input type="hidden" name="commentID" id="commentID" value="{{$comment->id}}">               
            </div>
            <div class="form-group">
                <label for="commentEmail">User Email</label>
                <input type="text" class="form-control" id="commentEmail" name="commentEmail" value="{{$comment->email}}" >                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>                
            </div>
            <div class="form-group">
                <label for="commentText">Comment</label>
                <textarea class="form-control" id="commentText" name="commentText" min="0" value="{{$comment->text}}"></textarea>              
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection