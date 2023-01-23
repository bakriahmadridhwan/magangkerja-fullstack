@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Header</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Daftar Menu Header</h4>
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
                                        <th>Menu 1</th>
                                        <th>Menu 2</th>
                                        <th>Menu 3</th>
                                        <th>Menu 4</th>
                                        <th>Menu 5</th>
                                        <th>Dropdown 1</th>
                                        <th>Dropdown 2</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($headers as $header)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $header->menu1 }}</td>
                                            <td>{{ $header->menu2 }}</td>
                                            <td>{{ $header->menu3 }}</td>
                                            <td>{{ $header->menu4 }}</td>
                                            <td>{{ $header->menu5 }}</td>
                                            <td>{{ $header->dropdown1 }}</td>
                                            <td>{{ $header->dropdown2 }}</td>
                                            <td>
                                                <a href="/dashboard/headers/{{ $header->id }}/edit">
                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1 text-warning"
                                                        data-feather="edit"></i>
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

</div>

@include('admintemplate.adminfooter')
