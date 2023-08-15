@extends("admin.index")
@section('content')
    <div class="content-page">
        <div class="content">
    @include("admin.layout.errors")

    <div class="col-xl" >
        <br>
        <div class="card-box">

            <h4 class="header-title mb-3">DANH SÁCH ĐẶT VÉ </h4>

            <div class="table-responsive">
                <form action="{{url('route_student_list')}}" method="post">
                <table class="table table-borderless table-hover table-centered table-nowrap m-0">

                    <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th>name </th>
                        <th>gender</th>
                        <th>phone  </th>
                        <th>address</th>
                        <th>image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datastudent as $student)
                    <tr>

                        <td>
                            <h5 class="m-0 font-weight-normal">{{$student->id}}</h5>
                        </td>
                        <td>
                            {{$student->name}}
                        </td>
                        <td>
                            {{$student->gender}}
                        </td>
                        <td>
                            {{$student->phone}}
                        </td>

                        <td>
                            {{$student->address}}
                        </td>

                        <td>
                            {{$student->image}}
                        </td>

                        <td>
                            <span class="badge badge-light-warning">{{$student->status}}</span> <td>

                        </td>

                        <td>
                            <a href="{{route('route_student_add')}}" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                            <a href="{{route('route_student_edit', ['id' => $student->id])}}" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                            <a href="{{route('route_student_delete', ['id' => $student->id])}}" class="btn btn-xs btn-light"><i class="mdi mdi-delete"></i></a>
                        </td>

                    </tr>


                    </tbody>
                    @endforeach
                </table>
                </form>
            </div> <!-- end .table-responsive-->
        </div> <!-- end card-box-->
    </div> <!-- end col -->
        </div> <!-- end inbox-widget -->
    </div> <!-- end .p-3-->
@endsection
