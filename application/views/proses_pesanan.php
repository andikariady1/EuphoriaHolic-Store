<head>
    <link href="<?php echo base_url('assets/'); ?>css/tracking.css" rel="stylesheet">
</head>

<div class="container-fluid">
    <div class="alert alert-success">
        <p class="text-center align-middle">Selamat, Pesanan Anda telah Berhasil diproses!</p>
    </div>
</div>

<div class="container">
    <article class="card">
        <header class="card-header"> Tracking Pesanan </header>
        <div class="card-body">
            <h6>Order ID: OD7532894289378</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Estimasi Waktu Sampai : </strong> <br>2 Hari Setelah Pemesanan</div>
                    <div class="col"> <strong>Pengiriman :</strong> <br> JNE | <i class="fa fa-phone"></i> (021) 29278888 </div>
                    <div class="col"> <strong>Status :</strong> <br> Telah diambil oleh Kurir </div>
                    <div class="col"> <strong>Tracking :</strong> <br> BD045903594059 </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order telah diKonfirmasi</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Telah diambil oleh Kurir</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Dalam Perjalanan </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Sudah diterima</span> </div>
            </div>
            <hr>
            <ul class="row">
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="<?php echo base_url('uploads/kaosp_2.jpg') ?>" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"><strong> Adidas </strong> <br> Bahan 100% dari Cotton Single Jersey </p> <span class="text-muted">Rp 31.2000 </span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="<?php echo base_url('uploads/dressw4.jpg') ?>" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"><strong> Cloth Inc Micah Pleat Dress</strong> <br> Dress polos yang desainnya Simpel </p> <span class="text-muted">Rp 399.000</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="<?php echo base_url('uploads/rokw3-fococlipping-standard.png') ?>" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"><strong>Miyoshi Jeans Short Skirt</strong> <br> Unik dengan ikat pinggang berbentuk lengan kemeja </p> <span class="text-muted">Rp 329.900</span>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <hr>
            <a href="<?php echo base_url('welcome') ?>" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Kembali Belanja</a>
        </div>
    </article>
</div>