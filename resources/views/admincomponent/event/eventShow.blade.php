@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Event Detail</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Event <b>"{{ $event->judul }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/events" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <div class="card" style="border: 3px solid #eee">
                            <div class="card-content">

                                <div class="card-body">
                                    @if ($event->image)
                                        <img src="{{ asset('storage/' . $event->image) }}"
                                            class="img-preview img-fluid d-block mx-auto" alt="event-images">
                                    @else
                                        <p class="text-danger">gambar tidak ada!</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">

                                <div class="card" style="border: 3px solid #eee">
                                    <div class="card-content">

                                        <div class="card-body">
                                            <p>{{ $event->recomended->recomended }}</p>

                                            <h1>{{ $event->judul }}</h1>
                                            <p>Organized By {{ $event->by }}</p>

                                            <h4>Tentang</h4>
                                            <p>{{ $event->tentang }}</p>

                                            <h4>Materi</h4>
                                            <p>{!! $event->materi !!}</p>

                                            <h4>Syarat dan Ketentuan</h4>
                                            <p>{!! $event->sk !!}</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="border: 3px solid #eee">
                                    <div class="card-content">

                                        <div class="card-body">

                                            <h6>Rekomendasi : </h6>
                                            <p>{{ $event->recomended->recomended }}</p>
                                            <h6>Status : </h6>
                                            <p>{{ $event->status->status }}</p>
                                            <h6>Kategori : </h6>
                                            <p>{{ $event->category->category }}</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="card" style="border: 3px solid #eee">
                                    <div class="card-content">

                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="img">
                                                    @if ($event->mentor->image)
                                                        <div class="avatar bg-primary me-3 avatar-xl">
                                                            <img src="{{ asset('storage/' . $event->mentor->image) }}"
                                                                alt="img">
                                                        </div>
                                                    @else
                                                        <div class="avatar bg-primary me-3 avatar-xl">
                                                            <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                                                alt="img">
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mentor">
                                                    <h6>{{ $event->mentor->nama }}</h6>
                                                    <p>{{ $event->mentor->pekerjaan }}</p>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="tanggal d-flex">
                                                <i class="bi bi-calendar-fill text-primary"></i>
                                                <h6 class="mt-1 mx-2">Tanggal</h6>
                                            </div>
                                            <p><b>{{ date('d F Y', strtotime($event->tanggalMulai)) }}</b></p>

                                            <div class="waktu d-flex">
                                                <i class="bi bi-clock-fill text-primary"></i>
                                                <h6 class="mt-1 mx-2">Waktu</h6>
                                            </div>
                                            <p><b>{{ date('H.i', strtotime($event->waktuMulai)) }} WIB - Selesai</b>
                                            </p>

                                            <div class="lokasi d-flex">
                                                <i class="bi bi-geo-fill text-primary"></i>
                                                <h6 class="mt-1 mx-2">Lokasi</h6>
                                            </div>
                                            <p><b>{{ $event->lokasi }}</b>
                                            </p>

                                            <div class="peralatan d-flex">
                                                <i class="bi bi-tools text-primary"></i>
                                                <h6 class="mt-1 mx-2">Peralatan</h6>
                                            </div>
                                            <p><b>{{ $event->peralatan }}</b>
                                            </p>

                                            <div class="sk d-flex">
                                                <i class="bi bi-file-earmark-text-fill text-primary"></i>
                                                <h6 class="mt-1 mx-2">Syarat Pendaftaran</h6>
                                            </div>
                                            <p><b>{{ $event->pendaftaran }}</b>
                                            </p>

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
