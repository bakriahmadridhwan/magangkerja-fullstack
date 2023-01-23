@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Testimoni</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Tambah Data Testimoni</h4>
                        </div>
                        <div>
                            <a href="/dashboard/testimonis" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <form action="/dashboard/testimonis" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="testimoni" class="form-label">Testimoni</label>
                                <textarea
                                    class="form-control @error('testimoni')
                                is-invalid
                            @enderror"
                                    autofocus id="testimoni" rows="6" name="testimoni" placeholder="kalimat testimoni">{{ old('testimoni') }}</textarea>
                                @error('testimoni')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <img class="img-preview img-fluid mb-3 mx-auto d-block my-4">

                            <fieldset>
                                <div class="input-group">
                                    <label for="image" class="form-label">Gambar</label>
                                    <div class="input-group mb-3">

                                        <label class="input-group-text" for="image"><i
                                                class="bi bi-upload"></i></label>

                                        <input type="file"
                                            class="form-control @error('image')
                                            is-invalid
                                        @enderror"
                                            id="image" name="image" onchange="previewImage()" value="gambar">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="nama" class="form-label">Nama Orang</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    id="nama" placeholder="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lulusan" class="form-label">Lulusan</label>
                                <input type="text"
                                    class="form-control @error('lulusan')
                                is-invalid
                            @enderror"
                                    id="lulusan" placeholder="lulusan" name="lulusan" value="{{ old('lulusan') }}">
                                @error('lulusan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sebagai" class="form-label">Pekerjaan</label>
                                <input type="text"
                                    class="form-control @error('sebagai')
                                is-invalid
                            @enderror"
                                    id="sebagai" placeholder="pekerjaan" name="sebagai" value="{{ old('sebagai') }}">
                                @error('sebagai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary ml-1 btn-sm" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
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

        imgPreview.style.width = '25%';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>



@include('admintemplate.adminfooter')
