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
                            <h1 class="title">Blog</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('trangchu')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
Start Call-widget
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="call-widget-wrapper">
            <button type="button" class="call-widget-btn"><span class="num"><i class="icon-call-icon"></i> +1 814 929
                    4263</span> <span class="arrow"></span></button>
            <div class="call-widget-form-area">
                <form class="book-form">
                    <div class="row justify-content-center mb-20-none">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>From</label>
                                <div class="book-form-icon">
                                    <i class="icon-from-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="dhaka" selected>Dhaka</option>
                                    <option value="london">London</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>To</label>
                                <div class="book-form-icon">
                                    <i class="icon-to-airplane"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="london" selected>London</option>
                                    <option value="dhaka">Dhaka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                            <div class="book-select">
                                <label>Date</label>
                                <div class="book-form-icon">
                                    <i class="icon-schedule-icon"></i>
                                </div>
                                <select class="book-select form--control">
                                    <option value="25/12/2021" selected>25/12/2021</option>
                                    <option value="30/12/2021">30/12/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 form-group">
                            <label>Passenger</label>
                            <div class="book-quantity">
                                <div class="book-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="book-plus-minus-box qty" type="text" name="qty" value="1" readonly>
                                    <div class="inc qtybutton">+</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 form-group">
                            <button type="submit" class="btn--base w-100 mt-10"><i class="icon-btn-icon"></i> Book
                                Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Call-widget
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="blog-section ptb-120">
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-8 col-lg-8 mb-30">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="{{url('client/assets/images/blog/blog-1.png')}}" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">20 March 2022</span>
                                            <span class="comment">3 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Charter flight of the Death
                                                Penalty in America</a></h3>
                                        <p>With a vast array of popular private planes to choose from, travelling by
                                            private jet charter is the most efficient</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog/blog-2.png" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">23 February 2022</span>
                                            <span class="comment">4 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Our technology consistently
                                                delivers</a></h3>
                                        <p>Private jet hire for leisure purposes allows yourself, your family and
friends to travel in luxury, comfort and privacy. </p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog/blog-3.png" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">18 June 2022</span>
                                            <span class="comment">6 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Search the world with ease and
transparency</a></h3>
                                        <p>It’s fast gaining in popularity as leisure time becomes increasingly precious
and we value the experience of the journey</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog/blog-1.png" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">20 March 2022</span>
                                            <span class="comment">1 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">Charter an entire jet, or offer
                                                the seats</a></h3>
                                        <p>Whether it’s a short trip for a weekend skiing or a two-week holiday in the
                                            Caribbean, we’ll help you choose</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog/blog-1.png" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">10 March 2022</span>
                                            <span class="comment">4 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">XO is not simply a private jet
                                                service.</a></h3>
                                        <p>Your loved ones to your destination in comfort and with minimal fuss. Access
                                            to private terminals also helps you</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="assets/images/blog/blog-2.png" alt="blog">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-meta">
                                            <span class="date">16 March 2022</span>
                                            <span class="comment">2 Comment</span>
                                        </div>
                                        <h3 class="title"><a href="blog-details.html">As well as getting to fly to many
                                                different</a></h3>
                                        <p>Bstle of busy airports and queues through security, well-rested and ready to
                                            make the most of your next adventure.</p>
                                        <div class="blog-btn">
                                            <a href="blog-details.html">Read More <i
                                                    class="icon-Group-2361 ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="sidebar">
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-widget-box">
                                    <form class="search-form">
                                        <input type="text" name="search" class="form--control" placeholder="Search">
                                        <button type="submit"><i class="icon-Search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="popular-widget-box">
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <div class="popular-item-thumb">
                                            <img src="assets/images/blog/small-blog-1.png" alt="blog">
                                        </div>
                                        <div class="popular-item-content">
                                            <span class="blog-date">Aug 23,2021</span>
                                            <h5 class="title"><a href="blog-details.html">Charter flight of the Death
                                                    Penalty in America</a></h5>
                                        </div>
                                    </div>
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <div class="popular-item-thumb">
                                            <img src="assets/images/blog/small-blog-2.png" alt="blog">
                                        </div>
                                        <div class="popular-item-content">
                                            <span class="blog-date">Aug 23,2021</span>
                                            <h5 class="title"><a href="blog-details.html">Our technology consistently
                                                    delivers</a></h5>
                                        </div>
                                    </div>
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <div class="popular-item-thumb">
                                            <img src="assets/images/blog/small-blog-3.png" alt="blog">
                                        </div>
                                        <div class="popular-item-content">
                                            <span class="blog-date">Aug 23,2021</span>
                                            <h5 class="title"><a href="blog-details.html">Search the world with ease and
transparency</a></h5>
                                        </div>
                                    </div>
                                    <div class="single-popular-item d-flex flex-wrap align-items-center">
                                        <div class="popular-item-thumb">
                                            <img src="assets/images/blog/small-blog-4.png" alt="blog">
                                        </div>
                                        <div class="popular-item-content">
                                            <span class="blog-date">Aug 23,2021</span>
                                            <h5 class="title"><a href="blog-details.html">Charter an entire jet, or
                                                    offer the seats</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-box mb-30">
                                <h4 class="widget-title">Categories</h4>
                                <div class="category-widget-box">
                                    <ul class="category-list">
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
<span>4</span></a></li>
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Strategy
<span>5</span></a></li>
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Stock Investment
<span>1</span></a></li>
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
<span>4</span></a></li>
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
<span>4</span></a></li>
                                        <li><a href="#0"><i class="fas fa-chevron-right"></i> Business Analysis
<span>4</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-box">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tag-widget-box">
                                    <ul class="tag-list">
                                        <li><a href="#0">Airport</a></li>
                                        <li><a href="#0">Private Jet</a></li>
                                        <li><a href="#0">Helicopter</a></li>
                                        <li><a href="#0">Gallery</a></li>
                                        <li><a href="#0">Corporate</a></li>
                                        <li><a href="#0">Business</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="pagination">
                        <li class="page-item prev">
                            <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">PREV</a>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">01</span></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#">05</a></li>
                        <li class="page-item next">
                            <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">NEXT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Blog
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
