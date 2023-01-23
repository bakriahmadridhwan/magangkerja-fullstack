@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Alasan</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Judul <b>"{{ $alasan->judul }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/alasans" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">
                        <form action="/dashboard/alasans/{{ $alasan->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if ($alasan->image)
                                <img src="{{ asset('storage/' . $alasan->image) }}"
                                    class="img-preview img-fluid mb-4 d-block mx-auto" width="25%">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif

                            <fieldset>
                                <div class="input-group">
                                    <label for="image" class="form-label">Icon</label>
                                    <div class="input-group mb-3">

                                        <label class="input-group-text" for="image"><i
                                                class="bi bi-upload"></i></label>
                                        <input type="hidden" name="oldImage" value="{{ $alasan->image }}">
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
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text"
                                    class="form-control @error('judul')
                                is-invalid
                            @enderror"
                                    id="judul" placeholder="judul" name="judul"
                                    value="{{ old('judul', $alasan->judul) }}">
                                @error('judul')
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
                                    id="deskripsi" rows="6" name="deskripsi">{{ old('deskripsi', $alasan->deskripsi) }}</textarea>
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
