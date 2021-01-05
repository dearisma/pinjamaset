<!DOCTYPE html>
<html lang="en">

<head>

<style type="text/css">
#kiri
{
width:40%;
height:80px;
float:left;
}
#kanan
{
width:40%;
height:80px;
float:right;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

 <!-- Outer Row -->
 <div class="row justify-content-center">

<div class="col-xl-10 col-lg-0 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
      
        <div tag="center">
          
            <div tag="center">
                  <?php echo $this->session->flashdata('pesan') ?><br>
                  </div>
                  <form class="form" method="post" action="<?php echo base_url().'anggota/register/tambah'?>">
            <div class="modal-body"> 
            <?php if(validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
            <?= validation_errors()?> 
            </div>
            <?php } ?>
            <form action="" method="post">

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
        <div class="form ">
            <div tag="center"></div>
            <div class="form-group ml-5" id="kiri">
                <label form="id"><b>Id </b> </label>
                <input type="text" class="form-control " id="id" name="id">
            </div>
            

            <div class="form-group mr-5" id="kanan">
                <label form="nama"><b>Nama</b> </label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>


            <div class="form-group ml-5" id="kiri">
                <label form="jenis_kelamin"><b>Jenis Kelamin </b> </label><p></p>
                <input type='radio' name='jenis_kelamin' value='L' id='L' class='def' />Laki-laki
                <input type='radio' name='jenis_kelamin' value='P' id='P' class='def' />Perempuan
            </div>
          
            <div class="form-group mr-5" id="kanan">
                <label form="tanggal_lahir"><b>Tanggal Lahir </b> </label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>

            <div class="form-group ml-5" id="kiri">
                <label form="alamat"><b>Alamat</b> </label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

            <div class="form-group mr-5" id="kanan">
                <label form="email"><b>Email </b> </label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group ml-5" id="kiri">
                <label form="username"><b>Username </b> </label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group mr-5" id="kanan">                
            <label form="password"><b>Password </b> </label>
                <input type="text" class="form-control" id="password" name="password">
            </div>

            <div class="form-group ml-5" id="kiri">
                <label form="level"><b>Jabatan </b> </label>
                <input type="text" class="form-control" id="level" name="level">
            </div>
            <div class="form-group mr-5" id="kanan">
                <label form="blokir"><b>Isi "N" </b> </label>
                <input type="text" class="form-control" id="blokir" name="blokir">
            </div>
                    
            <div></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
         <div class="footer ">
              <div class="form-group mr-5" id="kanan" >
              <br>
                   <button type="submit" class="btn btn-success float-right ">
                   <span>Register</span> 
                   </button>
                   </div>
              </div>
        </form><br>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
