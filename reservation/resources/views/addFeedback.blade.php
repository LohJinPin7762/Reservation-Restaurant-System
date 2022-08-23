@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Please Comment Feedback</h3>
        <form action="{{ route('addFeedback') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="feedbackName">Your Name</label>
                <input type="text" class="form-control" id="feedbackName" name="feedbackName">                
            </div>
            <div class="form-group">
                <label for="feedbackEmail">Your Email</label>
                <input type="text" class="form-control" id="feedbackEmail" name="feedbackEmail">                
            </div>
            <div class="form-group">
                <label for="feedbackFeedback">User Feedback</label>
                <input type="text" class="form-control" id="feedbackFeedback" name="feedbackFeedback">                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add Feedback</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection