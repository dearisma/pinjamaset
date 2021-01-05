<title>Detail Pengumuman</title>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Pengumuman
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <label for=""><b>Id Pengumuman <span style="margin-left:3.25rem">:</span> </b></label>
                        <?= $pengumuman['id_pengumuman'];?></p>

                    <p class="card-text">
                        <label for=""><b>Tanggal Pengumuman <span style="margin-left:0.5rem">:</span> </b></label>
                        <?= $pengumuman['tanggal_pengumuman'];?></p>
                        
                    <p class="card-text">
                        <label for=""><b> Isi <span style="margin-left:10rem">:</span> </b></label>
                        <?= $pengumuman['isi']; ?></p>
                    <a href="<?= base_url();?>pengumuman" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>