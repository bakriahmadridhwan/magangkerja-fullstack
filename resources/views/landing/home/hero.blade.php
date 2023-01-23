<style>
    .container-hero {
        margin: 100px 0 50px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-hero .gambar,
    .container-hero .text {
        width: 49%;
    }

    .container-hero .gambar img {
        width: 100%;
    }

    .container-hero .text {
        align-self: center;
    }

    .container-hero .text .tagline {
        color: #3d76bb;
        font-weight: bold;
    }

    .container-hero .text .deskripsi {
        color: #747474;
        line-height: 150%;
    }

    .container-hero .text .judul {
        display: flex;
        flex-wrap: wrap;
        margin: 5px 0;
    }

    .container-hero .text .judul h1:first-child {
        margin-right: 5px;
    }

    .container-hero .text .judul h1:last-child {
        color: #3d76bb;
    }

    .container-hero .text .tombol {
        background-color: #3d76bb;
        height: 35px;
        width: 110px;
        text-align: center;
        line-height: 35px;
        border-radius: 5px;
        margin-top: 30px;
        transition: all .3s ease;
        transform: scale(1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .container-hero .text .tombol:hover {
        transition: all .3s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 #3D76BB;
        font-weight: bold;
    }

    .container-hero .text .tombol a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }



    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        .container-hero .text .judul h1 {
            font-size: 1.5em;
        }

        .container-hero .text .deskripsi {
            font-size: 12px;
        }
    }

    @media screen and (max-width: 768px) {
        .container-hero {
            flex-direction: column;
        }

        .container-hero .gambar,
        .container-hero .text {
            width: 100%;
        }
    }

    @media screen and (max-width: 992px) {}
</style>

<div class="container-hero">
    @foreach ($heroes as $hero)
        <div class="gambar">
            <img src="{{ asset('storage/' . $hero->image) }}" alt="hero-images">
        </div>
        <div class="text">
            <p class="tagline">{{ $hero->tagline }}</p>
            <div class="judul">
                <h1>{{ $hero->judul }} </h1>
                <h1>{{ $hero->tekswarna }}</h1>
            </div>
            <p class="deskripsi">{{ $hero->deskripsi }}</p>
            <div class="tombol">
                <a href="/events">Get Started</a>
            </div>
        </div>
    @endforeach
</div>
