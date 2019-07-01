<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Edit Data</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-left">
				<a href="/barang" class="btn btn-primary">Kembali</a>
		        <br/>
		        <br/>
		          
		        @if (count($errors) > 0)
		        <div class="alert alert-danger">
		        <ul>
		        @foreach ($errors->all() as $error)
		        	<li>{{ $error }}</li>
		        @endforeach
		        </ul>
		        </div>
		        @endif
		        <br/>

		        @foreach($barang as $b)
		        <form action="/barang/update" method="post">
		            <div class="form-group">
		              {{ csrf_field() }}
		              <input type="hidden" name="id" value="{{ $b->id }}"> <br/>
		              <label for="kode_barang">Kode Barang</label>
		              <input class="form-control" type="text" name="kode_barang" value="{{ $b->kode_barang }}">
		            </div>
		            <div class="form-group"> 
		              <label for="nama">Nama</label>
		              <input class="form-control" type="text" name="nama" value="{{ $b->nama }}">
		            </div>
		            <div class="form-group">
		              <label for="deskripsi">Deskripsi</label>
		              <textarea  class="form-control" name="deskripsi">{{ $b->deskripsi }}</textarea>
		            </div>
		            <div class="form-group">
		              <label for="stok">Stok</label>
		              <input class="form-control" type="number" name="stok" value="{{ $b->stok }}">
		            </div>
		            <div class="form-group">
		              <label for="harga">Harga</label>
		              <input class="form-control" type="number" name="harga" value="{{ $b->harga }}">
		            </div>
		            <div class="form-group">
		              <label for="berat">Berat</label>
		              <input class="form-control" type="number" name="berat" value="{{ $b->berat }}">
		            </div>
		            
		            
		            <div class="form-group">
		              <input class="btn btn-success" type="submit" value="Simpan">
		            </div>
		        </form>
		        @endforeach
        	</div>
    	</div>
	</div>
</body>
</html>