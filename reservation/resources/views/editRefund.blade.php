@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Refund</h3>
        <form action="{{ route('updateRefund') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($refunds as $refund)
            <div class="form-group">
                <label for="refundName">Your Name</label>
                <input type="text" class="form-control" id="refundName" name="refundName" value="{{$refund->name}}"> 
                <input type="hidden" name="refundID" id="refundID" value="{{$refund->id}}">               
            </div>
            <div class="form-group">
                <label for="refundEmail">Your Email</label>
                <input type="text" class="form-control" id="refundEmail" name="refundEmail" value="{{$refund->email}}" >                
            </div>
            <div class="form-group">
                <label for="refundNumber">Your Card Number</label>
                <input type="number" class="form-control" id="refundNumber" name="refundNumber" min="0" value="{{$refund->number}}">                
            </div>
            <div class="form-group">
                <label for="refundPrice">Deposit Price</label>
                <input type="text" class="form-control" id="refundPrice" name="refundPrice" min="0" value="{{$refund->price}}">                
            </div>

            <div class="form-group">
                <label for="refundImage">Your Image</label>
                <img src="{{asset('images')}}/{{$refund->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="refundImage" name="refundImage" value="">                
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