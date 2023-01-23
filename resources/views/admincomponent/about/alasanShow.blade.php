@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Alasan</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Judul <b>"{{ $alasan->judul }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/alasans" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">
                        <div class="card" style="border: 2px solid #eee">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{ asset('storage/' . $alasan->image) }}" alt="img"
                                                width="100">
                                        </div>
                                        <div class="col">
                                            <h4 style="color: #3D76BB" class="mt-2"><b>{{ $alasan->judul }}</b></h6>
                                                <p>{{ $alasan->deskripsi }}</p>
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
