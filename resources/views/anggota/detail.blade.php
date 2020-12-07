@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="judul">
                    <h2 class="page-header"><center>{{$anggota->nama_anggota}}</center></h2>
                </div>

                <div id="content">
                {{-- <article id="class" class="kartu"> --}}
                    <section class="class">
                    {{-- < class="card-body">--}}
                        <div class="form-group row">
                            <label for="nim_anggota" class="col-md-4 col-form-label text-md-right">Nomor Induk Mahasiswa</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->nim_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_anggota" class="col-md-4 col-form-label text-md-right">Alamat Mahasiswa</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->alamat_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fakultas_anggota" class="col-md-4 col-form-label text-md-right">Fakultas</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->fakultas_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan_anggota" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->jurusan_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_anggota" class="col-md-4 col-form-label text-md-right">Tahun Bergabung</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->tahun_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_anggota" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->status_anggota}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">Created</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->created_at}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="updated_at" class="col-md-4 col-form-label text-md-right">Updated</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$anggota->updated_at}}</p>
                            </div>
                        </div>

                    </section>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</section>
@endsection
