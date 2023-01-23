@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Change Password</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Nama Akun <b>"{{ auth()->user()->name }}"</b></h4>
                        </div>
                    </div>



                    <div class="card-content p-4">

                        @if (session('error'))
                            <div class="alert alert-danger col-4" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success col-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- <div class="form-group">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text"
                                class="form-control @error('name')
                            is-invalid
                        @enderror"
                                id="name" placeholder="nama" name="name"
                                value="{{ old('name', auth()->user()->name) }}" disabled>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"
                                class="form-control @error('email')
                            is-invalid
                        @enderror"
                                id="email" placeholder="email" name="email"
                                value="{{ old('email', auth()->user()->email) }}" disabled>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}

                        <form action="/admin/{{ auth()->user()->id }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="old_password" class="form-label">Password Lama</label>
                                <input type="password"
                                    class="form-control @error('old_password')
                                is-invalid
                            @enderror"
                                    id="old_password" placeholder="password lama" name="old_password"
                                    value="{{ old('old_password') }}" autofocus>
                                @error('old_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password"
                                    class="form-control @error('password')
                                is-invalid
                            @enderror"
                                    id="password" placeholder="password baru" name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation')
                                is-invalid
                            @enderror"
                                    id="password_confirmation" placeholder="konfirmasi password baru"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary ml-1 btn-sm" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Ubah</span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hoverable rows end -->

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2022 &copy; magangkerja.id</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="https://saugi.me">Kelompok 3</a></p>
            </div>
        </div>
    </footer>

</div>

@include('admintemplate.adminfooter')
