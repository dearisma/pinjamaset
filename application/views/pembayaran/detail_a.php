<title>Detail Pembayaran </title>
<div> 
<section id="portofolio">
    <div class="container mt-5 col-md-6 mb-5">
        <div class="card-header">
            Detail Data Pembayaran
        </div>
        <div class="card-body">
            <p class="card-text">
                <label for=""><b> Id Kas <span style="margin-left:5rem">:</span></label>
                <?= $kas['id']; ?></p>
            <p class="card-text">
                <label for=""><b>Id Anggota <span style="margin-left:2.7rem">:</span> </b></label>
                <?=$kas['id_anggota'];?></p>
            <p class="card-text">
                <label for=""><b> Tanggal Kas <span style="margin-left:2.2rem">:</span></b></label>
                <?= $kas['tanggal']; ?></p>
            <p class="card-text">
                <label for=""><b> Jumlah Kas <span style="margin-left:2.6rem">:</span></b></label>
                <?= $kas['jumlah']; ?></p>      
            <p class="card-text">
                <label for=""><b>Foto <span style="margin-left:6rem">:</span> </b></label>
            </p>
            <div class="container">
                <img src="<?= base_url('images/foto/'.$kas['foto']) ?>" alt="" style="margin-left:9rem;width:200px;height:200px">
            </div>
            
                <div>
            <a href="<?= base_url();?>pembayaran/pembayaran/index_a" class="btn btn-primary">Back</a>
        </div>
    </div>
</section>
</div>