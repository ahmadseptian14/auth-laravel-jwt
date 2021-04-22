@extends('layouts.app')

@section('title', 'Data Mahasiswa')
    
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <h1 style="margin-top: 120px">Daftar Identitas Mahasiswa</h1>
  </div>
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
  <a href="{{route('student.create')}}" class="btn btn-primary mt-5"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</a>
  </div>
  
  <form action="{{route('student.search')}}" class="form-inline my-2 my-lg-0" method="POST" >
    @csrf
    <input class="form-control mr-sm-2" placeholder="Cari Data Mahasiwa" name="search">
    <button type="submit" class="btn btn-outline-primary my-2 my-sm-0">Cari</button>
  </form>
  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Jurusan</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($students as $key => $student)
                <tr>
                  <td>{{$students->firstItem() + $key}}</td>
                  <td>{{$student->nama}}</td>
                  <td>{{$student->nim}}</td>
                  <td>{{$student->jurusan}}</td>
                  <td>{{$student->alamat}}</td>
                  <td>
                    <a href="{{route('student.edit', $student->id)}}" class="btn btn-info mb-2 w-100"><i class="fa fa-pencil-alt"></i>
                      Edit
                    </a>
                    <form action="{{route('student.delete', $student->id)}}" method="POST" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger w-100">
                        <i class="fa fa-trash"></i>
                        Hapus
                      </button>
                    </form>
                  </td>
                </tr>
            @empty
                <tr>
                  <td colspan="7" class="text-center">Tidak Ada Data</td>
                </tr>
            @endforelse
          </tbody>
        </table>
        {{ $students->links() }}
      </div>
    </div>
  </div>
</div>
@endsection

