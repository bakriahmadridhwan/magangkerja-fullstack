@include('template.header')

@include('landing.navfoo.navbarBlue')
@include('landing.event.heroevent')

<style>
    .main-container-categoryMod {
        margin: 25px 100px;
    }

    .main-container-categoryMod .flx {
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin-bottom: 75px;
    }

    .main-container-categoryMod .flx .categorylist {
        /* background-color: red; */
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        padding: 25px;
        transform: scale(1);
        transition: all .3s ease;
        width: 350px;
    }

    .main-container-categoryMod .flx .categorylist:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-categoryMod .flx .statuslist {
        /* background-color: blue; */
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        padding: 25px;
        transform: scale(1);
        transition: all .3s ease;
        width: 350px;
    }

    .main-container-categoryMod .flx .statuslist:hover {
        box-shadow: 0 4px 8px 0 #2281C5;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-categoryMod .flx .categorylist h1,
    .main-container-categoryMod .flx .statuslist h1 {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .main-container-categoryMod .flx .categorylist hr,
    .main-container-categoryMod .flx .statuslist hr {
        margin: 25px 0;
        border: 1px solid #eaeaea;
    }

    .main-container-categoryMod .flx .categorylist .icon a,
    .main-container-categoryMod .flx .statuslist .icon a {
        display: block;
        text-decoration: none;
        font-size: 1em;
        margin: 0 0 0 10px;
        font-weight: bold;
        color: grey;
        transform: scale(1.03);
        transition: all .3s ease;
    }

    .main-container-categoryMod .flx .categorylist .icon a:hover,
    .main-container-categoryMod .flx .statuslist .icon a:hover {
        color: #2281C5;
        transform: scale(1.1);
        transition: all .3s ease;
    }

    .main-container-categoryMod .flx .categorylist .icon,
    .main-container-categoryMod .flx .statuslist .icon {
        display: flex;
        margin: 10px 0 0 0;
    }

    .main-container-categoryMod .flx .categorylist .icon i,
    .main-container-categoryMod .flx .statuslist .icon i {
        color: grey;
    }

    .main-container-categoryMod .categoryMod {
        display: flex;
        justify-content: space-between;
        margin: 50px 0;
    }

    .main-container-categoryMod .categoryMod h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .main-container-categoryMod .categoryMod a {
        text-decoration: none;
        font-size: 1em;
        color: #2281C5;
    }


    @media screen and (max-width: 576px) {
        .main-container-categoryMod {
            margin: 25px 25px 25px 25px;
        }

        .main-container-categoryMod .categoryMod h1,
        .main-container-categoryMod .categoryMod a {
            font-size: 12px;
        }

        .main-container-categoryMod .flx .statuslist {
            margin-top: 25px;
        }

        .main-container-categoryMod .flx .categorylist h1,
        .main-container-categoryMod .flx .statuslist h1 {
            font-size: 18px;
        }

    }

    @media screen and (max-width: 995px) {}

    @media screen and (max-width: 1115px) {}
</style>


<div class="main-container-categoryMod">
    <div class="categoryMod">
        <h1>Kategori dan Status Event</h1>
        <a href="/events">Kembali Ke Event</a>
    </div>
    <div class="flx">
        <div class="categorylist">
            <h1>Categories</h1>
            <hr>
            @foreach ($categories as $category)
                <div class="icon">
                    <i class="fa-solid fa-caret-right"></i>
                    <a href="/categories/{{ $category->category }}">{{ $category->category }}</a>
                </div>
            @endforeach
        </div>
        <div class="statuslist">
            <h1>Status</h1>
            <hr>
            @foreach ($statuses as $status)
                <div class="icon">
                    <i class="fa-solid fa-caret-right"></i>
                    <a href="/statuses/{{ $status->status }}">{{ $status->status }}</a>
                </div>
            @endforeach
        </div>
    </div>


</div>


@include('landing.navfoo.footerBlue')

@include('template.footer')
