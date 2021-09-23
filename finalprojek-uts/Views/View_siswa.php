<?php

include '../Controllers/Controller_siswa.php';
// Membuat Object dari Class siswa
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($GetSiswa['nisn']);
// die; 
?>
<div class="card border-light bg-info">
    <div class="card-header">OOP - Class, Object, Property, Method With <u>MVC</u></div>
    <div class="card-body text-dark">
        <h4 class="card-title">CRUD and CSRF</h4>
        <h5 class="card-title">Table Siswa</h5>
        <h5 class=" card-title"><a class="btn btn-primary" href="main.php?menu=<?php echo base64_encode('id_po_s') ?>">Add Data</a></h5>
        <!-- <div class="btn-group" role="group" aria-label="Basic example">
            <div style="margin-inline: 10px;">
                <h5 class="card-title">Table Siswa</h5>
            </div>
            <div style="margin-inline: 10px;">
                <h5 class=" card-title"><a class="btn btn-primary" href="main.php?menu=<?php // echo base64_encode('id_po_s') 
                                                                                        ?>">Add Data</a></h5>
            </div>
            <button type="button" class="btn btn-secondary">Right</button> -->

        <p class="card-text">
        <table class="table table-striped table-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Nominal</th>
                    <th scope="col" class="text-center">Tools</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Decision validation variabel
                if (isset($GetSiswa)) {
                    $no = 1;
                    foreach ($GetSiswa as $Get) {
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['nis']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['alamat']; ?></td>
                            <td><?php echo $Get['no_telp']; ?></td>
                            <td><?php echo $Get['nominal']; ?></td>
                            <td class="text-center">
                                <a class="btn btn-outline-light" href="main.php?menu=<?php echo base64_encode('id_pu_s') ?>&nisn=<?php echo base64_encode($Get['nisn']) ?>"><img src="view.png" width="24"></a>
                                <button class="btn btn-outline-danger" onclick="konfirmasi('<?php echo base64_encode($Get['nisn']) ?>')">Delete</button>
                        </tr>
                <?php
                    }
                }
                ?>


            </tbody>
        </table>
        </p>
    </div>
</div>


<script>
    function konfirmasi(nisn) {
        var a = nisn;
        if (window.confirm('apakah anda ingin menghapus data ini ?')) {
            window.location.href = '../Config/Routes.php?function=delete_siswa&nisn=' + a;
        };
    }
</script>