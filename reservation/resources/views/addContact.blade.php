@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Contact Us</h3>
        <form action="{{ route('addContact') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="contactName">Your Name</label>
                <input type="text" class="form-control" id="contactName" name="contactName">                
            </div>
            <div class="form-group">
                <label for="contactEmail">Your Email</label>
                <input type="text" class="form-control" id="contactEmail" name="contactEmail">                
            </div>
            <div class="form-group">
                <label for="contactNumber">Your Contact Number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber">                
            </div>
            <div class="form-group">
                <label for="contactDescription">Your Image</label>
                <input type="file" class="form-control" id="contactImage" name="contactImage">                
            </div>
            <div class="form-group">
                <label for="catID">Issue Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add Contact</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection