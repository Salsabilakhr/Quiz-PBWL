@extends ('layouts.app')
@section('content')
<div class="container"> 

    <h2 style="text-align: center; font-family: serif">DATA PELANGGAN</h2>
    <a href="{{ url('/pelanggan/create') }}"><button class="mb-3" style="background-color: #2a7cf6">Tambah Pelanggan</button></a>

    <table class=" table table-bordered" style="box-shadow: 12px 12px 5px #133c7a; border: solid 2px black">
        <tr style="text-align : center; border: solid 2px black ">
            <td>ID</td>
            <td>NO PELANGGAN</td>
            <td>GOLONGAN</td>
            <td>USER</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>NOMOR HP</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach ($rows as $row)
            <tr style="text-align : center; border: solid 2px black ">
                <td>{{ $row->pel_id }}</td>
                <td>{{ $row->pel_no }}</td>
                <td>{{ $row->pel_id_gol }}</td>
                <td>{{ $row->pel_id_user }}</td>
                <td>{{ $row->pel_nama }}</td>
                <td>{{ $row->pel_alamat }}</td>
                <td>{{ $row->pel_hp }}</td>
                <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}"><button style="background-color: #f7ff1a">Edit</button></a></td>
                <td>
                    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')"style="background-color: #e50b20">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection