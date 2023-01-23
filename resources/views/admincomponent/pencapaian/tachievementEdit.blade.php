@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Total Achievement Edit</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Pencapaian <b>Magang Kerja</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/tachievements" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">
                        <form action="/dashboard/tachievements/{{ $tachievement->id }}" method="POST">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="tEvent" class="form-label">Total Event</label>
                                <input type="number"
                                    class="form-control @error('tEvent')
                                is-invalid
                            @enderror"
                                    id="tEvent" placeholder="total event" name="tEvent"
                                    value="{{ old('tEvent', $tachievement->tEvent) }}">
                                @error('tEvent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tPartisipan" class="form-label">Total Partisipan</label>
                                <input type="number"
                                    class="form-control @error('tPartisipan')
                                is-invalid
                            @enderror"
                                    id="tPartisipan" placeholder="total partisipan" name="tPartisipan"
                                    value="{{ old('tPartisipan', $tachievement->tPartisipan) }}">
                                @error('tPartisipan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea
                                    class="form-control @error('deskripsi')
                                is-invalid
                            @enderror"
                                    id="deskripsi" rows="6" name="deskripsi">{{ old('deskripsi', $tachievement->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary ml-1 btn-sm" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Ubah</span>
                                </button>
                            </div>
                        </form>

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
