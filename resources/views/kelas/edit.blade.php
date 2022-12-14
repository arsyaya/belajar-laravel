@extends ('template.master')

@section('judul')
<h1>Management class</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class/{{$showKelasById->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputNIS" placeholder="Nama Kelas Siswa" 
                    value="{{ $showKelasById->nama_kelas }}"required>
                    @error('nama_kelas')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="inputNama">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputNama" placeholder="Pilih Jurusan Siswa" 
                    value="{{ $showKelasById->jurusan }}"required>
                    @error('jurusan')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection