<?php
require 'config.php';
$id=(int)($_GET['id']??0);
$stmt=$pdo->prepare("SELECT * FROM mahasiswa WHERE id=?"); $stmt->execute([$id]); $row=$stmt->fetch();
if(!$row) exit('Data tidak ditemukan.');
if($_SERVER['REQUEST_METHOD']==='POST'){
 $stmt=$pdo->prepare("UPDATE mahasiswa SET nim=?,nama=?,prodi=? WHERE id=?");
 $stmt->execute([$_POST['nim'],$_POST['nama'],$_POST['prodi'],$id]);
 header('Location: index.php'); exit;
}
?><!doctype html><html lang="id"><head><meta charset="utf-8"><title>Edit</title><link rel="stylesheet" href="style.css"></head>
<body><div class="container"><h1>Edit Mahasiswa</h1><form method="post">
<label>NIM</label><input name="nim" value="<?=htmlspecialchars($row['nim'])?>" required>
<label>Nama</label><input name="nama" value="<?=htmlspecialchars($row['nama'])?>" required>
<label>Program Studi</label><input name="prodi" value="<?=htmlspecialchars($row['prodi'])?>" required>
<button>Update</button> <a class="button secondary" href="index.php">Kembali</a>
</form></div></body></html>
