@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add Comments</h3>
        <form action="{{ route('addComment') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="commentName">User Name</label>
                <input type="text" class="form-control" id="commentName" name="commentName">                
            </div>
            <div class="form-group">
                <label for="commentEmail">User Email</label>
                <input type="text" class="form-control" id="commentEmail" name="commentEmail">                
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
                <textarea class="form-control" id="commentText" name="commentText" min="0"></textarea>               
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection