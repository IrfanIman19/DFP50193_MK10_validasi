<?php 
session_start(); 
if (!isset($_SESSION['data_pelajar'])) {
    header("Location: borang.php");
    exit();
}
$d = $_SESSION['data_pelajar'];
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Ringkasan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang" style="color: #2ecc71;">Permohonan Berjaya</h2>
        <p style="text-align: center;">Berikut adalah ringkasan maklumat yang telah anda hantar:</p>
        
        <table>
            <tr><td>Nama Penuh</td><td><?php echo htmlspecialchars($d['nama']); ?></td></tr>
            <tr><td>Umur</td><td><?php echo htmlspecialchars($d['umur']); ?> Tahun</td></tr>
            <tr><td>Tarikh Mohon</td><td><?php echo htmlspecialchars($d['tarikh']); ?></td></tr>
            <tr><td>Jabatan</td><td><?php echo htmlspecialchars($d['jabatan']); ?></td></tr>
            <tr><td>Spesifikasi</td><td><?php echo htmlspecialchars($d['specs']); ?></td></tr>
            <tr><td>Aksesori</td><td><?php echo htmlspecialchars($d['extra']); ?></td></tr>
            <tr><td>Alasan</td><td><i><?php echo htmlspecialchars($d['alasan']); ?></i></td></tr>
        </table>

        <a href="borang.php" class="pautan-kembali">← Kembali ke Borang</a>
    </div>
</body>
</html>
<?php unset($_SESSION['data_pelajar']); ?>