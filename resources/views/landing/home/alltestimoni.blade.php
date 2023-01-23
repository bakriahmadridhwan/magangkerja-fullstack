@include('template.header')

@include('landing.navfoo.navbar')
@include('landing.home.heroalltestimoni')


<style>
    .main-container-alltestimoni {
        margin: 25px 100px -150px 100px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .main-container-alltestimoni .card-alltesti {
        width: 300px;
        height: 500px;
        border-radius: 5px;
        margin-bottom: 225px;
        margin-top: -150px;
        transition: all .3s ease;
        transform: scale(1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        padding: 25px;
        border-top: 10px solid #F67A20;
        text-align: center;
        background-color: white;
    }

    .main-container-alltestimoni .card-alltesti:hover {
        transition: all .3s ease;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 #F67A20;
    }

    .main-container-alltestimoni .card-alltesti h6 {
        color: #A34599;
        font-size: 1em;
        margin: 50px 0 50px 0;
    }

    .main-container-alltestimoni .card-alltesti .testimoninya {
        margin: 0 25px 25px 25px;
        line-height: 150%;
        height: 300px;
        font-style: italic;
    }

    .main-container-alltestimoni .card-alltesti .lulusannya,
    .main-container-alltestimoni .card-alltesti .sebagainya {
        font-size: 1em;
    }

    .main-container-alltestimoni .card-alltesti .lulusannya {
        border-radius: 5px;
        border: 2px solid #eaeaea;
        padding: 5px;
    }

    .main-container-alltestimoni .card-alltesti .sebagainya {
        margin: 5px 0 0 0;
    }

    .main-container-alltestimoni .card-alltesti img {
        position: absolute;
        top: -40px;
        left: 0;
        right: 0;
        margin: 0 auto;
        width: 75px;
    }


    @media screen and (max-width: 576px) {
        .main-container-alltestimoni {
            margin: 25px 25px -100px 25px;
        }

        .main-container-alltestimoni .card-alltesti {
            margin-bottom: 155px;
            margin-top: -100px;
        }

        .main-container-alltestimoni .card-alltesti .testimoninya {
            margin: 0 25px 25px 25px;
            height: 275px;
            font-style: italic;
            font-size: 12px;
            overflow: auto;
        }

    }

    @media screen and (max-width: 960px) {

        .main-container-alltestimoni .card-alltesti {
            width: 100%;
        }

    }

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 992px) {}
</style>

<div class="main-container-alltestimoni">
    @foreach ($testimonis as $testimoni)
        <div class="card-alltesti">
            <img src="{{ asset('storage/' . $testimoni->image) }}" alt="gambar-orang">
            <h6>{{ $testimoni->nama }}</h6>
            <p class="testimoninya">{{ $testimoni->testimoni }}</p>
            <p class="lulusannya">{{ $testimoni->lulusan }}</p>
            <p class="sebagainya">{{ $testimoni->sebagai }}</p>
        </div>
    @endforeach
</div>

@include('landing.navfoo.footer')

@include('template.footer')
