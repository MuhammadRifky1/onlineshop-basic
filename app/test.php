<?php




require_once 'db.php';

$db = new db;
	//WHERE = ? => ambil dari baris keberapa
$getRow = $db->getRow("SELECT * FROM items WHERE id_item = ?", ['1'] );
	//FetchAll semua baris sudah terpilih
$getRows = $db->getRows("SELECT * FROM items", ['nama_item']);
print_r($getRows);
die();
// pilih untuk colum apa
echo $getRow['nama_item']."<br>"."<br>"."<br>"."<br>";
//pilih untuk di looping pada colum apa misal merk
foreach ($getRows as $s) {
	echo $s['merk']."<br>";
}

 ?>