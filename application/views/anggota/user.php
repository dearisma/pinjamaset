<!-- <h1>ini halaman user</h1> -->
<section>
<!-- <h1>Hello, <?= $this->session->userdata('level'); ?>!</h1>
<a href=" <?= base_url(). 'login/logout';?>">Logout</a> -->
<title>Data User</title>
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
        </tr>   
    </thead>
    <tbody>
        <?php  
        $no=1;
        foreach($user as $user){?>
        <tr>
            <td> <?= $no++; ?></td>
            <td> <?= $user->nama; ?></td>
            <td> <?= $user->jenis_kelamin; ?></td>
            <td> <?= $user->alamat; ?></td>
            <td> <?= $user->email; ?></td>
            <td> <?= $user->level; ?></td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
</div>
</section>