@extends('layouts.master-without-nav')
@section('title')
@lang('translation.Login')
@endsection
@section('content')

        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="row justify-content-center g-0">
                            <div class="col-xl-9">
                                <div class="p-4">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="auth-full-page-content rounded d-flex p-3 my-2">
                                                <div class="w-100">
                                                    <div class="d-flex flex-column h-100">
                                                        <div class="mb-4 mb-md-5">
                                                            <a href="index" class="d-block auth-logo">
                                                                {{-- <img src="{{ URL::asset('assets/images/logo-dark.png')}}" alt="" height="22" class="auth-logo-dark me-start">
                                                                <img src="{{ URL::asset('assets/images/logo-light.png')}}" alt="" height="22" class="auth-logo-light me-start"> --}}
                                                                <center><b style="font-size: 30px;">OASys</b></center>
                                                            </a>
                                                        </div>
                                                        <div class="auth-content my-auto">
                                                            <div class="text-center">
                                                                <h5 class="mb-0">Welcome Back !</h5>
                                                                <p class="text-muted mt-2">Sign in to continue</p>
                                                            </div>
                                                            <form class="mt-4 pt-2" action="{{ route('login') }}" method="POST">
                                                                @csrf
                                                                <div class="form-floating form-floating-custom mb-4">
                                                                    <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="input-username" placeholder="Enter User Name" name="username">
                                                                    @error('username')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <label for="input-username">Username</label>
                                                                    <div class="form-floating-icon">
                                                                        <i data-eva="people-outline"></i>
                                                                    </div>
                                                                </div>

                                                                <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                                    <input type="password" class="form-control pe-5 @error('password') is-invalid @enderror" name="password" id="password-input" placeholder="Enter Password">
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                    <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                                        <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                                    </button>
                                                                    <label for="input-password">Password</label>
                                                                    <div class="form-floating-icon">
                                                                        <i data-feather="lock"></i>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="mt-4 text-center">
                                                            <p class="mb-0"><b>© <script>document.write(new Date().getFullYear())</script> OAsys </b>. Crafted with <i class="mdi mdi-heart text-danger"></i><br>by <b>KF Planning</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-8 col-lg-8 col-md-6">
                        <div class="auth-bg bg-white py-md-5 p-4 d-flex">
                            <div class="bg-overlay bg-white"></div>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-8">
                                  
                                    <div class="p-0 p-sm-4 px-xl-0 py-5">
                                        <div id="reviewcarouselIndicators" class="carousel slide auth-carousel" data-bs-ride="carousel">
                                            <div class="carousel-indicators carousel-indicators-rounded">
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            </div>

                                            <!-- end carouselIndicators -->
                                            <div class="carousel-inner w-75 mx-auto">
                                                <div class="carousel-item active">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Complementary Team</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami satu dalam tujuan dan saling melengkapi dalam kerja sama tim
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Ownership</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami memelihara rasa memiliki untuk senantiasa mencapai yang terbaik.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">People</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami mengembangkan sumber daya manusia untuk tumbuh bersama.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Integrity</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami dalam melaksanakan tugas selalu bertindak dengan penuh integritas.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Customer</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami selalu memastikan untuk memahami dan memberikan yang terbaik bagi pelanggan.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="mt-4">
                                                        <img src="{{ URL::asset('./assets/images/login-img.png')}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testi-contain text-center">
                                                        <h5 class="font-size-20 mt-4">Continous Improvement</h5>
                                                        <p class="font-size-15 text-muted mt-3 mb-0">
                                                            Kami menghindari ketidakpedulian dan melakukan perbaikan terus menerus.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>

        @endsection
        @section('script')
            <script src="{{ URL::asset('assets/js/pages/pass-addon.init.js') }}"></script>
            <script src="{{ URL::asset('assets/js/pages/eva-icon.init.js') }}"></script>
        @endsection
