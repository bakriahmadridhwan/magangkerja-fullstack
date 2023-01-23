<style>
    /* footer start */

    footer {
        background-color: #8EDBE5;
        padding: 50px 100px;
        color: white;
    }

    .container-footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-footer .col-1 {
        width: 30%;
    }

    .container-footer .col-1 p {
        line-height: 150%;
        margin-top: 5px;
    }

    .container-footer .col-2,
    .container-footer .col-3,
    .container-footer .col-4 {
        line-height: 200%;
    }

    .container-icon {
        display: flex;
        flex-wrap: wrap;
        justify-content: start;
    }

    /* .container-icon {
    margin-top: 10px;
} */

    .container-icon a {
        color: white;
    }

    .container-icon i:hover {
        color: #f67a20;
    }

    .container-icon i:nth-child(1) {
        margin: 0 30px 0 5px;
        transform: scale(2);
        cursor: pointer;
    }

    .container-icon i:nth-child(2),
    .container-icon i:nth-child(3),
    .container-icon i:nth-child(4) {
        margin: 0 30px 0 0;
        transform: scale(2);
        cursor: pointer;
    }

    .col-2 h6,
    .col-2 p,
    .col-3 h6,
    .col-3 p,
    .col-4 h6 {
        font-size: 16px;
    }

    .col-2 h6,
    .col-3 h6,
    .col-4 h6 {
        margin-top: 10px;
    }

    .container-footer .col-2 p a,
    .container-footer .col-3 p a {
        text-decoration: none;
        color: white;
    }

    /* footer end */

    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {
        footer {
            padding: 50px 25px;
        }

        .container-footer .col-1,
        .container-footer .col-2,
        .container-footer .col-3,
        .container-footer .col-4 {
            width: 100%;
            margin-top: 25px;
        }

        .container-footer .col-4 .container-icon {
            margin-top: 10px;
        }
    }
</style>

<footer>
    <div class="container-footer">
        @foreach ($footers as $footer)
            <div class="col-1">
                <img src="{{ asset('storage/' . $footer->image) }}" alt="logo-magangkerja" width="100">
                <p>{{ $footer->alamat }}</p>
            </div>
            <div class="col-2">
                <h6>Menu</h6>
                <p><a href="/">Home</a></p>
                <p><a href="/events">Event</a></p>
                <p><a href="/abouts">About</a></p>
            </div>
            <div class="col-3">
                <h6>Dashboard</h6>
                <p><a href="/events">Event</a></p>
                <p><a href="/testimonis">Testimoni</a></p>
            </div>
            <div class="col-4">
                <h6>Ikuti Kami</h6>
                <div class="container-icon">
                    <a href="{{ $footer->linkig }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/{{ $footer->linkwa }}" target="_blank"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a href="{{ $footer->linkfb }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{{ $footer->linkyt }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        @endforeach
    </div>
</footer>
