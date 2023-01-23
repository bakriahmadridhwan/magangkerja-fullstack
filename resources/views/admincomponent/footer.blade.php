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
                    <div class="card-header">
                        <h4 class="card-title">Konten Footer</h4>
                    </div>
                    <div class="card-content">

                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Footer</th>
                                        <th>Deskripsi Footer</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footers as $footer)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $footer->footer }}</td>
                                            <td>{{ $footer->deskripsi }}</td>
                                            <td>
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#footerEditModal{{ $footer->id }}">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                        data-feather="edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1"
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

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="https://saugi.me">Saugi</a></p>
            </div>
        </div>
    </footer>


    {{-- modal footer --}}
    <div class="modal fade" id="footerEditModal{{ $footer->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Footer
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <form action="{{ url($footer->id . '/footers') }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="basicInput" placeholder="nama footer"
                                    name="footer" value="{{ $footer->footer }}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="basicInput"
                                    placeholder="deskripsi footer" name="deskripsi" value="{{ $footer->deskripsi }}">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Ubah</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include('admintemplate.adminfooter')
