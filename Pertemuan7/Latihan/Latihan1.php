<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0">
    <title>tes loop</title>
</head>
<body>
    <h2>Daftar Absensi </h2>
    <ol>
        <?php
        for ($i=1; $i <=10 ; $i++) { 
            echo "<li>Nama Mahasiswa 
            ke- $i</li>";
        }
        ?>
    </ol>
</body>
</html>