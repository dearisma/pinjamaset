<title>Detail Foto</title>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Foto
                </div>
                <div class="card-body">
          <label for=""></label>
          
          <p class="card-text">
            <label for=""><b>Id Foto <span style="margin-left:3.25rem">:</span> </b></label>
              <?= $foto['id_foto']; ?>
          </p>

          <p class="card-text">
            <label for=""><b>Judul <span style="margin-left:4rem">:</span> </b></label>
              <?= $foto['judul']; ?>
          </p>
          
          <p class="card-text">
            <label for=""><b>Tanggal <span style="margin-left:2.8rem">:</span> </b></label>
              <?= $foto['tanggal_foto']; ?>
          </p>
         
 
          <p class="card-text">
            <label for=""><b>Foto <span style="margin-left:4.3rem">:</span> </b></label>
          </p>
          <img src="<?= base_url('images/foto/'.$foto['isi_foto']) ?>" alt="" style="margin-left:9rem;width:350px;heigth:300px">
          <div>
            <a href="<?= base_url() ;?>foto/index" class ="btn btn-primary float-right">
              <i class="far fa-arrow-alt-circle-left" aria-hidden="true">&nbsp;Keluar</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>