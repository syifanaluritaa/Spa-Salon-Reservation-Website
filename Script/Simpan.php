<?php
// Mengizinkan akses dari frontend (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Memastikan bahwa data dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang dikirim oleh JavaScript
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '';
    $perawatan = isset($_POST['perawatan']) ? htmlspecialchars($_POST['perawatan']) : '';
    $jadwal = isset($_POST['jadwal']) ? htmlspecialchars($_POST['jadwal']) : '';

    // Validasi sederhana agar tidak ada data kosong yang masuk
    if (empty($nama) || empty($whatsapp) || empty($perawatan) || empty($jadwal)) {
        echo json_encode(["status" => "error", "message" => "Semua kolom harus diisi!"]);
        exit;
    }

    // Nama file Excel/CSV tempat menyimpan data
    $file_excel = "data_reservasi.csv";

    // Cek apakah file sudah ada atau belum. Jika belum, kita buat header kolomnya dulu
    $file_baru = !file_exists($file_excel);

    // Membuka file dalam mode 'append' (menambah data di baris paling bawah)
    $buka_file = fopen($file_excel, "a");

    if ($buka_file) {
        // Jika file baru dibuat, tulis nama kolom di baris pertama
        if ($file_baru) {
            fputcsv($buka_file, ["Nama Lengkap", "Nomor WhatsApp", "Jenis Perawatan", "Tanggal & Jam Kunjungan"]);
        }

        // Memasukkan data pendaftar baru ke baris selanjutnya
        fputcsv($buka_file, [$nama, $whatsapp, $perawatan, $jadwal]);
        
        // Tutup koneksi file
        fclose($buka_file);

        // Kirim respon sukses kembali ke JavaScript
        echo json_encode(["status" => "success", "message" => "Reservasi berhasil disimpan!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal membuka file database."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Metode pengiriman data salah."]);
}
?>