<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Programmer|| Tambah</title>
</head>
<body>
    <h3>Produk</h3>
 
	<a href="/"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tambah/add" method="post">
		{{ csrf_field() }}
        No <input type="number" name="no" required="required"> <br/>
        <br/>
		Nama <input type="text" name="nama_produk" required="required"> <br/>
        <br/>
		Harga <input type="number" name="harga" required="required"> <br/>
        <br/>
        Kategori <input type="text" name="kategori" required="required"> <br/>
        <br/>
		Status <input name="status" required="required"> <br/>
        <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>