@include('template.header')

@include('landing.navfoo.navbarBlue')
@include('landing.achievements.heroAchievement')


<style>
    .main-container-allachievement {
        margin: 0 100px 50px 100px;
    }

    .main-container-allachievement .judul-allachievement {
        text-align: center;
        font-size: 1.5em;
        margin: 0 0 25px 0;
    }

    .main-container-allachievement .container-allachievement {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .main-container-allachievement .container-allachievement .card-allachievement {
        width: 350px;
        overflow: hidden;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        margin: 25px 0 0 0;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
    }

    .main-container-allachievement .container-allachievement .card-allachievement:hover {
        transform: scale(1.02);
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 #8EDBE5;
    }

    .main-container-allachievement .container-allachievement .card-allachievement .gambar-allachievement img,
    .main-container-allachievement .container-allachievement .card-allachievement .gambar-contoh img {
        object-fit: cover;
        width: 100%;
        height: 225px;
    }

    .main-container-allachievement .container-allachievement .card-allachievement h1 {
        color: #283890;
        font-weight: bold;
        margin: 25px 20px 25px 20px;
        font-size: 18px;
        /* height: 50px; */
    }

    .main-container-allachievement .container-allachievement .card-allachievement p {
        margin: 25px 20px 15px 20px;
        position: relative;
    }

    .main-container-allachievement .container-allachievement .card-allachievement p i {
        color: #F79220;
        margin: 0 10px 0 0;
    }

    @media screen and (max-width: 576px) {
        .main-container-allachievement {
            margin: 25px 25px 50px 25px;
        }

        .main-container-allachievement .judul-allachievement {
            font-size: 1em;
        }

        .main-container-allachievement .container-allachievement .card-allachievement h1 {
            font-size: 1em;
            height: 25px;
        }

        .main-container-allachievement .container-allachievement .card-allachievement p {
            font-size: 12px;
        }

        .main-container-allachievement .container-allachievement .card-allachievement {
            margin: 25px 0 0 0;
        }
    }
</style>

<div class="main-container-allachievement">
    <h1 class="judul-allachievement">Semua Pencapaian Magang Kerja</h1>
    <div class="container-allachievement">
        @foreach ($allAchievements as $allAchievement)
            <div class="card-allachievement">

                @if ($allAchievement->image)
                    <div class="gambar-allachievement">
                        <img src="{{ asset('storage/' . $allAchievement->image) }}" alt="event-images">
                    </div>
                @else
                    <div class="gambar-contoh">
                        <img src="https://www.karier.mu/blog/wp-content/uploads/2021/12/programmin-990x500.jpg"
                            alt="img-dummy-allachievement">
                    </div>
                @endif

                <h1>{{ $allAchievement->judul }}</h1>
                <p><i class="fa-solid fa-user-group icon"></i> {{ $allAchievement->partisipan }} Partisipan</p>
            </div>
        @endforeach
    </div>
</div>



@include('landing.navfoo.footerBlue')

@include('template.footer')
