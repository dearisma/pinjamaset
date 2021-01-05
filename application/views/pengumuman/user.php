<title>Data Pengumuman</title>
<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; marginbottom:30px"> Data Pengumuman </h1>
    </div>
    

    <table class="table table-bordered" style="text-align:center; id="list_penguman">
        <thead>
            <tr>
            <th>No</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <!--<th>Sampul</th>-->
            </tr>
        </thead>
    <tbody>
        <?php
            $no=1;
            foreach ($pengumuman as $pengumuman) {?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $pengumuman->isi; ?></td>
                    <td><?= $pengumuman->tanggal_pengumuman; ?></td>
            </tr>
        <?php }
        ?>
        
    </tbody>
    </table>
