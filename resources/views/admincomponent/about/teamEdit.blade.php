@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Team Edit</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data <b>"{{ $team->nama }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/teams" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">
                        <form action="/dashboard/teams/{{ $team->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if ($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}"
                                    class="img-preview img-fluid mb-4 d-block mx-auto" width="25%">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif

                            <fieldset>
                                <div class="input-group">
                                    <label for="image" class="form-label">Gambar</label>
                                    <div class="input-group mb-3">

                                        <label class="input-group-text" for="image"><i
                                                class="bi bi-upload"></i></label>
                                        <input type="hidden" name="oldImage" value="{{ $team->image }}">
                                        <input type="file"
                                            class="form-control @error('image')
                                            is-invalid
                                        @enderror"
                                            id="image" name="image" autofocus onchange="previewImage()"
                                            value="{{ old('image') }}">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    id="nama" placeholder="nama" name="nama"
                                    value="{{ old('nama', $team->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="posisi" class="form-label">Posisi</label>
                                <input type="text"
                                    class="form-control @error('posisi')
                                is-invalid
                            @enderror"
                                    id="posisi" placeholder="Posisi" name="posisi"
                                    value="{{ old('posisi', $team->posisi) }}">
                                @error('posisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="linktw" class="form-label">Link Twitter</label>
                                <input type="text"
                                    class="form-control @error('linktw')
                                is-invalid
                            @enderror"
                                    id="linktw" placeholder="Link Twitter" name="linktw"
                                    value="{{ old('linktw', $team->linktw) }}">
                                @error('linktw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="linkwa" class="form-label">Link WhatsApp</label>
                                <input type="text"
                                    class="form-control @error('linkwa')
                                is-invalid
                            @enderror"
                                    id="linkwa" placeholder="Link WhatsApp" name="linkwa"
                                    value="{{ old('linkwa', $team->linkwa) }}">
                                @error('linkwa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="linkli" class="form-label">Link LinkedIn</label>
                                <input type="text"
                                    class="form-control @error('linkli')
                                is-invalid
                            @enderror"
                                    id="linkli" placeholder="Link LinkedIn" name="linkli"
                                    value="{{ old('linkli', $team->linkli) }}">
                                @error('linkli')
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

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.width = '200px';
        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@include('admintemplate.adminfooter')
