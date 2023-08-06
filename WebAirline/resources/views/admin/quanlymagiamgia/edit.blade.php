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
                            <form action="{{route('route_magiamgia_edit',['MaGiamGia' => $value->MaGiamGia])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="ticketName">Tên mã giảm giá <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="TenMaGiamGia" required placeholder="Enter ticket name" value="{{$value->TenMaGiamGia}}">
                                </div>
                                <div class="form-group">
                                    <label for="ticketDueDate">Giá</label>
                                    <input type="price" class="form-control" name="GiaGiamGia" value="{{$value->GiaGiamGia}}">
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
