<section>
    @foreach ($footers as $footer)
        <div class="container">
            <div class="boxxx">
                <div class="logoo">
                    <img src="{{ 'storage/' . $footer->image }}" alt="logo-magangkerja">
                    <p>{{ $footer->alamat }}</p>
                </div>
                <div class="menu">
                    <h1>Menu</h1>
                    <p><a href="/">Home</a></p>
                    <p><a href="/events">Event</a></p>
                    <p><a href="/abouts">About</a></p>
                </div>
                <div class="dasboard">
                    <h3>Dasboard</h3>
                    <p>event</p>
                    <p>Testimoni</p>
                </div>
                <div class="sosmed">
                    <h3>Ikuti Kami</h3>
                    <div class="list-sosmed">
                        <a href="{{ $footer->linkig }}" target="_blank"><img
                                src="{{ asset('landing-page/image/instagram.png') }}" alt="instagram"></a>

                        <a href="https://wa.me/{{ $footer->linkwa }}" target="_blank"><img
                                src="{{ asset('landing-page/image/wa2.png') }}" alt="whatsapp"></a>

                        <a href="{{ $footer->linkfb }}" target="_blank"><img
                                src="{{ asset('landing-page/image/facebook.png') }}" alt="facebook"></a>

                        <a href="{{ $footer->linkyt }}" target="_blank"><img
                                src="{{ asset('landing-page/image/youtube.png') }}" alt="youtube"></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>
