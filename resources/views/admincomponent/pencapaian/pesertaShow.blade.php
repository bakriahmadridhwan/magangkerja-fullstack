@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Detail Karya Peserta</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Karya Peserta <b>"{{ $peserta->nama }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/pesertas" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <div class="card" style="border: 3px solid #eee">
                            <div class="card-content d-flex">
                                <div class="card-body col-6">
                                    <p>"{{ $peserta->pendapat }}"</p>
                                    <br>
                                    <p>{{ $peserta->nama }} <br>
                                        {{ $peserta->pekerjaan }} - <span
                                            style="color: #2281C5">{{ $peserta->tempatBekerja }}</span> <br> lulusan
                                        {{ $peserta->lulusan }}</p>
                                    <hr>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('storage/' . $peserta->image) }}"
                                        class="img-preview img-fluid d-block mx-auto" alt="karya-peserta-images">
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
