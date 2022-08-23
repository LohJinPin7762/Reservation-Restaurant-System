@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Product</h3>
        <form action="{{ route('updateDeposit') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($deposits as $deposit)
            <div class="form-group">
                <label for="depositName">Your Name</label>
                <input type="text" class="form-control" id="depositName" name="depositName" value="{{$deposit->name}}"> 
                <input type="hidden" name="depositID" id="depositID" value="{{$deposit->id}}">               
            </div>
            <div class="form-group">
                <label for="depositEmail">Your Email</label>
                <input type="text" class="form-control" id="depositEmail" name="depositEmail" value="{{$deposit->email}}" >                
            </div>
            <div class="form-group">
                <label for="depositNumber">Your Card Number</label>
                <input type="number" class="form-control" id="depositNumber" name="depositNumber" min="0" value="{{$deposit->number}}">                
            </div>
            <div class="form-group">
                <label for="depositPrice">Deposit Price</label>
                <input type="text" class="form-control" id="depositPrice" name="depositPrice" min="0" value="{{$deposit->price}}">                
            </div>

            <div class="form-group">
                <label for="depositImage">Your Image</label>
                <img src="{{asset('images')}}/{{$deposit->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="depositImage" name="depositImage" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
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