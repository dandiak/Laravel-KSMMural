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
            <form method="POST" action="{{url('/home/anggota/add')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('patch') --}}

                    <div class="form-group row">
                        <label for="nama_anggota" class="col-md-4 col-form-label text-md-right">Nama Mahasiswa</label>

                        <div class="col-md-6">
                            <input id="nama_anggota" type="text" class="form-control" name="nama_anggota" required autocomplete="nama_anggota" autofocus>

                            {{-- @error('nama_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nim_anggota" class="col-md-4 col-form-label text-md-right">Nomor Induk Mahasiswa</label>

                        <div class="col-md-6">
                            <input id="nim_anggota" type="text" class="form-control" name="nim_anggota" required autocomplete="nim_anggota">

                            {{-- @error('nim_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat_anggota" class="col-md-4 col-form-label text-md-right">Alamat Mahasiswa</label>

                        <div class="col-md-6">
                            <select name="alamat_anggota" id="alamat_anggota" class="form-control" required autocomplete="alamat_anggota">
                                <option value="Bekasi">Bekasi</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Depok">Depok</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Tangerang">Tangerang</option>
                                <option value="Tangerang Selatan">Tangerang Selatan</option>
                            </select>

                            {{-- @error('alamat_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fakultas_anggota" class="col-md-4 col-form-label text-md-right">Fakultas</label>

                        <div class="col-md-6">
                            <select name="fakultas_anggota" id="fakultas_anggota" class="form-control" required autocomplete="fakultas_anggota">
                                <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Ilmu Kesehatan">Ilmu Kesehatan</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
                                <option value="Kedokteran">Kedokteran</option>
                                <option value="Teknik">Teknik</option>
                            </select>

                            {{-- @error('fakultas_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jurusan_anggota" class="col-md-4 col-form-label text-md-right">Jurusan</label>

                        <div class="col-md-6">
                            <select name="jurusan_anggota" id="jurusan_anggota" class="form-control" required autocomplete="jurusan_anggota">
                                <option value="D3 Akutansi">D3 Akutansi</option>
                                <option value="D3 Perbankan dan Keuangan">D3 Perbankan dan Keuangan</option>
                                <option value="S1 Akutansi">S1 Akutansi</option>
                                <option value="S1 Ekonomi Pembangunan">S1 Ekonomi Pembangunan</option>
                                <option value="S1 Ekonomi Syariah">S1 Ekonomi Syariah</option>
                                <option value="S1 Manajemen">S1 Manajemen</option>

                                <option value="S1 Ilmu Hukum">S1 Ilmu Hukum</option>

                                <option value="D3 Fisioterapi">D3 Fisioterapi</option>
                                <option value="D3 Keperawatan">D3 Keperawatan</option>
                                <option value="S1 Gizi">S1 Gizi</option>
                                <option value="S1 Keperawatan">S1 Keperawatan</option>
                                <option value="S1 Kesehatan Masyarakat">S1 Kesehatan Masyarakat</option>

                                <option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
                                <option value="S1 Informatika">S1 Informatika</option>
                                <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>

                                <option value="S1 Hubungan Internasional">S1 Hubungan Internasional</option>
                                <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
                                <option value="S1 Ilmu Politik">S1 Ilmu Politik</option>

                                <option value="S1 Farmasi">S1 Farmasi</option>
                                <option value="S1 Kedokteran">S1 Kedokteran</option>

                                <option value="S1 Teknik Elektro">S1 Teknik Elektro</option>
                                <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                                <option value="S1 Teknik Mesin">S1 Teknik Mesin</option>
                                <option value="S1 Teknik Perkapalan">S1 Teknik Perkapalan</option>
                            </select>

                            {{-- @error('jurusan_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tahun_anggota" class="col-md-4 col-form-label text-md-right">Tahun Bergabung</label>

                        <div class="col-md-6">
                            <select name="tahun_anggota" id="tahun_anggota" class="form-control" required autocomplete="tahun_anggota">
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>

                            {{-- @error('tahun_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_anggota" class="col-md-4 col-form-label text-md-right">Status</label>

                        <div class="col-md-6">
                            <select name="status_anggota" id="status_anggota" class="form-control" required autocomplete="status_anggota">
                                <option value="Aktif">Aktif</option>
                                <option value="Nonaktif">Nonaktif</option>
                            </select>

                            {{-- @error('status_anggota')
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

