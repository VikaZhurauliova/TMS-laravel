@extends('app')
@section('content')

    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Section -->
        <section class="fullscreen" data-bg-parallax="{{ asset('/images/banner/4.jpg') }}">
            <div class="container">
                <div>
                    {{--                <div class="text-center m-b-30">
                                        <a href="index.html" class="logo">
                                            <img src="images/logo-dark.png" alt="Polo Logo">
                                        </a>
                                    </div>--}}
                    <div class="row">
                        <div class="col-lg-5 center p-50 background-white b-r-6">
                            <h3>Login to your Account</h3>
                            <form action="{{ route('auth.login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="sr-only">Username or Email</label>
                                    <input name="email" type="text" class="form-control"
                                           placeholder="Username or Email">
                                </div>
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Password</label>
                                    <input name='password' type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-left form-group">
                                    <button type="submit" class="btn">Login</button>
                                </div>
                            </form>
                            <p class="small">Forget password? <a href="{{ route('password.request') }}">Click here</a></p>
                            <p class="small">Don't have an account yet? <a href="{{ route('auth.registerPage') }}">Register New Account</a></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
@endsection
