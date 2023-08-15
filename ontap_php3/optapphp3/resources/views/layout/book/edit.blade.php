@extends('layout.index')
@section('content')
    <div class="container mt-4">
        <h1>Edit Data </h1>
        <form action="{{route('route_book_edit', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter name" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="gender">author</label>
                <input type="text" class="form-control" name="author" placeholder="Enter name" value="{{$data->author}}">
            </div>
            <div class="form-group">
                <label for="phone">price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter phone" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label for="address">description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter address" value="{{$data->description}}"></textarea>
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
