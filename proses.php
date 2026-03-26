<?php
session_start();

if (isset($_POST['hantar'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tarikh = $_POST['tarikh'];
    $jabatan = $_POST['jabatan'];
    $specs = isset($_POST['specs']) ? $_POST['specs'] : "";
    $alasan = $_POST['alasan'];
    
    $errors = [];

    // Pengesahan Input
    if (empty($nama)) $errors[] = "Nama tidak boleh kosong.";
    if (empty($umur)) $errors[] = "Umur tidak boleh kosong.";
    if (empty($tarikh)) $errors[] = "Tarikh tidak boleh kosong.";
    if (empty($jabatan)) $errors[] = "Sila pilih jabatan.";
    if (empty($specs)) $errors[] = "Sila pilih spesifikasi.";
    if (strlen($alasan) < 25) $errors[] = "Alasan mesti sekurang-kurangnya 25 aksara.";

    // Jika ada ralat, simpan dalam session dan kembali ke borang.php
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: borang.php");
        exit();
    }
} else {
    // Jika akses terus ke proses.php tanpa hantar borang
    header("Location: borang.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Berjaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang" style="color: #2ed573;">Permohonan Berjaya!</h2>
        <p>Terima kasih <strong><?php echo $nama; ?></strong>, permohonan anda telah diterima.</p>
        
        <a href="borang.php" class="pautan-kembali">← Hantar Permohonan Lain</a>
    </div>
</body>
</html>