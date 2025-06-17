Aplikasi Fitness By RicchereID

# Fitness Management System

Aplikasi manajemen gym/fitness center berbasis web yang dibangun menggunakan PHP dan MySQL. Sistem ini memungkinkan pengelolaan member, paket membership, transaksi, dan administrasi gym secara terintegrasi.

## Fitur Utama

### 📋 Manajemen Member
- Pendaftaran member baru
- Perpanjangan membership
- Lihat daftar semua member
- Status member (Aktif/Tidak Aktif)
- Tracking tanggal kadaluarsa membership

### 💰 Manajemen Paket
- Kelola paket membership (Silver, Gold, Platinum)
- Tambah paket baru dengan durasi dan harga custom
- Lihat daftar semua paket

### 💳 Sistem Transaksi
- Pencatatan transaksi pendaftaran baru
- Pencatatan transaksi perpanjangan
- Otomatis update status member
- Kalkulasi tanggal kadaluarsa otomatis

### 👥 Manajemen Admin
- Kelola user admin
- Tambah, edit, hapus admin
- Password terenkripsi

### 🎯 Dashboard
- Notifikasi member yang akan/sudah kadaluarsa
- Menu navigasi yang user-friendly
- Statistik member

## Teknologi yang Digunakan

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework CSS**: Bootstrap 5.3.0
- **Server**: Apache/Nginx (XAMPP/WAMP/LAMP)

## Persyaratan Sistem

- PHP 7.4 atau lebih tinggi
- MySQL 5.7 atau MariaDB 10.2+
- Apache/Nginx web server
- Browser modern (Chrome, Firefox, Safari, Edge)

## Instalasi

### 1. Clone atau Download Project
```bash
git clone [repository-url]
# atau download ZIP dan extract
```

### 2. Setup Database
1. Buka phpMyAdmin atau MySQL client
2. Buat database baru dengan nama `db_fitnes`
3. Import file `database/db_fitnes.sql`

### 3. Konfigurasi Database
Edit file `db.php` sesuai dengan konfigurasi database Anda:
```php
<?php
$host = 'localhost';        // Host database
$user = 'root';            // Username database
$password = '';            // Password database
$dbname = 'db_fitnes';     // Nama database
```

### 4. Jalankan Aplikasi
1. Pindahkan folder project ke direktori web server (htdocs untuk XAMPP)
2. Buka browser dan akses `http://localhost/[nama-folder-project]`

## Struktur Database

### Tabel `member`
- `id_member` (Primary Key)
- `nama` - Nama lengkap member
- `no_telepon` - Nomor telepon
- `alamat` - Alamat lengkap
- `tanggal_daftar` - Tanggal pendaftaran
- `tanggal_kadaluarsa` - Tanggal berakhir membership
- `status` - Status member (Aktif/Tidak Aktif)

### Tabel `paket`
- `id_paket` (Primary Key)
- `nama_paket` - Nama paket (Silver, Gold, Platinum)
- `durasi_bulan` - Durasi dalam bulan
- `harga` - Harga paket

### Tabel `transaksi`
- `id_transaksi` (Primary Key)
- `id_member` (Foreign Key)
- `id_paket` (Foreign Key)
- `tanggal_transaksi` - Tanggal transaksi
- `jenis_transaksi` - Daftar Baru/Perpanjangan
- `total_bayar` - Total pembayaran

### Tabel `user_admin`
- `id_user` (Primary Key)
- `username` - Username admin
- `password` - Password terenkripsi
- `nama_lengkap` - Nama lengkap admin

## Cara Penggunaan

### 1. Halaman Utama
- Akses dashboard utama di `index.php`
- Lihat notifikasi member yang kadaluarsa
- Navigasi ke berbagai fitur

### 2. Pendaftaran Member Baru
1. Klik "Daftar Member Baru" → "Pendaftaran Baru"
2. Isi form pendaftaran lengkap
3. Pilih paket membership
4. Tanggal kadaluarsa akan dihitung otomatis

### 3. Perpanjangan Member
1. Klik "Daftar Member Baru" → "Perpanjangan Member"
2. Pilih member yang akan diperpanjang
3. Pilih paket baru
4. Sistem akan update status dan tanggal kadaluarsa

### 4. Kelola Paket
1. Akses "Kelola Paket"
2. Tambah paket baru langsung dari halaman ini
3. Lihat daftar semua paket yang tersedia

### 5. Manajemen Admin
1. Akses "User Admin"
2. Tambah admin baru
3. Edit atau hapus admin yang ada

## Default Login Admin

- **Username**: admin
- **Password**: admin123

> ⚠️ **Penting**: Segera ganti password default setelah instalasi pertama!

## Fitur Keamanan

- Password admin terenkripsi menggunakan PHP `password_hash()`
- Prepared statements untuk mencegah SQL injection
- Validasi input pada semua form
- Konfirmasi sebelum menghapus data

## Troubleshooting

### Database Connection Error
- Pastikan MySQL/MariaDB sudah running
- Periksa konfigurasi di `db.php`
- Pastikan database `db_fitnes` sudah dibuat

### Page Not Found
- Pastikan semua file ada di direktori yang benar
- Periksa permission folder (755 untuk folder, 644 untuk file)

### Bootstrap/CSS Tidak Load
- Pastikan koneksi internet aktif (menggunakan CDN)
- Atau download Bootstrap dan simpan lokal

## Kontribusi

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -am 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## Roadmap

- [ ] Sistem login dan autentikasi
- [ ] Laporan keuangan dan statistik
- [ ] Export data ke Excel/PDF
- [ ] Notifikasi email untuk member kadaluarsa
- [ ] Mobile responsive improvement
- [ ] API untuk integrasi mobile app

## Lisensi

Project ini menggunakan lisensi MIT. Lihat file `LICENSE` untuk detail lengkap.

## Support

Jika mengalami masalah atau memiliki pertanyaan:
1. Buka issue di repository ini 
2. Atau hubungi developer
---

**Dibuat dengan ❤️ untuk kemudahan manajemen fitness center**