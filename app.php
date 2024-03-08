<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_informasi");

$rows = mysqli_query($koneksi, "SELECT * FROM tb_data");

echo '<table border="1">
    <tr>
        <td>No</td>
     
        <td>Jabatan</td>
        <td>Keterangan</td>
        <td>Waktu</td>
    </tr>';
$i = 1;
foreach ($rows as $row) {
    echo '<tr>
            <td>' . $i++ . '</td>
          
            <td>' . $row['jabatan'] . '</td>
            <td>' . $row['keterangan'] . '</td>
            <td>' . $row['waktu'] . '</td>
            
          </tr>';
}
echo '</table>';
