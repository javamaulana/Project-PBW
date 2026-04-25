<!DOCTYPE html>
<html>
<head>
    <title>Barisan & Deret Aritmetika</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav><a href="index.php">Kembali ke Home</a></nav>
        <h2>Kalkulator Barisan & Deret Aritmetika</h2>
        <form method="POST">
            Suku Pertama (a): <input type="number" name="a" required><br>
            Beda (b): <input type="number" name="b" required><br>
            Suku ke-n (n): <input type="number" name="n" required><br>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $n = $_POST['n'];

            $un = $a + ($n - 1) * $b;
            $sn = ($n / 2) * ($a + $un);

            echo "<div class='result'>";
            echo "Hasil Perhitungan untuk n = $n:<br>";
            echo "Suku ke-$n (Un) = $un <br>";
            echo "Jumlah $n suku pertama (Sn) = $sn";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>