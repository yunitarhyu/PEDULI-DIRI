<?php
error_reporting(0);
$nik          = $_POST['nik'];

$nama_lengkap = $_POST['nama_lengkap'];

if(strlen($nik) !=16){
    echo "<script>
    alert('NIK harus 16 angka');
    window.location.assign('register.php');
    </script>";
    die;
}


//cek apakah nik sudah terdaftar atau belum


$data = file("config.txt", FILE_IGNORE_NEW_LINES);

foreach( $data as $value){

    $pecah = explode("|" , $value);
    if($nik==$pecah['0']) {
        $cek = true;
    }
}

if($cek){//jika nik sudah terpkai ?>
<script type="text/javascript">
alert('Maaf data NIK sudah digunakan.');
window.location.assign('../modul/register.php');
</script>


<?php } else { //jika data tidak ditemukan
        //penyimpanan ke txt
        $format ="\n$nik|$nama_lengkap";
 
        //buka file config.txt
        $file = fopen('config.txt', 'a');    
        fwrite($file , $format);
       
        //tutup file
        fclose($file);

        ?>

<script type="text/javascript">

alert('Pendaftaran Berhasil Dilakukan.');
window.location.assign('../index.php')

</script>

<?php

}