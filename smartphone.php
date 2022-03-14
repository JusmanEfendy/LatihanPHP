<h3> List SmartPhone by Jussy</h3>

<table border = "2">
    <tr>
        <th> No </th>
        <th> IMEI </th>
        <th> Nama SmartPhone </th>
        <th> Harga </th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from smartphone");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no<</td>
            <td>$tampil[imei]</td>
            <td>$tampil[nama_smartphone]</td>
            <td>$tampil[harga]</td>
        </tr>";
        $no++;
    }
    ?>
</table>
