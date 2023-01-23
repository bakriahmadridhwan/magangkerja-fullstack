<style>
    .container-achievement {
        margin: 75px 0;
        padding: 25px 100px 0 100px;
        background-color: #8EDBE5;
        border-radius: 0 0 100px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-achievement .text-achievement {
        flex: 2;
        align-self: center;
        width: 25%;
    }

    .container-achievement .gambar-achievement {
        flex: 1;
    }

    .container-achievement .gambar-achievement img {
        width: 100%;
        box-sizing: border-box;
    }

    .container-achievement .text-achievement .judul1 {
        color: #3D76BB;
    }

    .container-achievement .text-achievement .judul2 {
        color: #F57C20;
    }

    .container-achievement .text-achievement h1 {
        font-size: 2em;
    }

    .container-achievement .text-achievement p {
        margin: 15px 0 0 0;
        line-height: 150%;
        width: 75%;
    }

    @media screen and (max-width: 576px) {

        .container-achievement {
            padding: 50px 25px 25px 25px;
            margin: 75px 0 25px 0;
        }

        .container-achievement .gambar-achievement img {
            display: none;
        }

        .container-achievement .text-achievement {
            flex: none;
            width: 100%;
        }

        .container-achievement .text-achievement h1 {
            font-size: 1em;
            width: 100%;
        }

        .container-achievement .text-achievement p {
            font-size: 12px;
            width: 100%;
        }
    }

    @media screen and (max-width: 920px) {
        .container-achievement {
            padding: 50px 25px 25px 25px;
        }

        .container-achievement .gambar-achievement img {
            display: none;
        }

        .container-achievement .text-achievement {
            flex: none;
            width: 100%;
        }

        .container-achievement .text-achievement h1 {
            width: 100%;
        }

        .container-achievement .text-achievement p {
            width: 100%;
        }
    }
</style>

<div class="container-achievement">
    <div class="text-achievement">
        <h1><span class="judul1">Magang </span><span class="judul2">Kerja.ID </span>Pencapaian</h1>
        <p>Magang Kerja.ID menyediakan berbagai dokumentasi kegiatan dan
            lulusan magang kerja banyak memenciptakan banyak karya yang
            berkualitas, sehingga lulusan magang kerja banyak dicari
            diperusahaan ternama yang ada di Indonesia.</p>
    </div>
    <div class="gambar-achievement">
        <img src="/img/gambar-achievement.png" alt="gambar-achievement">
    </div>
</div>
