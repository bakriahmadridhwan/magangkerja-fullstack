@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Header Edit</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Menu <b>Header</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/headers" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <form action="/dashboard/headers/{{ $header->id }}" method="POST">
                            @method('PUT')
                            @csrf

                            <h4 class="card-title"><b>Menu Utama</b></h4>
                            <div class="form-group">
                                <label for="menu1" class="form-label">Nama Menu 1</label>
                                <input type="text"
                                    class="form-control @error('menu1')
                                    is-invalid
                                @enderror"
                                    id="menu1" placeholder="nama menu 1" name="menu1"
                                    value="{{ old('menu1', $header->menu1) }}">
                                @error('menu1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="menu2" class="form-label">Nama Menu 2</label>
                                <input type="text"
                                    class="form-control @error('menu2')
                                    is-invalid
                                @enderror"
                                    id="menu2" placeholder="nama menu 2" name="menu2"
                                    value="{{ old('menu2', $header->menu2) }}">
                                @error('menu2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="menu3" class="form-label">Nama Menu 3</label>
                                <input type="text"
                                    class="form-control @error('menu3')
                                    is-invalid
                                @enderror"
                                    id="menu3" placeholder="nama menu 3" name="menu3"
                                    value="{{ old('menu3', $header->menu3) }}">
                                @error('menu3')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="menu4" class="form-label">Nama Menu 4</label>
                                <input type="text"
                                    class="form-control @error('menu4')
                                    is-invalid
                                @enderror"
                                    id="menu4" placeholder="nama menu 4" name="menu4"
                                    value="{{ old('menu4', $header->menu4) }}">
                                @error('menu4')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="menu5" class="form-label">Nama Menu 5</label>
                                <input type="text"
                                    class="form-control @error('menu5')
                                    is-invalid
                                @enderror"
                                    id="menu5" placeholder="nama menu 5" name="menu5"
                                    value="{{ old('menu5', $header->menu5) }}">
                                @error('menu5')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <h4 class="card-title mt-5"><b>Dropdown</b></h4>

                            <div class="form-group">
                                <label for="dropdown1" class="form-label">Nama Menu Dropdown 1</label>
                                <input type="text"
                                    class="form-control @error('dropdown1')
                                    is-invalid
                                @enderror"
                                    id="dropdown1" placeholder="nama menu dropdown 1" name="dropdown1"
                                    value="{{ old('dropdown1', $header->dropdown1) }}">
                                @error('dropdown1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dropdown2" class="form-label">Nama Menu Dropdown 2</label>
                                <input type="text"
                                    class="form-control @error('dropdown2')
                                    is-invalid
                                @enderror"
                                    id="dropdown2" placeholder="nama menu dropdown 2" name="dropdown2"
                                    value="{{ old('dropdown2', $header->dropdown2) }}">
                                @error('dropdown2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm ml-1" data-bs-dismiss="modal">
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
