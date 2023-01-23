<nav>
    <div class="logo">
        <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo" width="100"></a>
    </div>

    <ul>
        <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="/events" class="{{ Request::is('events') ? 'active' : '' }}">Event <span></span></a></li>
        <li><a href="">About</a></li>
        <li><a href="">Achievement</a></li>
        <li><a href="">Login</a></li>
        <span class="marker"></span>
    </ul>

    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
