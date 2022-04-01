<?php

$nik            = $_POST['nik'];

$nama_lengkap   = $_POST['nama_lengkap'];


if(strlen($nik) !=16){
    echo "<script>
    alert('NIK harus 16 angka');
    window.location.assign('register.php');
    </script>";
    die;
}

$format = "$nik|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if(in_array($format, $file)) { //jika data terdaftar/ada
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;

    header("Location:dashboard.php");
}else{ //jika data tidak ada ?>

<script type="text/javascript">
alert('Maaf Kombinasi NIK dan Nama Salah.');
window.location.assign('../index.php');
</script>

<?php

}