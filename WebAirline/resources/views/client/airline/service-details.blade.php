@extends('client.index')
@push('css')
    <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
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
                                    <li class="breadcrumb-item active" aria-current="page">Service Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section about--style about--style-three page-wrapper-two ptb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb">
                        <img src="{{url('client/assets/images/about-four.png')}}" alt="about">
                        <div class="about-element-two">
                            <img src="{{url('client/assets/images/element/element-15.png')}}" alt="element">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Statistics
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="statistics-section bg-overlay-black ptb-120 bg_img" data-background="{{url('client/assets/images/bg/bg-2.png')}}">
        <div class="container">
            <div class="statistics-area">
                <div class="row mb-30-none">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="95">0</h3>
                                </div>
                                <p>Professional Pilots</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="68">0</h3>
                                </div>
                                <p>Jet Airplanes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="290">0</h3>
                                </div>
                                <p>World Airports</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="195">0</h3>
                                </div>
                                <p>Directions</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Statistics
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section page-wrapper-two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <span class="sub-title">Discover <span>Flynext</span> Benefits</span>
                        <h2 class="section-title">Discover Private Jet Benefits</h2>
                    </div>
                </div>
            </div>
            <div class="feature-area" data-aos="fade-up" data-aos-duration="1200">
                <div class="row justify-content-center m-0">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-world-svgrepo-com"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Luxury & Comfort Travel</h3>
                                <p>As well as getting to fly to many different destinations as part of their job,
                                    airplane pilots get big discounts on money</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-money-svgrepo-com-1"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Smart Costing Flight</h3>
                                <p>Flying should be a pleasure and we’ll make your charter experience as luxurious
                                    and more comfortable as soon as possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Career progression</h3>
                                <p>The first small jet-powered civil aircraft was the Morane-Saulnier MS.760 Paris,
                                    developed privately since 1940s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-note"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Flexible Schedule</h3>
                                <p>Our technology consistently delivers the best pricing for charters – and the
                                    unique ability to buy individual seats all over the world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-job-announcement"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Excellent advantages</h3>
                                <p>Search the world with ease and transparency.As the only tech-forward private
                                    aviation company, XO is able to bring you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="icon-coolest-job"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="title">Coolest Environment</h3>
                                <p>Charter an entire jet, or offer the seats you don’t need through our app a need
                                    for full or even fractional jet ownership</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section bg--gray ptb-120">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header">
                        <span class="sub-title"><span>Gallery</span></span>
                        <h2 class="section-title">Private Jet Photo Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{url('client/assets/images/gallery/gallery-1.png')}}" alt="gallery">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{url('client/assets/images/gallery/gallery-2.png')}}" alt="gallery">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item">
                                    <img src="{{url('client/assets/images/gallery/gallery-3.png')}}" alt="gallery">
                                </div>
                            </div>
                        </div>
                        <div class="slider-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="slider-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section feature--style pt-120">
        <div class="container">
            <div class="feature-area">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 mb-30">
                        <div class="feature-thumb-area">
                            <div class="feature-thumb">
                                <img src="{{url('client/assets/images/feature/feature-1.png')}}" alt="feature">
                            </div>
                            <div class="feature-thumb two">
                                <img src="{{url('client/assets/images/feature/feature-2.png')}}" alt="feature">
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
                                            <img src="{{url('client/assets/images/icon/icon-2.png')}}" alt="icon">
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
                                            <img src="{{url('client/assets/images/icon/icon-14.png')}}" alt="icon">
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
                                            <img src="{{url('client/assets/images/icon/icon-15.png')}}" alt="icon">
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
                                            <img src="{{url('client/assets/images/icon/icon-16.png')}}" alt="icon">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Feature
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Book-form
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="book-form-section ptb-120">
        <div class="container">
            <div class="book-form-area bg-overlay-black bg_img" data-background="{{url('client/assets/images/bg/bg-3.png')}}">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header white">
                            <span class="sub-title text-white"><span>Flynext</span> Book</span>
                            <h2 class="section-title">Book A Personal Flight</h2>
                        </div>
                        <form class="book-form" action="{{route('route_datveup_add')}}" method="post" >
                            @csrf
                            <div class="row justify-content-center mb-20-none">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <div class="book-select">
                                        <label>Điểm khởi hành</label>
                                        <input type="text" name="DiemKhoiHanh"  placeholder="Departure" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <div class="book-select">
                                        <label> Điểm dến</label>
                                        <input type="text" name="DiemDen" placeholder="Arrival" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <div class="book-select">
                                        <label>Ngày dặt vé</label>
                                        <input type="date" name="NgayDatVe"  />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                    <div class="book-select">
                                        <label>Ngày Khởi hanh</label>
                                        <input type="date" name="NgayKhoiHanh" />
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label> Số lượng vé </label>
                                    <input type="number" name="SoLuongVe"  />
                                </div>
                                <div class="col-xl-12 form-group">
                                    <button type="submit" class="btn--base w-100 mt-10">
                                        <i class="icon-btn-icon"></i> Book Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Book-form
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="brand-section ptb-120">
        <div class="container">
            <div class="row justify-content-center mt-10-none mb-10-none">
                <div class="col-xl-12 text-center">
                    <div class="brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="{{url('client/assets/images/brand/brand-1.png')}}" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="{{url('client/assets/images/brand/brand-2.png')}}" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="{{url('client/assets/images/brand/brand-3.png')}}" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="{{url('client/assets/images/brand/brand-4.png')}}" alt="brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img src="{{url('client/assets/images/brand/brand-5.png')}}" alt="brand">
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
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
