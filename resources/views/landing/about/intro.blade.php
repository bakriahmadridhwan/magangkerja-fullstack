<style>
    .container-intro {
        margin: 100px 0 50px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-intro .text-intro,
    .container-intro .gambar-intro {
        width: 49%;
    }

    .container-intro .text-intro {
        align-self: center;
    }

    .container-intro .gambar-intro img {
        width: 100%;
    }

    .container-intro .text-intro p:first-child {
        color: #3D76BB;
    }

    .container-intro .text-intro h1,
    .container-intro .text-intro p:last-child {
        margin: 15px 0 0 0;
    }

    .container-intro .text-intro p:last-child {
        line-height: 150%;
    }

    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        .container-intro {
            margin: 75px 0 50px 0;
            flex-direction: column;
        }

        .container-intro .gambar-intro img {
            display: none;
        }

        .container-intro .text-intro {
            width: 100%;
        }
    }

    @media screen and (max-width: 895px) {
        .container-intro {
            margin: 75px 0 50px 0;
            flex-direction: column;
        }

        .container-intro .gambar-intro img {
            display: none;
        }

        .container-intro .text-intro {
            width: 100%;
            margin: 50px 0 0 0;
        }

        .container-intro .text-intro h1 {
            font-size: 1.25em;
        }

        .container-intro .text-intro .deskripsi-intro {
            font-size: 12px;
        }
    }
</style>

<div class="container-intro">
    @foreach ($intros as $intro)
        <div class="text-intro">
            <p class="tagline-intro">{{ $intro->tagline }}</p>
            <h1>{{ $intro->judul }}</h1>
            <p class="deskripsi-intro">{{ $intro->deskripsi }}</p>
        </div>
        <div class="gambar-intro">
            <img src="{{ asset('storage/' . $intro->image) }}" alt="intro-image">
        </div>
    @endforeach
</div>
