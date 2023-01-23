@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Archive Question</h3>
    </div>

    {{-- SOFT DELETED --}}
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Konten Arsip Pertanyaan</h4>
                        </div>
                    </div>

                    <div class="card-content p-4">

                        @if (session()->has('softSuccess'))
                            <div class="alert alert-success col-4" role="alert">
                                {{ session('softSuccess') }}
                            </div>
                        @endif

                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Pertanyaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($softDeleted as $soft)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $soft->nama }}</td>
                                            <td>{{ $soft->email }}</td>
                                            <td>{{ $soft->pertanyaan }}</td>
                                            <td class="col-2">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#restoreQuestion{{ $soft->id }}">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1 text-success"
                                                        data-feather="refresh-ccw"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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

    {{-- MODAL RESTORE --}}
    @foreach ($softDeleted as $soft)
        <!-- Vertically Centered modal Modal -->
        <div class="modal fade" id="restoreQuestion{{ $soft->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Restore Data!
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>yakin mengembalikan data <b>"{{ $soft->nama }}"</b></p>
                    </div>
                    <div class="modal-footer">
                        <a href="/dashboard/questions/{{ $soft->id }}/restore"
                            class="btn btn-warning text-end">kembalikan</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

@include('admintemplate.adminfooter')
