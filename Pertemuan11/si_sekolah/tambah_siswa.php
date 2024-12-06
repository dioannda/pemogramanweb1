<?php
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "sekolahan");

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Ambil data dari tiap elemen di form
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $asal = $_POST["asal"];

    // Query insert data
    $query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama, asal_sekolah)
            VALUE ('$nama', '$alamat', '$agama', '$asal')";

    mysqli_query($conn, $query);

    // Cek apakah data berhasil ditambahkan
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <header>
        <h1>Tambah Data Siswa</h1>
    </header>

    <div class="container">
        <h2>Formulir Siswa</h2>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required>
                </li>
                <li>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" id="alamat" required>
                </li>
                <li>
                    <label for="agama">Agama:</label>
                    <input type="text" name="agama" id="agama" required>
                </li>
                <li>
                    <label for="asal">Asal Sekolah:</label>
                    <input type="text" name="asal" id="asal" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data</button>
                </li>
            </ul>
        </form>
    </div>

    
</body>

</html>