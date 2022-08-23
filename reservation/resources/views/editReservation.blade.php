@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Reservation</h3>
        <form action="{{ route('updateReservation') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($reservations as $reservation)
            <div class="form-group">
                <label for="reservationRestaurant">Restaurant Name</label>
                <input type="text" class="form-control" id="reservationRestaurant" name="reservationRestaurant" value="{{$reservation->restaurant}}"> 
                <input type="hidden" name="reservationID" id="reservationID" value="{{$reservation->id}}">               
            </div>
            <div class="form-group">
                <label for="reservationName">Your Name</label>
                <input type="text" class="form-control" id="reservationName" name="reservationName" value="{{$reservation->name}}" >                
            </div>
            <div class="form-group">
                <label for="reservationContact">Contact Number</label>
                <input type="text" class="form-control" id="reservationContact" name="reservationContact" min="0" value="{{$reservation->contact}}">                
            </div>
            <div class="form-group">
                <label for="reservationDate">Reservation Date</label>
                <input type="date" class="form-control" id="reservationDate" name="reservationDate" min="0" value="{{$reservation->date}}">                
            </div>
            <div class="form-group">
                <label for="reservationTime">Reservation Time</label>
                <input type="text" class="form-control" id="reservationTime" name="reservationTime" min="0" value="{{$reservation->time}}">                
            </div>
            <div class="form-group">
                <label for="reservationAvailable">Quantity of Reservation</label>
                <input type="number" class="form-control" id="reservationAvailable" name="reservationAvailable" min="0" max="10" value="{{$reservation->available}}">                
            </div>

            <div class="form-group">
                <label for="reservationImage">Your Image</label>
                <img src="{{asset('images')}}/{{$reservation->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="reservationImage" name="reservationImage" value="">                
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