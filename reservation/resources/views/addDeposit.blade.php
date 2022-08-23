@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Payment Deposit For Reservation Restaurant</h3>
        <form action="{{ route('addDeposit') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="depositName">Your Name</label>
                <input type="text" class="form-control" id="depositName" name="depositName">                
            </div>
            <div class="form-group">
                <label for="depositEmail">Your Email</label>
                <input type="text" class="form-control" id="depositEmail" name="depositEmail">                
            </div>
            <div class="form-group">
                <label for="depositNumber">Your Card Number</label>
                <input type="number" class="form-control" id="depositNumber" name="depositNumber" min="0">                
            </div>
            <div class="form-group">
                <label for="depositPrice">Reservation Deposit RM10 </label>
                <input type="text" class="form-control" id="depositPrice" name="depositPrice" min="0">                
            </div>
            <div class="form-group">
                <label for="depositImage">Your Image</label>
                <input type="file" class="form-control" id="depositImage" name="depositImage">                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection