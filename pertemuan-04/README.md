# pertemuan-04# Pertemuan 4 - CSS3 Layout dan Responsive Web Design

## Pengembangan
- Perubahan yang dilakukan:
    1. Menyalin artefak P3 (index.html dan img/foto-profil.jpg) ke direktori pertemuan-04/ sebagai baseline.
    2. Memisahkan CSS internal dari index.html ke berkas eksternal style.css dan menghubungkan dengan <link rel="stylesheet" href="style.css" />.
    3. Menerapkan box-sizing: border-box pada selector universal * di awal style.css agar padding dan border tidak menambah ukuran elemen.
    4. Menerapkan CSS Box Model pada elemen halaman:
          - body { margin:0; font-family: Arial; background:#eef2f7; }
          - #home { background:#fff; border:1px solid #d0d7de; padding:20px; margin:0; }
          - header, section, #contact, footer diatur padding, border, dan margin agar ruang konsisten. Pada tahap ini belum menggunakan Flexbox/Grid.
    5. Menerapkan Flexbox untuk navigasi dengan pendekatan mobile-first:
          - nav ul { display:flex; flex-direction:column; } untuk mobile
          - Diubah menjadi flex-direction:row; di desktop
    6. Menerapkan CSS Grid untuk tata letak utama:
          - Mobile (base): main { display:grid; grid-template-columns:1fr; gap:16px; }
          - Desktop: @media (min-width:768px) { main { grid-template-columns:1fr 1fr; } #contact { grid-column:1 / -1; } }
    7. Tidak menggunakan framework CSS.

- Commit dan push GitHub:
    - git commit -m "Pisahkan CSS dari HTML pada P4"
    - git commit -m "Terapkan Box Model pada P4"
    - git commit -m "Terapkan Flexbox navigasi mobile-first P4"
    - git commit -m "Terapkan Grid dan Media Query P4"
    - git commit -m "Terapkan desain web responsif P4"

## Pengujian
- Perangkat bergerak: Viewport < 768px (contoh: 360px / 414px). Navigasi tersusun vertikal (column), layout main 1 kolom menumpuk, jarak antar elemen sesuai CSS. Diuji via Chrome DevTools > Toggle Device Toolbar.
- Desktop: Viewport >= 768px (contoh: 1024px / 1280px). Navigasi horizontal (row), main menjadi 2 kolom, #contact membentang penuh 1 baris.
- Galat dan perbaikan: [Contoh: padding #home tidak muncul karena typo di style.css, diperbaiki dengan menambahkan ;. / Tidak ada galat tata letak.]
- Validasi CSS: Validasi dilakukan via W3C CSS Validation Service (https://jigsaw.w3.org/css-validator/) terhadap style.css. Hasil: [Contoh: Lulus validasi tanpa error / Ada 1 error property xx, diperbaiki dan validasi ulang hingga lulus]. Screenshot bukti disimpan di LMS.

## Repositori
URL GitHub: [https://github.com/2622500029elisa/2622500029-PWB-SI1A-2627O/tree/main/pertemuan-04]