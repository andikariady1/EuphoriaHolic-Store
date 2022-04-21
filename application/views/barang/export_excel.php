<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename: $title.xls");
header("Pragma: no-chace");
header("Expires: 0");
?>

<h3>
    <center>Laporan Data Barang EuphoriaHolic-Store</center>
</h3>
<br />
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($barang as $b) {
        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $b['nama_brg']; ?></td>
                <td><?= $b['keterangan']; ?></td>
                <td><?= $b['kategori']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['stok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>