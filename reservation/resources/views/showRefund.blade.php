@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Action</td>
                        <td>ID</td>
                        <td>Image</td>
                        <td>User Name</td>
                        <td>user Email</td>
                        <td>User Card Number</td>
                        <td>Reservation Restaurant Price</td>
                        <td>Gender</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($refunds as $refund)
                    <tr>
                        <td><a href="{{route('editRefund',['id'=>$refund->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteRefund',['id'=>$refund->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                        <td>{{$refund->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$refund->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$refund->name}}</td>
                        <td>{{$refund->email}}</td>
                        <td>{{$refund->number}}</td>
                        <td>{{$refund->price}}</td>
                        <td>{{$refund->catName}}</td>
                        <td><a href="{{ url('/sms')}}" class="btn btn-warning btn-xs">SMS User</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection