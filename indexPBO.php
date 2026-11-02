<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahunTerbit;

    public function tampilkanInformasi() {
        return "Judul: {$this->judul} <br> Penulis: {$this->penulis} <br> Tahun Terbit: {$this->tahunTerbit}<br><br>";
    }
}

$buku1 = new Buku();
$buku1->judul = "Pemrograman Berorientasi Objek";
$buku1->penulis = "Budi Raharjo";
$buku1->tahunTerbit = 2023;

$buku2 = new Buku();
$buku2->judul = "Belajar Pemrograman PHP untuk Pemula";
$buku2->penulis = "Andi Wijaya";
$buku2->tahunTerbit = 2024;

echo "<b>=== INFORMASI BUKU PERPUSTAKAAN ===</b><br><br>";

echo "<b>Data Buku 1:</b><br>";
echo $buku1->tampilkanInformasi();

echo "<b>Data Buku 2:</b><br>";
echo $buku2->tampilkanInformasi();
?>