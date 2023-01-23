@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Team Detail</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Nama <b>"{{ $team->nama }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/teams" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                </div>

                <div class="card col-4" style="border: 2px solid #eee">
                    <div class="card-content">
                        <div class="card-body text-center">

                            <div class="image">
                                @if ($team->image)
                                    <div class="avatar bg-primary me-3 avatar-xl">
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="img">
                                    </div>
                                @else
                                    <div class="avatar bg-primary me-3 avatar-xl">
                                        <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                            alt="img">
                                    </div>
                                @endif
                            </div>
                            <div class="identitas">
                                <p class="mt-4"><b>{{ $team->nama }}</b></p>
                                <p style="margin-top: -15px">{{ $team->posisi }}</p>
                            </div>

                            <div class="sosmed">
                                <a href="{{ $team->linktw }}" target="_blank" class="m-2"><i class="bi bi-twitter"
                                        style="font-size: 1.5rem; color: cornflowerblue;"></i></a>
                                <a href="https://wa.me/{{ $team->linkwa }}" target="_blank" class="m-2"><i
                                        class="bi bi-whatsapp"
                                        style="font-size: 1.5rem; color: cornflowerblue;"></i></a>
                                <a href="{{ $team->linkli }}" target="_blank" class="m-2"><i class="bi bi-linkedin"
                                        style="font-size: 1.5rem; color: cornflowerblue;"></i></a>
                            </div>
                        </div>
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
