<?php
session_start();


$txt1 = $_POST['barcode'];

echo "$txt1";
echo '<img src="barcode.php?text='.$txt1.'" alt="testing">';


 $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>

  	<a href="<?=$url?>">Go Back</a>
  	<a href="../index.php">index</a>
	<a href="../pdf/cetak.php">print</a>
