# 🌸 Cantika Beauty Salon - Interactive Reservation Web

[![HTML5](https://img.shields.io/badge/Frontend-HTML5-orange?style=flat-square&logo=html5)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/Styling-CSS3-blue?style=flat-square&logo=css3)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/Interactive-Vanilla%20JS-yellow?style=flat-square&logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/Backend-PHP-777BB4?style=flat-square&logo=php)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-Excel%20%2F%20CSV-green?style=flat-square&logo=microsoft-excel)](https://en.wikipedia.org/wiki/Comma-separated_values)

Sebuah aplikasi web modern, responsif, dan interaktif untuk sistem informasi dan reservasi online **Salon Cantika Beauty**. Proyek ini menerapkan konsep **Single Page Application (SPA)** pada sisi *frontend* untuk pengalaman navigasi yang mulus tanpa *reload* halaman, serta diintegrasikan dengan *backend* server lokal untuk manajemen data pemesanan secara langsung.

---

## 🚀 Fitur Utama

- **Single Page Application (SPA) Navigation**: Berpindah halaman (Beranda, Sejarah, Layanan, Galeri, FAQ, Kontak) secara instan tanpa proses memuat ulang (*no-reload navigation*).
- **Real-time Data Logging**: Sistem reservasi online fungsional yang mengirimkan data dari form HTML langsung ke server.
- **Lightweight Database (Excel/CSV Integration)**: Data pelanggan yang masuk diproses oleh PHP dan otomatis tercatat rapi ke dalam file `.csv` yang dapat langsung dibuka, dikelola, dan diformat menggunakan **Microsoft Excel**.
- **Asynchronous Form Handling (AJAX Fetch API)**: Proses submit form berjalan di latar belakang, memberikan *feedback* instan kepada pengguna berupa notifikasi sukses/gagal tanpa mengganggu aktivitas penjelajahan.
- **Interactive Components**: Dilengkapi dengan akordeon interaktif (tag HTML `<details>`) untuk fitur FAQ dan testimoni, serta peta lokasi interaktif.
- **Responsive Layout**: Desain visual yang adaptif dan rapi saat diakses dari perangkat *mobile*, tablet, hingga desktop.

---

## 🛠️ Tech Stack (Teknologi yang Digunakan)

- **Frontend**: 
  - HTML5 (Struktur Semantik & Komponen Interaktif)
  - CSS3 (Custom Styling & Tata Letak Responsif)
  - Vanilla JavaScript (Logika SPA Router & Fetch API AJAX)
- **Backend**:
  - PHP (Pemrosesan Data POST & File System Stream)
- **Storage/Database**:
  - File `.csv` (Comma-Separated Values) yang kompatibel penuh dengan Microsoft Excel.

---

---

## Pratinjau Antarmuka

### Mode Display 1
<p align="center">
  <img src="Images/Display 1.png" alt="Dashboard Dark Mode" width="100%" style="border-radius: 8px; border: 1px solid #334155;">
  <br>
  <em>Gambar 2.1: Tampilan Utama Dashboard.</em>
</p>


### Mode Display 2
<p align="center">
  <img src="Images/Display 2.png" alt="Dashboard Light Mode" width="100%" style="border-radius: 8px; border: 1px solid #cbd5e1;">
  <br>
  <em>Gambar 2.3: Mode Display untuk Kebutuhan Presentasi Formal.</em>
</p>
---

## 📂 Struktur Proyek

```text
├── salon.png              # Logo resmi Salon Cantika Beauty
├── Tubes.html             # File utama (Frontend - Struktur SPA & JavaScript)
├── Tubes.css              # File stylesheet (Desain & Layouting responsif)
├── simpan.php             # Script backend (Proses enkapsulasi data form ke CSV)
├── data_reservasi.csv     # Database spreadsheet (Otomatis terbuat saat ada data masuk)
└── README.md              # Dokumentasi repositori proyek
