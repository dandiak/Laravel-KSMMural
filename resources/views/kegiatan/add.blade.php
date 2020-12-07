@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box">
<div id="content">
    <article id="class" class="kartu">
        <section class="class">
           <div class="container">
            {{-- <div class="card-body"> --}}
            <form method="POST" action="{{url('/home/kegiatan/add')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('patch') --}}

                    <div class="form-group row">
                        <label for="nama_kegiatan" class="col-md-4 col-form-label text-md-right">Nama Kegiatan</label>

                        <div class="col-md-6">
                            <input id="nama_kegiatan" type="text" class="form-control" name="nama_kegiatan" required autocomplete="nama_kegiatan" autofocus>

                            {{-- @error('nama_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="deskripsi_kegiatan" class="col-md-4 col-form-label text-md-right">Deskripsi Kegiatan</label>

                        <div class="col-md-6">
                            <input id="deskripsi_kegiatan" type="text" class="form-control" name="deskripsi_kegiatan" required autocomplete="deskripsi_kegiatan">

                            {{-- @error('deskripsi_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ketua_kegiatan" class="col-md-4 col-form-label text-md-right">Ketua Pelaksana</label>

                        <div class="col-md-6">
                            <input id="ketua_kegiatan" type="text" class="form-control" name="ketua_kegiatan" required autocomplete="ketua_kegiatan">

                            {{-- @error('ketua_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jadwal_kegiatan" class="col-md-4 col-form-label text-md-right">Jadwal</label>

                        <div class="col-md-6">
                            <input id="jadwal_kegiatan" type="text" class="form-control" name="jadwal_kegiatan" required autocomplete="jadwal_kegiatan">

                            {{-- @error('jadwal_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="periode_kegiatan" class="col-md-4 col-form-label text-md-right">Periode Kepengurusan</label>

                        <div class="col-md-6">
                            <select name="periode_kegiatan" id="periode_kegiatan" class="form-control" required autocomplete="periode_kegiatan">
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                                <option value="2021-2022">2021-2022</option>
                            </select>

                            {{-- @error('periode_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_kegiatan" class="col-md-4 col-form-label text-md-right">Status</label>

                        <div class="col-md-6">
                            <select name="status_kegiatan" id="status_kegiatan" class="form-control" required autocomplete="status_kegiatan">
                                <option value="Terlaksana">Terlaksana</option>
                                <option value="Belum Terlaksana">Belum Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>

                            {{-- @error('status_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="buttonx">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

