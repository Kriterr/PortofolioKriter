<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Kriter - Neon Blue Theme</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --neon-blue: #00e0ff; /* Warna biru neon yang ramah mata */
            --dark-background: #1a1a2e;
            --card-background: #232946;
            --text-color: #e0e0e0;
            --light-grey: #a0a0a0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--dark-background);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            text-align: center;
            padding: 40px 20px;
            background-color: var(--card-background);
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 224, 255, 0.2);
        }

        header h1 {
            font-size: 3em;
            color: var(--neon-blue);
            margin-bottom: 10px;
            text-shadow: 0 0 10px var(--neon-blue);
        }

        header p {
            font-size: 1.2em;
            color: var(--light-grey);
        }

        section {
            margin-bottom: 40px;
        }

        h2 {
            font-size: 2.5em;
            color: var(--neon-blue);
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 0 8px var(--neon-blue);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: var(--card-background);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 224, 255, 0.3);
        }

        .card-image-container {
            width: 100%;
            height: 200px; /* Tinggi gambar default */
            margin-bottom: 15px;
            overflow: hidden;
            border-radius: 8px;
            background-color: #333; /* Placeholder background */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memastikan gambar mengisi container tanpa terdistorsi */
            display: block;
        }

        .card h3 {
            color: var(--neon-blue);
            font-size: 1.8em;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .card p {
            color: var(--light-grey);
            font-size: 0.95em;
            margin-bottom: 15px;
            flex-grow: 1; /* Memungkinkan paragraf mengambil ruang yang tersedia */
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 15px;
            margin-bottom: 15px; /* Tambahkan margin bawah agar tidak terlalu mepet dengan link */
        }

        .tag {
            background-color: rgba(0, 224, 255, 0.2);
            color: var(--neon-blue);
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 0.8em;
            font-weight: bold;
        }

        .view-details {
            display: inline-block;
            color: var(--neon-blue);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            margin-top: auto; /* Mendorong tombol ke bagian bawah card */
            align-self: flex-start; /* Sejajarkan ke kiri */
        }

        .view-details:hover {
            color: #fff;
            text-shadow: 0 0 5px var(--neon-blue);
        }

        .skill-card {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .skill-card .icon {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            border-radius: 15px; /* Sedikit rounded corner untuk icon */
            background-color: var(--dark-background); /* Background untuk icon jika tidak ada gambar */
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 224, 255, 0.2);
        }
        
        .skill-card .icon img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Memastikan icon tidak terpotong */
        }

        .skill-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .skill-level {
            background-color: var(--neon-blue);
            color: var(--dark-background);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8em;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Certificate-specific styles */
        .certificate-card .card-image-container {
            height: 250px; /* Tinggi gambar sertifikat mungkin perlu lebih tinggi */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.5em;
            }
            h2 {
                font-size: 2em;
            }
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>[Nama Anda]</h1>
            <p>Seorang Pengembang Web Penuh Semangat dengan Fokus pada Java dan MySQL</p>
        </header>

        <section id="projects">
            <h2>Proyek</h2>
            <div class="grid">
                <div class="card">
                    <div class="card-image-container">
                        <img src="https://via.placeholder.com/350x200/232946/00e0ff?text=Management+KingsHCut" alt="Management KingsHCut Screenshot">
                    </div>
                    <h3>Management KingsHCut</h3>
                    <p>A Java and MySQL-based web application for managing a barbershop's inventory, sales, and financial reports.</p>
                    <div class="tags">
                        <span class="tag">Java</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Web Development</span>
                    </div>
                    <a href="https://github.com/Kriterr/PortofolioKriter" target="_blank" class="view-details">View Details &#8599;</a>
                </div>

                <div class="card">
                    <div class="card-image-container">
                        <img src="https://via.placeholder.com/350x200/232946/00e0ff?text=Database+Player" alt="Database Player Screenshot">
                    </div>
                    <h3>Database Player</h3>
                    <p>A Java and MySQL-based web application to manage a player database.</p>
                    <div class="tags">
                        <span class="tag">Java</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Web Development</span>
                    </div>
                    <a href="https://github.com/Kriterr/PortofolioKriter" target="_blank" class="view-details">View Details &#8599;</a>
                </div>

                <div class="card">
                    <div class="card-image-container">
                        <img src="https://via.placeholder.com/350x200/232946/00e0ff?text=SER+AI" alt="SER AI Screenshot">
                    </div>
                    <h3>SER AI</h3>
                    <p>Face Recognition Emotion AI.</p>
                    <div class="tags">
                        <span class="tag">Google Colab</span>
                        <span class="tag">Visual Studio Code</span>
                        <span class="tag">Artificial Intelligence</span>
                    </div>
                    <a href="https://github.com/Kriterr/PortofolioKriter" target="_blank" class="view-details">View Details &#8599;</a>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2>Keahlian</h2>
            <div class="grid">
                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg" alt="Figma Icon">
                    </div>
                    <h3>Figma</h3>
                    <span class="skill-level">Advanced</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Canva_icon_2021.svg" alt="Canva Icon">
                    </div>
                    <h3>Canva</h3>
                    <span class="skill-level">Expert</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fd/Microsoft_Office_Word_%282019%E2%80%93present%29.svg" alt="Ms. Word Icon">
                    </div>
                    <h3>Ms. Word</h3>
                    <span class="skill-level">Expert</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://www.visual-paradigm.com/images/visualparadigm_icon.png" alt="Visual Paradigm Icon">
                    </div>
                    <h3>Visual Paradigm</h3>
                    <span class="skill-level">Advanced</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://www.eclipse.org/artwork/images/eclipse-256.png" alt="Eclipse Icon">
                    </div>
                    <h3>Eclipse</h3>
                    <span class="skill-level">Advanced</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Visual_Studio_Code_1.35_icon.svg" alt="Visual Studio Code Icon">
                    </div>
                    <h3>Visual Studio Code</h3>
                    <span class="skill-level">Intermediate</span>
                </div>
                
                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL Icon">
                    </div>
                    <h3>MySQL</h3>
                    <span class="skill-level">Expert</span>
                </div>

                <div class="card skill-card">
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/en/3/30/Java_logo.png" alt="Java Icon">
                    </div>
                    <h3>Java</h3>
                    <span class="skill-level">Advanced</span>
                </div>
            </div>
        </section>

        <section id="certificates">
            <h2>Sertifikat</h2>
            <div class="grid">
                <div class="card certificate-card">
                    <div class="card-image-container">
                        <img src="https://via.placeholder.com/350x250/232946/00e0ff?text=Certificate+1" alt="Certificate 1">
                    </div>
                    <h3>Sertifikat Web Development</h3>
                    <p>Sertifikat ini membuktikan keahlian dalam pengembangan web.</p>
                    <a href="#" target="_blank" class="view-details">Lihat Sertifikat &#8599;</a>
                </div>

                <div class="card certificate-card">
                    <div class="card-image-container">
                        <img src="https://via.placeholder.com/350x250/232946/00e0ff?text=Certificate+2" alt="Certificate 2">
                    </div>
                    <h3>Sertifikat Database Management</h3>
                    <p>Menguasai manajemen basis data MySQL.</p>
                    <a href="#" target="_blank" class="view-details">Lihat Sertifikat &#8599;</a>
                </div>
            </div>
        </section>

    </div>
</body>
</html>