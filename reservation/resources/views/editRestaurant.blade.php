@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Restaurant</h3>
        <form action="{{ route('updateRestaurant') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($restaurants as $restaurant)
            <div class="form-group">
                <label for="restaurantName">Restaurant Name</label>
                <input type="text" class="form-control" id="restaurantName" name="restaurantName" value="{{$restaurant->name}}"> 
                <input type="hidden" name="restaurantID" id="restaurantID" value="{{$restaurant->id}}">               
            </div>
            <div class="form-group">
                <label for="restaurantDescription">Restaurant Type</label>
                <input type="text" class="form-control" id="restaurantType" name="restaurantType" value="{{$restaurant->type}}" >                
            </div>
            <div class="form-group">
                <label for="restaurantContact">Restaurant Contact Number </label>
                <input type="text" class="form-control" id="restaurantContact" name="restaurantContact" value="{{$restaurant->contact}}" >                
            </div>
            <div class="form-group">
                <label for="restaurantTime">Restaurant Time</label>
                <input type="text" class="form-control" id="restaurantTime" name="restaurantTime" min="0" value="{{$restaurant->time}}">                
            </div>
            <div class="form-group">
                <label for="restaurantAvailable">Restaurant Available</label>
                <input type="number" class="form-control" id="restaurantAvailable" name="restaurantAvailable" min="0" value="{{$restaurant->available}}">                
            </div>
            <div class="form-group">
                <label for="restaurantMap">Restaurant Map</label>
                <input type="text" class="form-control" id="restaurantMap" name="restaurantMap" min="0" value="{{$restaurant->map}}">                
            </div>
            <div class="form-group">
                <label for="productDescription">Restaurant Image</label>
                <img src="{{asset('images')}}/{{$restaurant->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="restaurantImage" name="restaurantImage" value="image">                
            </div>
            <div class="form-group">
                <label for="catID">Category</label>
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