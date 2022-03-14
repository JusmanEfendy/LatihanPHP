<h3> Tambah SmartPhone (TOOLS MODDED BY JUSSY) </h3>

<form action =" " method="post">

<table>
    <tr>
        <td width='130'>IMEI</td>
        <td><input type="text" name="imei"></td>
    </tr>
    <tr>
        <td> Nama SmartPhone </td>
        <td> <input type="text" name="nama_smartphone"></td>
    </tr>
    <tr>
        <td> Harga </td>
        <td><input type="text" name ="harga"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value = "Simpan" name="Proses"></td>



</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['Proses'])){
    mysqli_query($koneksi, "insert into smartphone set
    imei = '$_POST[imei]',
    nama_smartphone = '$_POST[nama_smartphone]',
    harga = '$_POST[harga]'
    ");

    echo "  Dan Data Telah Disimpan";
}
?>