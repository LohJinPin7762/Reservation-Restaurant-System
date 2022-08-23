@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Online Payment</h3>
        <form action="{{ route('addPayment') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="paymentName">Your Name</label>
                <input type="text" class="form-control" id="paymentName" name="paymentName">                
            </div>
            <div class="form-group">
                <label for="paymentType">Card Type</label>
                <input type="text" class="form-control" id="paymentType" name="paymentType">                
            </div>
            <div class="form-group">
                <label for="paymentPrice">Item Price</label>
                <input type="number" class="form-control" id="paymentPrice" name="paymentPrice">                
            </div>
            <div class="form-group">
                <label for="paymentNumber">Payment Card Number</label>
                <input type="number" class="form-control" id="paymentNumber" name="paymentNumber">                
            </div>
            <div class="form-group">
                <label for="paymentDescription">Your Image</label>
                <input type="file" class="form-control" id="paymentImage" name="paymentImage">                
            </div>
            <div class="form-group">
                <label for="catID">Payment Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Payment</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection