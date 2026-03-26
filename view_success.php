<?php session_start(); 
// Jika tiada data session (akses haram), hantar balik ke borang
if (!isset($_SESSION['success_data'])) {
    header("Location: borang.php");
    exit();
}
$data = $_SESSION['success_data'];
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Permohonan Berjaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang" style="color: #2ed573;">Tahniah!</h2>
        
        <div class="maklumat-berjaya">
            <p>Permohonan anda telah berjaya dihantar.</p>
            <hr>
            <p><strong>Nama Pemohon:</strong> <?php echo $data['nama']; ?></p>
            <p><strong>Jabatan:</strong> <?php echo $data['jabatan']; ?></p>
            <hr>
        </div>

        <a href="borang.php" class="pautan-kembali">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
<?php 
// Padam data session selepas dipaparkan untuk keselamatan
unset($_SESSION['success_data']); 
?>