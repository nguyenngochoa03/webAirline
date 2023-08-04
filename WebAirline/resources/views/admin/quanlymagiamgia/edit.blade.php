@extends("admin.index")
@section('content')
<div class="content-page">
    <div class="content">
        @include("admin.layout.errors")

        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{$title}}</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{route('route_datve_edit', ['MaDatVe' => $value->MaDatVe])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="ticketName">Tên vé<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="Name" required placeholder="Enter ticket name" value="{{$value->Name}}">
                                </div>
                                <div class="form-group">
                                    <label for="ticketDueDate">Ngày đặt vé</label>
                                    <input type="date" class="form-control" name="NgayDatVe" value="{{$value->NgayDatVe}}">
                                </div>
                                <div class="form-group">
                                    <label for="ticketDueDate">Ngày khởi hành</label>
                                    <input type="date" class="form-control" name="NgayKhoiHanh" value="{{$value->NgayKhoiHanh}}">
                                </div>

                                <div class="form-group">
                                    <label for="ticketDescription">Số lượng vé <span class="text-danger">*</span></label>
                                    <input class="form-control" name="SoLuong" required type="number" min="1" value="{{$value->SoLuong}}">
                                </div>
                                <div class="form-group">
                                    <label for="ticketDescription">Giá vé<span class="text-danger">*</span></label>
                                    <input class="form-control" name="GiaVe" required type="number" step="0.01" min="0" value="{{$value->GiaVe}}">
                                </div>

                                {{-- Các trường khác có thể được thêm vào đây (nếu có) --}}

                                <button type="submit" class="btn btn-dark">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection