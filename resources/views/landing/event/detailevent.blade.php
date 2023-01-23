@include('template.header')

@include('landing.navfoo.navbar')

<style>
    .main-container-detailevent {
        margin: 150px 100px 100px 100px;
    }

    .main-container-detailevent .container-detailevent {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent {
        flex: 2;
        margin: 0 25px 0 0;
        width: 100%;
        transition: all .3s ease;

    }

    .main-container-detailevent .container-detailevent .mentor-detailevent {
        flex: 1;
        margin: 0 0 0 25px;
        width: 100%;
        box-sizing: border-box;
        transition: all .3s ease;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent {
        background-color: rgba(34, 129, 197, 0.5);
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 25px;
        width: 100%;
        box-sizing: border-box;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p i {
        margin: 0 5px 0 0;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:first-child {
        background-color: rgba(34, 129, 197, 1);
        border-radius: 5px;
        width: 30%;
        height: 35px;
        font-size: 12px;
        text-align: center;
        line-height: 35px;
        color: white;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent h1 {
        font-size: 1em;
        color: black;
        margin: 25px 0;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent .organized,
    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:last-child {
        color: #747474;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:last-child {
        margin: 5px 0 0 0;

    }

    .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:last-child a {
        color: #2281C5;
        font-weight: bold;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .tentang {
        margin: 50px 0 0 0;
        font-size: 18px;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .isitentang {
        margin: 25px 0 0 0;
        font-size: 1em;
        line-height: 150%;
        color: #747474;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .materi {
        margin: 50px 0 0 0;
        font-size: 18px;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .isimateri {
        margin: 25px 0 0 0;
        font-size: 1em;
        line-height: 150%;
        color: #747474;
        font-family: "Montserrat", serif;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .sk {
        margin: 50px 0 0 0;
        font-size: 18px;
    }

    .main-container-detailevent .container-detailevent .konten-detailevent .isisk {
        margin: 25px 0 0 0;
        font-size: 1em;
        line-height: 150%;
        color: #747474;
        font-family: "Montserrat", serif;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent {
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        padding: 25px;
        height: 500px;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor,
    .d-flex {
        display: flex;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor img {
        border-radius: 50%;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor .identitas-mentor {
        align-self: center;
        margin: 0 0 0 25px;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor .identitas-mentor h6 {
        font-size: 1em;
        font-weight: bold;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor .identitas-mentor p {
        font-size: 12px;
        margin: 15px 0 0 0;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent hr {
        margin: 25px 0;
        border: 1px solid #eaeaea;
    }

    .icon {
        color: #F57C20;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .tanggal h6,
    .main-container-detailevent .container-detailevent .mentor-detailevent .waktu h6,
    .main-container-detailevent .container-detailevent .mentor-detailevent .lokasi h6,
    .main-container-detailevent .container-detailevent .mentor-detailevent .peralatan h6,
    .main-container-detailevent .container-detailevent .mentor-detailevent .sk h6 {
        font-size: 1em;
        font-weight: 900;
        margin: 0 0 0 15px;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent .tanggal,
    .main-container-detailevent .container-detailevent .mentor-detailevent .waktu,
    .main-container-detailevent .container-detailevent .mentor-detailevent .lokasi,
    .main-container-detailevent .container-detailevent .mentor-detailevent .peralatan,
    .main-container-detailevent .container-detailevent .mentor-detailevent .sk {
        margin: 15px 0 0 0;
    }

    .main-container-detailevent .container-detailevent .mentor-detailevent p {
        font-size: 1em;
        margin: 5px 0 0 0;
    }





    /* related */
    .main-container-detailevent .related-detailevent .related-judul {
        display: flex;
        justify-content: space-between;
        margin: 50px 0 0 0;
    }

    .main-container-detailevent .related-detailevent .related-judul h6 {
        font-size: 18px;
    }

    .main-container-detailevent .related-detailevent .related-judul a {
        font-size: 1em;
        text-decoration: none;
        color: #3D76BB;
    }

    .main-container-detailevent .related-detailevent .row-detailevent {
        display: flex;
        justify-content: space-between;
        margin: 25px 0 0 0;
    }

    .main-container-detailevent .related-detailevent .row-detailevent .card-detailevent {
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        width: 350px;
        overflow: hidden;
        transform: scale(1);
        transition: all .3s ease;
        cursor: pointer;
        margin: 0 0 25px 0;
    }

    .main-container-detailevent .related-detailevent .row-detailevent .card-detailevent:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-detailevent .related-detailevent .row-detailevent .card-detailevent .gambar-detailevent img {
        object-fit: cover;
        height: 50%;
        width: 100%;
    }

    .main-container-detailevent .related-detailevent .row-detailevent .card-detailevent h4 {
        margin: 50px 25px;
        font-size: 1em;
    }




    @media screen and (max-width: 576px) {
        .main-container-detailevent {
            margin: 125px 25px 25px 25px;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent,
        .main-container-detailevent .container-detailevent .mentor-detailevent {
            flex: none;
            margin: 0;
            transition: all .3s ease;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent {
            margin: 50px 0 25px 0;
            height: 450px;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent {}

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p i {
            transform: scale(.5);
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:first-child {
            width: 50%;
            height: 25px;
            font-size: 8px;
            line-height: 25px;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent h1 {
            font-size: 1em;
            color: black;
            margin: 25px 0;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent .organized {
            color: #747474;
            font-size: 12px;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent .by,
        .main-container-detailevent .container-detailevent .konten-detailevent .header-detailevent p:last-child {
            font-size: 12px;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .tentang,
        .main-container-detailevent .container-detailevent .konten-detailevent .materi,
        .main-container-detailevent .container-detailevent .konten-detailevent .sk {
            font-size: 1em;
        }

        .main-container-detailevent .container-detailevent .konten-detailevent .isitentang {
            font-size: 12px;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor img {
            width: 50px;
            height: 50px;
            align-self: center;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent .header-mentor .identitas-mentor {
            margin: 0 0 0 15px;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent .tanggal h6,
        .main-container-detailevent .container-detailevent .mentor-detailevent .waktu h6,
        .main-container-detailevent .container-detailevent .mentor-detailevent .lokasi h6,
        .main-container-detailevent .container-detailevent .mentor-detailevent .peralatan h6,
        .main-container-detailevent .container-detailevent .mentor-detailevent .sk h6 {
            font-size: 14px;
            font-weight: 900;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent p {
            font-size: 12px;
        }

        .main-container-detailevent .related-detailevent .related-judul h6,
        .main-container-detailevent .related-detailevent .related-judul a {
            font-size: 12px;
        }

        .main-container-detailevent .related-detailevent .row-detailevent {
            margin: 25px 0 50px 0;
        }



    }

    @media screen and (max-width: 912px) {}

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 995px) {

        .main-container-detailevent .container-detailevent .konten-detailevent,
        .main-container-detailevent .container-detailevent .mentor-detailevent {
            flex: none;
            margin: 0;
        }

        .main-container-detailevent .container-detailevent .mentor-detailevent {
            margin: 50px 0 25px 0;
        }
    }
</style>

<div class="main-container-detailevent">

    <div class="container-detailevent">
        <div class="konten-detailevent">
            <div class="header-detailevent">
                @if ($event->recomended->recomended == 'recommended')
                    <p><i class="fa-sharp fa-solid fa-circle"></i> <span
                            class="recomended-detailevent">{{ $event->recomended->recomended }}</span></p>
                @else
                @endif
                <h1>{{ $event->judul }}</h1>
                <p><span class="organized">Organized By</span> <span class="by"
                        style="color: #F57C20; font-weight: bold;">{{ $event->by }}</span></p>
                <p>Kategori <a href="/categories/{{ $event->category->category }}">{{ $event->category->category }}</a>
                </p>
            </div>
            <h4 class="tentang">Tentang</h4>
            <p class="isitentang">{{ $event->tentang }}</p>
            <h4 class="materi">Apa Yang Akan Dibahas ?</h4>
            <p class="isimateri">{!! $event->materi !!}</p>
            <h4 class="sk">Syarat dan Ketentuan</h4>
            <p class="isisk">{!! $event->sk !!}</p>
        </div>
        <div class="mentor-detailevent">
            <div class="header-mentor">
                @if ($event->mentor->image)
                    <img src="{{ asset('storage/' . $event->mentor->image) }}" alt="mentor-image" width="75">
                @else
                    <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                        alt="contoh-mentor-image" width="75">
                @endif
                <div class="identitas-mentor">
                    <h6>{{ $event->mentor->nama }}</h6>
                    <p>{{ $event->mentor->pekerjaan }}</p>
                </div>
            </div>

            <hr>

            <div class="tanggal d-flex">
                <i class="fa-solid fa-calendar icon"></i>
                <h6 class="mt-1 mx-2">Tanggal</h6>
            </div>
            <p>{{ date('d F Y', strtotime($event->tanggalMulai)) }}</p>

            <div class="waktu d-flex">
                <i class="fa-solid fa-clock icon"></i>
                <h6 class="mt-1 mx-2">Waktu</h6>
            </div>
            <p>{{ date('H.i', strtotime($event->waktuMulai)) }} WIB - Selesai
            </p>

            <div class="lokasi d-flex">
                <i class="fa-sharp fa-solid fa-map-pin icon"></i>
                <h6 class="mt-1 mx-2">Lokasi</h6>
            </div>
            <p>{{ $event->lokasi }}
            </p>

            <div class="peralatan d-flex">
                <i class="fa-solid fa-screwdriver-wrench icon"></i>
                <h6 class="mt-1 mx-2">Peralatan</h6>
            </div>
            <p>{{ $event->peralatan }}
            </p>

            <div class="sk d-flex">
                <i class="fa-solid fa-file-lines icon"></i>
                <h6 class="mt-1 mx-2">Syarat Pendaftaran</h6>
            </div>
            <p>{{ $event->pendaftaran }}
            </p>
        </div>
    </div>

    {{-- <div class="related-detailevent">
        <div class="related-judul">
            <h6>Related Event</h6>
            <a href="#">Lihat Semua</a>
        </div>
        <div class="row-detailevent">
            {{ $events }}
            <a href="/categories/{{ $event->category->category }}">{{ $event->category->category }}</a>
            @foreach ($events as $event)
                <div class="card-detailevent">
                    @if ($event->image)
                        <div class="gambar-detailevent">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="event-image">
                        </div>
                    @else
                        <div class="gambar-contoh">
                            <img src="https://www.karier.mu/blog/wp-content/uploads/2021/12/programmin-990x500.jpg"
                                alt="img-dummy-allachievement">
                        </div>
                    @endif
                    <h4>{{ $event->judul }}</h4>
                </div>
            @endforeach

        </div>
    </div> --}}

</div>

@include('landing.navfoo.footer')

@include('template.footer')
