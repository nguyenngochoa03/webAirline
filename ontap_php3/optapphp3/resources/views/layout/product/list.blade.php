@extends('layout.index')
@section('content')
    <div class="container mt-4">
        @include("layout.errors")
        <form action="{{url('listbook')}}" method="post">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </nav>

        <h1>Data List</h1>
        <table class="table" border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>title</th>
                <th>author</th>
                <th>price</th>
                <th>description</th>
                <th>image</th>
                <th>status</th>
                <th>Actions</th>
            </tr>
            </thead>
            @foreach($data as $book)
            <tbody>
            <tr>
                <td>{{$book->id}}</td>

                <td>{{$book->title}}</td>

                <td>{{$book->author}}</td>


                <td>{{$book->price}}</td>


                <td>{{$book->description}}</td>


                <td><img src="{{url('storage/'.$book->image)}}" alt="lỗi tải anh" width="300px"></td>


                <td>{{$book->status}}</td>
                <td>
                    <a href="{{route('route_book_add')}}" class="btn btn-sm btn-primary"><i class="mdi mdi-eye"></i> Add</a>
                    <a href="{{route('route_book_edit',['id'=>$book->id])}}" class="btn btn-sm btn-warning"><i class="mdi mdi-pencil"></i> Edit</a>
                    <a href="{{route('route_book_delete',['id'=>$book->id])}}" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
                </td>
            </tr>
            <!-- Add more rows for your data here -->
            </tbody>
            @endforeach
        </table>
            </form>
    </div>
@endsection
