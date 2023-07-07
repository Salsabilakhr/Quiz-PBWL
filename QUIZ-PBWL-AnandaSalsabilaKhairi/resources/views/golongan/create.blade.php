@extends ('layouts.app')

@section('content')

<h2>Tambah Data Golongan</h2>

<form action="{{ url('/golongan') }}" method="POST">
    @csrf 
    <div class="mb-4">
        <label>KODE</label>
        <input type="text" name="gol_kode" class="form-control">
    </div>
    <div class="mb-4">
        <label>NAMA</label>
        <input type="text" name="gol_nama" class="form-control">
    </div>
    <div class="mb-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection