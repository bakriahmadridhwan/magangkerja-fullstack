<style>
    .container-magangkerja {
        border-radius: 5px;
        overflow: hidden;
        border: 2px solid #eaeaea;
        margin: 0 0 75px 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .container-magangkerja .container-pintasan {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 50px 35px 15px 35px;
    }

    .container-magangkerja .container-pintasan h6 {
        color: #3F3F46;
        font-size: 18px;
    }

    .container-magangkerja .container-pintasan a {
        color: #3D76BB;
        font-size: 1em;
        text-decoration: none;
    }

    .container-magangkerja .container-f {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-magangkerja .container-f .total-magangkerja,
    .container-magangkerja .container-f .card-magangkerja {
        width: 42%;
    }

    .container-magangkerja .container-f .total-magangkerja {
        padding: 0 0 50px 35px;
    }

    .container-magangkerja .container-f .card-magangkerja {
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 0 35px 50px 0;
    }

    .container-magangkerja .container-f .total-magangkerja p .icon {
        color: #F79220;
    }

    .container-magangkerja .container-f .total-magangkerja p:nth-child(2) {
        margin: 15px 0;
    }

    .container-magangkerja .container-f .total-magangkerja p {
        margin: 10px 0;
    }

    .container-magangkerja .container-f .total-magangkerja p span {
        margin: 0 0 0 10px;
    }

    .container-magangkerja .container-f .total-magangkerja .p2 {
        margin: 0 0 0 5px;
    }

    .container-magangkerja .container-f .total-magangkerja hr {
        margin: 20px 0;
    }

    .container-magangkerja .container-f .total-magangkerja p:last-child {
        line-height: 150%;
    }

    .container-magangkerja .container-f .card-magangkerja img {
        object-fit: cover;
        width: 100%;
        height: 50%;
    }

    .container-magangkerja .container-f .card-magangkerja h1 {
        color: #283890;
        font-weight: bold;
        padding: 50px 20px 0 20px;
        font-size: 24px;
    }

    .container-magangkerja .container-f .card-magangkerja p {
        margin: 25px 20px 0 20px;
    }

    .container-magangkerja .container-f .card-magangkerja p i {
        color: #F79220;
        margin: 0 10px 25px 0;
    }

    .container-f .hr-magangkerja {
        display: none;
    }


    @media screen and (max-width: 576px) {

        .container-magangkerja .container-f .total-magangkerja,
        .container-magangkerja .container-f .card-magangkerja {
            width: 100%;
        }

        .container-magangkerja .container-pintasan {
            padding: 25px 15px 15px 15px;
        }

        .container-magangkerja .container-pintasan h6,
        .container-magangkerja .container-pintasan a,
        .container-magangkerja .container-f .total-magangkerja p {
            font-size: 12px;
        }

        .container-magangkerja .container-f .total-magangkerja {
            padding: 0 15px 50px 15px;
        }

        .container-magangkerja .container-f .card-magangkerja {
            margin: 0 15px 25px 15px;
        }

        .container-magangkerja .container-f .card-magangkerja h1 {
            font-size: 1em;
        }

        .container-magangkerja .container-f .card-magangkerja p {
            font-size: 12px;
        }

        .container-f .hr-magangkerja {
            display: block;
            width: 100%;
            margin: 0 15px 50px 15px;
        }
    }

    @media screen and (max-width: 895px) {

        .container-magangkerja .container-f .total-magangkerja,
        .container-magangkerja .container-f .card-magangkerja {
            width: 100%;
        }

        .container-magangkerja .container-pintasan {
            padding: 25px 15px 15px 15px;
        }

        .container-magangkerja .container-f .total-magangkerja {
            padding: 0 15px 50px 15px;
        }

        .container-magangkerja .container-f .card-magangkerja {
            margin: 0 15px 25px 15px;
        }
    }
</style>



<div class="container-magangkerja">
    <div class="container-pintasan">
        <h6>Dokumentasi</h6>
        <a href="/allachievements">Lihat Semua</a>
    </div>
    <div class="container-f">
        @foreach ($tachievements as $tachievement)
            <div class="total-magangkerja">
                <p><i class="fa-solid fa-calendar-days icon"></i> <span>{{ $tachievement->tEvent }}</span> Event</p>
                <p><i class="fa-solid fa-user-group icon"></i> <span
                        class="p2">{{ $tachievement->tPartisipan }}</span>
                    Partisipan</p>
                <hr>
                <p>{{ $tachievement->deskripsi }}</p>
            </div>
        @endforeach
        <hr class="hr-magangkerja">
        @foreach ($achievements as $achievement)
            <div class="card-magangkerja">
                <img src="{{ asset('storage/' . $achievement->image) }}" alt="event-images">
                <h1>{{ $achievement->judul }}</h1>
                <p><i class="fa-solid fa-user-group icon"></i> {{ $achievement->partisipan }} Partisipan</p>
            </div>
        @endforeach
    </div>

</div>
