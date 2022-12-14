@extends ('template.master')

@section('judul')
<h1>ini halaman index</h1>
@endsection

@section('content')
<!-- {{ var_dump($dataKelas); }} -->

<div class="card">
    <div class="card-header">
    <a class="btn btn-primary" href="{{ route('class.create')}}">
        <i class="fas fa-plus"></i>
         Tambah Data
    </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Jurusan</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($dataKelas as $item=>$value)
         <tr>
          <td>{{ $item + 1 }}</td>
          <td>{{ $value->nama_kelas }}</td>
          <td>{{ $value->jurusan }}</td>
          <td>
          <form action="/class/{{$value->id}}" method="POST">
              <a class="btn btn-info mr-3" href="class/{{$value->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="class/{{$value->id}}/edit">Edit</a>
              @csrf
              @method ('DELETE')
              <button class="btn btn-danger ">Delete</button>
              </form>
          </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
@endsection

@push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-table').DataTable();
        
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush