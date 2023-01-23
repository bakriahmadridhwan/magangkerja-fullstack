@include('template.header')

@include('landing.navfoo.navbarBlue')
@include('landing.event.heroevent')

<style>
    .main-container-category {
        margin: 25px 100px;
    }

    .main-container-category .searchbar-category {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .main-container-category .searchbar-category h1 {
        font-size: 18px;
    }

    .main-container-category .searchbar-category form {}

    .main-container-category .searchbar-category form i {
        color: #ddd;
        position: relative;
        top: -30px;
        left: 5%;
    }

    .main-container-category .searchbar-category form .search-input input {
        padding: 10px 10px 10px 45px;
        width: 300px;
        border-radius: 5px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid #eaeaea;
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .main-container-category .searchbar-category form .search-input input:focus {
        outline: none;
        border: 2px solid #2281C5;
        box-shadow: 0 0 5px #2281C5;
        font-size: 1em;
        transition: all .3s ease;
    }

    .main-container-category .searchbar-category form .search-input input::placeholder {
        color: #aaa;
    }

    .main-container-category .searchbar-category form .search-input button {
        margin: 0 0 0 10px;
        padding: 10px 20px;
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

    .main-container-category .searchbar-category form .search-input button:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        font-weight: bold;
        transform: scale(1.02);
        transition: all .3s ease;
    }



    /* kategori */
    .main-container-category .container-category {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .main-container-category .container-category .card-listcategory {
        width: 30%;
    }

    .main-container-category .container-category .body-category {
        width: 70%;
    }

    .main-container-category .container-category .card-listcategory {
        width: 250px;
        padding: 25px;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 25px 0 50px 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
        height: 300px;
        overflow: auto;
    }

    .main-container-category .container-category .card-listcategory .filter {
        display: flex;
        justify-content: space-between;
    }

    .main-container-category .container-category .card-listcategory .filter .fill {
        display: flex;
    }

    .main-container-category .container-category .card-listcategory .filter a {
        font-size: 12px;
        color: #2281C5;
        text-decoration: none;
    }

    .main-container-category .container-category .card-listcategory .filter .fill h1 {
        font-size: 1em;
        margin: 0 0 0 5px;
    }

    .main-container-category .container-category .card-listcategory hr {
        margin: 25px 0;
        border: 1px solid #eaeaea;
    }

    .main-container-category .container-category .card-listcategory h1 {
        font-size: 18px;
        margin: 0 0 25px 0;

    }

    .main-container-category .container-category .card-listcategory .check {
        margin: 0 0 10px 0;
    }

    .main-container-category .container-category .card-listcategory .check a {
        font-size: 1em;
        text-decoration: none;
        font-weight: bold;
        color: black;
        transform: scale(1);
        transition: all .3s ease;
        margin: 0 0 0 5px;
    }

    .main-container-category .container-category .card-listcategory .check a:hover {
        font-size: 17px;
        color: #2281C5;
        transform: scale(1.01);
        transition: all .3s ease;
    }


    /* kontent */
    .main-container-category .container-category .body-category {
        margin: 25px 0 75px 0;
    }

    .main-container-category .container-category .body-category .status {
        margin: 15px 0 0 0;
    }

    .main-container-category .container-category .body-category .status a {
        background-color: white;
        color: black;
        font-size: 1em;
        padding: 10px 30px;
        border-radius: 30px;
        border: 2px solid #eaeaea;
        text-decoration: none;
        margin: 0 15px 0 0;
        transform: scale(1);
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .main-container-category .container-category .body-category .status a:hover {
        border: none;
        background-color: #2281C5;
        color: white;
        padding: 15px 35px;
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 #2281C5;
        font-weight: bold;
    }

    .main-container-category .container-category .body-category .status a:active {
        border: none;
        background-color: #2281C5;
        color: white;
    }


    /* card event */
    .main-container-category .container-category .body-category .row-event {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .main-container-category .container-category .body-category .row-event a {
        text-decoration: none;
    }

    .main-container-category .container-category .body-category .row-event .card-event {
        width: 375px;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 50px 0 0 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
        cursor: pointer;
        height: 300px;
        box-sizing: border-box;
    }

    .main-container-category .container-category .body-category .row-event .card-event:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-category .container-category .body-category .row-event .card-event .header-event {
        display: flex;
        height: 50%;
        background-color: #2281C5;
        border-radius: 0 0 5px 5px;
        padding: 0 25px 0 25px;
    }

    .main-container-category .container-category .body-category .row-event .card-event .header-event img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        align-self: center;
    }

    .main-container-category .container-category .body-category .row-event .card-event .header-event .header-judul {
        align-self: center;
        margin: 0 0 0 15px;
    }

    .main-container-category .container-category .body-category .row-event .card-event .header-event .header-judul h6 {
        color: white;
        font-weight: bold;
        line-height: 150%;
        margin: 0 0 5px 0;
        font-size: 14px;
        height: 75px;
    }

    .main-container-category .container-category .body-category .row-event .card-event .header-event .header-judul p {
        color: white;
        font-size: 12px;
    }

    .main-container-category .container-category .body-category .row-event .card-event .body-event h6 {
        color: #2281C5;
        font-size: 14px;
        font-weight: bold;
        height: 50px;
        margin: 25px 25px 10px 25px;
    }

    .main-container-category .container-category .body-category .row-event .card-event .body-event p {
        color: black;
        font-size: 14px;
        margin: 0 25px 5px 25px;
        font-weight: bold;
    }

    .main-container-category .container-category .body-category .row-event .not-found {
        width: 100%;
        color: red;
        font-weight: bold;
        font-size: 1em;
        text-align: center;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }


    @media screen and (max-width: 576px) {
        .main-container-category {
            margin: 25px 25px 25px 25px;
        }

        .main-container-category .searchbar-category h1 {
            font-size: 1em;
        }

        .main-container-category .searchbar-category form {
            margin: 25px 0 0 0;
        }

        .main-container-category .searchbar-category form i {
            top: -80px;
        }

        .main-container-category .searchbar-category form .search-input input {
            width: 100%;
        }

        .main-container-category .searchbar-category form .search-input button {
            margin: 15px 0 0 0;
            width: 100%;
        }

        .main-container-category .container-category .card-listcategory {
            width: 100%;
        }

        .main-container-category .container-category .body-category {
            width: 100%;

        }

        .main-container-category .container-category .card-listcategory {
            width: 100%;
            margin: 25px 0 25px 0;
        }

        .main-container-category .container-category .card-listcategory h1 {
            font-size: 1em;
        }

        /* kontent */
        .main-container-category .container-category .body-category {
            margin: 25px 0 50px 0;
        }

        .main-container-category .container-category .body-category .status {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .main-container-category .container-category .body-category .status a {
            font-size: 12px;
            padding: 10px 20px;
            margin: 5px 0;
            width: 100%;
            text-align: center;
        }





        /* card event */

        .main-container-category .container-category .body-category .row-event .card-event {
            width: 100%;
            margin: 25px 0 0 0;
        }

        .main-container-category .container-category .body-category .row-event .card-event .header-event .header-judul h6 {
            font-size: 12px;
        }

        .main-container-category .container-category .body-category .row-event .card-event .header-event .header-judul p {
            color: white;
            font-size: 12px;
        }

        .main-container-category .container-category .body-category .row-event .card-event .body-event h6 {
            font-size: 12px;
        }

        .main-container-category .container-category .body-category .row-event .card-event .body-event p {
            font-size: 12px;
        }

        .main-container-category .container-category .body-category .row-event .not-found {
            width: 100%;
            color: red;
            font-weight: bold;
            font-size: 12px;
            text-align: center;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

    }

    @media screen and (max-width: 995px) {
        .main-container-category .container-category .body-category .row-event a {
            width: 100%;
        }

    }

    @media screen and (max-width: 1115px) {
        .main-container-category .container-category .card-listcategory {
            width: 100%;
        }

        .main-container-category .container-category .body-category {
            margin: 0 0 50px 0;
            width: 100%;
        }


    }
</style>


<div class="main-container-category">

    {{-- <div class="searchbar-category">
        <h1>Kategori Event</h1>
        <form action="{{ url('cari') }}" method="GET">
            @csrf
            <div class="search-input">
                <input type="text" name="carievent" id="carievent" placeholder="cari event ..."
                    value="{{ request('cari-kategori-event') }}">
                <button type="submit" id="tombol-cari">Cari</button>
            </div>
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>
    </div> --}}

    <div class="container-category">
        {{-- <div class="card-listcategory">
            <div class="filter">
                <div class="fill">
                    <i class="fa-solid fa-filter"></i>
                    <h1>FILTER</h1>
                </div>
                <a href="">RESET</a>
            </div>

            <hr>

            <h1>Kategori</h1>
            @foreach ($categories as $category)
                <div class="check">
                    <input type="checkbox">
                    <a href="/categories/{{ $category->category }}">{{ $category->category }}</a>
                </div>
            @endforeach

        </div> --}}
        <div class="body-category">
            {{-- <div class="status">
                <a href="">Sedang Berjalan</a>
                <a href="">Akan Berjalan</a>
            </div> --}}
            <div class="row-event">
                {{-- @if ($events->count()) --}}

                @foreach ($allevents as $allevent)
                    <a href="/events/{{ $allevent->id }}">
                        <div class="card-event">
                            <div class="header-event">

                                @if ($allevent->mentor->image)
                                    <img src="{{ asset('storage/' . $allevent->mentor->image) }}" alt="mentor-image">
                                @else
                                    <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                        alt="contoh-mentor-image">
                                @endif
                                <div class="header-judul">
                                    <h6>{{ $allevent->judul }}</h6>
                                    <p>with {{ $allevent->mentor->nama }}</p>
                                </div>
                            </div>
                            <div class="body-event">
                                <h6>{{ $allevent->judul }}</h6>
                                <p><span>{{ date('d F Y', strtotime($allevent->tanggalMulai)) }}</span> |
                                    <span>{{ date('H.i', strtotime($allevent->waktuMulai)) }} WIB</span>
                                </p>
                                <p>{{ $allevent->lokasi }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- @else
                    <p class="not-found"><b>tidak ditemukan!</b></p>
                @endif --}}

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


@include('landing.navfoo.footerBlue')

@include('template.footer')
