<?php

$db_host	= "172.17.0.1";
$db_user	= "root";
$db_pass	= "panjisula";
$db_name	= "db_perpus";

$konek	= mysql_connect($db_host,$db_user,$db_pass,$db_name) or die ("Gagal koneksi ke server");
mysql_select_db($db_name, $konek) or die ("Gagal mengaktifkan database".mysql_error());

$denda1=200;
?>
