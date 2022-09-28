<?php
    if($_POST){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['jenis_kelamin'];
        $tlp=$_POST['tlp'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_member.php';</script>";
        } else {
            include "koneksi.php";
            $update=mysqli_query($conn,"update member set nama='".$nama."', jenis_kelamin='".$gender."', alamat='".$alamat."', tlp='".$tlp."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=".$id."';</script>";
            }
        } 
    }
?>
