<title>Tambah Pengumuman</title>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
           <div class="card">
            <div class="card-header">
            Form Tambah Data Pengumuman
            </div>
            <div class="card-body">
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?=validation_errors()?>
                </div>
                <?php endif?>
                <form action="" method="post">
                <div class="form-group">  
                <div class="form-group">
                        <label for="id_pengumuman">No Pengumuman</label> 
                        <input type="text" class="form-control" id="id_pengumuman" name="id_pengumuman">
                    </div>  
                    <div class="form-group">
                        <label for="tanggal_pengumuman">Tanggal Pengumuman</label> 
                        <input type="date" class="form-control" id="tanggal_pengumuman" name="tanggal_pengumuman">
                    </div>                
                    <div class="form-group" width=200>
                        <label for="isi">Isi</label>
                        <textarea type="text" class="form-control" id="isi" name="isi"></textarea>
                    </div>
                 </div>
                    <button type="submit" name="submit" class="btn btn-primary float-right"> Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



