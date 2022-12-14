@extends ('template.master')

@section('judul')
<h1>Management class</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputNIS" placeholder="Nama Kelas Siswa" value="{{ $showKelasById->nama_kelas }}"disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputNama" placeholder="Pilih Jurusan Siswa" value="{{ $showKelasById->jurusan }}"disabled>
                  </div>

                  <div class="card-footer">
                  <a class="btn btn-primary" href="{{ route('class.index')}}">
                      Back
                   </a>

                 <a class="btn btn-primary" href="{{ $showKelasById->id }}edit">
                      Edit
                   </a>

                 
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection