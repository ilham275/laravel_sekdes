@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><center>
                <div class="card-header" style="background-color: #00AA9E;"><strong>{{ __('Edit Data') }}</strong></div>
                </center>
                <div class="card-body">
                    <form method="POST" action="{{route('pdk.update', $datas->id)}}" enctype="multipart/form-data">
                        @csrf
                        @METHOD('PATCH')

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $datas->nik }}" required autocomplete="nik" autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $datas->nama }}" required autocomplete="nama" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jk" class="col-md-4 col-form-label text-md-right">{{ __('Jenis kelamin') }}</label>

                            <div class="col-md-6">
                                <input id="jk" type="radio" id="jk" name="jk" value="male "{{$datas->jk == 'male' ? 'checked' : ''}}>
                                <label for="male">Laki</label></br>

                                <input id="jk" type="radio" id="jk" name="jk" value="female" {{$datas->jk == 'female' ? 'checked' : ''}}>
                                <label for="female">Perempuan</label>

                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('Kabupaten / Kota') }}</label>

                            <div class="col-md-6">
                                <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ $datas->kota }}" required autocomplete="kota" autofocus>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="kec" class="col-md-4 col-form-label text-md-right">{{ __('Kecamatan') }}</label>

                            <div class="col-md-6">
                                <input id="kec" type="text" class="form-control @error('kec') is-invalid @enderror" name="kec" value="{{ $datas->kec }}" required autocomplete="kec" autofocus>

                                @error('kec')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="kel" class="col-md-4 col-form-label text-md-right">{{ __('Kelurahan') }}</label>

                            <div class="col-md-4">
                                <input id="kel" type="text" class="form-control @error('kel') is-invalid @enderror" name="kel" value="{{ $datas->kel}}" required autocomplete="kel" autofocus>

                                @error('kel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rt_rw" class="col-md-4 col-form-label text-md-right">{{ __('RT / RW') }}</label>

                            <div class="col-md-4">
                                <input id="rt_rw" type="text" class="form-control @error('rt_rw') is-invalid @enderror" name="rt_rw" value="{{ $datas->rt_rw }}" required autocomplete="rt_rw" autofocus>

                                @error('rt_rw')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="jln" class="col-md-4 col-form-label text-md-right">{{ __('Jalan') }}</label>

                            <div class="col-md-6">
                                <input id="jln" type="text" class="form-control @error('jln') is-invalid @enderror" name="jln" value="{{ $datas->jln }}" required autocomplete="jln" autofocus>

                                @error('jln')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jln" class="col-md-4 col-form-label text-md-right">{{ ('Agama') }}</label>
                        <div class="col-md-6">
                            <select id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}" required autocomplete="agama" autofocus>
                            <option> {{$datas->agama}}</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            </select>
                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                        
                        <div class="form-group row">
                            <label for="gawe" class="col-md-4 col-form-label text-md-right">{{ __('Pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="gawe" type="text" class="form-control @error('gawe') is-invalid @enderror" name="gawe" value="{{ $datas->gawe }}" required autocomplete="gawe" autofocus>

                                @error('gawe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ $datas->foto }}" required autocomplete="foto" autofocus>

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                            </div>

                        </div>
                    </form>
                    <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
