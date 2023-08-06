@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
    <section class="banner-section inner-banner-section bg-overlay-black bg_img"
             data-background="assets/images/bg/inner-bg.png">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-12 text-center">
                    <div class="banner-content">
                        <h1 class="title">Service Single</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Discount Code</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section about--style about--style-three page-wrapper-two ptb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb">
                        <img src="assets/images/about-four.png" alt="about">
                        <div class="about-element-two">
                            <img src="assets/images/element/element-15.png" alt="element">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content">
                        <span class="sub-title text--base">About Private Jet</span>
                        <h2 class="title">Private Jet Charter</h2>
                        <p>The development of center-aisle cabin business jets was accelerated by an August 1956
                            United States Air Force (USAF) letter of the requirement for two "off-the-shelf"
                            aircraft: the larger UCX (cargo) and smaller UTX (trainer). These requirements differed
                            from standard Air Force.</p>
                        <div class="about-list-area">
                            <ul class="about-list">
                                <li>Unmatched technology. Superior performance.</li>
                                <li>Unmatched technology. Superior performance.</li>
                                <li>Iindustry-exclusive upper technology panel and longest-ranged.</li>
                                <li>Exclusive upper technology panel and longest-ranged.</li>
                            </ul>
                        </div>
                        <div class="about-btn">
                            <a href="service-details.html" class="btn--base"><i class="icon-btn-icon-v2"></i> Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section feature--style pt-120">
        <div class="container">
            <div class="feature-area">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 mb-30">
                        <div class="feature-thumb-area">
                            <div class="feature-thumb">
                                <img src="assets/images/feature/feature-1.png" alt="feature">
                            </div>
                            <div class="feature-thumb two">
                                <img src="assets/images/feature/feature-2.png" alt="feature">
                                <div class="feature-video-wrapper">
                                    <div class="video-main">
                                        <div class="promo-video">
                                            <div class="waves-block">
                                                <div class="waves wave-1"></div>
                                                <div class="waves wave-2"></div>
                                                <div class="waves wave-3"></div>
                                            </div>
                                        </div>
                                        <a class="video-icon" data-rel="lightcase:myCollection"
                                           href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="section-header">
                            <span class="sub-title text--base">Benefits of Service</span>
                            <h2 class="section-title">Benefits of Private Jet.</h2>
                            <p>By constantly improving on the best. It’s in this spirit that the Phenom 300E
                                received further enhancements, becoming the most successful.</p>
                        </div>
                        <div class="feature-right">
                            <div class="row justify-content-center m-0">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/images/icon/icon-2.png" alt="icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="title">Safety Accred Aircraft.</h4>
                                            <p>We give you access & service accredited aircraft.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/images/icon/icon-14.png" alt="icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="title">Anywhere. Any time.</h4>
                                            <p>Search the world with ease and transparency.As the only</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/images/icon/icon-15.png" alt="icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="title">Flexible private flying.</h4>
                                            <p>Charter an entire jet, or offer the seats you don’t need</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <img src="assets/images/icon/icon-16.png" alt="icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="title">Modern Private Jet</h4>
                                            <p>Our technology consistently delivers the best pricing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="book-form-section ptb-120">
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"> Discount Code</h5>
                        </div>
                        <div class="card-body">
                            <form class="book-form">
                                @csrf
                                <div class="form-group">
                                    <label for="discountCode">Tên max giam<span class="text-danger">*</span></label>
                                    <select class="book-select form--control">
                                        <option name="TenMaGiamGia" value="" selected>{{$data->TenMaGiamGia}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="discountPercentage">gía<span class="text-danger">*</span></label>
                                    <select class="book-select form--control">
                                        <option name="GiaGiamGia" value="" selected>{{$data->GiaGiamGia}}</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <div class="brand-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mt-10-none mb-10-none">
                <div class="col-xl-12 text-center">
                    <div class="brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="assets/images/brand/brand-1.png" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="assets/images/brand/brand-2.png" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="assets/images/brand/brand-3.png" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="assets/images/brand/brand-4.png" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="assets/images/brand/brand-5.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Brand
@endsection
