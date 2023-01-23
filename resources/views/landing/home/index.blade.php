@include('template.header')

@include('landing.navfoo.navbar')

<style>
    .main-container-home {
        margin: 25px 100px;
    }

    @media screen and (max-width: 576px) {
        .main-container-home {
            margin: 25px 25px;
        }
    }

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 992px) {}
</style>

<div class="main-container-home">
    @include('landing.home.hero')
    @include('landing.home.counter')
    @include('landing.home.eventkamu')
    @include('landing.home.eventberjalan')
    @include('landing.home.testimoni')
    @include('landing.home.contact')
</div>

@include('landing.navfoo.footer')

@include('template.footer')
