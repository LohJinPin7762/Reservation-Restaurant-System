@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Admin</h3>
        <form action="{{ route('addAdmin') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="adminName">Admin Name</label>
                <input type="text" class="form-control" id="adminName" name="adminName">                
            </div>
            <div class="form-group">
                <label for="adminEmail">User Email</label>
                <input type="text" class="form-control" id="adminEmail" name="adminEmail">                
            </div>
            <div class="form-group">
                <label for="adminNumber">Admin Contact Number</label>
                <input type="number" class="form-control" id="adminNumber" name="adminNumber">                
            </div>
            <div class="form-group">
                <label for="adminDescription">Admin Image</label>
                <input type="file" class="form-control" id="adminImage" name="adminImage">                
            </div>
            <div class="form-group">
                <label for="catID">Admin Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add New Admin</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection