<style>
    .container-contact {
        margin: 50px 0 50px 0;
    }

    .container-contact .row-contact {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container-contact .row-contact .col-1-contact,
    .container-contact .row-contact .col-2-contact {
        width: 40%;
        overflow: hidden;
        padding: 15px 0;
    }


    .container-contact .row-contact .col-1-contact p:first-child {
        color: #3D76BB;
    }

    .container-contact .row-contact .col-1-contact h3 {
        font-weight: bolder;
        margin-top: 15px;
    }

    .container-contact .row-contact .col-1-contact p:nth-child(3) {
        margin: 15px 0 30px 0;
        line-height: 150%;
    }

    .container-contact .row-contact .col-1-contact a {
        padding: 10px 15px;
        background-color: #3D76BB;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        transition: all .3s ease;
        transform: scale(1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .container-contact .row-contact .col-1-contact a:hover {
        transition: all .3s ease;
        box-shadow: 0 4px 8px 0 #3D76BB;
        font-weight: bold;
    }

    .container-contact .row-contact .col-2-contact img {
        width: 100%;
    }

    @media screen and (max-width: 576px) {
        .container-contact .row-contact {
            flex-direction: column;
        }

        .container-contact .row-contact .col-1-contact,
        .container-contact .row-contact .col-2-contact {
            width: 100%;
            justify-content: center
        }

        .container-contact .row-contact .col-1-contact h3 {
            font-size: 1em;
        }

        .container-contact .row-contact .col-1-contact p:nth-child(3) {
            font-size: 12px;
        }
    }

    @media screen and (max-width: 895px) {
        .container-contact .row-contact {
            flex-direction: column;
        }

        .container-contact .row-contact .col-1-contact,
        .container-contact .row-contact .col-2-contact {
            width: 100%;
            justify-content: center
        }
    }
</style>

<div class="container-contact">
    @foreach ($contacts as $contact)
        <div class="row-contact">
            <div class="col-1-contact">
                <p>{{ $contact->tagline }}</p>
                <h3>{{ $contact->judul }}</h3>
                <p>{{ $contact->deskripsi }}</p>

                <a href="/abouts">Ada Pertanyaan ?</a>
            </div>
            <div class="col-2-contact">
                <img src="{{ asset('storage/' . $contact->image) }}" alt="contact-image">
            </div>
        </div>
    @endforeach
</div>
