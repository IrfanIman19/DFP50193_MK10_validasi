<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Borang Pinjaman Laptop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang">Permohonan Pinjaman</h2>

        <?php 
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $ralat) {
                echo "<div class='ralat-teks'>⚠️ $ralat</div>";
            }
            unset($_SESSION['errors']);
        }
        ?>

        <form action="proses.php" method="POST">
            <div class="group-input">
                <label class="label-teks">Nama Penuh:</label>
                <input type="text" name="nama" class="input-teks">
            </div>

            <div class="group-input">
                <label class="label-teks">Umur:</label>
                <input type="number" name="umur" class="input-teks">
            </div>

            <div class="group-input">
                <label class="label-teks">Tarikh Mohon:</label>
                <input type="date" name="tarikh" class="input-teks">
            </div>

            <div class="group-input">
                <label class="label-teks">Jabatan:</label>
                <select name="jabatan" class="input-pilihan">
                    <option value="">-- Pilih Jabatan --</option>
                    <option value="JTMK">JTMK</option>
                    <option value="JKE">JKE</option>
                    <option value="JKM">JKM</option>
                </select>
            </div>

            <div class="group-input">
                <label class="label-teks">Spesifikasi Laptop:</label>
                <input type="radio" name="specs" value="Standard" class="class-radio"> Standard
                <input type="radio" name="specs" value="High-Performance" class="class-radio"> High-Performance
            </div>

            <div class="group-input">
                <label class="label-teks">Aksesori Tambahan:</label>
                <input type="checkbox" name="extra[]" value="Mouse" class="class-check"> Tetikus
                <input type="checkbox" name="extra[]" value="Laptop Bag" class="class-check"> Beg Laptop
            </div>

            <div class="group-input">
                <label class="label-teks">Alasan (Min 25 aksara):</label>
                <textarea name="alasan" class="input-kawasan" rows="4"></textarea>
            </div>

            <div class="group-input">
                <button type="submit" name="hantar" class="warna-warni-btn btn-hantar">Hantar</button>
                <button type="reset" class="warna-warni-btn btn-semula">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>