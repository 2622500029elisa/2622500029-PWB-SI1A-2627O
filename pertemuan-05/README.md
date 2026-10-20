# P5 - JavaScript Dasar, DOM, Event, dan Validasi Sisi Klien

## Deskripsi
Dokumentasi pengembangan halaman web pada P5, meliputi JavaScript, DOM, event listener, interaksi navigasi, dan validasi formulir sisi klien. Pengembangan ini melanjutkan artefak P4 dengan menambahkan interaktivitas tanpa mengubah struktur HTML utama dan tanpa framework.

## Fitur dan Pengembangan

- **Pemisahan JavaScript Eksternal:**
  Membuat berkas `script.js` di dalam `pertemuan-05/` dan menghubungkannya di akhir `index.html` sebelum `</body>` dengan `<script src="script.js"></script>`. Semua logika interaktif dipindahkan dari HTML ke file eksternal.

- **Interaksi Navigasi - Hamburger Menu:**
  Menambahkan tombol hamburger (`button#menu-toggle`) untuk navigasi mobile. Implementasi DOM: `document.querySelector`, `classList.toggle('active')` pada `nav ul` untuk membuka/menutup menu. Menggunakan `addEventListener('click')` pada tombol menu.

- **DOM Manipulation & Event Listener:**
  Menerapkan `DOMContentLoaded` untuk memastikan script berjalan setelah HTML siap. Menambahkan event `click` untuk smooth scroll ke section `#home`, `#about`, `#contact` dan menutup menu otomatis setelah link diklik.

- **Validasi Formulir Sisi Klien:**
  Membuat validasi pada form kontak (`#contactForm`) dengan JavaScript murni:
    - Nama tidak boleh kosong & minimal 3 karakter
    - Email harus format valid dengan regex `/^[^\s@]+@[^\s@]+\.[^\s@]+$/`
    - Pesan minimal 10 karakter
  Jika tidak valid, tampilkan pesan error di bawah input dengan `textContent` dan `preventDefault()`. Jika valid, tampilkan alert "Pesan berhasil dikirim!" dan `form.reset()`.

## Pengujian

- **Fitur Hamburger Menu yang diuji:**
  Langkah: Buka halaman di viewport mobile <768px > klik tombol hamburger > klik link navigasi.
  Hasil aktual: Menu terbuka/menutup dengan benar, class `active` bertambah/hilang, navigasi berfungsi, menu tertutup otomatis setelah link diklik. Di desktop >=768px tombol hamburger tersembunyi.

- **Fitur Validasi Formulir yang diuji:**
  Langkah: 
    1. Submit form kosong -> Muncul error "Nama wajib diisi"
    2. Input email "andi@" -> Muncul error "Format email tidak valid"
    3. Input pesan "halo" -> Muncul error "Pesan minimal 10 karakter"
    4. Input semua valid -> Form berhasil, alert sukses muncul.
  Hasil aktual: Semua validasi berjalan, `preventDefault()` mencegah submit jika error, pesan error hilang saat user mulai mengetik ulang (event `input`).

- **Debugging:**
  Diperiksa via DevTools Console, tidak ada `Uncaught TypeError`. Perbaikan dilakukan jika `querySelector` mengembalikan null dengan menambahkan pengecekan `if (element)`.

## Riwayat Pengembangan

- `git commit -m "Pisahkan JS ke script.js dan hubungkan ke HTML P5"`
- `git commit -m "Terapkan DOM dan Event untuk hamburger menu P5"`
- `git commit -m "Terapkan validasi formulir sisi klien P5"`
- `git commit -m "Uji interaksi navigasi dan validasi P5"`

## Repositori
URL GitHub: https://github.com/[USERNAME_KAMU]/[NAMA_REPO]/tree/main/pertemuan-05