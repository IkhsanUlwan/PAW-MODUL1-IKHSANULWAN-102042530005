<?php
$produk = [
    ["nama" => "Tas Selempang Canvas","kategori" => "Tas","harga" => 125000,"stok" => 15],
    ["nama" => "Sneakers Putih Klasik","kategori" => "Sepatu","harga" => 349000,"stok" => 8],
    ["nama" => "Kaos Oversize Polos","kategori" => "Pakaian",    "harga" => 89000,"stok" => 0],
    ["nama" => "Jam Tangan Minimalis","kategori" => "Aksesoris",  "harga" => 275000,"stok" => 5],
    ["nama" => "Topi Baseball","kategori" => "Aksesoris","harga" => 65000,"stok" => 0],
    ["nama" => "Hoodie Fleece","kategori" => "Pakaian","harga" => 199000,"stok" => 12],
    ["nama" => "Dompet Kulit Pria","kategori" => "Aksesoris","harga" => 150000,"stok" => 20],
];

function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ",", ".");
}

$jumlahProduk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cia Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="navbar">
        <div class="container nav-inner">
            <a href="#" class="logo">Cia<span>Store</span></a>
            <nav class="nav-links">
                <a href="#beranda">Beranda</a>
                <a href="#katalog">Katalog</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </div>
    </header>

    <section class="pembuka" id="beranda">
        <div class="container">
            <h1>Selamat Datang di Cia Store</h1>
            <p>Belanja produk fashion dan aksesoris pilihan dengan harga terjangkau.</p>
            <a href="#katalog" class="btn btn-light">Lihat Katalog</a>
        </div>
    </section>

    <section class="info">
        <div class="container">
            <div class="info-box">
                Total produk tersedia di katalog: <strong><?= $jumlahProduk; ?> produk</strong>
            </div>
        </div>
    </section>

    <main class="container katalog" id="katalog">
        <h2 class="section-title">Katalog Produk</h2>
        <div class="grid">
            <?php foreach ($produk as $item): ?>
                <article class="card">
                    <div class="card-img"></div>
                    <div class="card-body">
                        <span class="kategori"><?= $item["kategori"]; ?></span>
                        <h3><?= $item["nama"]; ?></h3>
                        <p class="harga"><?= rupiah($item["harga"]); ?></p>
                        <p class="stok">Stok: <?= $item["stok"]; ?></p>
                            <?php if ($item["stok"] > 0): ?>
                                <span class="status tersedia">Tersedia</span>
                                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            <?php else: ?>
                                <span class="status habis">Stok Habis</span>
                                <button class="btn btn-disabled" disabled>Beli Sekarang</button>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>