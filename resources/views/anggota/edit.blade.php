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
            <form method="POST" action="{{url('/home/anggota/edit/'.$anggota->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="form-group row">
                        <label for="nama_anggota" class="col-md-4 col-form-label text-md-right">Nama Mahasiswa</label>

                        <div class="col-md-6">
                        <input id="nama_anggota" type="text" class="form-control" name="nama_anggota" required autocomplete="nama_anggota" autofocus value="{{$anggota->nama_anggota}}">

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
                        <input id="nim_anggota" type="text" class="form-control" name="nim_anggota" required autocomplete="nim_anggota" autofocus value="{{$anggota->nim_anggota}}">

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
                                <option value="Bekasi" @if ($anggota->alamat_anggota == 'Bekasi') selected @endif>Bekasi</option>
                                <option value="Bogor" @if ($anggota->alamat_anggota == 'Bogor') selected @endif>Bogor</option>
                                <option value="Depok" @if ($anggota->alamat_anggota == 'Depok') selected @endif>Depok</option>
                                <option value="DKI Jakarta" @if ($anggota->alamat_anggota == 'DKI Jakarta') selected @endif>DKI Jakarta</option>
                                <option value="Tangerang" @if ($anggota->alamat_anggota == 'Tangerang') selected @endif>Tangerang</option>
                                <option value="Tangerang Selatan" @if ($anggota->alamat_anggota == 'Tangerang Selatan') selected @endif>Tangerang Selatan</option>
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
                                <option value="Ekonomi dan Bisnis" @if ($anggota->fakultas_anggota == 'Ekonomi dan Bisnis') selected @endif>Ekonomi dan Bisnis</option>
                                <option value="Hukum" @if ($anggota->fakultas_anggota == 'Hukum') selected @endif>Hukum</option>
                                <option value="Ilmu Kesehatan" @if ($anggota->fakultas_anggota == 'Ilmu Kesehatan') selected @endif>Ilmu Kesehatan</option>
                                <option value="Ilmu Komputer" @if ($anggota->fakultas_anggota == 'Ilmu Komputer') selected @endif>Ilmu Komputer</option>
                                <option value="Ilmu Sosial dan Ilmu Politik" @if ($anggota->fakultas_anggota == 'Ilmu Sosial dan Ilmu Politik') selected @endif>Ilmu Sosial dan Ilmu Politik</option>
                                <option value="Kedokteran" @if ($anggota->fakultas_anggota == 'Kedokteran') selected @endif>Kedokteran</option>
                                <option value="Teknik" @if ($anggota->fakultas_anggota == 'Teknik') selected @endif>Teknik</option>
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
                                <option value="D3 Akutansi" @if ($anggota->jurusan_anggota == 'D3 Akutansi') selected @endif>D3 Akutansi</option>
                                <option value="D3 Perbankan dan Keuangan" @if ($anggota->jurusan_anggota == 'D3 Perbankan dan Keuangan') selected @endif>D3 Perbankan dan Keuangan</option>
                                <option value="S1 Akutansi" @if ($anggota->jurusan_anggota == 'S1 Akutansi') selected @endif>S1 Akutansi</option>
                                <option value="S1 Ekonomi Pembangunan" @if ($anggota->jurusan_anggota == 'S1 Ekonomi Pembangunan') selected @endif>S1 Ekonomi Pembangunan</option>
                                <option value="S1 S1 Ekonomi Syariah" @if ($anggota->jurusan_anggota == 'S1 S1 Ekonomi Syariah') selected @endif>S1 S1 Ekonomi Syariah</option>
                                <option value="S1 Manajemen" @if ($anggota->jurusan_anggota == 'S1 Manajemen') selected @endif>S1 Manajemen</option>

                                <option value="S1 Ilmu Hukum" @if ($anggota->jurusan_anggota == 'S1 Ilmu Hukum') selected @endif>S1 Ilmu Hukum</option>

                                <option value="D3 Fisioterapi" @if ($anggota->jurusan_anggota == 'D3 Fisioterapi') selected @endif>D3 Fisioterapi</option>
                                <option value="D3 Keperawatan" @if ($anggota->jurusan_anggota == 'D3 Keperawatan') selected @endif>D3 Keperawatan</option>
                                <option value="S1 Gizi" @if ($anggota->jurusan_anggota == 'S1 Gizi') selected @endif>S1 Gizi</option>
                                <option value="S1 Keperawatan" @if ($anggota->jurusan_anggota == 'S1 Keperawatan') selected @endif>S1 Keperawatan</option>
                                <option value="S1 Kesehatan Masyarakat" @if ($anggota->jurusan_anggota == 'S1 Kesehatan Masyarakat') selected @endif>S1 Kesehatan Masyarakat</option>

                                <option value="D3 Sistem Informasi" @if ($anggota->jurusan_anggota == 'D3 Sistem Informasi') selected @endif>D3 Sistem Informasi</option>
                                <option value="S1 Informatika" @if ($anggota->jurusan_anggota == 'S1 Informatika') selected @endif>S1 Informatika</option>
                                <option value="S1 Sistem Informasi" @if ($anggota->jurusan_anggota == 'S1 Sistem Informasi') selected @endif>S1 Sistem Informasi</option>

                                <option value="S1 Hubungan Internasional" @if ($anggota->jurusan_anggota == 'S1 Hubungan Internasional') selected @endif>S1 Hubungan Internasional</option>
                                <option value="S1 Ilmu Komunikasi" @if ($anggota->jurusan_anggota == 'S1 Ilmu Komunikasi') selected @endif>S1 Ilmu Komunikasi</option>
                                <option value="S1 Ilmu Politik" @if ($anggota->jurusan_anggota == 'S1 Ilmu Politik') selected @endif>S1 Ilmu Politik</option>

                                <option value="S1 Farmasi" @if ($anggota->jurusan_anggota == 'S1 Farmasi') selected @endif>S1 Farmasi</option>
                                <option value="S1 Kedokteran" @if ($anggota->jurusan_anggota == 'S1 Kedokteran') selected @endif>S1 Kedokteran</option>

                                <option value="S1 Teknik Elektro" @if ($anggota->jurusan_anggota == 'S1 Teknik Elektro') selected @endif>S1 Teknik Elektro</option>
                                <option value="S1 Teknik Industri" @if ($anggota->jurusan_anggota == 'S1 Teknik Industri') selected @endif>S1 Teknik Industri</option>
                                <option value="S1 Teknik Mesin" @if ($anggota->jurusan_anggota == 'S1 Teknik Mesin') selected @endif>S1 Teknik Mesin</option>
                                <option value="S1 Teknik Perkapalan" @if ($anggota->jurusan_anggota == 'S1 Teknik Perkapalan') selected @endif>S1 Teknik Perkapalan</option>
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
                                <option value="2018" @if ($anggota->tahun_anggota == '2018') selected @endif>2018</option>
                                <option value="2019" @if ($anggota->tahun_anggota == '2019') selected @endif>2019</option>
                                <option value="2020" @if ($anggota->tahun_anggota == '2020') selected @endif>2020</option>
                                <option value="2021" @if ($anggota->tahun_anggota == '2021') selected @endif>2021</option>
                            </select>

                            {{-- @error('tahun_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_anggota" class="col-md-4 col-form-label text-md-right">status Bergabung</label>

                        <div class="col-md-6">
                            <select name="status_anggota" id="status_anggota" class="form-control" required autocomplete="status_anggota">
                                <option value="Aktif" @if ($anggota->status_anggota == 'Aktif') selected @endif>Aktif</option>
                                <option value="Nonaktif" @if ($anggota->status_anggota == 'Nonaktif') selected @endif>Nonaktif</option>
                            </select>

                            {{-- @error('status_anggota')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="buttonz">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Update') }}
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

