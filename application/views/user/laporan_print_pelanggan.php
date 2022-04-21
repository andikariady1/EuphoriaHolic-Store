<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>

    <h3>
        <center>Laporan Data Pelanggan</center>
    </h3>
    <br />
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Alamat</th>
                <th scope="col" nowrap>Member Sejak</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($pelanggan as $p) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['username']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= date('d F Y', $p['tanggal_input']); ?></td>
                    <td>
                        <picture>
                            <source srcset="" type="image/svg+xml">
                            <img src="<?= base_url('assets/img/profile/') . $p['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                        </picture>
                    </td>
                    <!--<td>
                                        <a href="<?
                                                    ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?
                                                    ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['judul_buku']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>