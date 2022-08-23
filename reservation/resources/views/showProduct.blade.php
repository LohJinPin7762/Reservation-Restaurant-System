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
                        <td>Product Fname</td>
                        <td>Type</td>
                        <td>Price</td>
                        <td>Available</td>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$product->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->type}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->available}}</td>
                        <td>{{$product->catName}}</td>
                        <td><a href="{{route('editProduct',['id'=>$product->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection