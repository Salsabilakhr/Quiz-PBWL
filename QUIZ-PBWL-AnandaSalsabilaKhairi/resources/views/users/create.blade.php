@extends ('layouts.app')

@section('content')

<h2>Tambah Data User</h2>

<form action="{{ url('/users') }}" method="POST">
    @csrf 
    <div class="mb-4">
        <label>EMAIL</label>
        <input type="text" name="user_email" class="form-control">
    </div>
    <div class="mb-4">
        <label>PASSWORD</label>
        <input type="text" name="user_password" class="form-control">
    </div>
    <div class="mb-4">
        <label>NAMA</label>
        <input type="text" name="user_nama" class="form-control">
    </div>
    <div class="mb-4">
        <label>ALAMAT</label>
        <input type="text" name="user_alamat" class="form-control">
    </div>
    <div class="mb-4">
        <label>NO HP</label>
        <input type="text" name="user_hp" class="form-control">
    </div>
    <div class="mb-4">
        <label>KODE POS</label>
        <input type="text" name="user_pos" class="form-control">
    </div>
    <div class="mb-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection