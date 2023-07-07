@extends ('layouts.app')

@section('content')
<div class="container"> 

    <h2 style="text-align: center; font-family: serif">DATA USER</h2>
    <a href="{{ url('/users/create') }}"><button class="mb-3" style="background-color: #2a7cf6 ">Tambah User</button></a>

    <table class="table table-bordered" style="box-shadow: 12px 12px 5px #133c7a;">
        <tr style="text-align : center; border: solid 2px black ">
            <th>ID</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>KODE POS</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach ($rows as $row)
            <tr style="text-align : center; border: solid 2px black ">
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->user_email }}</td>
                <td>{{ $row->user_password }}</td>
                <td>{{ $row->user_nama }}</td>
                <td>{{ $row->user_alamat }}</td>
                <td>{{ $row->user_hp }}</td>
                <td>{{ $row->user_pos }}</td>
                <td><a href="{{ url('users/' . $row->user_id . '/edit') }}"><button style="background-color: #f7ff1a">Edit</button></a></td>
                <td>
                    <form action="{{ url('users/' . $row->user_id) }}" method="POST">
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