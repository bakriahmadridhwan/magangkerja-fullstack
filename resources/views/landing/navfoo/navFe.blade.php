<div class="container">
    <div class="navigation">
        <div class="box">
            <img src="{{ asset('landing-page/image/logo.png') }}">
        </div>
        <div class="box">
            <ul>
                <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/events" class="{{ Request::is('events') ? 'active' : '' }}">Event</a></li>
                <li><a href="/abouts" class="{{ Request::is('abouts') ? 'active' : '' }}">About</a></li>
                <li><a href="/achievements" class="{{ Request::is('achievements') ? 'active' : '' }}">Achievement</a>
                </li>

            </ul>
        </div>
        <div class="box">
            <a href="/login" class="login {{ Request::is('login') ? 'active' : '' }}">Login</a>

        </div>
        <div class="burger-menu">
            <img src="{{ asset('landing-page/image/Group 29.png') }}" alt="" onclick="togglemenu()">
        </div>

    </div>
    <div class="box-mobile" id="menuMobile">
        <ul>
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li><a href="/events" class="{{ Request::is('events') ? 'active' : '' }}">Event</a></li>
            <li><a href="/abouts" class="{{ Request::is('abouts') ? 'active' : '' }}">About</a></li>
            <li><a href="/achievements" class="{{ Request::is('achievements') ? 'active' : '' }}">Achievement</a></li>

        </ul>
        <a href="/login" class="login {{ Request::is('login') ? 'active' : '' }}">Login</a>
    </div>

</div>
