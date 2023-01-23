@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Karya Peserta</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Daftar Karya Peserta Magang Kerja</h4>
                        </div>
                        <div>
                            <a href="/dashboard/pesertas/create" class="badge bg-primary">Tambah Data</a>
                        </div>
                    </div>

                    <div class="card-content p-4">

                        @if (session()->has('success'))
                            <div class="alert alert-success col-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Peserta</th>
                                        <th>Pekerjaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesertas as $peserta)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $peserta->nama }}</td>
                                            <td>{{ $peserta->pekerjaan }}</td>
                                            <td>
                                                <a href="/dashboard/pesertas/{{ $peserta->id }}">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1 text-info"
                                                        data-feather="eye"></i>
                                                </a>

                                                <a href="/dashboard/pesertas/{{ $peserta->id }}/edit">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1 text-warning"
                                                        data-feather="edit"></i>
                                                </a>

                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#deletePeserta{{ $peserta->id }}">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1 text-danger"
                                                        data-feather="delete"></i>
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

    @foreach ($pesertas as $peserta)
        <!-- Vertically Centered modal Modal -->
        <div class="modal fade" id="deletePeserta{{ $peserta->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data!
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>yakin menghapus data Karya Peserta
                            <b>"{{ $peserta->nama }}"</b>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form action="/dashboard/pesertas/{{ $peserta->id }}" method="POST" class="d-inline">

                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Hapus</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



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
