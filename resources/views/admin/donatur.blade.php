@extends('layouts.admin')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
@section('content')

<a href="{{ route('donaturStore') }}" class="btn btn-primary" >Tambah</a>
<br>
<br>
	<table id="myTable" class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">Jumlah Donasi</th>
            <th scope="col">No Whatsapp</th>
			<th scope="col">Bukti Transfer</th>
			<th scope="col">Data Masuk</th>
			<th scope="col">Terakhir di Update</th>
            <th scope="col">Option</th>
		</tr>
	</thead>
	<tbody>
		@foreach($donatur as $item)
		<tr>
			<td scope="row">{{ $item->id }}</td>
			<td><a href="/admin/donatur/{{$item->id}}" style="color:blue"> {{ $item->nama }}</a></td>
			<td>{{ $item->jumlah_donasi }}</td>
			<td>{{ $item->no_wa }}</td>
			<td><img src="{{ asset('storage/'.$item->gambar) }}" style="width: 200px"></td>
			<td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
			<td>
				<a href="{{ route('donaturUbah', $item->id) }}" class="btn btn-warning" >Ubah</a>
				<a href="{{ route('donaturHapus', $item->id) }}" class="btn btn-danger"> Hapus </a>
			</td>
		</tr>
	</tbody>
		
		@endforeach
	</table>
	<script src="{{ asset('js/datatables.min.js') }}"></script>
    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
@endsection
