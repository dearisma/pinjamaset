<title>Form Tambah Data Pembayaran</title>

<section id="portofolio">

    <body>
        <div class="container mt-5 col-md-6 ">
            <!-- <div class="row mt-4">
            <div class="col-md-6"> -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <?php echo form_open_multipart('pembayaran/pembayaran/tambah_a'); ?>
                <div class="modal-body">
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php } ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label form="id_anggota"><b>ID ANGGOTA</b> </label>
                            <input type="text" class="form-control" id="id_anggota" name="id_anggota" value=''>
                        </div>

                        <div class="form-group">
                            <label form="tanggal"><b>TANGGAL</b> </label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>

                        <div class="form-group">
                            <label form="jumlah"><b>JUMLAH KAS</b> </label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>

                        <div class="form-group">
                            <label form="foto"><b>FOTO</b> </label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>

                        <div class="form-group">
                            <a type="button" class="btn btn-secondary" href="<?= base_url()?>/pembayaran/pembayaran/index_a">Close</a>
                            <button type="submit" class="btn btn-primary" name="submit" value="upload">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php form_close(); ?>
            <!-- </div>
        </div> -->
        </div>
    </body>
</section>