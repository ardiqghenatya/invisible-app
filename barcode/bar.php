<?php
include "../config/config.php";

$sql = "SELECT * FROM barang";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

	$_SESSION['kode'] = $kode_barang;
	//header('location:index.php');
} 
else {
//if ($username ='admin' );	
echo "barang tidak ditemukan" ;
}
mysql_close($conn)


//$txt1 = "123445555" ;
//echo "$txt2" ;
//echo '<img src="barcode.php?text='.$txt1.'" alt="testing">';

?>

 