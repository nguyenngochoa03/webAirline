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
                    <form action="{{url('route_datve_add')}}" method="post" onsubmit="return validateForm()" >
                        @csrf
                        <div class="form-group">
                            <label for="ticketName">Tên vé<span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="Name" required placeholder="Enter ticket name">
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
                            <textarea class="form-control"  name="SoLuong" required rows="4" placeholder="Enter ticket số lượng vé"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ticketDescription">Giá vé<span class="text-danger">*</span></label>
                            <textarea class="form-control"  name="GiaVe" required rows="4" placeholder="Enter ticket giá vé"></textarea>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="ticketPriority">Trạng thái vé <span class="text-danger">*</span></label>--}}
{{--                            <select class="form-control" id="ticketPriority" name="ticketPriority" required>--}}
{{--                                <option value="">Select priority</option>--}}
{{--                                <option value="low">Đ</option>--}}
{{--                                <option value="medium">Medium</option>--}}
{{--                                <option value="high">High</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function validateForm() {
        // Basic form validation example
        var name = document.getElementById("ticketName").value;
        var description = document.getElementById("ticketDescription").value;
        var priority = document.getElementById("ticketPriority").value;

        if (name.trim() === "" || description.trim() === "" || priority === "") {
            alert("Please fill in all the required fields.");
            return false;
        }

        // Additional validation logic can be added here if needed.

        return true;
    }
</script>
@endsection
