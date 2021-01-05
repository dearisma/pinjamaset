<title>Edit Pengumuman</title>

<div class="container">
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Merubah Data Pengumuman</b>
        </div>
        <div class="card-body">
            <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?= validation_errors();?>
</div>
<?php endif;?>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pengumuman['id_pengumuman'];?>">
            <div class="form-group">
                <label for="id_pengumuman">Nomor</label>
                <input type="text" class="form-control" 
                id="id_pengumuman" 
                name="id_pengumuman"
                value="<?=$pengumuman['id_pengumuman'];?>">
            </div>
            
            <div class="form-group">
                <label for="tanggal_pengumuman">Tanggal</label>
                <input type="date" class="form-control" 
                id="tanggal_pengumuman" 
                name="tanggal_pengumuman"
                value="<?=$pengumuman['tanggal_pengumuman'];?>">
            </div>

            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea type="text" class="form-control" 
                id="isi" 
                name="isi"
                value="<?=$pengumuman['isi'];?>"></textarea>
            </div>
            
            </div>
            <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
        </form>
        </div>
        </div>
    </div>
 </div>
</div>