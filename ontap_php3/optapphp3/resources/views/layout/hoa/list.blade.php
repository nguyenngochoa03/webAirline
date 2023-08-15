@extends('layout.index')
@section('content')
    <div class="container mt-4">
        @include("layout.errors")
        <form action="{{route('listlisa')}}" method="post">

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
                    <th>email</th>
                    <th>phone</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
                </thead>
              @foreach($data as $lisa)
                    <tbody>
                    <tr>
                        <td>{{$lisa->id}}</td>

                        <td>{{$lisa->title}}</td>

                        <td>{{$lisa->author}}</td>


                        <td>{{$lisa->price}}</td>


                        <td>{{$lisa->description}}</td>


                        <td><img src="{{url('storage/'.$lisa->image)}}" alt="lỗi tải anh" width="300px"></td>

                        <td>{{$lisa->email}}</td>
                        <td>{{$lisa->phone}}</td>
                        <td>{{$lisa->status}}</td>
                        <td>
                            <a href="{{route('addlisa')}}" class="btn btn-sm btn-primary"><i class="mdi mdi-eye"></i> Add</a>
                            <a href="{{route('editlisa',['id'=>$lisa->id])}}" class="btn btn-sm btn-warning"><i class="mdi mdi-pencil"></i> Edit</a>
                            <a href="{{route('deletelisa',['id'=>$lisa->id])}}" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows for your data here -->
                    </tbody>
                @endforeach
            </table>
        </form>
    </div>
@endsection
