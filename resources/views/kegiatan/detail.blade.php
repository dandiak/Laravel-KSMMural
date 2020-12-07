@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="judul">
                    <h2 class="page-header"><center>{{$kegiatan->nama_kegiatan}}</center></h2>
                </div>

                <div id="content">
                {{-- <article id="class" class="kartu"> --}}
                    <section class="class">
                    {{-- < class="card-body">--}}
                        <div class="form-group row">
                            <label for="deskripsi_kegiatan" class="col-md-4 col-form-label text-md-right">Deskripsi Kegiatan</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->deskripsi_kegiatan}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ketua_kegiatan" class="col-md-4 col-form-label text-md-right">Ketua Pelaksan</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->ketua_kegiatan}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jadwal_kegiatan" class="col-md-4 col-form-label text-md-right">Jadwal Kegiatan</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->jadwal_kegiatan}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="periode_kegiatan" class="col-md-4 col-form-label text-md-right">Periode Kepengurusan</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->periode_kegiatan}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_kegiatan" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->status_kegiatan}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">Created</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->created_at}}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="updated_at" class="col-md-4 col-form-label text-md-right">Updated</label>

                            <div class="col-md-6">
                                <p class="form-control">{{$kegiatan->updated_at}}</p>
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
