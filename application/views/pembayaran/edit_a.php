<title>Edit Pembayaran </title>

<section id="portofolio">
    <div class="container mt-5 col-md-6">
        <div class="card">
            <div class="card-header">
                <b>Form Merubah Data Pembayaran</b>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <!-- $this->form_validation->set_message('rule,'eror message'); -->
                            <?= validation_errors();?>
                        </div>
                    <?php endif;?>

                    <?php echo form_open_multipart('pembayaran/pembayaran/edit_a/'.$kas['id']); ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label form="id_anggota">  <b>ID ANGGOTA</b> </label>
                                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $kas['id_anggota'];?>">
                            </div>
                            <div class="form-group">
                                <label form="tanggal">  <b>TANGGAL KAS</b> </label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $kas['tanggal'];?>">
                            </div>
                            <div class="form-group">
                                <label form="jumlah">  <b>JUMLAH KAS</b> </label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $kas['jumlah'];?>">
                            </div>
                            <div class="form-group">
							<label for="">OLD IMAGE</label>
							<input type="text" name="tempImg" value="<?= $kas['foto'];?>" class="form-control mb-3"
								id="tempImg" readonly>

						</div>
						<div class="form-group">
							<label for="">NEW IMAGE</label>
							<input type="file" name="foto" class="form-control pt-3 pb-5 mb-2"
								value="<?= $kas['foto'];?>">
								
                            <button type="submit" name="submit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</section>