<title>Data Foto</title>

<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; marginbottom:30px"> Data Foto </h1>
    </div>
    

    <table class="table table-bordered" style="text-align: center; id="list_pengumuman">
        <thead>
            <tr>
            <th >No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Isi</th>
            <!--<th>Sampul</th>-->
            </tr>
        </thead>
    <tbody>
        <?php
            $no=1;
            foreach ($foto as $foto) {?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $foto->judul; ?></td>
                    <td><?= $foto->tanggal_foto; ?></td>
                    <td>
                        <img src="<?php echo base_url('images/foto/'.$foto->isi_foto) ?>" width='350px' height='300px' alt="">
                    </td>
            </tr>
        <?php }
        ?>
        
    </tbody>
    </table>
