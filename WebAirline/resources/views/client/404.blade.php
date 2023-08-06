@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start 404
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="four-not-four-section bg--gray ptb-120">
    <div class="four-not-four-element-one">
        <img src="assets/images/element/element-16.png" alt="element">
    </div>
    <div class="four-not-four-element-two">
        <img src="assets/images/element/element-17.png" alt="element">
    </div>
    <div class="four-not-four-item text-center" data-aos="fade-up" data-aos-duration="1200">
        <div class="four-not-four-thumb">
            <img src="assets/images/404.png" alt="404">
            <div class="four-not-four-element-three">
                <img src="assets/images/element/element-16.png" alt="element">
            </div>
            <div class="four-not-four-element-four">
                <img src="assets/images/element/element-17.png" alt="element">
            </div>
        </div>
        <div class="four-not-four-content">
            <h2 class="title">Oops! Look like you’re lost</h2>
            <p> Page does not exist or some other error occured. Go to our <span><a href="index.html">Home
                                page</a></span> </p>
            <form class="four-not-four-form">
                <input type="text" name="search" class="form--control" placeholder="Search">
                <button type="submit"><i class="icon-Search"></i></button>
            </form>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End 404
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
