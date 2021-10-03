<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue;">>
<?php
   
   if (isset($_POST['tombol'])){
   $penerimaan = $_POST['jalur'];
   $nama = $_POST['namaMahasiswa'];
   $tgllahir = $_POST['tglLahir'];
   $jenkel = $_POST['jenisKelamin'];
   $agama = $_POST['agama'];
   $status = $_POST['status'];
   $alamat = $_POST['alamat'];
   $kodepos = $_POST['kodepos'];
   $noHp = $_POST['nohp'];
   $email = $_POST['email'];
   $asalsekolah = $_POST['asalsekolah'];
   $thnlulus = $_POST['tahunlulus'];
   $namaayah = $_POST['namaayah'];
   $namaibu = $_POST['namaibu'];
   $alamatortu = $_POST['alamatOrtu'];
   $kodeposortu = $_POST['kodeposOrtu'];
   $nohportu = $_POST['nohpOrtu'];
   $pendayah = $_POST['PendidikanTerakhirAyah'];
   $pendibu = $_POST['PendidikanTerakhirIbu'];
   $statayah = $_POST['StatusAyah'];
   $statibu = $_POST['StatusIbu'];
   $pekerayah = $_POST['pekerjaanAyah'];
   $pekeribu = $_POST['pekerjaanIbu'];
   $prodi1 = $_POST['prodi1'];
   $prodi2 = $_POST['prodi2'];
   $sumber = $_POST['sumber'];
   $gel = $_POST['gelombang'];
   
   
   echo "<b>DATA PERSONAL CALON MAHASISWA</b><br>";
   echo "<br>Jalur Penerimaan Mahasiswa Baru: ".$penerimaan;
   echo "<br>Nama Mahasiswa Baru: ".$nama;
   echo "<br>Tempat/Tanggal Lahir: ".$tgllahir;
   echo "<br>Jenis Kelamin: ".$jenkel;
   echo "<br>Agama: ".$agama;
   echo "<br>Status: ".$status;
   echo "<br>Alamat: ".$alamat;
   echo "<br>Kode Pos: ".$kodepos;
   echo "<br>No Handphone: ".$noHp;
   echo "<br>Email:".$email; echo"<hr>";
   echo "<b>DATA SEKOLAH ASAL CALON MAHASISWA</b><br>";
   echo "<br>Asal Sekolah: ".$asalsekolah;
   echo "<br>Tahun Lulus: ".$thnlulus;echo"<hr>";
   echo "<b>DATA ORANG TUA CALON MAHASISWA</b><br>";
   echo "<br>Nama Ayah: ".$namaayah;
   echo "<br>Nama Ibu: ".$namaibu;
   echo "<br>Alamat: ".$alamatortu;
   echo "<br>Kode Pos: ".$kodeposortu;
   echo "<br>No Handphone: ".$nohportu;
   echo "<br>Pendidikan Terakhir Ayah: ".$pendayah;
   echo "<br>Pendidikan Terakhir Ibu: ".$pendibu;
   echo "<br>Status Ayah: ".$statayah;
   echo "<br>Status Ibu: ".$statibu;
   echo "<br>Pekerjaan Ayah: ".$pekerayah;
   echo "<br>Pekerjaan Ibu: ".$pekeribu;echo"<hr>";
   echo "<b>PEMINATAN PROGRAM STUDI</b><br>";
   echo "<br>Pilihan Program Studi 1: ".$prodi1;
   echo "<br>Pilihan Program Studi 2: ".$prodi2;
   echo "<br>Sumber Informasi: ".$sumber;
   echo "<br>Pilihan Gelombang: ".$gel;
   }

    ?> 
</body>
</html>