<?php
session_start();

if (isset($_POST['hantar'])) {
    // 1. Ambil data dari borang
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tarikh = $_POST['tarikh'];
    $jabatan = $_POST['jabatan'];
    $specs = isset($_POST['specs']) ? $_POST['specs'] : "";
    $alasan = $_POST['alasan'];
    
    $errors = [];

    // 2. Pengesahan (Validation)
    if (empty($nama)) $errors[] = "Nama tidak boleh kosong.";
    if (empty($umur)) $errors[] = "Umur tidak boleh kosong.";
    if (empty($tarikh)) $errors[] = "Tarikh tidak boleh kosong.";
    if (empty($jabatan)) $errors[] = "Sila pilih jabatan.";
    if (empty($specs)) $errors[] = "Sila pilih spesifikasi.";
    
    // Syarat Alasan: Kurang dari 25 aksara adalah ralat
    if (strlen($alasan) < 25) {
        $errors[] = "Alasan mesti sekurang-kurangnya 25 aksara.";
    }

    // 3. Semak jika ada ralat
    if (!empty($errors)) {
        // Simpan ralat dalam session dan hantar balik ke borang.php
        $_SESSION['errors'] = $errors;
        header("Location: borang.php");
        exit();
    } else {
        // Jika TIADA ralat, simpan data yang berjaya dalam session untuk dipaparkan di view
        $_SESSION['success_data'] = [
            'nama' => $nama,
            'jabatan' => $jabatan
        ];
        header("Location: view_success.php");
        exit();
    }
} else {
    // Jika akses tanpa tekan butang hantar
    header("Location: borang.php");
    exit();
}