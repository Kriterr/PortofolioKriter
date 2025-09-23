<?php
// Memasukkan data portofolio
include 'data.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Desain Apple</title>
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="navbar">
        <div class="container">
            <div class="logo"></div>
            <nav>
                <a href="#">Store</a>
                <a href="#">Mac</a>
                <a href="#">iPad</a>
                <a href="#">iPhone</a>
                <a href="#">Watch</a>
                <a href="#">Vision</a>
            </nav>
            <div class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Inovasi dalam Portofolio.</h1>
                <p>Lihat proyek terbaru yang dirancang dengan presisi dan kreativitas.</p>
            </div>
        </section>

        <section id="portfolio" class="portfolio-grid">
            <div class="container">
                <h2>Proyek Unggulan</h2>
                <div class="grid">
                    
                    <?php foreach ($portfolio_items as $item): ?>
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                            <div class="card-content">
                                <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                                <p><?php echo htmlspecialchars($item['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>Hak Cipta © <?php echo date("Y"); ?> Apple Inc. Semua hak cipta dilindungi undang-undang.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>