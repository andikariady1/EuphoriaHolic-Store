<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Card Example -->
        <div class="col-xl-4 col-md-7 mb-5">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pelanggan Terdaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('profiluser/pelanggan'); ?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                    <path fill="currentColor" d="M27.303 12a2.662 2.662 0 0 0-1.908.806l-.393.405l-.397-.405a2.662 2.662 0 0 0-3.816 0a2.8 2.8 0 0 0 0 3.896L25.002 21l4.209-4.298a2.8 2.8 0 0 0 0-3.896A2.662 2.662 0 0 0 27.303 12zM2 30h2v-5a5.006 5.006 0 0 1 5-5h6a5.006 5.006 0 0 1 5 5v5h2v-5a7.008 7.008 0 0 0-7-7H9a7.008 7.008 0 0 0-7 7zM12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Example -->
        <div class="col-xl-4 col-md-7 mb-5">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Stok Barang Tersisa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $where = ['stok != 0'];
                                $totalstok = $this->ModelBarang->total('stok', $where);
                                echo $totalstok;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/data_barang'); ?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                    <g fill="currentColor">
                                        <path d="M27.707 7.707a1 1 0 0 0-1.414-1.414L24 8.586l-2.293-2.293a1 1 0 1 0-1.414 1.414L22.586 10l-2.293 2.293a1 1 0 0 0 1.414 1.414L24 11.414l2.293 2.293a1 1 0 1 0 1.414-1.415L25.414 10l2.293-2.293Zm6.242 24.477a1 1 0 0 1-.633 1.265l-4.5 1.5a1 1 0 0 1-.632-1.898l4.5-1.5a1 1 0 0 1 1.265.633Z" />
                                        <path fill-rule="evenodd" d="M6.684 26.449L10 27.554V36a1 1 0 0 0 .673.945l12.992 4.497a.99.99 0 0 0 .637.011l.014-.004l.015-.005l12.996-4.499A1 1 0 0 0 38 36v-8.446l3.316-1.105a1 1 0 0 0 .465-1.574l-4-5a1 1 0 0 0-.456-.32l-12.998-4.5a1 1 0 0 0-.654 0l-12.998 4.5a.999.999 0 0 0-.456.32l-4 5a1 1 0 0 0 .465 1.574Zm14.635 4.124l1.681-2.4v10.923l-11-3.808V28.22l8.184 2.728a1 1 0 0 0 1.135-.376ZM14.057 20.5L24 23.942l9.943-3.442L24 17.058L14.057 20.5Zm12.624 10.073L25 28.174v10.923l11-3.808V28.22l-8.184 2.728a1 1 0 0 1-1.135-.376ZM11.34 21.676l-2.663 3.329l5.511 1.837l5.92 1.973l2.313-3.303l-.135-.047l-10.946-3.79Zm27.983 3.329l-2.663-3.33l-11.081 3.837l2.313 3.303l11.431-3.81Z" clip-rule="evenodd" />
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Card Example -->
        <div class="col-xl-4 col-md-7 mb-5">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Barang Pesanan
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                        $where = ['invoice != 0'];
                                        $totalinvoice = $this->ModelInvoice->total('jumlah', $where);
                                        echo $totalinvoice;
                                        ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 1%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('admin/pesanan'); ?>"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                    <path fill="currentColor" d="M320 288v-22.336C320 154.688 405.504 64 512 64s192 90.688 192 201.664v22.4h131.072a32 32 0 0 1 31.808 28.8l57.6 576a32 32 0 0 1-31.808 35.2H131.328a32 32 0 0 1-31.808-35.2l57.6-576a32 32 0 0 1 31.808-28.8H320zm64 0h256v-22.336C640 189.248 582.272 128 512 128c-70.272 0-128 61.248-128 137.664v22.4zm-64 64H217.92l-51.2 512h690.56l-51.264-512H704v96a32 32 0 1 1-64 0v-96H384v96a32 32 0 0 1-64 0v-96z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- row table-->
        <div class="row">
            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M27.303 12a2.662 2.662 0 0 0-1.908.806l-.393.405l-.397-.405a2.662 2.662 0 0 0-3.816 0a2.8 2.8 0 0 0 0 3.896L25.002 21l4.209-4.298a2.8 2.8 0 0 0 0-3.896A2.662 2.662 0 0 0 27.303 12zM2 30h2v-5a5.006 5.006 0 0 1 5-5h6a5.006 5.006 0 0 1 5 5v5h2v-5a7.008 7.008 0 0 0-7-7H9a7.008 7.008 0 0 0-7 7zM12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7z" />
                        </svg>
                        Data Pelanggan</span>
                    <a class="text-danger" href="<?php echo base_url('profiluser/pelanggan'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Pelanggan</th>
                            <th>Username</th>
                            <th>Role ID</th>
                            <th>Member Sejak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($pelanggan as $p) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['username']; ?></td>
                                <td><?= $p['role_id']; ?></td>
                                <td><?= date('Y', $p['tanggal_input']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>


            <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
                <div class="page-header">
                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path fill="currentColor" d="M320 288v-22.336C320 154.688 405.504 64 512 64s192 90.688 192 201.664v22.4h131.072a32 32 0 0 1 31.808 28.8l57.6 576a32 32 0 0 1-31.808 35.2H131.328a32 32 0 0 1-31.808-35.2l57.6-576a32 32 0 0 1 31.808-28.8H320zm64 0h256v-22.336C640 189.248 582.272 128 512 128c-70.272 0-128 61.248-128 137.664v22.4zm-64 64H217.92l-51.2 512h690.56l-51.264-512H704v96a32 32 0 1 1-64 0v-96H384v96a32 32 0 0 1-64 0v-96z" />
                        </svg>
                        Data Barang</span>
                    <a href="<?= base_url('admin/data_barang'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
                </div>
                <div class="table-responsive">
                    <table class="table mt-3" id="table-datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Barang</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($barang as $b) { ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $b['nama_brg']; ?></td>
                                    <td><?= $b['keterangan']; ?></td>
                                    <td><?= $b['kategori']; ?></td>
                                    <td><?= $b['stok']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- end of row table-->
        <!-- Content Row -->
    </div>