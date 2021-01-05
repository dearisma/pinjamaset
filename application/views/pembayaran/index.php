<title>Data Pembayaran Kas</title>

<section id="portofolio">
    <div class="container">
        <?php if($this->session->flashdata('flash-data')){?>
        <div class="row mt-4">
            <div class="col -md-6">
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    Data kas <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="row mt-5 ml-5">
      <div class="row md-6">
      <a class="btn btn-primary" href="<?php echo base_url("pembayaran/pembayaran/tambah")?>">Tambah Data</a>
      <a class="btn btn-primary" href="<?php echo base_url("pembayaran/pembayaran/cetak")?>">Cetak Laporan</a>
      </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 ml-5 mr-5 mt-3">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran Kas</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th><center>Foto </center></th>
                <th><center>Terima</center></th>
                <th><center>Custom</center></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach($kas as $ks):?>
                <td><?= $ks['id'];?></td>
                <td><?= $ks['nama'];?></td>
                <td><?= $ks['tanggal'];?></td>
                <td><?= $ks['jumlah'];?></td>
                <td><img src="<?php echo base_url('images/pembayaran/'.$ks['foto']) ?>" width='100px' height='100px' alt=""></td>
                <td>
                
                <center>
                    <?php 
                        $this->load->helper('html');
                    if ($ks['terima'] == null){
                        echo "<a href='pembayaran/setYes/".($ks['id'])."' class='btn btn-success mr-2' >Ya</a>";
                        echo "<a href='pembayaran/setNo/".($ks['id'])."' class='btn btn-warning' >Tidak</a>";
                    }else{
                        if($ks['terima'] == 'Y'){
                            $image=[
                              'src'   	=> base_url('assets/img/check.png'),
                              'class' 	=> 'post_images',
                              'width' 	=> '50',
                              'height'	=> '50',
                              'title' 	=> 'The Icon Dumet School',
                              'rel'   	=> 'lightbox'
                            ];
                            echo img($image);
                          }else{
                            $image=[
                              'src'   	=> base_url('assets/img/cross.png'),
                              'class' 	=> 'post_images',
                              'width' 	=> '50',
                              'height'	=> '50',
                              'title' 	=> 'The Icon Dumet School',
                              'rel'   	=> 'lightbox'
                            ];
                            echo img($image);
                          }
                    }
                    ?>
                    </center>
                <td>
                <a href="<?= base_url();?>pembayaran/pembayaran/edit/<?= $ks ['id'];?>"
                                class="btn btn-info" >Edit</a>
              <a href="<?= base_url();?>pembayaran/pembayaran/detail/<?= $ks ['id'];?>"
                                class="btn btn-primary">Detail</a>
              <a href="<?= base_url();?>pembayaran/pembayaran/hapus/<?= $ks ['id'];?>"
                                class="btn btn-danger"
                                onclick="return confirm('Yakin Data ini Akan Dihapus?');">Hapus</a>
              </td>
            </tr>
          </tbody>
            
            <?php endforeach; ?>
            </table>
        </div>
        </div>
    </div>

</section>