@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-12 mt-3">
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr class="text-center">
                                        <th>NISN</th>
                                        <th>EMAIL</th>
                                        <th>NAMA</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Asal Sekolah</th>
                                        <th>Tahun Lulus</th>
                                        <th>Agama</th>
                                        <th>Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
     
                                            <tr class="text-center">
                                                <td>{{$user->nisn}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->jk}}</td>
                                                <td>{{$user->tempat_lahir}}</td>
                                                <td>{{$user->tanggal_lahir}}</td>
                                                <td>{{$user->alamat}}</td>
                                                <td>{{$user->no_hp}}</td>
                                                <td>{{$user->asal_sekolah}}</td>
                                                <td>{{$user->tahun_lulus}}</td>
                                                <td>{{$user->agama}}</td>
                                                <td>{{$user->jurusan}}</td> 
                                            </tr>
  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div></br>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Dokumen Peserta</h6>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                        <th>Kartu Keluarga</th>
                                        <th>Akte</th>
                                        <th>SKHUN</th>
                                        <th>Ijazah</th>
                                    </tr>
                                </thead>
                                <tbody>
     
                                            <tr class="text-center">
                                            <td><img src="http://localhost:8000/image/{{$data->kk}}" width="150" height="200"></td>
                                            <td><img src="http://localhost:8000/image/{{$data->akte}}" width="150" height="200"></td>
                                            <td><img src="http://localhost:8000/image/{{$data->skhun}}" width="150" height="200"></td>
                                            <td><img src="http://localhost:8000/image/{{$data->ijazah}}" width="150" height="200"></td>
                                            </tr>
  
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
                

            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection
