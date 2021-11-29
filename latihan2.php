<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION=" " METHOD="POST" NAME="input">
          Nama Anda : <input type="text" name="nama" required><br>
          <input type="submit" name="input" value="input">
        </FORM>
    </body>
</html>
<?php
if (isset($_POST['Input'])){
    $nami = $_POST['Nama'];
    echo "Nama Anda : <b>$nami</b>";
}
 
?>