<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="<?= base_url('laporan/cetak_laporan_pelanggan'); ?>" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M420 128.1V16H92v112.1A80.1 80.1 0 0 0 16 208v192h68v-32H48V208a48.054 48.054 0 0 1 48-48h320a48.054 48.054 0 0 1 48 48v160h-44v32h76V208a80.1 80.1 0 0 0-76-79.9Zm-32-.1H124V48h264Z" />
                    <path fill="currentColor" d="M396 200h32v32h-32zm-280 64H76v32h40v200h272V296h40v-32H116Zm240 200H148V296h208Z" />
                </svg> Print</a>
            <table class="table table-hover">
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
                                    <img src="<?= base_url('assets/img/profile/') . $p['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:90px;height:90px;">
                                </picture>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->