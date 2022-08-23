@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Reservation</h3>
        <form action="{{ route('addReservation') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="reservationRestaurant">Restaurant Name</label>
                <input type="text" class="form-control" id="reservationRestaurant" name="reservationRestaurant">                
            </div>
            <div class="form-group">
                <label for="reservationName">Your Name</label>
                <input type="text" class="form-control" id="reservationName" name="reservationName">                
            </div>
            <div class="form-group">
                <label for="reservationContact">Contact Number</label>
                <input type="text" class="form-control" id="reservationContact" name="reservationContact">                
            </div>
            <div class="form-group">
                <label for="reservationDate">Reservation Date</label>
                <input type="date" class="form-control" id="reservationDate" name="reservationDate" min="0">                
            </div>
            <div class="form-group">
                <label for="reservationTime">Reservation Time</label>
                <input type="text" class="form-control" id="reservationTime" name="reservationTime" min="0">                
            </div>
            <div class="form-group">
                <label for="reservationAvailable">Quantity of Reservation</label>
                <input type="number" class="form-control" id="reservationAvailable" name="reservationAvailable" min="0" max="10">                
            </div>
            <div class="form-group">
                <label for="reservationImage">Your Image</label>
                <input type="file" class="form-control" id="reservationImage" name="reservationImage">                
            </div>
            <div class="form-group">
                <label for="catID">Gender</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add Reservation</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection