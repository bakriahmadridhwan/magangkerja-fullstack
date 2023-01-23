<style>
    .container-question {
        margin: 100px 0 50px 0;
    }

    .container-question span {
        width: 120px;
        height: 5px;
        background-color: #283890;
        display: table;
        margin: 0 auto;
    }

    .container-question h1 {
        text-align: center;
        margin: 25px 0 0 0;
        font-weight: bold;
    }

    .container-question .row-question {
        margin: 50px 0 0 0;
    }

    .container-question .row-question .nama-question input,
    .container-question .row-question .email-question input,
    .container-question .row-question .pertanyaan-question textarea {
        width: 100%;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #3D76BB;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        font-family: "Montserrat", serif;
    }

    .container-question .row-question .nama-question input,
    .container-question .row-question .email-question input,
    .container-question .row-question .pertanyaan-question textarea {
        transition: all .3s ease;
        transform: scale(1);
    }

    .container-question .row-question .nama-question input:focus,
    .container-question .row-question .email-question input:focus,
    .container-question .row-question .pertanyaan-question textarea:focus {
        outline: none;
        border: 2px solid #3D76BB;
        box-shadow: 0 0 5px #3D76BB;
        font-size: 1em;
        transition: all .3s ease;
    }

    .container-question .row-question .nama-question label,
    .container-question .row-question .email-question label,
    .container-question .row-question .pertanyaan-question label {
        position: relative;
        top: 10px;
        left: 15px;
        z-index: 1;
        background-color: white;
        padding: 5px;
        transition: all .3 ease;
    }

    .container-question .row-question .email-question,
    .container-question .row-question .pertanyaan-question {
        margin: 30px 0 0 0;
    }

    .container-question .row-question form .btn-question {
        display: flex;
        justify-content: center;
        margin: 25px auto;
    }

    /* .container-question .row-question form .btn-question button {
        padding: 15px 30px;
        background-color: #3D76BB;
        color: white;
        outline: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        letter-spacing: 1px;
    } */

    .container-question .row-question form .btn-question button {
        padding: 15px 30px;
        background-color: #3D76BB;
        color: white;
        outline: none;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        letter-spacing: 1px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    }

    .container-question .row-question form .btn-question button {
        transform: scale(1);
        transition: all .3s ease;
    }

    .container-question .row-question form .btn-question button:hover {
        box-shadow: 0 4px 8px 0 #3D76BB;
        transform: scale(1.05);
        transition: all .3s ease;
        font-weight: bold;
    }

    .notifikasi-question {
        margin: 0 0 15px 0;
        background-color: #3DBB4A;
        width: 25%;
        padding: 25px;
        color: white;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
        transition: all .3s ease;
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 2;
    }

    .close-question {
        margin: 0 0 0 10px;
        cursor: pointer;
        transform: scale(1.25);
        color: black;
    }

    .d-none {
        display: none;
    }


    /* Responsive Footer */
    /* ukuran mobile */
    @media screen and (max-width: 576px) {

        .container-question .row-question .nama-question input:focus,
        .container-question .row-question .email-question input:focus,
        .container-question .row-question .pertanyaan-question textarea:focus {
            font-size: 12px;
        }

        .container-question .row-question .nama-question label,
        .container-question .row-question .email-question label,
        .container-question .row-question .pertanyaan-question label {
            font-size: 12px;
        }

        .notifikasi-question {
            font-size: 12px;
            font-weight: bold;
            width: 50%;
        }
    }

    @media screen and (max-width: 726px) {}
</style>

<div class="container-question">
    {{-- <div class="notif">berhasil dikirim!, Terimakasi. <i class="fa fa-times close-question" onclick="closeFunc()"></i>
    </div> --}}
    <span></span>
    <h1>Tanya Kami</h1>

    <div class="row-question">

        @if (session()->has('success'))
            <div class="notifikasi-question">
                {{ session('success') }}
            </div>
        @endif

        <form action="/abouts" method="POST">
            @csrf
            <div class="nama-question">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="masukkan nama anda"
                    class="@error('nama')
                is-invalid
            @enderror" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback" style="color: red; font-weight: bold; margin: 5px 0 0 0;">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="email-question">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="masukkan email anda"
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
            <div class="pertanyaan-question">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea name="pertanyaan" id="pertanyaan" cols="30" rows="10" placeholder="masukkan pertanyaan anda"
                    class="@error('pertanyaan')
                is-invalid
            @enderror">{{ old('pertanyaan') }}</textarea>
                @error('pertanyaan')
                    <div class="invalid-feedback" style="color: red; font-weight: bold; margin: 5px 0 0 0;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="btn-question">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>

{{-- <script>
    const notif = document.getElementByClass(".notifikasi-question");
    const btnKirim = document.querySelector(".btn-question");
    const close = document.querySelector(".close-question");

    function closeFunc() {
        notif.style.color = 'red';
    }
</script> --}}
