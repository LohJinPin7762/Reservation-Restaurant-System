@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Refund the deposit to User</h3>
        <form action="{{ route('addRefund') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="refundName">User Name</label>
                <input type="text" class="form-control" id="refundName" name="refundName">                
            </div>
            <div class="form-group">
                <label for="refundEmail">User Email</label>
                <input type="text" class="form-control" id="refundEmail" name="refundEmail">                
            </div>
            <div class="form-group">
                <label for="refundNumber">User Card Number</label>
                <input type="number" class="form-control" id="refundNumber" name="refundNumber" min="0">                
            </div>
            <div class="form-group">
                <label for="refundPrice">Reservation Deposit RM10 </label>
                <input type="text" class="form-control" id="refundPrice" name="refundPrice" min="0">                
            </div>
            <div class="form-group">
                <label for="refundImage">User Image</label>
                <input type="file" class="form-control" id="refundImage" name="refundImage">                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Refund to User</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection