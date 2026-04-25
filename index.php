<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Kalkulator Matematika - UTS PBW</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hero-section {
            text-align: center;
            padding: 30px 0;
            border-bottom: 2px solid #eee;
            margin-bottom: 30px;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            background: #fafafa;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-color: #27ae60;
        }
        .card h3 { color: #27ae60; margin-bottom: 10px; }
        .card p { font-size: 0.9em; color: #666; margin-bottom: 15px; }
        .btn-link {
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 0.85em;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 0.8em;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="hero-section">
            <h1>Kalkulator Matematika Dasar</h1>
            <p>Proyek UTS Pemrograman Berbasis Web</p>
            <p><strong>Departemen Matematika dan Sains Data - Universitas Andalas</strong></p>
        </header>

        <div class="content">
            <h2>Pilih Modul Perhitungan:</h2>
            <div class="menu-grid">
                <div class="card">
                    <h3>Aritmetika</h3>
                    <p>Hitung Suku ke-n (Un) dan Jumlah Suku (Sn) pada barisan aritmetika secara presisi.</p>
                    <a href="aritmetika.php" class="btn-link">Buka Kalkulator</a>
                </div>

                <div class="card">
                    <h3>Cek Bilangan</h3>
                    <p>Uji angka untuk menentukan apakah termasuk Ganjil, Genap, atau Bilangan Prima.</p>
                    <a href="cek_bilangan.php" class="btn-link">Mulai Pengecekan</a>
                </div>

                <div class="card">
                    <h3>Fungsi Kuadrat</h3>
                    <p>Membuat tabel nilai otomatis untuk fungsi kuadrat<br>f(x) = ax² + bx + c</p>
                    <a href="fungsi_kuadrat.php" class="btn-link">Lihat Tabel</a>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>&copy; 2026 Proyek UTS PBW - Kelompok 7</p>
            <p>Dosen Pengampu: Dr. Radhiatul Husna, M.Si</p>
        </footer>
    </div>
</body>
</html>