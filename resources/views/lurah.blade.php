@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>nik</th>
                <th>nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $pgi)</br>
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $pgi->nik }}</td>
                <td>{{ $pgi->nama }}</td>
                <td>{{ $pgi->jk }}</td>
                <td>{{ $pgi->agama }}</td>
                <td>{{ $pgi->gawe }}</td>
                <td><img src="http://localhost:8000/foto/{{$pgi->foto}}" width="150" height="200"></td>
                <td>
                    <form action="{{route('pdk.destroy', $pgi->id)}}" method="POST">
        
                        <a class="btn btn-info" href="#">Show</a>
        
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
