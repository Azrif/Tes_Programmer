<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Programmer|| Index</title>
</head>
<body>
    <h3> PRODUK TES</h3>
    <h4><a href="/tambah"> Tambah Produk Baru</a></h4>
    <table class="table table-bordered table-hover">
        <tr>
          <th>Id Produk</th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Pilihan Aksi</th>
        </tr>
        @foreach($data as $item) 
        <tr>
          <td>{{ $item['id_produk'] }}</td>
          <td>{{ $item['nama_produk'] }}</td>
          <td>{{ $item['harga'] }} </td>
          <td>{{ $item['kategori'] }}</td>
          <td>{{ $item['status'] }}</td>
          <td style="padding-left: 10pt"><a href="#" class=" hps" data-nama="{{ $item->nama_produk}}" 
            data-id="{{ $item->id_produk}}"> Hapus</a>|
            <a href="/ubah/{{ $item->id_produk}}"> Edit</a>
          </td>
        </tr>
        @endforeach
    </table>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
    integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

<script>
  $('.hps').click(function(){
    var id_produk = $(this).attr('data-id');
    var nama_produk = $(this).attr('data-nama');
    swal({
      title: "Peringatan!!",
      text: "Apakah anda yakin untuk menghapus data\n"+nama_produk+" ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/hapus/"+id_produk+""
        swal("Data anda berhasil dihapus", {
          icon: "success",
        });
      } else {
        swal("Data anda batal dihapus");
      }
    });
  });
  
</script>
</html>