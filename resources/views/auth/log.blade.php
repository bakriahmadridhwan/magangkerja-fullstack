@include('template.header')

<style>
    .main-container-login {
        position: absolute;
        top: 75px;
        bottom: 75px;
        left: 450px;
        right: 450px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        width: 475px;
        font-family: "Montserrat", serif;
    }

    .main-container-login .container-login .icon-login {
        position: absolute;
        width: 75px;
        height: 75px;
        background-color: white;
        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        top: -40px;
        left: 0;
        right: 0;
        margin: auto;
    }

    .main-container-login .container-login .icon-login i {
        text-align: center;
        color: #3D76BB;
        line-height: 75px;
        position: relative;
        left: 30px;
        transform: scale(1.75)
    }

    .main-container-login .container-login img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        /* width: 50%; */
        margin-top: 50px;
        transform: scale(.75);
    }

    .main-container-login .container-login form {
        margin: 25px 50px;
    }

    .main-container-login .container-login form .email {}

    .main-container-login .container-login form .email label,
    .main-container-login .container-login form .password label {
        position: relative;
        top: 10px;
        left: 15px;
        background-color: white;
        padding: 0 5px;
        z-index: 1;

    }

    .main-container-login .container-login form .email input,
    .main-container-login .container-login form .password input {
        padding: 15px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        border: 2px solid #eaeaea;
        box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.1);
        transform: scale(1);
        transition: all .3s ease;
        background-color: white;
    }

    .main-container-login .container-login form .email input:focus,
    .main-container-login .container-login form .password input:focus {
        outline: none;
        border: 1px solid #3D76BB;
        box-shadow: 0 1px 8px 0 #3D76BB;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-login .container-login form .btn-login button {
        color: white;
        outline: none;
        background-color: #3D76BB;
        border: none;
        padding: 15px 25px;
        border-radius: 5px;
        text-align: center;
        font-size: 1em;
        text-transform: uppercase;
        display: block;
        /* margin: 50px auto; */
        margin-top: 25px;
        margin-bottom: 25px;
        margin-left: auto;
        margin-right: auto;
        cursor: pointer;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
        transform: scale(1);
        transition: all .3s ease;
    }

    .main-container-login .container-login form .btn-login button:hover {
        font-weight: bold;
        box-shadow: 0 4px 8px 0 #3D76BB;
        transform: scale(1.02);
        transition: all .3s ease;
    }

    .main-container-login .container-login .home {
        text-align: center;
    }

    .main-container-login .container-login .home a {
        color: #3D76BB;
        font-size: 1em;
        text-decoration: none;
        transition: all .3s ease;
    }

    .main-container-login .container-login .home a:hover {
        font-weight: bold;
        font-size: 17px;
        transition: all .3s ease;
    }

    .alertError {
        color: white;
        font-weight: bold;
        font-size: 1em;
        text-align: center;
        margin-top: 15px;
        background-color: lightcoral;
        border-radius: 5px;
        border: 2px solid darkred;
        padding: 15px 10px;
        margin-left: 50px;
        margin-right: 50px;
    }

    .alertOk {
        color: white;
        font-weight: bold;
        font-size: 1em;
        text-align: center;
        margin-top: 15px;
        background-color: lightgreen;
        border-radius: 5px;
        border: 2px solid darkgreen;
        padding: 15px 10px;
        margin-left: 50px;
        margin-right: 50px;
    }




    @media screen and (max-width: 576px) {
        .main-container-login {
            left: 5%;
            right: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            width: 90%;
            /* height: 75%; */
        }

        .main-container-login .container-login img {
            margin-top: 35px;
            transform: scale(.5);
        }

        .main-container-login .container-login form {
            margin: 0 25px;
        }

        .main-container-login .container-login form .email label,
        .main-container-login .container-login form .password label {
            font-size: 12px;
        }

        .main-container-login .container-login form .email input,
        .main-container-login .container-login form .password input {
            padding: 10px 15px;
        }

        .invalid-feedback {
            font-size: 10px;
        }

    }

    @media screen and (min-width: 575px) {
        .main-container-login {
            left: 15%;
            right: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            width: 70%;
            height: 80%;
        }

    }

    @media screen and (min-width: 912px) {
        .main-container-login {
            top: 75px;
            bottom: 75px;
            left: 450px;
            right: 450px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
            width: 475px;
            height: 75%;
        }

    }
</style>


<div class="main-container-login">

    <div class="container-login">
        <div class="icon-login">
            <i class="fa-solid fa-user"></i>
        </div>
        <img src="{{ asset('img/logo.png') }}" alt="Logo-Magang-Kerja" />

        @if (session()->has('success'))
            <div class="alertOk">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alertError">
                {{ session('loginError') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="@error('email')
                is-invalid
            @enderror"
                    value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback" style="color: red; font-weight: bold; margin: 5px 0 0 0;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="@error('password')
                is-invalid
            @enderror">
                @error('password')
                    <div class="invalid-feedback" style="color: red; font-weight: bold; margin: 5px 0 0 0;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="btn-login">
                <button type="submit" id="loginbtn">Login</button>
            </div>
        </form>

        <p class="home"><a href="/">Halaman Utama</a></p>

    </div>


</div>


@include('template.footerpolos')
