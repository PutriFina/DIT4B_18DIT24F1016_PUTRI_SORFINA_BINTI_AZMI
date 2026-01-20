<?php
$nama = "PUTRI SORFINA BINTI AZMI";
$nomatrik = "18DIT24F1016";
$kelas = "DIT4B";
$program = "DIPLOMA TEKNOLOGI MAKLUMAT DAN KOMUNIKASI";
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Profil Pelajar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eab6b6ff;
            text-align: center;
        }

        .container {
            background: white;
            width: 420px;
            margin: 60px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        img {
            width: 140px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            font-size: 16px;
            margin: 8px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Profil Pelajar</h2>

    <img src="gambar.jpeg" alt="Gambar Pelajar">

    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>No Matrik:</strong> <?= $nomatrik ?></p>
    <p><strong>Kelas:</strong> <?= $kelas ?></p>
    <p><strong>Program:</strong> <?= $program ?></p>
    

</div>

</body>
</html>
