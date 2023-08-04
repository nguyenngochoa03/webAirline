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
                <form action="{{url('route_datve_list')}}" method="post">
                <table class="table table-borderless table-hover table-centered table-nowrap m-0">

                    <thead class="thead-light">
                    <tr>
                        <th>Mã Đặt vé</th>
                        <th>Ngày đặt vé </th>
                        <th>Ngày khởi hành</th>
                        <th>Hành Khách</th>
                        <th>Số lượng vé </th>
                        <th>Giá vé</th>
                        <th>Trạng thái đặt vé</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datvedata as $datve)
                    <tr>

                        <td>
                            <h5 class="m-0 font-weight-normal">{{$datve->MaDatVe}}</h5>
                        </td>

                        <td>
                            {{$datve->NgayDatVe}}
                        </td>

                        <td>
                            {{$datve->NgayKhoiHanh}}
                        </td>

                        <td>
                            {{$datve->HanhKhach	}}
                        </td>

                        <td>
                            {{$datve->SoLuongVe}}
                        </td>

                        <td>
                            {{$datve->GiaVe}}
                        </td>

                        <td>
                            {{$datve->TrangThaiDatVe}}
                        </td>
                        <td>
                            <span class="badge badge-light-warning">{{$datve->status}}</span> <td>

                        </td>

                        <td>
                            <a href="{{url('/datve/add')}}" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                            <a href="{{url('/datve/edit', ['MaDatVe' => $datve->MaDatVe])}}" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                            <a href="{{url('/datve/delete', ['MaDatVe' => $datve->MaDatVe])}}" class="btn btn-xs btn-light"><i class="mdi mdi-delete"></i></a>
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
