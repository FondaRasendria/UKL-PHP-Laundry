<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>    
            <table class="table table-striped">
                <thead style="text-align:center;">
                    <tr>
                        <th>Nama Member</th><th>Tanggal Transaksi</th><th>Batas Waktu</th><th>Tanggal Bayar</th><th>Status</th><th>Dibayar</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php 
                    include "koneksi.php";
                    $qry_transaksi=mysqli_query($conn,"select * from transaksi join member on transaksi.id_member = member.id where transaksi.id = '".$_GET['id']."'");
                    $no=0;
                    while($dt_histori=mysqli_fetch_array($qry_transaksi)){
                        $no++;
                        ?>
                        <tr>              
                            <td><?=$dt_histori['nama']?></td><td><?=$dt_histori['tgl']?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$dt_histori['tgl_bayar']?></td><td><?=$dt_histori['status']?></td><td><?=$dt_histori['dibayar']?></td> 
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script>window.print()</script>
    </body>
</html>