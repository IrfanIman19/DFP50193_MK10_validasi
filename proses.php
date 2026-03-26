<?php
session_start();

if (isset($_POST['hantar'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tarikh = $_POST['tarikh'];
    $jabatan = $_POST['jabatan'];
    $specs = isset($_POST['specs']) ? $_POST['specs'] : "";
    $extra = isset($_POST['extra']) ? implode(", ", $_POST['extra']) : "Tiada";
    $alasan = $_POST['alasan'];
    
    $errors = [];

    if (empty($nama)) $errors[] = "Nama wajib diisi.";
    if (empty($umur)) $errors[] = "Umur wajib diisi.";
    if (empty($tarikh)) $errors[] = "Tarikh wajib diisi.";
    if (empty($jabatan)) $errors[] = "Sila pilih jabatan.";
    if (empty($specs)) $errors[] = "Sila pilih spesifikasi.";
    if (strlen($alasan) < 25) $errors[] = "Alasan terlalu pendek (Minimum 25 aksara).";

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: borang.php");
        exit();
    } else {
        $_SESSION['data_pelajar'] = [
            'nama' => $nama,
            'umur' => $umur,
            'tarikh' => $tarikh,
            'jabatan' => $jabatan,
            'specs' => $specs,
            'extra' => $extra,
            'alasan' => $alasan
        ];
        header("Location: view_success.php");
        exit();
    }
} else {
    header("Location: borang.php");
    exit();
}