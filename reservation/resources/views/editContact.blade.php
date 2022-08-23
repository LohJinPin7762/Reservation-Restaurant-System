@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Contact</h3>
        <form action="{{ route('updateContact') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($contacts as $contact)
            <div class="form-group">
                <label for="contactName">Product Name</label>
                <input type="text" class="form-control" id="contactName" name="contactName" value="{{$contact->name}}"> 
                <input type="hidden" name="contactID" id="contactID" value="{{$contact->id}}">               
            </div>
            <div class="form-group">
                <label for="contactEmail">Your Email</label>
                <input type="text" class="form-control" id="contactEmail" name="contactEmail" value="{{$contact->email}}" >                
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Contact Number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="{{$contact->number}}" >                
            </div>
            <div class="form-group">
                <label for="contactDescription">Your Image</label>
                <img src="{{asset('images')}}/{{$contact->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="contactImage" name="contactImage" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Issue Category</label>
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