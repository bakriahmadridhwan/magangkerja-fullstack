<style>
    .event-kamu {
        margin: 100px 0 50px 0;
    }

    .spesial {
        display: flex;
        justify-content: space-between;
        margin: 25px 0;
    }

    .spesial a {
        color: #3D76BB;
        text-decoration: none;
    }

    .container-card-spesial .row-card-spesial {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .container-card-spesial .row-card-spesial .card-spesial {
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

    .container-card-spesial .row-card-spesial .card-spesial a {
        text-decoration: none;
        cursor: pointer;
    }

    .container-card-spesial .row-card-spesial .card-spesial a h1:hover {
        color: #3D76BB;
    }

    .container-card-spesial .row-card-spesial .card-spesial:hover {
        transition: all .3s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 #5da6d9;
    }

    .container-card-spesial .row-card-spesial .card-spesial img {
        object-fit: cover;
        width: 100%;
        height: 50%;
        margin: 0 0 50px 0;
    }

    .container-card-spesial .row-card-spesial .card-spesial h1 {
        color: black;
        font-weight: bold;
        margin: 0 20px;
        font-size: 14px;
        line-height: 150%;
    }


    @media screen and (max-width: 576px) {
        .container-card-spesial .row-card-spesial {
            flex-direction: column;
            justify-content: center;
        }

        .container-card-spesial .row-card-spesial .card-spesial {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
        }

        .spesial h3,
        .spesial a,
        .container-card-spesial .row-card-spesial .card-spesial h1 {
            font-size: 12px;
        }

        .event-kamu {
            margin: 50px 0 25px 0;
        }
    }

    @media screen and (max-width: 895px) {
        .container-card-spesial .row-card-spesial {
            flex-direction: column;
            justify-content: center;
        }

        .container-card-spesial .row-card-spesial .card-spesial {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
        }

        .spesial h3,
        .spesial a,
        .container-card-spesial .row-card-spesial .card-spesial h1 {
            font-size: 12px;
        }
    }

    /* @media screen and (max-width: 995px) {
        .container-card-spesial .row-card-spesial .card-spesial h1 {
            font-size: 14px;
        }
    } */
</style>

<div class="event-kamu">
    <div class="spesial">
        <h3>Spesial Event Untuk Kamu</h3>
        <a href="/events">Lihat Semua</i></a>
    </div>

    <div class="container-card-spesial">
        <div class="row-card-spesial">
            @foreach ($events as $event)
                @if ($event->recomended->recomended == 'recommended' || $event->recomended->recomended == 'rekomendasi')
                    <div class="card-spesial">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="event-images">
                        <a href="/events/{{ $event->id }}">
                            <h1>{{ $event->judul }}</h1>
                        </a>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
