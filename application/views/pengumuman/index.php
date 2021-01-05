<title>Data Pengumuman</title>
<section id="portofolio">
    <div class="container">
        <?php if($this->session->flashdata('flash-data')){?>
        <div class="row mt-4">
            <div class="col -md-6">
                <div class="alert alert-succes alert-dismissible fade show" role="alert">
                    Data Pengumuman <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
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
                <a href="<?= base_url(); ?>pengumuman/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>


   <!-- DataTales Example -->
   <div class="card shadow mb-4 ml-5 mr-5 mt-3">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengumuman</h6>
        </div>
        <div class="card-body">
          <div class="tableSize">
    <table class="table" id="myTable" style="text-align:center">
      <thead class="thead-dark">
                <tr>
                <th>Id </th>
                <th>Tanggal</th>
                <th width="300">Isi</th>
                <th></th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                <?php foreach($pengumuman as $pengumuman):?>
                <td><?= $pengumuman['id_pengumuman'];?></td>
                <td><?= $pengumuman['tanggal_pengumuman'];?></td>
                <td><?= $pengumuman['isi'];?></td>
                <td>

                <a href="<?= base_url();?>pengumuman/hapus/<?= $pengumuman ['id_pengumuman'];?>"
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini Akan Dihapus?');">Hapus</a>
                <a href="<?= base_url();?>pengumuman/edit/<?= $pengumuman ['id_pengumuman'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<?= base_url();?>pengumuman/detail/<?= $pengumuman ['id_pengumuman'];?>"
                class="badge badge-primary float-right">Detail</a>
                </td>
                </tr>
            </tbody>
            
            <?php endforeach; ?>
            </table>
        </div>
        </div>
    </div>

</section>