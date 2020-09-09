<!-- <?php var_dump($tb_pelaksana) ?> -->

<div class="card">
    <div class="card-header">
        <h4>Data Pelaksana</h4>
    </div>
    <div class="card-body">
        <table id="myTable" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nomor Gardu</th>
                    <th>Tanggal Inspeksi</th>
                    <th>Petugas</th>
                    <th>Penyulang</th>
                    <th>Lokasi</th>
                    <th>Jenis Gardu</th>
                    <th>Kapasitas</th>
                    <th><i class="fas fa-cog"></th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tb_pelaksana as $tbpel ) : ?>
                <tr>
                    <td><?= $tbpel['id_gardu'] ?></td>
                    <td><?= $tbpel['tanggal'] ?></td>
                    <td><?= $tbpel['petugas'] ?></td>
                    <td><?= $tbpel['penyulang'] ?></td>
                    <td><?= $tbpel['lokasi'] ?></td>
                    <td><?= $tbpel['type'] ?></td>
                    <td><?= $tbpel['kapasitas'] ?></td>
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



     
