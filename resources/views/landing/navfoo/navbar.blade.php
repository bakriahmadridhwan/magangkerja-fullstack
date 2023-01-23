<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Montserrat", sans-serif;
        overflow-x: hidden;
    }

    /* Navbar */
    nav {
        display: flex;
        justify-content: space-between;
        background-color: white;
        /* padding: 20px 0; */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        color: white;
        height: 80px;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        z-index: 999;
    }

    nav .logo a img {
        /* font-family: cursive;
    letter-spacing: 1px; */
        padding: 0 0 0 100px;
    }

    nav .links {
        display: flex;
        list-style: none;
        width: 40%;
        justify-content: space-between;
        align-items: center;
        padding: 0 100px 0 0;
    }

    nav .links a {
        color: black;
        text-decoration: none;
        font-size: 1em;
        transition: all .3s ease;
        transform: scale(1);
    }


    nav .links a:hover,
    .dropdown button:hover {
        color: #5da6d9;
        font-weight: bold;
        transition: all .3s ease;
        transform: scale(1.05);
    }

    /* Hamburger Menu */
    .menu-toggle {
        display: none;
        flex-direction: column;
        height: 20px;
        justify-content: space-between;
        position: relative;
    }

    .menu-toggle input {
        position: absolute;
        width: 40px;
        height: 30px;
        left: -5px;
        top: -3px;
        opacity: 0;
        cursor: pointer;
        z-index: 2;
    }

    /* display default dari span adalah inline */
    .menu-toggle span {
        display: block;
        width: 28px;
        height: 3px;
        background-color: #3d76bb;
        border-radius: 3px;
        transition: all 0.5s;
    }

    /* Hamburger Menu Animation */
    .menu-toggle span:nth-child(2) {
        /* mengatur poros rotate */
        transform-origin: 0 0;
    }

    .menu-toggle span:nth-child(4) {
        transform-origin: 0 100%;
    }

    .menu-toggle input:checked~span:nth-child(2) {
        transform: rotate(45deg) translate(-1px, -1px);
        background-color: #3d76bb;
    }

    .menu-toggle input:checked~span:nth-child(3) {
        transform: scale(0);
        opacity: 0;
    }

    .menu-toggle input:checked~span:nth-child(4) {
        transform: rotate(-45deg) translate(-1px, 0);
        background-color: #3d76bb;
    }

    /* Responsive Breakpoint */

    /* ukuran tablet */

    /* @media screen and (max-width: 768px) {
        nav .links {
            width: 50%;
            padding: 0;
            margin: 0 100px;
        }
    }

    @media screen and (max-width: 725px) {
        nav .links {
            width: 70%;
            padding: 0;
            margin: 0 100px;
        }
    } */

    @media screen and (max-width: 955px) {
        nav .links {
            width: 60%;
            padding: 0;
            margin: 0 100px;
        }
    }

    /* @media screen and (max-width: 812px) {
        nav .links {
            width: 90%;
            padding: 0;
        }
    } */

    /* ukuran mobile */
    @media screen and (max-width: 812px) {
        nav {
            justify-content: space-between;
            padding-left: 15px;
        }

        nav .logo a img {
            padding: 0;
        }

        nav .links {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100vh;
            justify-content: space-evenly;
            flex-direction: column;
            align-items: center;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            /* z-index: -1; */
            transform: translateX(100%);
            transition: all 1s;
            opacity: 0;
            padding: 0;
            margin: 0;
        }

        .menu-toggle {
            display: flex;
            padding-right: 30px;

        }

        nav .links.slide {
            transform: translateX(0);
            opacity: 1;
        }

        nav .logo a img {}

        .dropdown-content {
            left: -50px;
        }
    }

    nav .links .loginBtn {
        border: 1px solid #3d76bb;
        border-radius: 5px;
        padding: 5px 20px;
        margin: 0;
        transition: all .3s ease;
        transform: scale(1);
    }

    nav .links .loginBtn:hover {
        background-color: #3d76bb;
        color: white;
        font-weight: bold;
        transition: all .3s ease;
        transform: scale(1.1);
        box-shadow: 0 4px 8px 0 #3d76bb;

    }

    nav .links a:first-child.active,
    nav .links a:nth-child(2).active,
    nav .links a:nth-child(3).active,
    nav .links a:nth-child(4).active {
        position: relative;
        color: #3d76bb;
        font-weight: bold;
    }

    nav .links a:first-child.active span,
    nav .links a:nth-child(2).active span,
    nav .links a:nth-child(3).active span,
    nav .links a:nth-child(4).active span {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 35px;
        height: 2px;
        background-color: #3d76bb;
    }

    /* Dropdown Button */
    .dropbtn {
        background: transparent;
        color: black;
        /* padding: 16px 0; */
        font-size: 16px;
        border: none;
        cursor: pointer;
        font-family: "Montserrat", sans-serif;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5px;
        margin: 15px 0 0 0;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 10px 20px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        color: white;
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
    }

    /* hamburger */
    /* .hamburger span {
    border: 1px solid black;
} */
    /* hamburger end */

    /* navbar end */
</style>

<div class="container-navbar">
    <nav>
        <div class="logo">
            <a href="/" class="logo"><img src="{{ asset('img/logo.png') }}" alt="logo-magangkerja"
                    width="100"></a>
        </div>

        <div class="links">
            <a href="/" id="home" class="{{ Request::is('/') ? 'active' : '' }}">Home<span></span></a>
            <a href="/events" id="event"
                class="{{ Request::is('events') || Request::is('events/*') ? 'active' : '' }}">Event<span></span></a>
            <a href="/abouts" class="{{ Request::is('abouts') ? 'active' : '' }}">About<span></span></a>

            <div class="dropdown">
                <button onclick="myFunction()"
                    class="dropbtn {{ Request::is('achievements') ? 'active' : '' }}">Achievement</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="/achievements" class="{{ Request::is('achievements') ? 'active' : '' }}">Magang Kerja</a>
                    <a href="/pesertas">Karya Peserta</a>
                </div>
            </div>
            <a href="/login" class="{{ Request::is('login') ? 'active' : '' }}loginBtn">Login<span></span></a>
        </div>

        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</div>

<script></script>
