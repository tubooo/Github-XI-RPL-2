<html>
    <center>
<head><title>Seorang Anak Sedang Browsing</title></head>
<h1>Anak Itu Sedang Mencari Rumus Rumus Matematik</h1>
<h3> RUMUS YANG DICARI TENTANG LUAS DAN KELILING BANGUN DATAR </h3>
<body>
<form actiton="" method="post">
<table border=0>
<tr>
    <td>Panjang Persegi Panjang
    <td>:
    <td><input type="text" name="panjang"><br>
</tr>
<tr>
    <td>Lebar Persegi Panjang
    <td>:
    <td><input type="text" name="lebar"><br>
</tr>
<tr>
    <td><input type="submit" name="input-data" value=Input>
               
</tr>
</table>
</form>
</body>
</html>

<h5> Hasil Anak Membuat Sebuah Rumus Yang Dicari </h5>
<?php
if (isset ($_POST["input-data"]))
{
$panjang=$_POST["panjang"];
$lebar=$_POST["lebar"];
$luas= $panjang*$lebar;
echo "Panjang Persegi Panjang Adalah : $panjang <br>";
echo "Lebar Persegi Panjang Adalah : $lebar <br>";
echo "Rumus : $panjang * $lebar <br>";
echo "Hasil : $luas";
}

?>
</center>