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
                        <td>Admin Name</td>
                        <td>Admin Email</td>
                        <td>Admin Contact Number</td>
                        <td>Admin Gender</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$admin->image}}"
                        width ="100" class="img-fluid" alt=""></td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->number}}</td>
                        <td>{{$admin->catName}}</td>
                        <td><a href="{{route('editAdmin',['id'=>$admin->id])}}" class="btn btn-warning btn-xs">Edit</a>
                        <a href="{{route('deleteAdmin',['id'=>$admin->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection