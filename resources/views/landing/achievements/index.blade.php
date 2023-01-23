@include('template.header')

@include('landing.navfoo.navbarBlue')

<style>
    .main-container-achievement {
        margin: 25px 100px;
    }

    @media screen and (max-width: 576px) {
        .main-container-achievement {
            margin: 25px 25px;
        }
    }

    @media screen and (max-width: 768px) {}

    @media screen and (max-width: 992px) {}
</style>

@include('landing.achievements.heroAchievement')
<div class="main-container-achievement">
    @include('landing.achievements.achievement')


</div>

@include('landing.navfoo.footerBlue')

@include('template.footer')
