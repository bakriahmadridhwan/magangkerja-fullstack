@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Footer</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Footer <b>Magang Kerja</b></h4>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        @if (session()->has('success'))
                            <div class="alert alert-success col-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @foreach ($footers as $footer)
                            <div class="card" style="border: 3px solid #eee">
                                <div class="card-content">
                                    <div class="card-body d-flex">
                                        <div class="alamat col-6">
                                            @if ($footer->image)
                                                <img src="{{ asset('storage/' . $footer->image) }}"
                                                    class="img-preview img-fluid" alt="event-images">
                                            @else
                                                <p class="text-danger">gambar tidak ada!</p>
                                            @endif
                                            <p class="mt-4">{{ $footer->alamat }}</p>
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="link col-5">
                                            <p>Link Instagram : <a
                                                    href="{{ $footer->linkig }}"target="_blank">{{ $footer->linkig }}</a>
                                            </p>
                                            <p>Link WhatsApp : <a
                                                    href="https://wa.me/{{ $footer->linkwa }}"target="_blank">{{ $footer->linkwa }}</a>
                                            </p>
                                            <p>Link Facebook : <a
                                                    href="{{ $footer->linkfb }}"target="_blank">{{ $footer->linkfb }}</a>
                                            </p>
                                            <p>Link Youtube : <a
                                                    href="{{ $footer->linkyt }}"target="_blank">{{ $footer->linkyt }}</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="/dashboard/footers/{{ $footer->id }}/edit"
                                            class="btn btn-sm btn-primary">Edit</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hoverable rows end -->

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2022 &copy; magangkerja.id</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="https://saugi.me">Kelompok 3</a></p>
            </div>
        </div>
    </footer>

</div>

@include('admintemplate.adminfooter')
