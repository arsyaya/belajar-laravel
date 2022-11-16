@extends ('template.master')

@section('judul')
<h1>ini halaman create jugaa dongg</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputNIS" placeholder="Nama Kelas Siswa">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputNama" placeholder="Pilih Jurusan Siswa">
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection