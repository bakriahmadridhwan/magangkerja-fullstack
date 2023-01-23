@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Mentor Edit</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Mentor <b>"{{ $mentor->nama }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/mentors" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <form action="/dashboard/mentors/{{ $mentor->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if ($mentor->image)
                                <img src="{{ asset('storage/' . $mentor->image) }}"
                                    class="img-preview img-fluid mb-4 d-block mx-auto" width="60%" alt="mentor-img">
                            @else
                                <img class="img-preview img-fluid mb-3" alt="mentor-img">
                                <p class="text-danger">belum diberi foto!</p>
                            @endif

                            <fieldset>
                                <div class="input-group">
                                    <label for="image" class="form-label">Foto Mentor</label>
                                    <input type="hidden" name="oldImage" value="{{ $mentor->image }}">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image"><i
                                                class="bi bi-upload"></i></label>
                                        <input type="file"
                                            class="form-control @error('image')
                                            is-invalid
                                        @enderror"
                                            id="image" name="image" autofocus onchange="previewImage()"
                                            value="{{ old('image', $mentor->image) }}">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="nama" class="form-label">Nama Mentor</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    id="nama" placeholder="nama mentor" name="nama"
                                    value="{{ old('nama', $mentor->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text"
                                    class="form-control @error('pekerjaan')
                                    is-invalid
                                @enderror"
                                    id="pekerjaan" placeholder="pekerjaan mentor" name="pekerjaan"
                                    value="{{ old('pekerjaan', $mentor->pekerjaan) }}">
                                @error('pekerjaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm ml-1" data-bs-dismiss="modal">
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
