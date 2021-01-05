<title>Tambah Foto</title>

<div class="cc">
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h2>Form Tambah Data Foto</h2>
					</div>
					<div class="card-body">
						<?php if(validation_errors()): ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors() ?>
						</div>
						<?php endif; ?>
						<?php echo form_open_multipart('foto/tambah') ?>
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="">Judul</label>
								<input type="text" name="judul" class="form-control">
							</div>
							<div class="form-group mt-1">
								<label for="">TANGGAL</label>
								<input type="date" name="tanggal_foto" class="form-control">
							</div>
							
                            <div class="form-group mt-1">
								<label for="">ID FOTO</label>
								<input type="text" name="id_foto" class="form-control">
							</div>							
							<div class="form-group mt-1">
								<label for="">FOTO</label>
								<input type="file" name="isi_foto" class="form-control pt-3 pb-5">
							</div>
							<div class="form-group mt-3">
								<button type="submit" class="btn btn-success float-right ">
									<i class="fas fa-plus"></i>
									<span>Submit</span>
								</button>
							</div>
						</form>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
