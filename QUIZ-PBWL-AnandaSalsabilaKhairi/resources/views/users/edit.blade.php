@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Data User</h3>
        <form action="{{ url('/users/'.$row->user_id) }}" method="POST">
           
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label>EMAIL</label>
                <input type="text" class="form-control"name="user_email" value="{{ $row->user_email }}"></>
            </div>
            <div class="mb-3">
                <label>PASSWORD</label>
                <input type="text" class="form-control"name="user_password" value="{{ $row->user_password }}"></>
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control"name="user_nama" value="{{ $row->user_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <input type="text" class="form-control"name="user_alamat" value="{{ $row->user_alamat }}"></>
            </div>
            <div class="mb-3">
                <label>NO HP</label>
                <input type="text" class="form-control"name="user_hp" value="{{ $row->user_hp }}"></>
            </div>
            <div class="mb-3">
                <label>KODE POS</label>
                <input type="text" class="form-control"name="user_pos" value="{{ $row->user_pos }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE" class="btn btn-primary">
            </div>
        </form>
    </div>

    @endsection
