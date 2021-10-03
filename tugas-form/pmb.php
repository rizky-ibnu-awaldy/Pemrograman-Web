<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:powderblue;">
    <h2>PENDAFTARAN ONLINE</h2>
    <form method="post" action="konfirmasipmb.php">
     <label for ="jalur">Jalur Penerimaan Mahasiswa Baru<sup>*</sup><br></label> <!-- Form Jalur Penerimaan MABA -->
     <select id="jalur" name="jalur">
       <option>Pilih Jalur Penerimaan</option>
       <option value ="Jalur Regular">Jalur Regular</option>
       <option value ="Jalur Bidikmisi (Kuota Telah Penuh)">Jalur Bidikmisi (Kuota Telah Penuh)</option>
       <option value ="Jalur Beasiswa Peringkat Raport">Jalur Beasiswa Peringkat Raport</option>
       <option value ="Jalur Beasiswa Ujian Saringan Masuk(USM)">Jalur Beasiswa Ujian Saringan Masuk(USM)</option>
       <option value ="Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)">Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)</option>
       <option value ="Jalur Beasiswa Lulusan Terbaik Sekolah">Jalur Beasiswa Lulusan Terbaik Sekolah</option>
       <option value ="Jalur Beasiswa Prestasi Akademik dan Non Akademik">Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>

     </select><br><br>

        
     Nama Calon Mahasiswa (Sesuai Ijazah SMA)<sup>* </sup><br><input type="text" name="namaMahasiswa"><br> <br><!-- Form Nama MABA -->

     Tempat/Tanggal Lahir<sup>* </sup><br><input type="text" name="tglLahir"><br><br> <!-- Form Tempat Tgl Lahir MABA -->

     <label for ="jenkel">Jenis Kelamin<br></label>  <!-- Form Jenis Kelamin MABA -->
         <select id="jenkel" name="jenisKelamin">
             <option>Pilih</option>
             <option value ="Pria">Pria</option>
             <option value ="Wanita">Wanita</option>
    </select> <br><br>

    <label for ="agama">Agama<br></label>  <!-- Form Agama MABA -->
    <select id="agama" name="agama">
        <option>Pilih</option>
        <option value ="Islam">Islam</option>
        <option value ="Katolik">Katolik</option>
        <option value ="Kristen">Kristen</option>
        <option value ="Hindu">Hindu</option>
        <option value ="Budha">Budha</option>
        <option value ="Lainnya">Lainnya</option>

    </select><br><br>

    <label for ="status">Status<br></label>  <!-- Form Status MABA -->
    <select id="status" name="status">
        <option>Pilih</option>
        <option value ="Belum Menikah">Belum Menikah</option>
        <option value ="Menikah">Menikah</option>
        <option value ="Janda">Janda </option>
        <option value ="Duda">Duda</option>
        
    </select><br><br>
    <p1>Alamat<sup>*</sup><br></p1>

    <textarea name="alamat" rows="3" cols="18"></textarea> <br><br><!-- Form Alamat MABA -->

    Kode Pos<sup>* </sup><br><input type="text" name="kodepos"><br><br> <!-- Form Kode Pos MABA -->

    No Handphone<sup>* </sup><br><input type="text" name="nohp"><br><br> <!-- Form No Handphone MABA -->

    Email<sup>* </sup><br><input type="text" name="email"><br><br> <!-- Form Email MABA -->

    <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>

    Asal Sekolah<sup>* </sup><br><input type="text" name="asalsekolah"><br><br> <!-- Form Asal Sekolah MABA -->

    Tahun Lulus<sup>* </sup><br><input type="text" name="tahunlulus"><br><br> <!-- Form Tahun Lulus MABA -->

    <h2>DATA ORANG TUA CALON MAHASISWA</h2>

    Nama Ayah<sup>* </sup><br><input type="text" name="namaayah"><br><br> <!-- Form Nama Ayah MABA -->

    Nama Ibu<sup>* </sup><br><input type="text" name="namaibu"><br><br> <!-- Form Nama Ibu MABA -->

    <p1>Alamat<sup>*</sup><br></p1>  <!-- Form Alamat Ortu -->

    <textarea name="alamatOrtu" rows="3" cols="18"></textarea> <br><br>

    Kode Pos<sup>* </sup><br><input type="text" name="kodeposOrtu"><br><br> <!-- Form Kode Pos Ortu -->

    No Handphone<sup>* </sup><br><input type="text" name="nohpOrtu"><br><br> <!-- Form No Handphone Ortu -->

    <label for ="Pendidikan Terakhir Ayah">Pendidikan Terakhir Ayah<sup>*</sup><br></label>  <!-- Form Pendidikat Terakhir Ayah -->
    <select id="Pendidikan Terakhir Ayah" name="PendidikanTerakhirAyah">
        <option>Pilih</option>
        <option value ="Tidak Tamat SD">A - Tidak Tamat SD</option>
        <option value ="Tamat SD">B - Tamat SD</option>
        <option value ="Tamat SMP">C - Tamat SMP</option>
        <option value ="Tamat SMA">D - Tamat SMA</option>
        <option value ="Diploma (D1-D2)">E - Diploma (D1-D2)</option>
        <option value ="Sarjana (D3)">F - Sarjana (D3)</option>
        <option value ="Sarjana (D4-S1)">G - Sarjana (D4-S1)</option>
        <option value ="Pascasarjana (S2)">H - Pascasarjana (S2)</option>
        <option value ="Doktor (S3)">I - Doktor (S3)</option>
        
    </select><br><br>

    <label for ="Pendidikan Terakhir Ibu">Pendidikan Terakhir Ibu<sup>*</sup><br></label>  <!-- Form Pendidikat Terakhir Ibu -->
    <select id="Pendidikan Terakhir Ibu" name="PendidikanTerakhirIbu">
        <option>Pilih</option>
        <option value ="Tidak Tamat SD">A - Tidak Tamat SD</option>
        <option value ="Tamat SD">B - Tamat SD</option>
        <option value ="Tamat SMP">C - Tamat SMP</option>
        <option value ="Tamat SMA">D - Tamat SMA</option>
        <option value ="Diploma (D1 - D2)">E - Diploma (D1-D2)</option>
        <option value ="Sarjana (D3)">F - Sarjana (D3)</option>
        <option value ="Sarjana (D4-S1)">G - Sarjana (D4-S1)</option>
        <option value ="Pascasarjana (S2)">H - Pascasarjana (S2)</option>
        <option value ="Doktor (S3)">I - Doktor (S3)</option>
        
    </select><br><br>

    <label for ="Status Ayah">Status Ayah<sup>*</sup><br></label>  <!-- Form Status Ayah -->
    <select id="Status Ayah" name="StatusAyah">
        <option>Pilih</option>
        <option value ="Masih Ada">Masih Hidup</option>
        <option value ="Sudah Meninggal">Sudah Meniggal</option>
        
    </select><br><br>

    <label for ="Status Ibu">Status Ibu<sup>*</sup><br></label>  <!-- Form Status Ibu -->
    <select id="Status Ibu" name="StatusIbu">
        <option>Pilih</option>
        <option value ="Masih Ada">Masih Hidup</option>
        <option value ="Sudah Meninggal">Sudah Meniggal</option>
        
    </select><br><br>

    Pekerjaan Ayah<sup>* </sup><br><input type="text" name="pekerjaanAyah"><br><br> <!-- Form Pekerjaan Ayaha -->

    Pekerjaan Ibu<sup>* </sup><br><input type="text" name="pekerjaanIbu"><br><br> <!-- Form Pekerjaan Ibu -->

    <h2>PEMINATAN PROGRAM STUDI</h2>

    <label for ="Pilihan Program Studi 1">Pemilihan Program Studi 1<sup>*</sup><br></label>  <!-- Form Pilihan Program Studi 1 -->
    <select id="Pilihan Program Studi 1" name="prodi1">
        <option>Pilih</option>
        <option value ="Akuntansi">Akuntansi</option>
        <option value ="Manajemen">Manajemen</option>
        <option value ="Psikologi">Psikologi</option>
        <option value ="Ilmu Komunikasi">Ilmu Komunikasi</option>
        <option value ="Desain Produk Industri">Desain Produk Industri</option>
        <option value ="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
        <option value ="Teknik Informatika">Teknik Informatika</option>
        <option value ="Sistem Informasi">Sistem Informasi</option>
        <option value ="Teknik Sipil">Teknik Sipil</option>
        <option value ="Arsitekur">Arsitekur</option>
        
    </select><br><br>

    <label for ="Pilihan Program Studi 2">Pemilihan Program Studi 2<sup>*</sup><br></label>  <!-- Form Pilihan Program Studi 2 -->
    <select id="Pilihan Program Studi 2" name="prodi2">
        <option>Pilih</option>
        <option value ="Akuntansi">Akuntansi</option>
        <option value ="Manajemen">Manajemen</option>
        <option value ="Psikologi">Psikologi</option>
        <option value ="Ilmu Komunikasi">Ilmu Komunikasi</option>
        <option value ="Desain Produk Industri">Desain Produk Industri</option>
        <option value ="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
        <option value ="Teknik Informatika">Teknik Informatika</option>
        <option value ="Sistem Informasi">Sistem Informasi</option>
        <option value ="Teknik Sipil">Teknik Sipil</option>
        <option value ="Arsitekur">Arsitekur</option>
        
    </select><br><br>

    <p>Sumber Informasi</p><!-- Form Sumber Informasi -->
    <input type = "radio" id = "Internet" name="sumber" value="Internet">
    <label for="Internet">Internet</label><br>

    <input type = "radio" id = "Majalah" name="sumber" value="Majalah">
    <label for="Majalah">Majalah</label><br>

    <input type = "radio" id = "Brosur" name="sumber" value="Brosur">
    <label for="Brosur">Brosur</label><br>

    <input type = "radio" id = "Radio" name="sumber" value="Radio">
    <label for="Radio">Radio</label><br>

    <input type = "radio" id = "Spanduk" name="sumber" value="Spanduk">
    <label for="Spanduk">Spanduk</label><br>

    <input type = "radio" id = "Orang Tua" name="sumber" value="Orang Tua">
    <label for="Orang Tua">Orang Tua</label><br>

    <input type = "radio" id = "Teman" name="sumber" value="Teman">
    <label for="Teman">Teman</label><br>

    <input type = "radio" id = "Pameran" name="sumber" value="Pameran">
    <label for="Pameranh">Pameran</label><br>

    <input type = "radio" id = "Pihak Sekolah" name="sumber" value="Pihak Sekolah">
    <label for="Pihak Sekolah">Pihak Sekolah</label><br>

    <input type = "radio" id = "Lainnya" name="sumber" value="Lainnya">
    <label for="Lainnya">Lainnya ......</label><br>

    <h2>UJIAN SARINGAN MASUK</h2>

    <p>Pilihan Gelombang</p> <!-- Form Pilihan Gelombang -->
    <input type = "radio" id = "Gelombang 1" name="gelombang" value="Gelombang 1">
    <label for="Gelombang 1">Gelombang 1</label><br>

    <input type = "radio" id = "Gelombang 2" name="gelombangr" value="Gelombang 2">
    <label for="Gelombang 2">Gelombang 2</label><br>

    <input type = "radio" id = "Gelombang 3" name="gelombang" value="Gelombang 3">
    <label for="Gelombang 3">Gelombang 3</label><br>

    <input type = "radio" id = "Gelombang 4" name="gelombang" value="Gelombang 4">
    <label for="Gelombang 4">Gelombang 4</label><br>


     <br><input type="submit" value = "Submit" name="tombol">
     <button type="reset" value="Reset">Reset</button>

     

    </form>

    
</body>
</html>