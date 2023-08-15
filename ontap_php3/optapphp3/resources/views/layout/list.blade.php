@extends('layout.index')
@section('content')
    <div class="container mt-4">
        @include("layout.errors")
        <form action="{{url('list')}}" method="post">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Panel</a>
        </nav>

        <h1>Data List</h1>
        <table class="table" border="1">
            <thead>
            <tr>
                <th>ID</th>
            
            </tr>
            </thead>
            
            <tbody>
            <tr>
                <td></td>
                <td><img src="" alt="lỗi tải anh" width="300px"></td>
                <td>
                    <a href="" class="btn btn-sm btn-primary"><i class="mdi mdi-eye"></i> Add</a>
                    <a href="" class="btn btn-sm btn-warning"><i class="mdi mdi-pencil"></i> Edit</a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</a>
                </td>
            </tr>
            <!-- Add more rows for your data here -->
            </tbody>

        </table>
            </form>
    </div>
@endsection
