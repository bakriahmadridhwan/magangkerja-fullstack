@include('sweetalert::alert')

<style>
    @media (max-width: 576px) {

        .stat,
        .ev {
            font-size: 1em;
        }

        .craf,
        .copy {
            float: none;
            font-size: 8px;
        }

        .notif {
            display: none;
        }
    }
</style>

<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="d-flex justify-content-between">
        <h3 class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 stat">Statistik Dashboard Admin</h3>
        <span class="col-4 notif">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    {{ session('success') }} {{ auth()->user()->name }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </span>
    </div>

</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldChat"></i>
                                    </div>
                                </div>
                                <div class="">
                                    <h6 class="text-muted font-semibold">Testimoni</h6>
                                    <h6 class="font-extrabold mb-0">{{ $testimoni }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldNotification"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pertanyaan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $question }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldMessage"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Arsip Pertanyaan</h6>
                                    <h6 class="font-extrabold mb-0">{{ $softDeleted }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldPaper"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Event</h6>
                                    <h6 class="font-extrabold mb-0">{{ $event }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldUser"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-boldProfile">Mentor</h6>
                                    <h6 class="font-extrabold mb-0">{{ $mentor }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldStar"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Pencapaian Magang Kerja</h6>
                                    <h6 class="font-extrabold mb-0">{{ $achievement }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Karya Peserta</h6>
                                    <h6 class="font-extrabold mb-0">{{ $peserta }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldActivity"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total</h6>
                                    @foreach ($tachievements as $tachievement)
                                        <h6 class="font-extrabold mb-0">Pencapaian : {{ $tachievement->tEvent }}</h6>
                                        <h6 class="font-extrabold mb-0">Partisipan : {{ $tachievement->tPartisipan }}
                                        </h6>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        {{-- <div class="avatar avatar-xl">
                                <img src="{{ asset('dist/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div> --}}
                        <div class="ms-3 name">
                            <h5 class="font-bold">Halo, {{ auth()->user()->name }}</h5>
                            <h6 class="text-muted mb-0">{{ auth()->user()->email }}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Sosial Media</h4>
                </div>
                <div class="card-body">
                    @foreach ($footers as $footer)
                        <div class="d-flex justify-content-around pb-4">
                            <a href="{{ $footer->linkig }}" target="_blank"><i
                                    class="bi bi-instagram text-primary d-inline-block"
                                    style="transform: scale(2)"></i></a>
                            <a href="https://wa.me/{{ $footer->linkwa }}" target="_blank"><i
                                    class="bi bi-whatsapp text-primary d-inline-block"
                                    style="transform: scale(2)"></i></a>
                            <a href="{{ $footer->linkfb }}" target="_blank"><i
                                    class="bi bi-facebook text-primary d-inline-block"
                                    style="transform: scale(2)"></i></a>
                            <a href="{{ $footer->linkyt }}" target="_blank"><i
                                    class="bi bi-youtube text-primary d-inline-block"
                                    style="transform: scale(2)"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="row mb-4">
        <h4 class="my-4 ev">Event Terbaru Yang Dibuat</h4>
        @foreach ($events as $event)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                <div class="card overflow-hidden" style="height: 300px">
                    <div class="card-body">
                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}"
                                class="img-preview img-fluid d-block mx-auto" alt="event-images"
                                style="object-fit: cover; height: 50%; width: 100%">
                        @else
                            <p class="text-danger"><b>gambar tidak ada!</b></p>
                        @endif
                        <div class="my-auto">
                            <hr>
                            <h6 style="margin-top: 25px">{{ $event->judul }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pesan Terbaru Yang Masuk</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td class="col-3">
                                            <p class="font-bold mb-0">{{ $question->nama }}</p>
                                        </td>
                                        <td class="col-auto overflow-auto">
                                            <p class=" mb-0">{{ $question->pertanyaan }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="card">
        <div class="card-header">
            <p>MENU</p>
        </div>
        <div class="card-body">
            <nav class="menu-dns">
                @foreach ($headers as $header)
                    <ul>
                        <li>{{ $header->menu1 }}</li>
                        <li>{{ $header->menu2 }}</li>
                        <li>{{ $header->menu3 }}</li>
                        <li>{{ $header->menu4 }}</li>
                        <li>{{ $header->menu5 }}</li>
                    </ul>
                @endforeach
            </nav>
        </div>
    </div> --}}

</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start copy">
            <p>2022 &copy; magangkerja.id</p>
        </div>
        <div class="float-end craf">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="https://saugi.me">Kelompok 3</a></p>
        </div>
    </div>
</footer>
