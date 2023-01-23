@include('template.header')

@include('landing.navfoo.navbarBlue')
{{-- @include('landing.event.heroevent') --}}


<style>
    .main-container-allachievement {
        margin: 150px 100px 100px 100px;
    }

    .main-container-allachievement .judul-allachievement {
        text-align: center;
        font-size: 1.5em;
    }

    .main-container-allachievement .container-allachievement {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .main-container-allachievement .allachievement {
        display: flex;
        justify-content: space-between;
        margin: 50px 0;
    }

    .main-container-allachievement .allachievement h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .main-container-allachievement .allachievement a {
        text-decoration: none;
        font-size: 1em;
        color: #2281C5;
    }

    .main-container-allachievement .container-allachievement .card-allachievement {
        width: 350px;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 0 0 25px 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
    }

    .main-container-allachievement .container-allachievement .card-allachievement:hover {
        transform: scale(1.02);
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 #5DA6D9;
    }

    .main-container-allachievement .container-allachievement .card-allachievement .gambar-allachievement img,
    .main-container-allachievement .container-allachievement .card-allachievement .gambar-contoh img {
        object-fit: cover;
        width: 100%;
        height: 225px;
    }

    .main-container-allachievement .container-allachievement .card-allachievement a {
        text-decoration: none;
    }

    .main-container-allachievement .container-allachievement .card-allachievement h1 {
        color: #283890;
        font-weight: bold;
        margin: 25px 20px 25px 20px;
        font-size: 1em;
    }

    .main-container-allachievement .container-allachievement .card-allachievement p {
        margin: 25px 20px 15px 20px;
        position: relative;
    }

    .main-container-allachievement .container-allachievement .card-allachievement p i {
        color: #F79220;
        margin: 0 10px 0 0;
    }

    .main-container-allachievement .container-allachievement .not-found {
        width: 100%;
        color: red;
        font-weight: bold;
        font-size: 1em;
        text-align: center;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }




    @media screen and (max-width: 576px) {
        .main-container-allachievement {
            margin: 125px 25px 50px 25px;
        }

        .main-container-allachievement .judul-allachievement {
            font-size: 1em;
        }

        .main-container-allachievement .container-allachievement .card-allachievement h1 {
            font-size: 12px;
        }

        .main-container-allachievement .container-allachievement .card-allachievement {
            margin: 25px 0 0 0;
        }

        .main-container-allachievement .allachievement h1,
        .main-container-allachievement .allachievement a {
            font-size: 12px;
        }

        .main-container-allachievement .allachievement {
            margin: 0;
        }

        .main-container-allachievement .container-allachievement .not-found {
            margin: 50px 0 0 0;
        }
    }
</style>

<div class="main-container-allachievement">
    <div class="allachievement">
        <h1>Event <b>{{ $status }}</b></h1>
        <a href="/categories">Kembali Ke Kategori</a>
    </div>
    <div class="container-allachievement">
        @if ($events->count())
            @foreach ($events as $event)
                <div class="card-allachievement">

                    @if ($event->image)
                        <div class="gambar-allachievement">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="event-images">
                        </div>
                    @else
                        <div class="gambar-contoh">
                            <img src="https://www.karier.mu/blog/wp-content/uploads/2021/12/programmin-990x500.jpg"
                                alt="img-dummy-allachievement">
                        </div>
                    @endif

                    <a href="/events/{{ $event->id }}">
                        <h1>{{ $event->judul }}</h1>
                    </a>

                </div>
            @endforeach
        @else
            <p class="not-found"><b>kosong!</b></p>
        @endif

    </div>
</div>


@include('landing.navfoo.footerBlue')

@include('template.footer')
