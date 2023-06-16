<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "progrmmer_tes";

$connect = new mysqli($host, $user, $pass, $db);

if($connect->connect_error){
die('Maaf gagal menghubungkan dengan database: (' . $connect->connect_errno . ')'. $connect->connect_error);

}

$url = "file:///C:/xampp/htdocs/response.json";
$json = file_get_contents($url);

$split = explode("\n", $json);

foreach ($split as $record) { 
$rows = json_decode($record,true);
$row = $rows['data'];

    foreach ($row as $result){
        $no= $result['no'];
        $id_produk= $result['id_produk'];
        $nama_produk = $result['nama_produk'];
        $kategori= $result['kategori'];
        $harga= $result['harga'];
        $status= $result['status']; 

        $sql = "INSERT INTO produks VALUES ('".$no."','".$id_produk."', '".$nama_produk."', '".$kategori."', '".$harga."', '".$status."')";

        $result = mysqli_query($connect, $sql);
    }


}

echo "Import data berhasil !!";
?>