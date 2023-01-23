<style>
    .event-berjalan {
        margin: 50px 0 50px 0;
    }

    .berjalan {
        display: flex;
        justify-content: space-between;
        margin: 25px 0;
    }

    .berjalan a {
        color: #3D76BB;
        text-decoration: none;
    }

    .container-card-berjalan .row-card-berjalan {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan {
        width: 30%;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin-bottom: 25px;
        transition: all .3s ease;
        transform: scale(1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        height: 275px;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan a {
        text-decoration: none;
        cursor: pointer;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan a h1:hover {
        color: #3D76BB;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan:hover {
        transition: all .3s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 #5da6d9;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan img {
        object-fit: cover;
        width: 100%;
        height: 50%;
        margin: 0 0 50px 0;
    }

    .container-card-berjalan .row-card-berjalan .card-berjalan h1 {
        color: black;
        font-weight: bold;
        margin: 0 20px;
        font-size: 14px;
        line-height: 150%;
    }


    @media screen and (max-width: 576px) {
        .container-card-berjalan .row-card-berjalan {
            flex-direction: column;
            justify-content: center;
        }

        .container-card-berjalan .row-card-berjalan .card-berjalan {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
        }

        .berjalan h3,
        .berjalan a,
        .container-card-berjalan .row-card-berjalan .card-berjalan h1 {
            font-size: small;
        }
    }

    @media screen and (max-width: 895px) {
        .container-card-berjalan .row-card-berjalan {
            flex-direction: column;
            justify-content: center;
        }

        .container-card-berjalan .row-card-berjalan .card-berjalan {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
        }

        .berjalan h3,
        .berjalan a,
        .container-card-berjalan .row-card-berjalan .card-berjalan h1 {
            font-size: 12px;
        }
    }
</style>

<div class="event-berjalan">
    <div class="berjalan">
        <h3>Event Yang Sedang Berjalan</h3>
        <a href="/categories">Lihat Semua</i></a>
    </div>

    <div class="container-card-berjalan">
        <div class="row-card-berjalan">
            @foreach ($events as $event)
                @if ($event->status->status == 'Sedang Berjalan' || $event->status->status == 'ongoing')
                    <div class="card-berjalan">

                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="event-images">
                        @else
                            <img src="https://www.karier.mu/blog/wp-content/uploads/2021/12/programmin-990x500.jpg"
                                alt="img-dummy-allachievement">
                        @endif

                        <a href="/events/{{ $event->id }}">
                            <h1>{{ $event->judul }}</h1>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
