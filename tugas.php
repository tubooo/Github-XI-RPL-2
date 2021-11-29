<?php
if (isset($_POST['submit'])) {
       
    $operasi = $_POST['operasi'];
    $operasi2 = $_POST['operasi2'];
    $kategori1 = $_POST['kategori1'];
    $kategori2 = $_POST['kategori2'];
    $kategori3 = $_POST['kategori3'];
if ($operasi == "jkt")
{
    if ($operasi2 == "sin")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
    }

    elseif ($operasi2 == "kul")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;

    }
}

elseif ($operasi == "srg")
{
    if ($operasi2 == "sin")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
    }
    elseif ($operasi2 == "kul")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
    }
}
elseif ($operasi == "plm")
{
    if ($operasi2 == "sin")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
    }
    elseif ($operasi2 == "kul")
    {
        //harga dewasa
        $hargadewasa = 300000 * $kategori1;
        //harga anak
        $hargaanak = (300000 * 0.40) * $kategori2;
        //harga bayi
        $hargabayi = (300000 * 0.25) * $kategori3;
        //harga total
        $hargatotal = $hargadewasa + $hargaanak + $hargabayi;
    }
}

}
?>


<html>
    <center>
    <head><title>Tugas</title></head>
    <body align="center">
        <table border="1">
            <form action="" method="post">
            <tr>
                <th colspan="3">Pemesanan Tiket Online</th>
            </tr>
            <tr>
                <td colspan="3">&nbsp&nbsp&nbsp&nbsp Promo untuk Keberangkatan 20 Juli 2021 !!&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            </tr>
            <tr>
                <td>DEPART</td>
                <td> : </td>
                <td><select name="operasi">
                    <option value="">--PILIH--</option>
                    <option value="jkt">JAKARTA(CKG)</option>
				    <option value="srg">SEMARANG(SRG)</option>
				    <option value="plm">PALEMBANG(PLM)</option>
			</select></td>
            </tr>
            <tr>
                <td>RETURN</td>
                <td> : </td>
                <td><select name="operasi2">
                    <option value="">--PILIH--</option>
                    <option value="sin">SINGAPURA(SIN)</option>
				    <option value="sin">KUALA LUMPUR(KUL)</option>
			</select></td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="number" name="kategori1" placeholder="Jumlah Tiket">Dewasa(+17)<br>
                <input type="number" name="kategori2" placeholder="Jumlah Tiket">Anak(+2)<br>
                <input type="number" name="kategori3" placeholder="Jumlah Tiket">Bayi(0-2)<br>
                </td> 
            <tr>
                <td>Mata Uang</td>
                <td>:</td>
                <td><input type="radio" name="idr value="IDR>IDR</td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="submit">
                <input type="reset" name="reset" value="reset">
              </td>
            </tr>
            

</form>
        </table>
        </center>
    </body>
</html>

<html>
    <center>
    <body align="center>">
        <br>
        <br>
        <table border="2">
            <tr>
                <th colspan="3">Struk Pembayaran</th>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td>Dewasa(+17) <?php echo $kategori1?> tiket<br>
                Anak(+2) -> <?php echo $kategori2?> tiket<br>
                Bayi(0-2) -> <?php echo $kategori3?> tiket</td>
            </tr>
            <tr>
                <td>Jumlah Yang Harus Di Bayar</td>
                <td>:</td>
                <td><?php echo $hargatotal?></td>
            </tr>

        </table>
        </center>


    </body>
</html>
