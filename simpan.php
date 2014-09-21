<title>Multiple Insert Data Dengan jQuery</title>
	<style>
	body{
	background-color:#666666;
	color:#FFFFFF;
	font-size:12px;
	font-family:Tahoma;
	}
	table{
	border:1px solid #FFFFFF;
	padding:0px;
	font-size:12px
	}
	td{
	border:1px solid #FFFFFF;
	padding:5px;
	}
	input{
	background-color:#FF9900;
	border:1px solid #000000;
	padding:5px;
	cursor:pointer;
	}
	</style>
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr>
	<td>Kode Barang</td><td>Nama Barang</td><td>Harga Barang</td>
	</tr>
<?php
if($_POST['nomor']!="")
{
foreach($_POST['nomor'] as $i)
{
	/*query insert ke database taruh disini
	mysql_query = "insert into tbl_barang (kd_brng,nm_brng,hrga) values('$_POST['kode_barang_'.$i]','$_POST['nama_barang_'.$i]','$_POST['harga_barang_'.$i]')";
	*/
	echo '<tr>
	<td>'.$_POST['kode_barang_'.$i].'</td>
	<td>'.$_POST['nama_barang_'.$i].'</td>
	<td>'.$_POST['harga_barang_'.$i].'</td>
	</tr>';
}
}
?>
</table>