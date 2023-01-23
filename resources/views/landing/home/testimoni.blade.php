<style>
    .testimoni {
        margin: 50px 0 50px 0;
    }

    .testimoni .text-testimoni {
        display: flex;
        justify-content: space-between;
        margin: 25px 0;
    }

    .testimoni .text-testimoni a {
        color: #3D76BB;
        text-decoration: none;
    }

    .testimoni .container-card-testimoni .card-testimoni {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni {
        width: 40%;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin-bottom: 25px;
        padding: 25px;
        transition: all .3s ease;
        transform: scale(1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni:hover {
        transition: all .3s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 #5da6d9;
    }

    .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni p:first-child {
        height: 100px;
        line-height: 150%;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .mentor {
        display: flex;
        margin-top: 100px;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .mentor img {
        width: 60px;
        height: 60px;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .identitas-mentor {
        margin-left: 25px;
        align-self: center;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .identitas-mentor h5 {
        font-weight: bold;
        font-size: 1em;
        margin-bottom: 5px;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .identitas-mentor p {
        color: #747474;
        font-size: 12px;
    }

    .container-card-testimoni .card-testimoni .row-card-testimoni .identitas-mentor p:nth-child(2) {
        margin-top: 3px;
    }




    @media screen and (max-width: 576px) {

        .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni {
            width: 100%;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
            padding: 25px;
        }

        .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni p:first-child {
            height: 200px;
            overflow: auto;
            font-size: 12px;
        }

        .container-card-testimoni .card-testimoni .row-card-testimoni .mentor {
            display: flex;
            margin-top: 25px;
        }

        .testimoni .text-testimoni h3,
        .testimoni .text-testimoni a {
            font-size: 12px;
        }

    }

    @media screen and (max-width: 895px) {
        .testimoni .container-card-testimoni .card-testimoni .row-card-testimoni {
            width: 100%;
            overflow: hidden;
            border-radius: 5px;
            border: 2px solid #eaeaea;
            margin-bottom: 25px;
            padding: 25px;
        }
    }
</style>

<div class="testimoni">
    <div class="text-testimoni">
        <h3>Apa Kata Mereka ?</h3>
        <a href="/alltestimonis">Lihat Semua</i></a>
    </div>

    <div class="container-card-testimoni">
        <div class="card-testimoni">
            @foreach ($testimonis as $testimoni)
                <div class="row-card-testimoni">
                    <p>{{ $testimoni->testimoni }}</p>
                    <div class="mentor">
                        <img src="{{ asset('storage/' . $testimoni->image) }}" alt="mentor-image">
                        <div class="identitas-mentor">
                            <h5><b>{{ $testimoni->nama }}</b></h5>
                            <p>{{ $testimoni->lulusan }}</p>
                            <p>{{ $testimoni->sebagai }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
