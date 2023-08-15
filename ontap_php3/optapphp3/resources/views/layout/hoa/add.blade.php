@extends('layout.index')
@section('content')
    <div class="container mt-4 ">
        <h1>Add Data</h1>
        <form action="{{route('addlisa')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">author</label>
                <input type="text" class="form-control" name="author" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="phone">price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="address">description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter address"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone">
            </div>

            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
