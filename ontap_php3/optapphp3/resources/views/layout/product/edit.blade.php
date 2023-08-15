@extends('layout.index')
@section('content')
    <div class="container mt-4">
        <h1>Add Data </h1>
        <form action="{{route('route_book_edit', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" placeholder="Enter name" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{$data->phone}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="addess" rows="3" placeholder="Enter address" value="{{$data->addess}}"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <img src="{{asset('storage/'.$data->image)}}" alt="Image Not Found" width="300px">
                <input type="file" class="form-control-file" name="image" >
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
