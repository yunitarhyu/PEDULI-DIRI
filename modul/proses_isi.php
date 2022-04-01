<?php
    session_start();
$nik            = $_SESSION['nik'];
$nama_lengkap   = $_SESSION['nama_lengkap'];
$Tanggal        = $_POST['Tanggal'];
$Jam            = $_POST['Jam'];
$Lokasi         = $_POST['Lokasi'];
$Suhu           = $_POST['Suhu'];


        $format ="$nik|$nama_lengkap|$Tanggal|$Jam|$Lokasi|$Suhu\n";
 
        //buka file config.txt
        $file = fopen('catatan.txt', 'a');    
        fwrite($file , $format);
       
        //tutup file
        fclose($file);

        ?>

        <script type="text/javascript">

            alert('data berhasil disimpan.');
            
            window.location.assign('catatan_perjalanan.php');

        </script>

