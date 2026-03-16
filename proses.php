<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Status Pemprosesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang">Status Permohonan</h2>

        <?php
        if (isset($_POST['hantar'])) {
            // Menetapkan input kepada pemboleh ubah spesifik
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $tarikh = $_POST['tarikh'];
            $jabatan = $_POST['jabatan'];
            $specs = isset($_POST['specs']) ? $_POST['specs'] : "";
            $alasan = $_POST['alasan'];
            
            $errors = [];

            // 1. Semak jika input kosong
            if (empty($nama)) $errors[] = "Nama tidak boleh dibiarkan kosong.";
            if (empty($umur)) $errors[] = "Umur tidak boleh dibiarkan kosong.";
            if (empty($tarikh)) $errors[] = "Tarikh tidak boleh dibiarkan kosong.";
            if (empty($jabatan)) $errors[] = "Sila pilih jabatan anda.";
            if (empty($specs)) $errors[] = "Sila pilih spesifikasi peranti.";
            
            // 2. Semak panjang alasan (mesti >= 25 aksara)
            if (strlen($alasan) < 25) {
                $errors[] = "Alasan permohonan mestilah sekurang-kurangnya 25 aksara.";
            }

            // Paparkan ralat jika ada
            if (!empty($errors)) {
                foreach ($errors as $ralat) {
                    echo "<p class='ralat-teks'>⚠️ $ralat</p>";
                }
            } else {
                echo "<p style='color: green; font-weight: bold;'>Permohonan berjaya dihantar untuk semakan!</p>";
                echo "<strong>Nama:</strong> $nama <br>";
                echo "<strong>Jabatan:</strong> $jabatan";
            }
        }
        ?>

        <a href="borang.php" class="pautan-kembali">← Kembali ke Borang Permohonan</a>
    </div>
</body>
</html>