<?php
include('db.php');
include('includes/header.php');
?>

<div class="container my-5">
    <h2 class="text-center mb-4">Form Tambah Paket Baru</h2>
    <form action="proses_tambah_paket.php" method="POST">
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="Contoh: Silver, Gold, Platinum" required>
        </div>
        <div class="mb-3">
            <label for="durasi_bulan" class="form-label">Durasi (Bulan)</label>
            <input type="number" class="form-control" id="durasi_bulan" name="durasi_bulan" placeholder="Contoh: 1, 3, 6" min="1" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 100000" step="1000" min="0" required>
            <div class="form-text">Masukkan harga dalam rupiah (tanpa titik atau koma)</div>
        </div>
        <button type="submit" class="btn btn-success">Tambah Paket</button>
        <a href="kelola_paket.php" class="btn btn-secondary">Lihat Semua Paket</a>
        <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </form>
</div>

<?php include('includes/footer.php'); ?>
