<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        $qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_POST['jenis']."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        $_SESSION['cart'][]=array(
            'id'=>$dt_paket['id'],
            'jenis'=>$dt_paket['jenis'],
            'harga'=>$dt_paket['harga'],
            'qty'=>$_POST['jumlah']
        );
    }
    header('location: home.php');
?>
