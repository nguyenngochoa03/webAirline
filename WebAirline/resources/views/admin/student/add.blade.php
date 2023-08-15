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
                    <form action="{{route('route_student_add')}}" method="post"  >
                        @csrf
                        <div class="form-group">
                            <label for="ticketName">Điểm khởi hành<span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="DiemKhoiHanh" required placeholder="Enter ticket Điểm khởi hành">
                        </div>
                        <div class="form-group">
                            <label for="ticketName">Điểm dến <span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="DiemDen" required placeholder="Enter ticket Điểm dến">
                        </div>
                        <div class="form-group">
                            <label for="ticketDueDate">Ngày đặt vé</label>
                            <input type="date" class="form-control"  name="NgayDatVe">
                        </div>
                        <div class="form-group">
                            <label for="ticketDueDate">Ngày khởi hành</label>
                            <input type="date" class="form-control"  name="NgayKhoiHanh">
                        </div>

                        <div class="form-group">
                            <label for="ticketDescription">Số lượng vé <span class="text-danger">*</span></label>
                            <input class="form-control"  name="SoLuong" required rows="4" placeholder="Enter ticket số lượng vé">
                        </div>
                        <div class="form-group">
                            <label for="ticketDescription">Giá vé<span class="text-danger">*</span></label>
                            <input class="form-control"  name="GiaVe" required rows="4" placeholder="Enter ticket giá vé">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
