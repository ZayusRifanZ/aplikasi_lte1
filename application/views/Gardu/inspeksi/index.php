<!-- <pre><?php var_dump($join); ?></pre> -->

<div class="card">
    <div class="card-header">
        <h4>Data Pelaksana</h4>
    </div>
    <div class="card-body">
        <table id="myTable" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Gardu</th>
                    <th>Tanggal</th>
                    <th>Penyulang</th>
                    <th>Kapasitas</th>
                    <th>Lokasi</th>
                    <th>Tahun Pembuatan</th>
                    <th>Merek</th>
                    <th><i class="fas fa-cog"></th> 
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($join as $tbpel ) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $tbpel['id_gardu'] ?></td>
                    <td><?= $tbpel['tanggal'] ?></td>
                    <td><?= $tbpel['penyulang'] ?></td>
                    <td><?= $tbpel['kapasitas'] ?></td>
                    <td><?= $tbpel['lokasi'] ?></td>
                    <td><?= $tbpel['tahunpembuatan'] ?></td>
                    <td><?= $tbpel['merk'] ?></td>
                    <td>
                    <i class ="fas fa-edit"></i></a>
                    <i class ="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
        
        
    </div>
</div>



     
