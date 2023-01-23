@include('template.header')

@include('landing.navfoo.navbar')

<style>
    .main-container-about {
        margin: 25px 100px;
    }

    @media screen and (max-width: 576px) {
        .main-container-about {
            margin: 25px 25px;
        }
    }

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 992px) {}
</style>

<div class="main-container-about">
    @include('landing.about.intro')
    @include('landing.about.visi')
    @include('landing.about.alasan')
    @include('landing.about.team')
    @include('landing.about.question')


</div>

@include('landing.navfoo.footer')

@include('template.footer')
