@extends('layouts.admin')

@section('content-header')

    
<div class="row justify-content-center">
        <div class="col-md">
            <div class="card shadow h-100">
                <div class="card-header">
                    <h5 class="m-0 pt-1 font-weight-bold float-left">Tambah Pembimbing</h5>
                    <a href="{{ route('datapembimbing.index') }}" class="btn btn-sm btn-secondary float-right ">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('datapembimbing.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-2"><label for="nama" class="float-left col-form-label">Nama Pembimbing</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="email" class="float-left col-form-label">Email Pembimbing</label></div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="no_hp" class="float-left col-form-label">No Hp</label></div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                @error('no_hp') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2"><label for="alamat" class="float-left col-form-label">alamat</label></div>
                            <div class="col-sm-10">
                                <textarea type="number" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}"></textarea>
                                @error('alamat') <span class="invalid-feedback" role="alert">{{ $message }}</span> @enderror
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