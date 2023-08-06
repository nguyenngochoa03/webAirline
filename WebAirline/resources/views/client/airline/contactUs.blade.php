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
                    <h1 class="title">Contact Us</h1>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
       Start Contact
   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-section ptb-120">
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="map-area">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.1899657893728!2d90.42380431666383!3d23.779746865573756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7499f257eab%3A0xe6b4b9eacea70f4a!2sManama+Tower!5e0!3m2!1sen!2sbd!4v1561542597668!5m2!1sen!2sbd"
                        style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-30">
                <div class="contact-widget">
                    <div class="contact-form-header">
                        <span class="sub-title">Luxury Charters</span>
                        <h2 class="title">How to Contact with Us?</h2>
                        <p>The first small jet-powered civil aircraft was the Morane-Saulnier MS.760 Paris,
                            developed privately in the early 1950s from the MS.755 </p>
                    </div>
                    <ul class="contact-item-list">
                        <li>
                            <a href="#0">
                                <div class="contact-item-icon">
                                    <i class="icon-location-icon"></i>
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Our Location</h4>
                                    <p>963 heloe Ua-Torrento, CA 95448</p>
                                    <p class="text--base font-weight-bold">Find Us On google Map <span
                                            class="ml-1"><img src="assets/images/element/element-20.png"
                                                              alt="element"></span></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="contact-item-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Our Phone</h4>
                                    <p>+1 814 929 4263</p>
                                    <span class="sub-title">+1 814 929 4264</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <div class="contact-item-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-item-content">
                                    <h4 class="title">Our Email</h4>
                                    <p>contact@flynext.com</p>
                                    <p>contact01@flynext.com</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="contact-section bg--gray ptb-120">
    <div class="contact-element">
        <img src="assets/images/element/element-18.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xl-5 col-lg-5 mb-30">
                <div class="contact-left-content" data-aos="fade-right" data-aos-duration="1200">
                    <span class="sub-title">Talk to us</span>
                    <h2 class="title">Any Question?
                        Fell Free to
                        Contact</h2>
                    <p>With a vast array of popular private planes to choose from, travelling by private jet
                        charter is the most efficient</p>
                    <ul class="contact-social">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 mb-30">
                <div class="contact-form-inner" data-aos="fade-left" data-aos-duration="1200">
                    <div class="contact-form-area">
                        <form class="contact-form">
                            <div class="row justify-content-center mb-20-none">
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <label class="icon"><i class="icon-name_icone"></i></label>
                                    <input type="text" class="form--control" name="name" placeholder="Name"
                                           required>
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <label class="icon"><i class="las la-envelope"></i></label>
                                    <input type="email" class="form--control" name="email" placeholder="Email"
                                           required>
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <label class="icon"><i class="icon-call_icone"></i></label>
                                    <input type="number" class="form--control" name="phone" placeholder="Phone"
                                           required>
                                </div>
                                <div class="col-xl-6 col-lg-6 form-group">
                                    <div class="contact-select">
                                        <select class="form--control">
                                            <option value="1">Subject</option>
                                            <option value="2">Subject one</option>
                                            <option value="3">Subject two</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="icon"><i class="icon-massage"></i></label>
                                    <textarea class="form--control" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button type="submit" class="btn--base mt-10">Submit Now <i
                                            class="icon-Group-2361 ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Contact
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection

