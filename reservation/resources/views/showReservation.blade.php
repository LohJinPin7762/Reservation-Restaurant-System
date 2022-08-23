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
                        <td>Restaurant Fname</td>
                        <td>Your Name</td>
                        <td>Contact Number</td>
                        <td>Reservation Date</td>
                        <td>Reservation Time</td>
                        <td>Number of Reservations</td>
                        <td>Gender</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                    <tr>
                        <td><a href="{{route('editReservation',['id'=>$reservation->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteReservation',['id'=>$reservation->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                        <td>{{$reservation->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$reservation->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$reservation->restaurant}}</td>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->contact}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time}}</td>
                        <td>{{$reservation->available}}</td>
                        <td>{{$reservation->catName}}</td>
                    </tr> 
                    @endforeach
                    <tr style="text-align: center;">
                        <td colspan="5" style="text-align:right"><a href="{{ url('/viewReservations')}}" class="btn btn-warning btn-xs">My Reservation</a></td>
                        <td colspan="3" style="text-align:right"><a href="{{ url('/viewProducts')}}" class="btn btn-danger btn-sm" onClick="">Reservation Food</a></td>
                    </tr>
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection