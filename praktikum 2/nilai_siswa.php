<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form action="nilai_siswa.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="BD">Basis Data</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>

<!-- kode PHP -->

<?php

// Menangkap Data User
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];
$nilai_akhir_uts = $nilai_uts * 0.3;
$nilai_akhir_uas = $nilai_uas * 0.35;
$nilai_akhir_tugas = $nilai_tugas *.3;
$nilai_akhir = $nilai_akhir_uts + $nilai_akhir_uas + $nilai_akhir_tugas;

if($nilai_akhir >=85 && $nilai_akhir <=100){
  $hasil = "A";
  $hasl = "Lulus";
  $nilai = "Sangat Memuaskan";
}elseif($nilai_akhir >=70 && $nilai_akhir <=84){
  $hasil = "B";
  $hasl = "Lulus";
  $nilai = "Memuaskan";
}elseif($nilai_akhir >=56 && $nilai_akhir <=69){
  $hasil = "C";
  $hasl = "Lulus";
  $nilai = "Cukup";
}elseif($nilai_akhir >=36 && $nilai_akhir <=55){
  $hasil = "D";
  $hasl = "Tidak Lulus";
  $nilai = "Kurang";
}else{
  $hasil = "E";
  $hasl = "Tidak lulus";
  $nilai = "Sangat Kurang";
}


echo 'Proses :' . $proses;
echo '<br> Nama :' . $nama;
echo '<br> Mata Kuliah :' . $matkul;
echo '<br> Nilai UTS :' . $nilai_uts;
echo '<br> Nilai UAS :' . $nilai_uas;
echo '<br> Nilai Tugas :' . $nilai_tugas;
echo '<br> Hasil :' . $hasil;
echo '<br> Dinyatakan :' . $hasl;
echo '<br> Nilai Anda :' . $nilai;




?>

</body>
</html>