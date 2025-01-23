<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Cebox\Components\CeboxButton;
use Cebox\Components\CeboxTable;

// Button Configurations
$buttons = [
    'login' => [
        'text' => 'Masuk',
        'type' => 'submit',
        'class' => 'cebox-btn cebox-primary' // Blue
    ],
    'register' => [
        'text' => 'Daftar',
        'type' => 'button',
        'class' => 'cebox-btn cebox-success' // Green
    ],
    'outline' => [
        'text' => 'Outline',
        'type' => 'button',
        'class' => 'cebox-btn cebox-outline cebox-info' // Light Blue
    ],
    'rounded' => [
        'text' => 'Rounded',
        'type' => 'button',
        'class' => 'cebox-btn cebox-rounded cebox-warning' // Orange
    ],
    'glass' => [
        'text' => 'Glass',
        'type' => 'button',
        'class' => 'cebox-btn cebox-glass cebox-danger' // Red
    ],
    'neon' => [
        'text' => 'Neon',
        'type' => 'button',
        'class' => 'cebox-btn cebox-neon cebox-info' // Light Blue Neon
    ],
    '3d' => [
        'text' => '3D',
        'type' => 'button',
        'class' => 'cebox-btn cebox-3d cebox-primary' // Blue 3D
    ],
    'icon' => [
        'text' => 'Icon',
        'type' => 'button',
        'class' => 'cebox-btn cebox-warning', // Orange
        'icon' => '➔'
    ]
];

// Table action buttons with different colors
$dataProduk = [
    ['001', 'Laptop Gaming', 'Rp 15.000.000', '10', '<button class="cebox-btn cebox-small cebox-primary">Edit</button>'],
    ['002', 'Smartphone', 'Rp 5.000.000', '25', '<button class="cebox-btn cebox-small cebox-warning">Edit</button>'],
    ['003', 'Headphone', 'Rp 500.000', '50', '<button class="cebox-btn cebox-small cebox-danger">Edit</button>']
];

// Add this before creating the table instance
$headerProduk = ['ID', 'Nama Produk', 'Harga', 'Stok', 'Aksi'];

// Create button instances
$buttonInstances = [];
foreach ($buttons as $key => $config) {
    foreach (['Small', '', 'Large'] as $size) {
        $buttonKey = $key . $size;
        $buttonInstances[$buttonKey] = new CeboxButton();
        $buttonInstances[$buttonKey]->setTeks($config['text'])
            ->setTipe($config['type'])
            ->setClass($config['class'] . ($size ? ' cebox-' . strtolower($size) : ''));
        if (isset($config['icon'])) {
            $buttonInstances[$buttonKey]->setIcon($config['icon']);
        }
    }
}

// Then create the table instance
$tabelProduk = new CeboxTable();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/cebox-creative/src/Assets/cebox_ex.css">
    <link rel="stylesheet" href="http://localhost/cebox-creative/src/Assets/components/button2.css">
    <link rel="stylesheet" href="http://localhost/cebox-creative/src/Assets/components/tables2.css">
</head>
<body>
    <header class="cebox-header">
            <nav class="nav-container">
                <div class="logo">Cebox Framework</div>
                <div class="mobile-menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#features">Fitur</a></li>
                    <li><a href="/cebox-creative/examples">Contoh</a></li>
                    <li><a href="#docs">Dokumentasi</a></li>
                </ul>
            </nav>
        </header>

        <main>

        <div class="demo-section">
            <h2 class="section-title">Panduan Penggunaan</h2>
            <div class="usage-guide">
                <div class="guide-item">
                    <h3>1. Include Library</h3>
                    <div class="code-snippet">
                        <code>require_once __DIR__ . '/../vendor/autoload.php';</code>
                    </div>
                </div>
                <div class="guide-item">
                    <h3>2. Import Class</h3>
                    <div class="code-snippet">
                        <code>use Cebox\Components\CeboxButton;</code>
                    </div>
                </div>
                <div class="guide-item">
                    <h3>3. Buat Instance</h3>
                    <div class="code-snippet">
                        <code>$button = new CeboxButton();</code>
                    </div>
                </div>
                <div class="guide-item">
                    <h3>4. Konfigurasi Button</h3>
                    <div class="code-snippet">
                        <code>$button->setTeks('Masuk')
            ->setTipe('submit')
            ->setClass('cebox-btn cebox-primary');</code>
                    </div>
                </div>
            </div>
        </div>

        <div class="demo-section">
            <h2 class="section-title">Komponen Tombol</h2>
            
            <?php foreach (['Small', '', 'Large'] as $size): ?>
                <div class="button-group">
                    <h4>Tombol Ukuran <?php echo $size ?: 'Sedang'; ?></h4>
                    <div class="button-row">
                        <?php 
                        foreach ($buttons as $key => $config) {
                            echo $buttonInstances[$key . $size]->render();
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="code-preview">
                <pre><code>// Basic Button
            $button = new CeboxButton();
            $button->setTeks('Masuk')
                ->setTipe('submit')
                ->setClass('cebox-btn cebox-primary');

            // Button with Icon
            $button->setTeks('Icon')
                ->setIcon('➔')
                ->setClass('cebox-btn cebox-warning');

            // Styled Button
            $button->setTeks('Neon')
                ->setClass('cebox-btn cebox-neon cebox-info');</code></pre>
            </div>
        </div>

        <div class="demo-section">
            <h2 class="section-title">Komponen Tabel</h2>
            <?php echo $tabelProduk->render(); ?>
            <div class="code-preview">
    <pre><code>// Table Configuration
$headerProduk = ['ID', 'Nama Produk', 'Harga', 'Stok', 'Aksi'];

$dataProduk = [
    ['001', 'Laptop Gaming', 'Rp 15.000.000', '10', '<button class="cebox-btn cebox-small cebox-primary">Edit</button>'],
    ['002', 'Smartphone', 'Rp 5.000.000', '25', '<button class="cebox-btn cebox-small cebox-warning">Edit</button>'],
    ['003', 'Headphone', 'Rp 500.000', '50', '<button class="cebox-btn cebox-small cebox-danger">Edit</button>']
];

$tabelProduk = new CeboxTable();
$tabelProduk->setHeader($headerProduk)
            ->setData($dataProduk)
            ->setClass('cebox-table cebox-striped cebox-hover');</code></pre>
</div>

        </div>
    </main>

    <footer class="cebox-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Cebox Framework</h4>
                <p>Framework desain modern dan elegan</p>
            </div>
            <div class="footer-section">
                <h4>Tautan Cepat</h4>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#features">Fitur</a></li>
                    <li><a href="/cebox-creative/examples">Contoh</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Sosial Media</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span class="current-year"></span> Cebox Framework. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        function copyCode(button) {
        const pre = button.nextElementSibling;
        const code = pre.querySelector('code');
        const text = code.innerText;
        
        navigator.clipboard.writeText(text);
        
        button.classList.add('copied');
        button.innerHTML = '<i class="fas fa-check"></i>';
        
        setTimeout(() => {
            button.classList.remove('copied');
            button.innerHTML = '<i class="fas fa-copy"></i>';
        }, 2000);
    }
        document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenuBtn.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    });
    </script>
</body>
</html>
