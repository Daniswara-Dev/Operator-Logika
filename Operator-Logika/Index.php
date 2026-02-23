<!DOCTYPE html>
<html>
<head>
    <title>Operator Logika PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Cek Kelulusan</h2>
    <form method="post">
        <input type="number" name="nilai" placeholder="Masukkan Nilai" required>
        <input type="number" name="absen" placeholder="Kehadiran" required>
        <br>
        <button type="submit" name="cek">Cek</button>
    </form>

<?php
if (isset($_POST['cek'])) {

    $nilai = (int) $_POST['nilai'];
    $absen = (int) $_POST['absen'];

    echo "<div class='hasil'>";
    echo "<h3>Hasil:</h3>";

    // AND
    if ($nilai >= 75 && $absen >= 80) {
        echo "Lulus (AND: True)<br>";
    } else {
        echo "Tidak Lulus (AND: False)<br>";
    }

    // OR
    if ($nilai >= 75 || $absen >= 80) {
        echo "Lulus (OR: True)<br>";
    } else {
        echo "Tidak Lulus (OR: False)<br>";
    }

    // NOT
    if (!($nilai < 75)) {
        echo "Nilai tidak kurang dari 75 (NOT digunakan)<br>";
    } else {
        echo "Nilai kurang dari 75 (NOT digunakan)<br>";
    }

    echo "</div>";
}
?>

</div>

</body>
</html>
