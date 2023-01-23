<style>
    .container-counter .row-counter {
        display: flex;
        justify-content: space-around;
        margin: 50px 100px;
    }

    .container-counter .row-counter .v-line {
        height: 100px;
        width: 3px;
        background-color: #3D76BB;
    }

    .container-counter .row-counter .col-1-counter,
    .container-counter .row-counter .col-2-counter,
    .container-counter .row-counter .col-3-counter {
        align-self: center;
        font-size: 1em;
    }

    @media screen and (max-width: 576px) {
        .container-counter .row-counter {
            margin: 50px 0;
        }

        .container-counter .row-counter .col-1-counter,
        .container-counter .row-counter .col-2-counter,
        .container-counter .row-counter .col-3-counter {
            margin: 0 5px;
            font-size: 8px;
        }

        .container-counter .row-counter .v-line {
            height: 50px;
            width: 3px;
            background-color: #3D76BB;
        }

    }

    @media screen and (max-width: 895px) {

        .container-counter .row-counter .col-1-counter,
        .container-counter .row-counter .col-2-counter,
        .container-counter .row-counter .col-3-counter {
            margin: 0 5px;
            font-size: 8px;
        }

        .container-counter .row-counter .v-line {
            height: 50px;
            width: 3px;
            background-color: #3D76BB;
        }
    }
</style>

<div class="container-counter">
    <div class="row-counter">
        @foreach ($counters1 as $counter1)
            <div class="col-1-counter">
                <h1>{{ $counter1->jumlah }}+</h1>
                <small>{{ $counter1->judul }}</small>
            </div>
            <div class="v-line"></div>
        @endforeach

        @foreach ($counters2 as $counter2)
            <div class="col-2-counter">
                <h1>{{ $counter2->jumlah }}+</h1>
                <small>{{ $counter2->judul }}</small>
            </div>
            <div class="v-line"></div>
        @endforeach

        @foreach ($counters2 as $counter3)
            <div class="col-3-counter">
                <h1>{{ $counter3->jumlah }}+</h1>
                <small>{{ $counter3->judul }}</small>
            </div>
        @endforeach
    </div>
</div>
