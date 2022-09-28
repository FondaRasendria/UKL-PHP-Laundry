<?php 
    include "header.php";
?>
<?php
    if($_SESSION['role']=='admin'){
?>
<!DOCTYPE html>
<html>  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
    <legend style:><h2><b>Tambah Paket</b></h2></legend>
    <form action="proses_tambah_paket.php" class="well form-horizontal" method="post">
        Jenis Paket: 
        <?php 
        $arr_jenis=array('kiloan'=>'Kiloan','selimut'=>'Selimut','bed_cover'=>'Bed Cover','kaos'=>'Kaos');
        ?>
        <select name="jenis" class="form-control">
            <option></option>
            <?php foreach ($arr_jenis as $key_jenis => $val_jenis):
                if($key_jenis==$dt_paket['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
            <option value="<?=$key_jenis?>" <?=$selek?>><?=$val_jenis?></option>
            <?php endforeach ?>
        </select>
        Harga:
        <input type="number" name="harga" value= "" class="form-control">
        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
    </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>