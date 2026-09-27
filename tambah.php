<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
 $stmt=$pdo->prepare("INSERT INTO mahasiswa(nim,nama,prodi) VALUES(?,?,?)");
 $stmt->execute([$_POST['nim'],$_POST['nama'],$_POST['prodi']]);
 header('Location: index.php'); exit;
}
?><!doctype html><html lang="id"><head><meta charset="utf-8"><title>Tambah</title><link rel="stylesheet" href="style.css"></head>
<body><div class="container"><h1>Tambah Mahasiswa</h1><form method="post">
<label>NIM</label><input name="nim" required>
<label>Nama</label><input name="nama" required>
<label>Program Studi</label><input name="prodi" required>
<button>Simpan</button> <a class="button secondary" href="index.php">Kembali</a>
</form></div></body></html>
