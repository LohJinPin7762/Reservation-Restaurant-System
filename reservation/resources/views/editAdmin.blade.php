@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Admin</h3>
        <form action="{{ route('updateAdmin') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($admins as $admin)
            <div class="form-group">
                <label for="adminName">Product Name</label>
                <input type="text" class="form-control" id="adminName" name="adminName" value="{{$admin->name}}"> 
                <input type="hidden" name="adminID" id="adminID" value="{{$admin->id}}">               
            </div>
            <div class="form-group">
                <label for="adminEmail">Admin Email</label>
                <input type="text" class="form-control" id="adminEmail" name="adminEmail" value="{{$admin->email}}" >                
            </div>
            <div class="form-group">
                <label for="adminNumber">Admin Contact Number</label>
                <input type="text" class="form-control" id="adminNumber" name="adminNumber" value="{{$admin->number}}" >                
            </div>
            <div class="form-group">
                <label for="adminDescription">Admin Image</label>
                <img src="{{asset('images')}}/{{$admin->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="adminImage" name="adminImage" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Admin Gender</label>
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