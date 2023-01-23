@include('template.header')

@include('landing.navfoo.navbarBlue')
@include('landing.achievements.heroAchievement')


<style>
    .main-container-peserta {
        margin: 100px 100px 50px 100px;
    }

    .main-container-peserta .pintasan {
        display: flex;
        justify-content: space-between;
        margin: 50px 0;
    }

    .main-container-peserta .pintasan h6 {
        font-size: 18px;
    }

    .main-container-peserta .pintasan a {
        text-decoration: none;
        color: #3D76BB;
    }

    .main-container-peserta .container-peserta {}

    .main-container-peserta .container-peserta .card-peserta {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta,
    .main-container-peserta .container-peserta .card-peserta .gambar-peserta {
        width: 45%;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta {
        padding: 25px;
        font-size: 1em;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta p:first-child {
        line-height: 150%;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta p:nth-child(2) {
        margin: 25px 0 0 0;
        color: #808080;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta .pekerjaan {
        margin: 5px 0 0 0;
        color: #808080;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta p:nth-child(3) .tempat {
        color: #2281C5;
        font-weight: bold;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta p:nth-child(4) {
        margin: 5px 0 0 0;
        color: #808080;
    }

    .main-container-peserta .container-peserta .card-peserta .text-peserta hr {
        margin: 25px 0 0 0;
        border: 1px solid #D9D9D9;
    }

    .main-container-peserta .container-peserta .card-peserta .gambar-peserta {
        /* background-color: blue; */
    }

    .main-container-peserta .container-peserta .card-peserta .gambar-peserta img {
        width: 100%;
        object-fit: cover;
        overflow: hidden;
        height: 100%;
    }


    @media screen and (max-width: 576px) {
        .main-container-peserta {
            margin: 25px 25px;
        }

        .main-container-peserta .pintasan {
            margin: 25px 0;
        }

        .main-container-peserta .pintasan h6,
        .main-container-peserta .pintasan a {
            font-size: 1em;
        }

        .main-container-peserta .container-peserta .card-peserta .text-peserta {
            width: 100%;
            font-size: 1em;
        }

        .main-container-peserta .container-peserta .card-peserta .gambar-peserta {
            width: 100%;
            margin: 0 25px 25px 25px;
        }
    }

    @media screen and (max-width: 995px) {
        .main-container-peserta .container-peserta .card-peserta .text-peserta {
            width: 100%;
        }

        .main-container-peserta .container-peserta .card-peserta .gambar-peserta {
            width: 100%;
        }
    }
</style>

<div class="main-container-peserta">
    <div class="pintasan">
        <h6>Karya Mereka</h6>
        <a href="/allpesertas">Lihat Semua</a>
    </div>
    <div class="container-peserta">
        @foreach ($pesertas1 as $pesertas)
            <div class="card-peserta">
                <div class="text-peserta">
                    <p>{{ $pesertas->pendapat }}</p>
                    <p>{{ $pesertas->nama }}</p>
                    <p class="pekerjaan">{{ $pesertas->pekerjaan }} - <span
                            class="tempat">{{ $pesertas->tempatBekerja }}</span></p>
                    <p>{{ $pesertas->lulusan }}</p>
                    <hr>
                </div>
                <div class="gambar-peserta">
                    @if ($pesertas->image)
                        <img src="{{ asset('storage/' . $pesertas->image) }}" alt="karya-peserta-images">
                    @else
                        <img src="https://www.karier.mu/blog/wp-content/uploads/2021/12/programmin-990x500.jpg"
                            alt="img-dummy-karya-peserta">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('landing.navfoo.footerBlue')

@include('template.footer')
