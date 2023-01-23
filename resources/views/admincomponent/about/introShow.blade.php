@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Intro Detail</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Tagline <b>"{{ $intro->tagline }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/intros" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <div class="row">
                            <div class="col">
                                <p style="color: #3D76BB">{{ $intro->tagline }}</p>
                                <h1 style="margin: 0 10px 0 0">{{ $intro->judul }}</h1>
                                <p>{{ $intro->deskripsi }}</p>
                            </div>
                            <div class="col">
                                @if ($intro->image)
                                    <img src="{{ asset('storage/' . $intro->image) }}"
                                        class="img-preview img-fluid mb-4 d-block mx-auto">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                            </div>
                        </div>
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
