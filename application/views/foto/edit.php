<title>Edit Foto </title>
<div class="container">
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Merubah Data foto</b>
        </div>
        <div class="card-body">
            <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?= validation_errors();?>
        </div>
        <?php endif;?>

        <?php echo form_open_multipart('foto/edit/'.$foto['id_foto']) ?>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id_foto" value="<?= $foto['id_foto'] ;?>" readonly>
						<h3>ID Foto : <?= $foto['id_foto'] ?></h3>
						
						
						<div class="form-group">
							<label for="judul">JUDUL</label>
							<input type="text" class="form-control" id="judul" name="judul"
								value="<?= $foto['judul'] ;?>">
						</div>
						
						<div class="form-group">
							<label for="tanggal_foto">TANGGAL</label>
							<input type="date" class="form-control" id="tanggal_foto" name="tanggal_foto" value="<?= $foto['tanggal_foto'] ;?>">
						</div>
							<div class="form-group">
							<label for="">OLD IMAGE</label>
							<input type="text" name="tempImg" value="<?= $foto['isi_foto'];?>" class="form-control mb-3"
								id="tempImg" readonly>

						</div>
						<div class="form-group">
							<label for="">NEW IMAGE</label>
							<input type="file" name="isi_foto" class="form-control pt-3 pb-5 mb-2"
								value="<?= $foto['isi_foto'];?>">
								
						</div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
					</form>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>
