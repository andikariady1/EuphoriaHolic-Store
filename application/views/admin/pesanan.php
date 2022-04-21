<div class="container-fluid">
    <h4>Pesanan Barang</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pesanan Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>

        <?php foreach ($pesan as $p) : ?>
            <tr>
                <td><?php echo $p->id_invoice ?></td>
                <td><?php echo $p->nama_brg ?></td>
                <td><?php echo $p->jumlah ?></td>
                <td><?php echo $p->harga ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</div>