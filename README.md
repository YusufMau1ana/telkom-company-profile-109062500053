# Telkom University Company Profile - Praktikum Git & Web

Project simulasi website dinamis menggunakan HTML, CSS, PHP Native, dan MySQL/MariaDB dengan implementasi version control Git dan GitHub[cite: 2, 47].

---

## 🛠️ Prasyarat & Lingkungan
- Web Server: XAMPP (Apache & MySQL aktif)[cite: 9, 18]
- Editor: Visual Studio Code[cite: 3, 9]
- Version Control: Git & Akun GitHub[cite: 3, 9, 10]

---

## 🚀 Petunjuk Setup Project

1. **Persiapan Database:**
   - Buka `http://localhost/phpmyadmin/`[cite: 9, 18].
   - Buat database `telkom_profile` dan impor script dari `database/telkom_profile.sql`[cite: 18, 47, 54].
2. **Koneksi Database:**
   - Periksa file `config/database.php` dan sesuaikan user/password database lokal[cite: 25, 47].
3. **Menjalankan Website:**
   - Letakkan folder project di `C:/xampp/htdocs/telkom-company-profile`[cite: 17, 47].
   - Akses melalui browser di: `http://localhost/telkom-company-profile/`[cite: 24, 26, 47].

---

## 📋 Alur Milestone & Praktikum Git

Kerjakan fitur secara bertahap dan buat commit terpisah di setiap milestone (minimal 8 commit logis)[cite: 17, 26, 43]:

- [ ] **M1: Inisialisasi Repository** (`chore: inisialisasi project dan dokumentasi awal`)[cite: 17, 18]
  - Jalankan `git init` serta buat `.gitignore` dan `README.md`[cite: 14, 18].
- [ ] **M2: Struktur Layout & CSS** (`feat: tambahkan layout dasar dan stylesheet`)[cite: 17, 24]
  - Buat `includes/header.php`, `includes/footer.php`, `assets/css/style.css`, dan `profile.php`[cite: 20, 21, 23, 24].
- [ ] **M3-4: Database & Program Studi** (`feat: hubungkan database dan tampilkan program studi`)[cite: 25, 28]
  - Buat `config/database.php`, `programs.php`, dan update `index.php`[cite: 25, 26, 27].
- [ ] **M5: Fitur Berita** (`feat: tambahkan daftar dan detail berita`)[cite: 29, 30]
  - Buat `news.php` dan `news_detail.php` (dengan prepared statement)[cite: 29, 30].
- [ ] **M6: Form Kontak & Pesan** (`feat: simpan pesan kontak ke database`)[cite: 31, 32]
  - Buat form di `contact.php` dan proses INSERT di `contact_process.php`[cite: 31, 32].
- [ ] **M7: Branching & Merge** (`feat: tambahkan informasi fokus pembelajaran`)[cite: 35]
  - Buat branch fitur: `git switch -c feature-campus-info`[cite: 35].
  - Modifikasi kode, commit, kembali ke `main`, lalu merge: `git merge feature-campus-info`[cite: 35].
- [ ] **M8: Simulasi Merge Conflict & Penyelesaian** (`merge: selesaikan conflict navbar`)[cite: 37, 38]
  - Buat branch simulasi `conflict-navbar`, ubah baris yang sama dengan `main`, selesaikan konflik, lalu commit[cite: 37, 38].
- [ ] **M9: Simulasi Dua Perangkat (Laptop A & B)** (`docs: perbarui README dari Laptop B`)[cite: 39, 40]
  - Clone ke folder baru, buat commit baru, push dari folder B, lalu pull dari folder utama[cite: 39, 40].
- [ ] **M10: Release & Tagging**[cite: 42, 43]
  - Buat annotated tag final: `git tag -a v1.0.0 -m "Rilis praktikum versi 1.0.0"`[cite: 42].
  - Push tag ke GitHub: `git push origin v1.0.0`[cite: 42].

---

## 📝 Catatan Evaluasi & Penyelesaian Konflik
*(Tuliskan catatan singkat mengenai merge conflict yang diselesaikan dan tautkan link repository)*[cite: 43]
- **Repository Remote:** `https://github.com/USERNAME/telkom-company-profile-NIM`[cite: 43]
- **Penyelesaian Konflik:** Terjadi benturan perubahan menu navigasi pada file `includes/header.php`. Konflik diselesaikan dengan menyatukan label navigasi yang disepakati dan menghapus marker konflik[cite: 37, 38].