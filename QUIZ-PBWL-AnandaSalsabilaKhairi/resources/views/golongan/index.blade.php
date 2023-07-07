@extends ('layouts.app')

@section('content')
<div class="container"> 

    <h2 style="text-align: center; font-family: serif">DATA GOLONGAN</h2>
    
    <a href="{{ url('/golongan/create') }}"><button class="mb-3" style="background-color: #2a7cf6">Tambah Golongan</button></a>
    <table class=" table table-bordered" style="box-shadow: 12px 12px 5px #133c7a; border: solid 2px black">
        <tr style="text-align : center; border: solid 2px black ">
            <th>ID</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr style="text-align : center; border: solid 2px black">
                <td>{{ $row->gol_id }}</td>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}"><button style="background-color: #f7ff1a">Edit</button></a></td>
                <td>
                    <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                        @method('DELETE')
                        @csrf 
                        <button onclick="return confirm('Apakah anda yakin?')" style="background-color: #e50b20">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection