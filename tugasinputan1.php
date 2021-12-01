<html>

    <head>Kalkulator Luas Dan Keliling Bangun Datar<title></title>
</head>
<body align="center">
    <br>
    <br>
    <center>
        <table border="7" cellpadding="4">
            <form action="" method="post">
                <tr>
                    <th colspan="3">Kalkulator Luas Dan Keliling Bangun Datar</th>

                </tr>
                <tr>
                    <td>Pilih Bangun Datar</td>
                    <td>:</td>
                    <td><select name="bangun">
                        <option value="">--PILIH BOYS--</option>
                        <option value="segitiga">Segitiga</option>
                        <option value="persegi">Persegi</option>
                        <option value="persegipanjang">Persegi Panjang</option>
                        <option value="belahketupat">Belah Ketupat</option>
                        <option value="trapesium">Trapesium</option>
                        <option value="lingkaran">Lingkaran</option>
                    </select>
                    </td>
                </tr>
                <td colspan="3"><input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
              </td>
            </tr>
            </form>

        </table>
    </center>

</body>
</html>


<?php



// case :
// Seorang Anak sedang browsing
// Anak itu sedang mencari rumus matematik

// tugas :
// Buatkan seorang anak tersebut sebuah aplikasi rumus yg dicari,
// yang ketika dibutuhkan anak tsb tidak usah susah untuk mengerjakan

// Buatkan Rumus Minimal 5 - Maksimal 8

if (isset($_POST['submit'])){
$bangun = $_POST['bangun'];

if ($bangun == "segitiga") {
        header ("location : segitiga.php");
}
elseif ($bangun == "persegi") {
        header ("location : persegi.php");
}
elseif ($bangun == "persegipanjang") {
        header ("location : persegipanjang.php");
}
elseif ($bangun == "belahketupat") {
        header ("location : belahketupat.php");
}

elseif ($bangun == "trapesium") {
        header ("location : trapesium.php");
}
elseif ($bangun == "lingkaran") {
        header ("location : lingkaran.php");
    }
}
?>



