<?php

// Mendefinisikan variabel dengan data profil siswa
$nama = "Budi Prabu Erucakra";
$umur = 16;
$tinggi = 160;
$sekolah = "SMK NEGERI 2 KOTA BANDUNG";
$cita_cita = "Pengusaha";

// Menampilkan kode HTML dengan data yang sudah didefinisikan
echo "
<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'> <!-- Menetapkan karakter encoding untuk halaman ini -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'> <!-- Mengatur viewport untuk tampilan responsif pada perangkat mobile -->
    <title>Profil Siswa</title> <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Menetapkan font untuk seluruh halaman */
            background-color: #f4f4f4; /* Warna latar belakang halaman */
            color: #333; /* Warna teks halaman */
            margin: 0; /* Menghapus margin default pada body */
            display: flex; /* Menggunakan Flexbox untuk tata letak */
            justify-content: center; /* Mengatur tata letak agar konten berada di tengah secara horizontal */
            align-items: center; /* Mengatur tata letak agar konten berada di tengah secara vertikal */
            height: 100vh; /* Mengatur tinggi body agar memenuhi tinggi viewport */
        }
        .info-box {
            background-color: #fff; /* Warna latar belakang kotak informasi */
            border: 5px solid #387F39; /* Menambahkan border biru dengan lebar 5px */
            border-radius: 12px; /* Membuat sudut border menjadi membulat dengan radius 12px */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan pada kotak dengan intensitas 0.2 */
            padding: 40px; /* Memberikan padding 40px di sekitar konten kotak */
            max-width: 600px; /* Menetapkan lebar maksimum kotak agar tidak melebihi 600px */
            text-align: center; /* Menyelaraskan teks di dalam kotak ke tengah */
            margin: 20px; /* Memberikan margin di sekitar kotak untuk memberikan jarak dari elemen lainnya */
        }
        .info-box h1 {
            color: #185519; /* Warna teks judul kotak informasi */
            font-size: 36px; /* Ukuran font untuk judul */
            margin-bottom: 20px; /* Margin bawah untuk memberikan jarak di bawah judul */
        }
        .info-box p {
            font-size: 22px; /* Ukuran font untuk paragraf di dalam kotak */
            line-height: 1.8; /* Jarak antar baris pada paragraf */
            margin: 15px 0; /* Margin vertikal 15px di sekitar paragraf untuk jarak antar paragraf */
        }
        .info-box p strong {
            color: #FF5733; /* Warna teks untuk elemen strong di dalam paragraf */
        }
    </style>
</head>
<body>
    <div class='info-box'> <!-- Kontainer untuk menampilkan informasi profil siswa -->
        <h1>Profil Siswa</h1> <!-- Judul kotak informasi -->
        <p><strong>Nama:</strong> $nama</p> <!-- Menampilkan nama siswa -->
        <p><strong>Umur:</strong> $umur tahun</p> <!-- Menampilkan umur siswa -->
        <p><strong>Tinggi:</strong> $tinggi cm</p> <!-- Menampilkan tinggi badan siswa -->
        <p><strong>Sekolah:</strong> $sekolah</p> <!-- Menampilkan nama sekolah siswa -->
        <p><strong>Cita-cita:</strong> $cita_cita</p> <!-- Menampilkan cita-cita siswa -->
    </div>
</body>
</html>
";

?>