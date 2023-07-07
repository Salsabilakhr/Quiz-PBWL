@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PELANGGAN</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">NO PELANGGAN</label>
                <input type="text" name="pel_no" class="form-control" placeholder="No Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">GOLONGAN</label>
                <select name="pel_id_gol" id="pel_id_gol">
                    @foreach ($rows['data_gol'] as $row)
                    <option value="{{ $row->gol_id }}">{{ $row->gol_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">USERS</label>
                <select name="pel_id_user" id="pel_id_user">
                    @foreach ($rows['data_user'] as $row)
                    <option value="{{ $row->user_id }}">{{ $row->user_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pel_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pel_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pel_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>

        </form>
    </div>
@endsection