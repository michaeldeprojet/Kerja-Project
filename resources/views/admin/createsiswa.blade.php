@extends('layouts.admin')

@section('content-header')

    
<div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow h-100">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold float-left">Tambah User</h5>
                    <a href="{{ route('datasiswa.index') }}" class="btn btn-sm btn-secondary float-right ">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('datasiswa.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nama" class="float-left col-form-label">Nama Peserta</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="email" class="float-left col-form-label">Email Peserta</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nis" class="float-left col-form-label">Nis</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis') }}">
                                @error('nis') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nisn" class="float-left col-form-label">Nisn</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{ old('nisn') }}">
                                @error('nisn') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="tempat_lahir" class="float-left col-form-label">Tempat Lahir</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="tanggal_lahir" class="float-left col-form-label">Tanggal Lahir</label></div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="jurusan_id" class="float-left col-form-label">Jurusan</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('jurusan_id') is-invalid @enderror" name="jurusan_id" id="jurusan_id">
                                    <option value="">Pilih</option>
                                    <option value="1" {{ old('jurusan_id') == 1 ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                                    <option value="2" {{ old('jurusan_id') == 2 ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                                    <option value="3" {{ old('jurusan_id') == 3 ? 'selected' : '' }}>Multimedia</option>
                                    <option value="4" {{ old('jurusan_id') == 4 ? 'selected' : '' }}>Otomatisasi dan Tata Kelola Perkantoran</option>
                                    <option value="5" {{ old('jurusan_id') == 5 ? 'selected' : '' }}>Bisnis Daring dan Pemasaran</option>
                                    <option value="6" {{ old('jurusan_id') == 6 ? 'selected' : '' }}>Tata Boga</option>
                                    <option value="7" {{ old('jurusan_id') == 7 ? 'selected' : '' }}>Perhotelan</option>
                                </select>
                                @error('jurusan_id') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="jenis_kelamin" class="float-left col-form-label">Gender</label></div>
                            <div class="col-sm-10">
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">Pilih</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Alamat:</strong>
                                <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content"></textarea>
                            </div>
                        </div> -->
                        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-block">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endsection