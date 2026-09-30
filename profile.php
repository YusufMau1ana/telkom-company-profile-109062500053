<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        <h1>Tentang proyek simulasi Telkom University sini</h1>
        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p>
        
        <h2>Visi pembelajaran</h2>
        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p>
        
        <h2>Tujuan proyek</h2>
        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
        
        <div class="alert alert-success">
            Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.
        </div>
    </div>
</section>
<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Program Latihan</span>
            <h2>Skill Sepak Bola yang Dilatih</h2>
        </div>
        <div class="grid-3">
            <article class="card">
                <h3>Teknik Dasar & Kontrol Bola</h3>
                <p>Mengasah akurasi passing, first touch, serta kontrol bola di bawah tekanan lawan secara konsisten.</p>
            </article>
            <article class="card">
                <h3>Taktik & Visi Permainan</h3>
                <p>Memahami penempatan posisi, transisi menyerang-bertahan, dan membaca ruang gerak di lapangan.</p>
            </article>
            <article class="card">
                <h3>Fisik & Ketahanan</h3>
                <p>Meningkatkan stamina, kelincahan gerak, serta kekuatan fisik untuk menjaga performa sepanjang laga.</p>
            </article>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>