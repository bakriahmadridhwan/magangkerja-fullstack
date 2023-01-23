@include('admintemplate.adminheader')

@include('admincomponent.sidebar')

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Testimoni Detail</h3>
    </div>
    <!-- Hoverable rows start -->
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="card-title">Detail Testimoni <b>"{{ $testimoni->nama }}"</b></h4>
                        </div>
                        <div>
                            <a href="/dashboard/testimonis" class="btn btn-primary btn-sm"><i
                                    data-feather="arrow-left"></i>
                                kembali</a>
                        </div>
                    </div>
                </div>

                <div class="card col-4" style="border: 2px solid #eee">
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">
                                "{{ $testimoni->testimoni }}"
                            </p>

                            <div class="row mt-5">
                                <div class="col-3">
                                    @if ($testimoni->image)
                                        <div class="avatar bg-primary me-3 avatar-xl">
                                            <img src="{{ asset('storage/' . $testimoni->image) }}" alt="img">
                                        </div>
                                    @else
                                        <div class="avatar bg-primary me-3 avatar-xl">
                                            <img src="https://toppng.com/uploads/preview/circled-user-icon-user-pro-icon-11553397069rpnu1bqqup.png"
                                                alt="img">
                                        </div>
                                    @endif
                                </div>
                                <div class="col">
                                    <b>{{ $testimoni->nama }}</b>
                                    <br>
                                    {{ $testimoni->lulusan }}
                                    <br>
                                    {{ $testimoni->sebagai }}
                                </div>
                            </div>
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
