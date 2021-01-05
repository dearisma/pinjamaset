<body>
<title>Data User</title>
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <?php if($this->session->flashdata('flash-data')){?>
      <div class="row mt-4">
          <div class="col -md-6">
              <div class="alert alert-succes alert-dismissible fade show" role="alert">
                  Data User <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      </div>
    <?php } ?>

    <br>

  <!-- DataTales Example -->
  <div class="container" style="margin-top:20px">
<div class="col-md-12">
    <h1 style="text-align: center; margin-botton:30px">Daftar User</h1>
</div>
<table class="table table-striped table-bordered" id="list_mhs">

    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis  Kelamin</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Jabatan</th>
        <th>Action</th>
        </tr>   
    </thead>
    
    <tbody>
        <?php  
        $no=1;
        foreach($user as $user){?>
        <tr>
            <td> <?php echo $no++; ?></td>
            <td> <?php echo $user->nama; ?></td>
            <td> <?php echo $user->jenis_kelamin; ?></td>
            <td> <?php echo $user->alamat; ?></td>
            <td> <?php echo $user->email; ?></td>
            <td> <?php echo $user->level; ?></td>
            <td>
            <a href="<?php echo site_url(); ?>pengurus/register/edit/<?php echo $user->id; ?>" class="btn btn-danger">Edit</a>
           
            </td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
</div> 
</div>
          </div>






