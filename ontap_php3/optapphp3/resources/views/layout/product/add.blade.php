@extends('layout.index')
@section('content')
    <div class="container mt-4 ">
        <h1>Add Data</h1>
        <form action="{{route('route_book_add')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Gender</label>
                <input type="text" class="form-control" name="email" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="addess" rows="3" placeholder="Enter address"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
