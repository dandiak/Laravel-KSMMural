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
              <p>Terlaksana</p>

            <h3>{{$count}}</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-orange">
              <div class="inner">
                <p>Belum Terlaksana</p>

                <h3>{{$count1}}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <p>Tidak Terlaksana</p>

                <h3>{{$count2}}</h3>
              </div>
            </div>
          </div>
      </div>

      <a href="{{url('/home/kegiatan/add')}}" class="btn btn-block btn-primary" style="width: 200px;">Tambah Kegiatan</a><br>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Kegiatan UKM Mural</h3>
          </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nama Kegiatan</th>
                <th>Ketua Pelaksana</th>
                <th>Jadwal Kegiatan</th>
                <th>Periode Kepengurusan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($kegiatan as $k)
                <tr>
                    <td>{{$k->nama_kegiatan}}</td>
                    <td>{{$k->ketua_kegiatan}}</td>
                    <td>{{$k->jadwal_kegiatan}}</td>
                    <td>{{$k->periode_kegiatan}}</td>
                    <td>{{$k->status_kegiatan}}</td>
                    <td>
                        <a href="{{url('/home/kegiatan/detail/'.$k->id)}}" class="btn bg-purple btn-sm">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('/home/kegiatan/edit/'.$k->id)}}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{url('/home/kegiatan/delete/'.$k->id)}}" method="POST" class="formDelete">
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
