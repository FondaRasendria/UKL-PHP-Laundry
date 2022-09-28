<?php 
    include "header.php";
    include "koneksi.php";
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
                <?php 
                    $qry_transaksi=mysqli_query($conn,"select * from transaksi join member on transaksi.id_member = member.id where transaksi.id = '".$_GET['id']."'");
                    $dt_transaksi=mysqli_fetch_array($qry_transaksi);
                ?>
                    <h4 style="margin-left:5px;">Nama : <?=$dt_transaksi['nama']?></h4>
                    <h6 style="float:right;"><?=$dt_transaksi['tgl']?></h6>
                    <tr>
                        <th>Nama Paket</th><th>Jumlah</th><th>Total</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php 
                    $qry_detail=mysqli_query($conn,"select * from detail_transaksi join paket on detail_transaksi.id_paket = paket.id where detail_transaksi.id_transaksi = '".$_GET['id']."'");
                    $total = 0;
                    while($dt_detail=mysqli_fetch_array($qry_detail)){
                        ?>
                        <tr>              
                            <td><?=$dt_detail['jenis']?></td><td><?=$dt_detail['qty']?></td><td><?=$dt_detail['harga'] * $dt_detail['qty']?></td>
                            <?php
                                $total += $dt_detail['harga'] * $dt_detail['qty'];
                            ?> 
                        </tr>
                        <?php 
                    }
                    ?>
                    <tr><td>Total Pembayaran</td><td colspan="2"><?=$total?></td></tr>
                </tbody>
            </table>
            <h6 style="float:right;"><?=$dt_transaksi['dibayar']?></h6>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script>window.print()</script>
    </body>
</html>