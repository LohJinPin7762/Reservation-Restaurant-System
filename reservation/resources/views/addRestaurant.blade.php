@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Create New Restaurant</h3>
        <form action="{{ route('addRestaurant') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="restaurantName">Restaurant Name</label>
                <input type="text" class="form-control" id="restaurantName" name="restaurantName">                
            </div>
            <div class="form-group">
                <label for="restaurantType">Restaurant Type</label>
                <input type="text" class="form-control" id="restaurantType" name="restaurantType">                
            </div>
            <div class="form-group">
                <label for="restaurantContact">Restaurant Contact Number</label>
                <input type="text" class="form-control" id="restaurantContact" name="restaurantContact">                
            </div>
            <div class="form-group">
                <label for="restaurantTime">Restaurant Time</label>
                <input type="text" class="form-control" id="restaurantTime" name="restaurantTime" min="">                
            </div>
            <div class="form-group">
                <label for="restaurantAvailable">Restaurant Available</label>
                <input type="text" class="form-control" id="restaurantAvailable" name="restaurantAvailable" min="0">                
            </div>
            <div class="form-group">
                <label for="restaurantDescription">Restaurant Image</label>
                <input type="file" class="form-control" id="restaurantImage" name="restaurantImage">                
            </div>
            <div class="form-group">
                <label for="restaurantMap">Restaurant Map</label>
                <input type="text" class="form-control" id="restaurantMap" name="restaurantMap">                
            </div>
            <div class="form-group">
                <label for="catID">Restaurant Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>               
            </div>
            <button type="submit" class="btn btn-primary">Add New Restaurant</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection