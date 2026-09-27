<?php
require 'config.php';
$data = $pdo->query("SELECT * FROM mahasiswa ORDER BY id DESC")->fetchAll();
?>
<!doctype html><html lang="id"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Data Mahasiswa</title><link rel="stylesheet" href="style.css"></head>
<body><div class="container">
<h1>Data Mahasiswa</h1>
<p>Demo deployment PHP + MariaDB untuk Administrasi Server.</p>
<a class="button" href="tambah.php">+ Tambah Mahasiswa</a>
<table><tr><th>ID</th><th>NIM</th><th>Nama</th><th>Prodi</th><th>Aksi</th></tr>
<?php foreach($data as $row): ?><tr>
<td><?=htmlspecialchars($row['id'])?></td><td><?=htmlspecialchars($row['nim'])?></td>
<td><?=htmlspecialchars($row['nama'])?></td><td><?=htmlspecialchars($row['prodi'])?></td>
<td><a href="edit.php?id=<?=$row['id']?>">Edit</a> |
<a href="hapus.php?id=<?=$row['id']?>" onclick="return confirm('Hapus data ini?')">Hapus</a></td>
</tr><?php endforeach; ?></table>
</div></body></html>
