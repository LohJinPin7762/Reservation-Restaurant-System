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
                    @foreach($deposits as $deposit)
                    <tr>
                        <td><a href="{{route('editDeposit',['id'=>$deposit->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteDeposit',['id'=>$deposit->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                        <td>{{$deposit->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$deposit->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$deposit->name}}</td>
                        <td>{{$deposit->email}}</td>
                        <td>{{$deposit->number}}</td>
                        <td>{{$deposit->price}}</td>
                        <td>{{$deposit->catName}}</td>
                    </tr>
                    <tr>
                        <td><a href="{{ url('/addRefund')}}" class="btn btn-warning btn-xs">Refund</a></td>
                        <td colspan="9"><a href="{{ url('/addReservation')}}" class="btn btn-primary" style="margin-left:105px">Coutinue Reservation</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection