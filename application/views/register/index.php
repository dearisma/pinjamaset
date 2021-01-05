
<title>Register</title>
<section>
<div class="container">
<br>
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

<h5>Silahkan tekan tombol "Register" untuk membuat akun</h5>
<h5>Silahkan tekan tombol "Login" untuk kembali ke laman login</h5>
    <div class="row mt-4">
            <div class="row md-6">
                <a href="<?= base_url(); ?>anggota/register/tambah" class="btn btn-primary">Register</a>
            </div>
            <div class="col md-2"></div>
            <div class="col md-4">
                <a href="<?= base_url(); ?>anggota/login" class="btn btn-primary">Login</a>
            </div>
        </div>
        
    <!-- at-3 artinya margin top 3 -->
<div class="row mt-3" style>
    <div class="col-md-6">
    </div>
</div>
</div>
</section>