@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Image</td>
                        <td>Your Name</td>
                        <td>Card Type</td>
                        <td>Item Price</td>
                        <td>Payment Card Number</td>
                        <td>Payment Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{$payment->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$payment->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$payment->name}}</td>
                        <td>{{$payment->type}}</td>
                        <td>{{$payment->price}}</td>
                        <td>{{$payment->number}}</td>
                        <td>{{$payment->catName}}</td>
                        <td><a href="{{route('editPayment',['id'=>$payment->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deletePayment',['id'=>$payment->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                        <td><a href="{{ url('/addFeedback')}}" class="btn btn-warning btn-xs">Feedback Us</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection