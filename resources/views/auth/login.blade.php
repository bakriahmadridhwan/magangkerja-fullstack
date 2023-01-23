@include('admintemplate.adminheader')

{{-- auth login --}}
<link rel="stylesheet" href="{{ asset('dist/assets/css/pages/auth.css') }}" />

<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="Logo" /></a>
                </div>
                <h1 class="auth-title">Log in.</h1>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <p class="auth-subtitle mb-5">
                    <hr>
                </p>

                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" />
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password"
                            name="password" />
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">
                        Log in
                    </button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    {{-- <p class="text-gray-600">
                        Don't have an account?
                        <a href="auth-register.html" class="font-bold">Sign up</a>.
                    </p> --}}
                    <p>
                        <a class="font-bold" href="/">Halaman Utama</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right"></div>
        </div>
    </div>
</div>


@include('admintemplate.adminfooter')
