<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>DATA BARANG</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
			DATA BARANG
			</div>
			<div class="card-body">
			<a href="/barang/tambah" class="btn btn-success">Tambah Data</a></div><br/>
			<table class="table table-boarded table-hover table striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Stok</th>	
					<th>Harga</th>
					<th>Berat(kg)</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				@php $no=1; @endphp
				@foreach($barang as $b)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $b->kode_barang }}</td>
					<td>{{ $b->nama }}</td>
					<td>{{ $b->deskripsi }}</td>
					<td>{{ $b->stok }}</td>
					<td>{{ $b->harga }}</td>
					<td>{{ $b->berat }}</td>
					<td>
						<a href="/barang/edit/{{ $b->id }}" class="btn btn-primary">Edit</a>
						<a href="/barang/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>