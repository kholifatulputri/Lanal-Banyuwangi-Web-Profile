@extends('layout_admin.template')
@section('heading', 'Edit dokumentasi')

@section('page')
    <li class="breadcrumb-item active">dokumentasi AMIK Medicom</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('dokumentasi.update', $dokumentasi->id_dokumentasi) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="gambar_banner">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('gambar_banner') is-invalid @enderror"
                                                name="gambar_banner">
                                            <label class="custom-file-label" for="gambar_banner">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar_banner')
                                            Gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama_dokumentasi">Nama dokumentasi </label>
                                    <input type="text" name="nama_dokumentasi" value="{{ $dokumentasi->nama_dokumentasi }}"
                                        class="form-control @error('nama_dokumentasi') is-invalid @enderror"
                                        placeholder="nama_dokumentasi Banner">
                                    <div class="text-danger">
                                        @error('nama_dokumentasi')
                                            Nama dokumentasi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_bekerja">Tempat Bekerja </label>
                                    <input type="text" name="tempat_bekerja" value="{{ $dokumentasi->tempat_bekerja }}"
                                        class="form-control @error('tempat_bekerja') is-invalid @enderror"
                                        placeholder="tempat_bekerja Banner">
                                    <div class="text-danger">
                                        @error('tempat_bekerja')
                                            Tempat_bekerja tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link Video </label>
                                    <input type="text" name="link" value="{{ $dokumentasi->link }}" class="form-control"
                                        placeholder="https://id.wikipedia.org">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-between">
                                <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-6 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ Storage::url($dokumentasi->gambar) }}" class="img img-thumbnail" alt="" width="50%" />
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Extra large modal -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#back').click(function() {
                window.location = "{{ route('dokumentasi.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#dokumentasi").addClass("active");

    </script>

@endsection
