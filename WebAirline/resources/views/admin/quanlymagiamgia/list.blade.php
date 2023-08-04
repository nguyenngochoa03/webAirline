@extends("admin.index")
@section('content')
    <div class="content-page">
        <div class="content">
    @include("admin.layout.errors")

    <div class="col-xl" >
        <br>
        <div class="card-box">

            <h4 class="header-title mb-3">DANH SÁCH MÃ GIẢM GIÁ <div class="col-xs-1-12">
                
            </div> </h4>

            <div class="table-responsive">
                <form action="{{url('route_magiamgia_list')}}" method="post">
                <table class="table table-borderless table-hover table-centered table-nowrap m-0">

                    <thead class="thead-light">
                    <tr>
                        <th>Mã Đặt vé</th>
                        <th>Tên mã giảm giá</th>
                        <th>Giá giảm giá</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datamagiam as $magiamgia)
                    <tr>

                        <td>
                            <h5 class="m-0 font-weight-normal">{{$magiamgia->MaGiamGia}}</h5>
                        </td>

                        <td>
                            {{$magiamgia->TenMaGiamGia}}
                        </td>

                        <td>
                            {{$magiamgia->GiaGiamGia}}
                        </td>
                        <td>
                            <span class="badge badge-light-warning">{{$magiamgia->status}}</span> <td>

                        </td>

                        <td>
                            <a href="{{url('/magiamgia/add')}}" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                            <a href="{{url('/magiamgia/edit', ['MaDatVe' => $magiamgia->MaDatVe])}}" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                            <a href="{{url('/magiamgia/delete', ['MaDatVe' => $magiamgia->MaDatVe])}}" class="btn btn-xs btn-light"><i class="mdi mdi-delete"></i></a>
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