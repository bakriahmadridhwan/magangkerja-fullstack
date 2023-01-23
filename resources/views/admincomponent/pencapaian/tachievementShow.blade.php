@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Total Achievement Detail</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Total Achievement <b>Magang Kerja</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/tachievements" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <div class="card" style="border: 3px solid #eee">
                            <div class="card-content">
                                <div class="card-body">
                                    <h5>Dokumentasi</h5>
                                    <div class="isi d-flex">
                                        <i class="bi bi-calendar2-event-fill text-primary"></i>
                                        <h6 class="mt-1 mx-2">{{ $tachievement->tEvent }} Event</h6>
                                    </div>
                                    <div class="isi d-flex">
                                        <i class="bi bi-people-fill text-primary"></i>
                                        <h6 class="mt-1 mx-2">{{ $tachievement->tPartisipan }} Partisipan</h6>
                                    </div>
                                    <hr>
                                    <p><b>{{ $tachievement->deskripsi }}</b></p>
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
