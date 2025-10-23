# Librarion - Dashboard Perpustakaan

Librarion adalah aplikasi web dashboard sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini mensimulasikan halaman admin untuk mengelola data perpustakaan, dengan fokus pada *routing*, *controller*, dan *templating* Blade.

Sistem login saat ini hanya simulasi untuk mendemonstrasikan pengiriman data antar *request*

---

## Fitur Utama

* 🖥️ **Dashboard:** Halaman selamat datang dengan ringkasan statistik (total buku, stok, dll.).
* 📚 **Daftar Buku:** Menampilkan daftar koleksi buku dalam format kartu (data statis dari controller).
* 👤 **Profil Pengguna:** Menampilkan detail profil pengguna (data diambil dari parameter URL).
* 🔒 **Login (Simulasi):** Halaman login yang meneruskan `username` ke dashboard melalui parameter URL.
* 🧩 **Komponen Blade:** Menggunakan komponen Blade untuk bagian yang dapat digunakan kembali seperti `navbar` dan `footer`.
* 🎨 **Tailwind CSS:** Desain *front-end* dibangun menggunakan Tailwind CSS (via CDN).

---


