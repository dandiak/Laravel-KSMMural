{{-- @extends('layouts.app') --}}
@extends('layouts.admin')

@section('content')
<!-- Main content -->
<section class="content">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p>Anggota Aktif</p>

            <h3>{{$count}}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <p>Anggota Nonaktif</p>

                <h3>{{$count1}}</h3>
              </div>
            </div>
          </div>
      </div>

      <a href="{{url('/home/anggota/add')}}" class="btn btn-block btn-primary" style="width: 200px;">Tambah Anggota</a><br>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Anggota UKM Mural</h3>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nama Mahasiswa</th>
                <th>Alamat Mahasiswa</th>
                <th>NIM</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Tahun Bergabung</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($anggota as $a)
                <tr>
                    <td>{{$a->nama_anggota}}</td>
                    <td>{{$a->alamat_anggota}}</td>
                    <td>{{$a->nim_anggota}}</td>
                    <td>{{$a->fakultas_anggota}}</td>
                    <td>{{$a->jurusan_anggota}}</td>
                    <td>{{$a->tahun_anggota}}</td>
                    <td>
                        <a href="{{url('/home/anggota/detail/'.$a->id)}}" class="btn bg-purple btn-sm">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('/home/anggota/edit/'.$a->id)}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{url('/home/anggota/delete/'.$a->id)}}" method="POST" class="formDelete">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit" >
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div>
@endsection
