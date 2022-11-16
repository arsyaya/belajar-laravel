@extends ('template.master')

@section('judul')
<h1>ini halaman create dongg</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Nomor Induk Siswa">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama Siswa">
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa"></textarea>
                      </div>
                      <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection