@extends('layout')
@section('content')
<div class="row">
    @foreach($products as $product)
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="card-body">
            <div class="row">
                <form action="{{ route('add.to.cart') }}" method="POST">
                    @CSRF
                <div class="col-md-3">
                    <h5 class="card-title">Name :{{$product->name}}</h5>
                    <input type="hidden" name="productID" value="{{$product->id}}">
                    <img src="{{asset('images/')}}/{{$product->image}}" alt="" width="100%" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">Type :{{$product->type}}</p>
                    <div class="card-heading">Available :<input type="number" min="1" max="10" name="available"> Available: {{$product->available}}</div><br><br>
                    <div class="card-heading">RM :{{$product->price}}</div>
                    <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection