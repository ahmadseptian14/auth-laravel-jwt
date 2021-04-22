@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')
    
@section('content')
<div class="container">
  <div class="row justify-content-center mt-5">
    <h1>Tambah Data Mahasiswa</h1>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ( $errors->all() as $error)
              <li>{{$error}}</li>                
          @endforeach
      </ul>
  </div>   
  @endif

  <div class="card-shadow">
      <div class="card-body">
            <form action="{{route('student.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                </div>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" required>
                </div>  
                
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control" required>
                        <option name="jurusan">Teknik Informatika</option>
                        <option name="jurusan">Sistem Informasi</option>
                        <option name="jurusan">Sistem Komputer</option>
                    </select>
                </div>  

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="textarea" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
                </div> 

                <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
            </form>
      </div>
  </div>

</div>
@endsection

