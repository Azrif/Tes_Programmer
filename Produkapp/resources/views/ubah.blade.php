<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Programmer|| Ubah</title>
</head>
<body>
    <h3>Ubah Produk</h3>
 
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($produk as $p)
	<form action="/ubah/update" method="post">
		{{ csrf_field() }}
        No <input type="number" required="required" name="no" value="{{ $p->no }}"> <br/>
        <br/>
		<input type="hidden" name="id_produk" value="{{ $p->id_produk}}"> <br/>
		Nama <input type="text" required="required" name="nama_produk" value="{{ $p->nama_produk }}"> <br/>
        <br/>
		Harga <input type="number" required="required" name="harga" value="{{ $p->harga }}"> <br/>
        <br/>
		Kategori <input type="text" required="required" name="kategori" value="{{ $p->kategori }}"> <br/>
        <br/>
		Status <input required="required" name="status" value="{{ $p->status }}"><br/>
        <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    
</body>
</html>