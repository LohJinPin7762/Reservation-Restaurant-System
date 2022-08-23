@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Payment</h3>
        <form action="{{ route('updatePayment') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($payments as $payment)
            <div class="form-group">
                <label for="paymentName">Your Name</label>
                <input type="text" class="form-control" id="paymentName" name="paymentName" value="{{$payment->name}}"> 
                <input type="hidden" name="paymentID" id="paymentID" value="{{$payment->id}}">               
            </div>
            <div class="form-group">
                <label for="paymentType">Card Type</label>
                <input type="text" class="form-control" id="paymentType" name="paymentType" value="{{$payment->type}}" >                
            </div>
            <div class="form-group">
                <label for="paymentPrice">Item Price</label>
                <input type="text" class="form-control" id="paymentPrice" name="paymentPrice" value="{{$payment->price}}" >                
            </div>
            <div class="form-group">
                <label for="paymentNumber">Payment Card Number</label>
                <input type="number" class="form-control" id="paymentNumber" name="paymentNumber" value="{{$payment->number}}" >                
            </div>
            <div class="form-group">
                <label for="paymentDescription">Your Image</label>
                <img src="{{asset('images')}}/{{$payment->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="paymentImage" name="paymentImage" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Payment Category</label>
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