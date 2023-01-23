<style>
    .container-alasan {
        margin: 50px 0 50px 0;
    }

    .container-alasan span {
        width: 120px;
        height: 5px;
        background-color: #283890;
        display: table;
        margin: 0 auto;
    }

    .container-alasan h1 {
        text-align: center;
        margin: 25px 0 0 0;
        font-weight: bold;
    }

    .container-alasan .row-alasan {
        margin: 50px 0 0 0;
    }

    .container-alasan .row-alasan .card-alasan {
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin-bottom: 25px;
        padding: 25px;
        display: flex;
        justify-content: space-between;
    }

    .container-alasan .row-alasan .card-alasan .gambar-alasan {
        margin-right: 25px;
    }

    .container-alasan .row-alasan .card-alasan .text-alasan {
        width: 90%;
        align-self: center;
    }

    .container-alasan .row-alasan .card-alasan img {
        width: 100px;
    }

    .container-alasan .row-alasan .text-alasan h4 {
        color: #3D76BB;
        font-size: 1.25em;
    }

    .container-alasan .row-alasan .text-alasan p {
        margin: 15px 0 0 0;
        line-height: 150%;
    }

    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        .container-alasan h1 {
            text-align: center;
            margin: 25px 0 0 0;
            font-weight: bold;
            font-size: 1em;
        }

        .container-alasan .row-alasan .card-alasan {
            flex-direction: column;
        }

        .container-alasan .row-alasan .card-alasan .gambar-alasan {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .container-alasan .row-alasan .card-alasan .text-alasan {
            width: 100%;
            margin: 25px 0 0 0;
        }

        .container-alasan .row-alasan {
            margin: 25px 0 0 0;
        }

        .container-alasan .row-alasan .text-alasan h4,
        .container-alasan .row-alasan .text-alasan p {
            text-align: center;
        }

        .container-alasan .row-alasan .text-alasan p {
            font-size: 12px;
        }

    }
</style>

<div class="container-alasan">
    <span></span>
    <h1>Kenapa Magang Kerja ?</h1>

    <div class="row-alasan">
        @foreach ($alasans as $alasan)
            <div class="card-alasan">
                <div class="gambar-alasan">
                    <img src="{{ asset('storage/' . $alasan->image) }}" alt="magangkerja">
                </div>

                <div class="text-alasan">
                    <h4>{{ $alasan->judul }}</h4>
                    <p>{{ $alasan->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
