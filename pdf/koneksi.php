<?php
if (version_compare(phpversion(), '5.3.0', '>=') == 1) {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
} else {
    error_reporting(E_ALL & ~E_NOTICE);
}
//konfigurasi
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="laporan";

//koneksi 
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$tanggal=date("d/M/y");

//cek
if ($koneksi)
{
	//echo "Berhasil terkoneksi ke database..!!";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script>
<?php
}

?>
