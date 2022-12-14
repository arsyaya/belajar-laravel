@extends ('template.master')

@section('judul')
<h1>ini halaman show</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Nomor Induk Siswa" value="{{ $showSiswaById->nomor_induk_siswa }}"disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama Siswa" value="{{ $showSiswaById->nama }}"disabled>
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa" value="{{ $showSiswaById->alamat }}"disabled>
                      </div>
                      <div class="form-group">
                     <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" disabled {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" disabled {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  
                <a class="btn btn-primary" href="{{ route('student.index')}}">
                      Back
                   </a>
                   
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection