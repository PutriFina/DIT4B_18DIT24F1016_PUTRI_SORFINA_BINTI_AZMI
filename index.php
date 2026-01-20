<?php
/* profil pelajar */
include "biodata.php";
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Profil Pelajar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Profil Pelajar</h2>

    <img src="gambar.jpeg" alt="Gambar Pelajar">

    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <p><strong>No Matrik:</strong> <?php echo $nomatrik; ?></p>
    <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>
    <p><strong>Program:</strong> <?php echo $program; ?></p>
</div>

</body>
</html>
