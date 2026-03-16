<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Permohonan Pinjaman Komputer Riba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-utama">
        <h2 class="tajuk-borang">Skim Pinjaman Komputer Riba</h2>
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
                    <option value="">-- Sila Pilih --</option>
                    <option value="JTMK">JTMK</option>
                    <option value="JKE">JKE</option>
                    <option value="JKM">JKM</option>
                </select>
            </div>

            <div class="group-input">
                <label class="label-teks">Spesifikasi Diperlukan:</label>
                <input type="radio" name="specs" value="Basic" class="radio-item"> Basic
                <input type="radio" name="specs" value="High-End" class="radio-item"> High-End
            </div>

            <div class="group-input">
                <label class="label-teks">Peranti Tambahan:</label>
                <input type="checkbox" name="extra[]" value="Mouse" class="check-item"> Tetikus
                <input type="checkbox" name="extra[]" value="Bag" class="check-item"> Beg Laptop
            </div>

            <div class="group-input">
                <label class="label-teks">Alasan Sokongan (Min 25 aksara):</label>
                <textarea name="alasan" class="input-kawasan" rows="4"></textarea>
            </div>

            <div class="group-input">
                <button type="submit" name="hantar" class="warna-warni-btn btn-hantar">Hantar Permohonan</button>
                <button type="reset" class="warna-warni-btn btn-semula">Tetap Semula</button>
            </div>
            
        </form>
    </div>
</body>
</html>