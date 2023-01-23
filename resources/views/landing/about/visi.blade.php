<style>
    .container-visi {
        margin: 100px 0 100px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-visi .col-1-visi,
    .container-visi .col-2-misi {
        width: 48%;
    }

    .container-visi .col-1-visi h1,
    .container-visi .col-2-misi h1 {
        color: #3D76BB;
    }

    .container-visi .col-1-visi h2,
    .container-visi .col-2-misi h2 {
        margin-top: 15px;
        color: #F79220;
    }

    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        .container-visi {
            flex-direction: column;
            margin: 50px 0 0 0;
        }

        .container-visi .col-1-visi,
        .container-visi .col-2-misi {
            width: 100%;
        }

        .container-visi .col-2-misi {
            margin-top: 30px;
        }

        /* .container-visi .col-1-visi h1,
        .container-visi .col-2-misi h1 {
            font-size: 18px;
        } */

        .container-visi .col-1-visi h2,
        .container-visi .col-2-misi h2 {
            font-size: 1em;
        }
    }
</style>

<div class="container-visi">
    @foreach ($visis as $visi)
        <div class="col-1-visi">
            <h1>Visi</h1>
            <h2>{{ $visi->visi }}</h2>
        </div>
        <div class="col-2-misi">
            <h1>Misi</h1>
            <h2>{{ $visi->misi }}</h2>
        </div>
    @endforeach
</div>
