<title>Data Foto</title>
<section id="portofolio">
    <div class="container">
        <?php if($this->session->flashdata('flash-data')){?>
        <div class="row mt-4">
            <div class="col -md-6">
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    Data Foto <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
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
            <a href="<?= base_url(); ?>foto/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>
        
 <!-- DataTales Example -->
 <div class="card shadow mb-4 ml-5 mr-5 mt-3">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Foto</h6>
        </div>
        <div class="card-body">
          <div class="tableSize">
    <table class="table" id="myTable" style="text-align:center">
      <thead class="thead-dark">
          <tr>
          <th>Id Foto</th>
          <th>Judul</th>
          <th>Tanggal Foto</th>
          <th>Isi Foto</th>
        <th></th>
          </tr>
      </thead>
    
      <tbody>
        <?php foreach($foto as $foto): ?>
          <tr>
            <td><?php echo $foto->id_foto; ?></td>
            <td><?php echo str_word_count($foto->judul) > 5 ? substr($foto->judul,0,5)."[...]" : $foto->judul ; ?></td>
            <td><?php echo str_word_count($foto->tanggal_foto) > 5 ? substr($foto->tanggal_foto,0,5)."[...]" : $foto->tanggal_foto ; ?></td>
            <td>
                <img src="<?php echo base_url('images/foto/'.$foto->isi_foto) ?>" width='350px' height='300px' alt="">
            </td>
            <td>
              <a href="<?= base_url(); ?>foto/detail/<?= $foto->id_foto ;?>" class="btn btn-primary">
                <i class="fa fa-eye" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>foto/edit/<?= $foto->id_foto ;?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i>
              </a>
              <a href="<?= base_url(); ?>foto/hapus/<?= $foto->id_foto ;?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    
    </table>
  </div>

</div>