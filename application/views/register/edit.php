<div class="container">
<title>Edit Data User</title>
<div class ="row mt-3">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
           <b>Form Merubah Data User</b>
        </div>
        <div class="card-body">
            <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
            <!-- $this->form_validation->set_message('rule,'eror message'); -->
            <?= validation_errors();?>
</div>
<?php endif;?>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $user['id'];?>">
                
            <div class="form-group">
                <label form="nama">  <b>Nama</b> </label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'];?>">
            </div>
            <div class="form-group">
                <label form="jenis_kelamin">  <b>Jenis Kelamin </b> </label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $user['jenis_kelamin'];?>">
            </div>
            <div class="form-group">
                <label form="tanggal_lahir"> <b> Tanggal Lahir </b></label>
                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user['tanggal_lahir'];?>">
            </div>
            <div class="form-group">
                <label form="alamat"> <b> Alamat </b></label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat'];?>">
            </div>
            <div class="form-group">
                <label form="email"> <b> Email </b></label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>">
            </div>
            <div class="form-group">
                <label form="username"> <b> Username </b></label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'];?>">
            </div>
            <div class="form-group">
                <label form="password"> <b> Password </b></label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $user['password'];?>">
            </div>

            <a href="<?php echo site_url(); ?>pengurus/user" style="border: 1px solid #cecece;
                                                    border-radius: 3px;
                                                    padding: 3px 10px;
                                                    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
                                                    color: white;
                                                    background-color: red;
                                                    
                                                    background-color: #db7093;
                                                    
                                                    border: 1px solid #b1b1b1;
                                                    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">Kembali</a>
            <button type="submit" name="submit" style="border: 1px solid #cecece;
                                                    border-radius: 3px;
                                                    padding: 3px 10px;
                                                    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
                                                    color: white;
                                                    background-color: red;
                                                    
                                                    background-color: #db7093;
                                                    
                                                    border: 1px solid #b1b1b1;
                                                    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);"> Edit </button>
        </form>
        </div>
        </div>
    </div>
 </div>
</div>