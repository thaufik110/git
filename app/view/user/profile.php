<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
<div class="container text-center mt-4">
<h1>Halaman User</h1>
<img src="<?= BASE_URL; ?>/img/image.jpg" style="border-radius: 50%; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); width: 200px; height: auto;">
<p>Halo, nama saya <?= $data['nama']; ?>, saya suka <?= $data['pekerjaan'];?></p>
</div>
</body>
</html>