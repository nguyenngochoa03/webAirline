@extends('client.index')
@push('css')
   <link rel="stylesheet" href="{{url('client/assets/css/style.css')}}" />
@endpush
@push('scripts')
    <script src="{{url('client/assets/js/main.js')}}"></script>
@endpush
@section('content')
 <!-- Start Account -->
<section class="account-section bg--gray ptb-120">
    <div class="container">
    @include('client.layout.errors')
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                            <span class="sub-title"><span>Sign Up</span></span>
                            <h2 class="section-title">Sign up to your account</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="account-form-area" data-aos="fade-up" data-aos-duration="1200">
                            <form class="account-form" action="{{route('register')}}" method="post">
                                @csrf
                                <div class="row mb-10-none">
                                    <div class="col-xl-12 form-group">
                                        <label class="icon"><i class="las la-envelope"></i></label>
                                        <input type="email" class="form--control" name="email" placeholder="Email"
                                               required>
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <label class="icon"><i class="icon-name_icone"></i></label>
                                        <input type="text" class="form--control" name="name" placeholder="Name"
                                               required>
                                    </div>
                                    <div class="col-xl-12 form-group">
                                        <label class="icon"><i class="icon-Create_Password_icone"></i></label>
                                        <input type="password" class="form--control" name="password"
                                               placeholder="Create Password" required>
                                    </div>
                                    <div class="col-lg-12 form-group text-center">
                                        <p>By clicking up you confirm that you've read and accept our
                                            <span>Policy</span> and <span>Privacy</span></p>
                                    </div>
                                    <div class="col-lg-12 form-group text-center">
                                        <input type="submit" name="btnRes" class="btn--base w-100" value="Sign Up">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="or mt-10">
                                            <label>Or</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group google-submit text-center">
                                        <button type="submit" class="btn--base w-100"><span class="mr-2"><img
                                                    src={{url('client/assets/assets/images/google.png')}} alt="google"></span> Continue With
                                            Google</button>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="account-item mt-10">
                                            <label>Already Have An Account? <a href="{{url('login')}}" class="text--base">Sign
                                                    In</a></label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

</section>
<!-- End Account -->
@endsection
