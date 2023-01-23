@include('template.header')

@include('landing.navfoo.navbarBlue')
@include('landing.event.heroevent')

<style>
    .main-container-event {
        margin: 25px 100px 75px 100px;
    }

    .main-container-event .container-event {
        display: flex;
        justify-content: space-between;
    }

    .main-container-event .container-event h6 {
        font-size: 18px;
        font-weight: bold;
    }

    .main-container-event .container-event a {
        font-size: 1em;
        color: #3D76BB;
        text-decoration: none;
    }

    .main-container-event form {}

    .main-container-event form i {
        color: #ddd;
        position: relative;
        top: 60px;
        left: 23%;
    }

    .main-container-event form .search-event {
        display: flex;
        justify-content: center;
        margin: 25px 0;
    }

    .main-container-event form .search-event input {
        width: 50%;
        box-sizing: border-box;
        padding: 15px 15px 15px 50px;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        margin: 0 10px;
        transition: all .3s ease;
    }

    .main-container-event form .search-event input:focus {
        outline: none;
        border: 2px solid #2281C5;
        box-shadow: 0 0 5px #2281C5;
        font-size: 1em;
        transition: all .3s ease;
    }

    .main-container-event form .search-event input::placeholder {
        color: #aaa;
    }

    .main-container-event form .search-event button {
        margin: 0 10px;
        padding: 0 20px;
        border: none;
        background-color: #2281C5;
        color: white;
        font-size: 1em;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: all .3s ease;
        cursor: pointer;
        outline: none;
    }

    .main-container-event form .search-event button:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        font-weight: bold;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-event .row-event {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    /* .main-container-event .row-event a {
        text-decoration: none;
    } */

    .main-container-event .row-event .card-event {
        width: 350px;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 25px 0 0 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
        height: 300px;
    }

    .main-container-event .row-event .card-event:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-event .row-event .card-event .header-event {
        display: flex;
        height: 50%;
        background-color: #2281C5;
        border-radius: 0 0 5px 5px;
        padding: 0 25px 0 25px;
    }

    .main-container-event .row-event .card-event .header-event img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        align-self: center;
    }

    .main-container-event .row-event .card-event .header-event .header-judul {
        align-self: center;
        margin: 0 0 0 15px;
    }

    .main-container-event .row-event .card-event .header-event .header-judul a,
    .main-container-event .row-event .card-event .body-event a {
        text-decoration: none;
    }

    .main-container-event .row-event .card-event .header-event .header-judul h6 {
        color: white;
        font-weight: bold;
        line-height: 150%;
        margin: 0 0 25px 0;
        font-size: 14px;
        /* height: 75px; */
    }

    .main-container-event .row-event .card-event .header-event .header-judul p {
        color: white;
        font-size: 12px;
    }

    .main-container-event .row-event .card-event .body-event h6 {
        color: #2281C5;
        font-size: 14px;
        font-weight: bold;
        /* height: 50px; */
        margin: 25px 25px 10px 25px;
    }

    .main-container-event .row-event .card-event .body-event p {
        color: black;
        font-size: 14px;
        margin: 0 25px 5px 25px;
        font-weight: bold;
    }

    .main-container-event .row-event .not-found {
        width: 100%;
        color: red;
        font-weight: bold;
        font-size: 1em;
        text-align: center;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }



    @media screen and (max-width: 576px) {
        .main-container-event {
            margin: 25px 25px 50px 25px;
        }

        .main-container-event .container-event h6,
        .main-container-event .container-event a {
            font-size: 12px;
        }

        .main-container-event form i {
            position: relative;
            top: 55px;
            left: 5%;
        }

        .main-container-event form .search-event {
            justify-content: space-between;
            flex-wrap: wrap;

        }

        .main-container-event form .search-event input {
            width: 100%;
            padding: 10px 10px 10px 35px;
            margin: 0 0 10px 0;
        }

        .main-container-event form .search-event button {
            width: 100%;
            padding: 10px 15px;
            margin: 0;
        }

        .main-container-event .row-event .card-event {
            margin: 0 0 25px 0;
            width: 100%;
        }

        .main-container-event .row-event .card-event .header-event .header-judul h6,
        .main-container-event .row-event .card-event .body-event h6,
        .main-container-event .row-event .card-event .body-event p {
            font-size: 12px;
        }

    }

    @media screen and (max-width: 995px) {

        .main-container-event .row-event .card-event {
            width: 100%;
            margin: 25px 0 0 0;
        }

        .main-container-event .row-event a {
            width: 100%;
        }
    }

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 992px) {}
</style>

<div class="main-container-event">

    <div class="container-event">
        <h6>Events</h6>
        <a href="/categories">Ke Kategori Event</a>
    </div>

    <form action="{{ url('search') }}" method="GET">
        @csrf
        <i class="fa-solid fa-magnifying-glass"></i>
        <div class="search-event">
            <input type="text" name="cari-event" id="cari-event" placeholder="cari event ..."
                value="{{ request('cari-event') }}">
            <button type="submit">Cari</button>
        </div>
    </form>

    <div class="row-event">
        @if ($events->count())
            @foreach ($events as $event)
                <div class="card-event">
                    <div class="header-event">

                        @if ($event->mentor->image)
                            <img src="{{ asset('storage/' . $event->mentor->image) }}" alt="mentor-image">
                        @else
                            <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                alt="contoh-mentor-image">
                        @endif
                        <div class="header-judul">
                            <a href="/events/{{ $event->id }}">
                                <h6>{{ $event->judul }}</h6>
                            </a>
                            <p>with {{ $event->mentor->nama }}</p>
                        </div>
                    </div>
                    <div class="body-event">
                        <a href="/events/{{ $event->id }}">
                            <h6>{{ $event->judul }}</h6>
                        </a>
                        <p><span>{{ date('d F Y', strtotime($event->tanggalMulai)) }}</span> |
                            <span>{{ date('H.i', strtotime($event->waktuMulai)) }} WIB</span>
                        </p>
                        <p>{{ $event->lokasi }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p class="not-found"><b>tidak ditemukan!</b></p>
        @endif

    </div>
</div>

@include('landing.navfoo.footerBlue')

@include('template.footer')
