@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Admin</h3>
        <form action="{{ route('updateFeedback') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($feedback as $feedback)
            <div class="form-group">
                <label for="feedbackName">Your Name</label>
                <input type="text" class="form-control" id="feedbackName" name="feedbackName" value="{{$feedback->name}}"> 
                <input type="hidden" name="feedbackID" id="feedbackID" value="{{$feedback->id}}">               
            </div>
            <div class="form-group">
                <label for="feedbackEmail">Your Email</label>
                <input type="text" class="form-control" id="feedbackEmail" name="feedbackEmail" value="{{$feedback->email}}" >                
            </div>
            <div class="form-group">
                <label for="feedbackFeedback">Your Feedback</label>
                <input type="text" class="form-control" id="feedbackFeedback" name="feedbackFeedback" value="{{$feedback->feedback}}" >                
            </div>
            <div class="form-group">
                <label for="catID">Feedback Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>                
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection