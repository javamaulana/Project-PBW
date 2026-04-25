<!DOCTYPE html>
<html>
<head>
    <title>Pengecekan Bilangan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav><a href="index.php">Kembali ke Home</a></nav>
        <h2>Cek Ganjil, Genap & Prima</h2>
        <form method="POST">
            Masukkan Bilangan: <input type="number" name="angka" required><br>
            <input type="submit" name="cek" value="Cek Sekarang">
        </form>

        <?php
        if (isset($_POST['cek'])) {
            $angka = $_POST['angka'];
            
            // Cek Ganjil/Genap
            $jenis = ($angka % 2 == 0) ? "Genap" : "Ganjil";

            // Cek Prima
            $prima = "Bilangan Prima";
            if ($angka < 2) {
                $prima = "Bukan Bilangan Prima";
            } else {
                for ($i = 2; $i <= sqrt($angka); $i++) {
                    if ($angka % $i == 0) {
                        $prima = "Bukan Bilangan Prima";
                        break;
                    }
                }
            }

            echo "<div class='result'>";
            echo "Angka <strong>$angka</strong> adalah:<br>";
            echo "- $jenis<br>";
            echo "- $prima";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>