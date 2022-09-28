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
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id = '".$_GET['id']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_member['id']?>">
        Nama Member :
  <input type="text" name="nama" value=   "<?=$dt_member['nama']?>" class="form-control">
        Gender : 
        <?php 
        $arr_gender=array('Laki-laki'=>'Laki-laki','Perempuan'=>'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_member['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        Alamat : 
<textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
        </select>
        No. Telepon : 
<textarea name="tlp" class="form-control" rows="4"><?=$dt_member['tlp']?></textarea>
<input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>