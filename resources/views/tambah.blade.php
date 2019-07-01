<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Tambah Data</title> 
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
			Tambah Data
			</div>
			<div class="card-body">
				<a href="/pegawai" class="btn btn-primary">Kembali</a><br/><br/>
				<form method="post" action="/barang/store">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Kode Barang</label>
					<input type="text" name="kode_barang" class="form-control">
					@if($errors->has('kode_barang'))
					<div class="text-danger">
						{{ $errors->first('kode_barang')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
					@if($errors->has('nama'))
					<div class="text-danger">
						{{ $errors->first('nama')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea name="deskripsi" class="form-control"></textarea>
					@if($errors->has('deskripsi'))
					<div class="text-danger">
						{{ $errors->first('deskripsi')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label>Stok</label>
					<input type="number" name="stok" class="form-control">
					@if($errors->has('stok'))
					<div class="text-danger">
						{{ $errors->first('stok')}}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="number" name="harga" class="form-control">
					@if($errors->has('harga'))
					<div class="text-danger">
						{{ $errors->first('harga') }}
					</div>
					@endif
				</div>
				<div class="form-group">
					<label>Berat</label>
					<input type="number" name="berat" class="form-control">
					@if($errors->has('berat'))
					<div class="text-danger">
						{{ $errors->first('berat')}}
					</div>
					@endif
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>