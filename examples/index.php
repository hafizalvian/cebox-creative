<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Cebox\Components\CeboxButton;
use Cebox\Components\CeboxTable;

// Inisialisasi komponen
$tombolLogin = new CeboxButton();
$tombolDaftar = new CeboxButton();
$tombolOutline = new CeboxButton();
$tombolRounded = new CeboxButton();
$tombolIcon = new CeboxButton();
$tombolLarge = new CeboxButton();
$tabelProduk = new CeboxTable();

// Konfigurasi tombol
$tombolLogin->setTeks('Masuk')
           ->setTipe('submit')
           ->setClass('cebox-btn cebox-primary');

$tombolDaftar->setTeks('Daftar Sekarang')
            ->setTipe('button')
            ->setClass('cebox-btn cebox-success');

$tombolOutline->setTeks('Outline Button')
              ->setTipe('button')
              ->setClass('cebox-btn cebox-outline cebox-primary');

$tombolRounded->setTeks('Rounded Button')
              ->setTipe('button')
              ->setClass('cebox-btn cebox-rounded cebox-success');

$tombolIcon->setTeks('With Icon')
           ->setIcon('➔')
           ->setClass('cebox-btn cebox-primary');

$tombolLarge->setTeks('Large Button')
            ->setClass('cebox-btn cebox-primary cebox-large');

// Konfigurasi tabel
$headerProduk = ['ID', 'Nama Produk', 'Harga', 'Stok', 'Aksi'];
$dataProduk = [
    ['001', 'Laptop Gaming', 'Rp 15.000.000', '10', '<button class="cebox-btn cebox-small cebox-primary">Edit</button>'],
    ['002', 'Smartphone', 'Rp 5.000.000', '25', '<button class="cebox-btn cebox-small cebox-success">Edit</button>'],
    ['003', 'Headphone', 'Rp 500.000', '50', '<button class="cebox-btn cebox-small cebox-outline">Edit</button>']
];

$tabelProduk->setHeader($headerProduk)
           ->setData($dataProduk)
           ->setClass('cebox-table cebox-striped cebox-hover');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cebox Creative Framework</title>
    <link rel="stylesheet" href="src/Assets/cebox.css">
    <link rel="stylesheet" href="src/Assets/component/button.css">
    <link rel="stylesheet" href="src/Assets/component/tables.css">
</head>
<body>
    <header class="header">
        <div class="container nav-container">
            <div class="logo">Cebox Creative</div>
            <nav>
                <?php echo $tombolLogin->render(); ?>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1 class="demo-title">Modern UI Components</h1>

        <div class="demo-section">
            <h2 class="section-title">Button Components</h2>
            <div class="button-grid">
                <?php echo $tombolLogin->render(); ?>
                <?php echo $tombolDaftar->render(); ?>
                <?php echo $tombolOutline->render(); ?>
                <?php echo $tombolRounded->render(); ?>
                <?php echo $tombolIcon->render(); ?>
                <?php echo $tombolLarge->render(); ?>
            </div>
            <div class="code-preview">
                <pre><code>$button->setTeks('Button Text')->setClass('cebox-btn cebox-primary');</code></pre>
            </div>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <h3>Easy Integration</h3>
                <p>Simple component initialization with chainable methods</p>
            </div>
            <div class="feature-card">
                <h3>Modern Design</h3>
                <p>Clean and professional UI components</p>
            </div>
            <div class="feature-card">
                <h3>Responsive</h3>
                <p>Mobile-friendly components that work everywhere</p>
            </div>
        </div>

        <div class="demo-section">
            <h2 class="section-title">Table Component</h2>
            <?php echo $tabelProduk->render(); ?>
            <div class="code-preview">
                <pre><code>$table->setHeader($headers)->setData($data)->setClass('cebox-table');</code></pre>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Cebox Creative Framework. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
