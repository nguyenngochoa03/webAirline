@extends('layout.index')
@section('content')
    <div class="container mt-4">
        <h1>Add Data</h1>
        <form action="" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" value="">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="gender" placeholder="Enter name" value="">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" name="addess" rows="3" placeholder="Enter address" value=""></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <img src="">
                <input type="file" class="form-control-file" name="image" value="">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
