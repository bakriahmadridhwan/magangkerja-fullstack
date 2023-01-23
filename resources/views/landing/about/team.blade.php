<style>
    .container-team {
        margin: 100px 0 50px 0;
    }

    .container-team span {
        width: 120px;
        height: 5px;
        background-color: #283890;
        display: table;
        margin: 0 auto;
    }

    .container-team h1 {
        text-align: center;
        margin: 25px 0 0 0;
        font-weight: bold;
    }

    .container-team .row-team {
        margin: 50px 0 0 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
    }

    .container-team .row-team .card-team {
        width: 250px;
        overflow: hidden;
        margin-bottom: 25px;
        padding: 25px 0;
    }

    .container-team .row-team .card-team .identitas-team .gambar-team,
    .container-team .row-team .card-team .identitas-team .avatar {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .container-team .row-team .card-team .identitas-team {
        text-align: center;
    }

    .container-team .row-team .card-team .identitas-team .nama-team {
        margin: 25px 0 0 0;
    }

    .container-team .row-team .card-team .identitas-team .posisi-team {
        margin: 5px 0 0 0;
    }

    .container-team .row-team .card-team .sosmed-team {
        text-align: center;
        margin: 25px 0 0 0;
        z-index: -1;
    }

    .container-team .row-team .card-team .sosmed-team a i {
        transform: scale(2);
        margin: 0 15px;
    }

    .container-team .row-team .card-team .sosmed-team a:first-child {
        color: #5DA6D9;
    }

    .container-team .row-team .card-team .sosmed-team a:nth-child(2) {
        color: #3DBB4A;
    }

    .container-team .row-team .card-team .sosmed-team a:last-child {
        color: #3D76BB;
    }

    .container-team .row-team hr {
        display: none;
    }

    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        .container-team .row-team {
            flex-direction: column;
        }

        .container-team .row-team .card-team {
            width: 100%;
        }

        .container-team .row-team hr {
            display: block;
        }

    }

    @media screen and (max-width: 726px) {
        .container-team .row-team {
            flex-direction: column;
        }

        .container-team .row-team .card-team {
            width: 100%;
        }

        .container-team .row-team hr {
            display: block;
        }

    }
</style>

<div class="container-team">
    <span></span>
    <h1>Our Team</h1>
    <div class="row-team">
        @foreach ($teams as $team)
            <hr>
            <div class="card-team">
                <div class="identitas-team">

                    @if ($team->image)
                        <div class="gambar-team">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="our-team-magangkerja">
                        </div>
                    @else
                        <div class="avatar">
                            <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                alt="img-avatar-team" width="90">
                        </div>
                    @endif

                    <p class="nama-team"><b>{{ $team->nama }}</b></p>
                    <p class="posisi-team">{{ $team->posisi }}</p>
                </div>

                <div class="sosmed-team">
                    <a href="{{ $team->linktw }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://wa.me/{{ $team->linkwa }}" target="_blank"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a href="{{ $team->linkli }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        @endforeach
        <hr>
    </div>
</div>
