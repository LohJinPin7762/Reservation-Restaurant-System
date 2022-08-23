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
                        <td>Your Email</td>
                        <td>Your Contact Number</td>
                        <td>Issue Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$contact->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->number}}</td>
                        <td>{{$contact->catName}}</td>
                        <td><a href="{{route('editContact',['id'=>$contact->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteContact',['id'=>$contact->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection