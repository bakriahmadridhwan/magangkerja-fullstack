@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<link rel="stylesheet" href="{{ asset('dist/assets/css/pages/summernote.css') }}">
<link rel="stylesheet" href="{{ asset('dist/assets/extensions/summernote/summernote-lite.css') }}">

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Event Edit</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Edit Data Event <b>"{{ $event->judul }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/events" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                    <div class="card-content p-4">

                        <form action="/dashboard/events/{{ $event->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @if ($event->image)
                                <img src="{{ asset('storage/' . $event->image) }}"
                                    class="img-preview img-fluid mb-4 d-block mx-auto" width="60%">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif

                            <fieldset>
                                <div class="input-group">
                                    <label for="image" class="form-label">Gambar Event</label>
                                    <input type="hidden" name="oldImage" value="{{ $event->image }}">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image"><i
                                                class="bi bi-upload"></i></label>
                                        <input type="file"
                                            class="form-control @error('image')
                                            is-invalid
                                        @enderror"
                                            id="image" name="image" autofocus onchange="previewImage()"
                                            value="{{ old('image', $event->image) }}">
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
                                    value="{{ old('judul', $event->judul) }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="by" class="form-label">Penyelenggara</label>
                                <input type="text"
                                    class="form-control @error('by')
                                is-invalid
                            @enderror"
                                    id="by" placeholder="penyelenggara" name="by"
                                    value="{{ old('by', $event->by) }}">
                                @error('by')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="tentang" class="form-label">Tentang</label>
                                <textarea
                                    class="form-control @error('tentang')
                                is-invalid
                            @enderror"
                                    id="tentang" rows="6" name="tentang" placeholder="tentang">{{ old('tentang', $event->tentang) }}</textarea>
                                @error('tentang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="materi" class="form-label">Materi</label>
                                @error('materi')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="hidden" id="materi" name="materi">
                                <div id="materi">
                                    <textarea id="summernote" rows="6" name="materi" placeholder="materi" input="materi">{{ old('materi', $event->materi) }}</textarea>
                                </div>
                            </div>

                            {{-- <div class="form-group mb-3">
                                <label for="materi" class="form-label">Materi</label>
                                @error('materi')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="materi" type="hidden" name="materi"
                                    value="{{ old('materi', $event->materi) }}">

                                <div id="materi" input="materi" name="materi">
                                    <textarea name="materi" id="summernote" cols="30" rows="10">{{ old('materi', $event->materi) }}</textarea>
                                </div>

                                @error('materi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            {{-- <div class="mt-1">
                                <label for="sk" class="form-label">syarat ketentuan</label>
                                @error('sk')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="hidden" id="sk" name="sk">
                                <div id="summernote" input="sk" name="sk"></div>
                            </div> --}}

                            <div class="form-group mb-3">
                                <label for="sk" class="form-label">Syarat Ketentuan</label>
                                <textarea
                                    class="form-control @error('sk')
                                is-invalid
                            @enderror"
                                    id="dark" rows="6" name="sk" placeholder="syarat ketentuan">{{ old('sk', $event->sk) }}</textarea>
                                @error('sk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
                                <input type="date"
                                    class="form-control @error('tanggalMulai')
                                is-invalid
                            @enderror"
                                    id="tanggalMulai" placeholder="tanggal mulai" name="tanggalMulai"
                                    value="{{ old('tanggalMulai', $event->tanggalMulai) }}">
                                @error('tanggalMulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                                <input type="time"
                                    class="form-control @error('waktuMulai')
                                is-invalid
                            @enderror"
                                    id="waktuMulai" placeholder="waktu mulai" name="waktuMulai"
                                    value="{{ old('waktuMulai', $event->waktuMulai) }}">
                                @error('waktuMulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text"
                                    class="form-control @error('lokasi')
                                is-invalid
                            @enderror"
                                    id="lokasi" placeholder="lokasi" name="lokasi"
                                    value="{{ old('lokasi', $event->lokasi) }}">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="peralatan" class="form-label">Peralatan</label>
                                <textarea
                                    class="form-control @error('peralatan')
                                is-invalid
                            @enderror"
                                    id="peralatan" rows="3" name="peralatan" placeholder="peralatan">{{ old('peralatan', $event->peralatan) }}</textarea>
                                @error('peralatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="pendaftaran" class="form-label">Pendaftaran</label>
                                <textarea
                                    class="form-control @error('pendaftaran')
                                is-invalid
                            @enderror"
                                    id="pendaftaran" rows="3" name="pendaftaran" placeholder="syarat pendaftaran">{{ old('pendaftaran', $event->pendaftaran) }}</textarea>
                                @error('pendaftaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <h6>Rekomendasi
                                </h6>
                                <fieldset class="form-group">
                                    <select
                                        class="form-select @error('recomended_id')
                                    is-invalid
                                @enderror"
                                        id="recomended_id" name="recomended_id">
                                        <option disabled selected>-- pilih rekomendasi --</option>
                                        @foreach ($recomendeds as $recomended)
                                            @if (old('recomended_id', $event->recomended_id) == $recomended->id)
                                                <option value="{{ $recomended->id }}" selected>
                                                    {{ $recomended->recomended }}</option>
                                            @else
                                                <option value="{{ $recomended->id }}">
                                                    {{ $recomended->recomended }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('recomended_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </fieldset>
                            </div>

                            <div class="form-group mb-3">
                                <h6>Mentor
                                </h6>
                                <fieldset class="form-group">
                                    <select
                                        class="form-select @error('mentor_id')
                                    is-invalid
                                @enderror"
                                        id="mentor_id" name="mentor_id">
                                        <option disabled selected>-- pilih mentor --</option>
                                        @foreach ($mentors as $mentor)
                                            @if (old('mentor_id', $event->mentor_id) == $mentor->id)
                                                <option value="{{ $mentor->id }}" selected>
                                                    {{ $mentor->nama }}</option>
                                            @else
                                                <option value="{{ $mentor->id }}">
                                                    {{ $mentor->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    </select>
                                    @error('mentor_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </fieldset>
                            </div>

                            <div class="form-group mb-3">
                                <h6>Status
                                </h6>
                                <fieldset class="form-group">
                                    <select
                                        class="form-select @error('status_id')
                                    is-invalid
                                @enderror"
                                        id="status_id" name="status_id">
                                        <option disabled selected>-- pilih status --</option>
                                        @foreach ($statuses as $status)
                                            @if (old('status_id', $event->status_id) == $status->id)
                                                <option value="{{ $status->id }}" selected>
                                                    {{ $status->status }}</option>
                                            @else
                                                <option value="{{ $status->id }}">
                                                    {{ $status->status }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('mentor_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </fieldset>
                            </div>

                            <div class="form-group mb-3">
                                <h6>Kategori
                                </h6>
                                <fieldset class="form-group">
                                    <select
                                        class="form-select @error('category_id')
                                    is-invalid
                                @enderror"
                                        id="category_id" name="category_id">
                                        <option disabled selected>-- pilih kategori --</option>
                                        @foreach ($categories as $category)
                                            @if (old('category_id', $event->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>
                                                    {{ $category->category }}</option>
                                            @else
                                                <option value="{{ $category->id }}">
                                                    {{ $category->category }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('mentor_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </fieldset>
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

<script src="{{ asset('dist/assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dist/assets/extensions/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/pages/parsley.js') }}"></script>

<script src="{{ asset('dist/assets/extensions/summernote/summernote-lite.min.js') }}"></script>
<script src="{{ asset('dist/assets/js/pages/summernote.js') }}"></script>



@include('admintemplate.adminfooter')
