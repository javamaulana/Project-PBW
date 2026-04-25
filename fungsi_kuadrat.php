<!DOCTYPE html>
<html>
<head>
    <title>Tabel Fungsi Kuadrat</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav><a href="index.php">Kembali ke Home</a></nav>
        <h2>Tabel Nilai Fungsi Kuadrat: f(x) = ax² + bx + c</h2>
        <form method="POST">
            Nilai a: <input type="number" name="a" required><br>
            Nilai b: <input type="number" name="b" required><br>
            Nilai c: <input type="number" name="c" required><br>
            Range x (awal): <input type="number" name="x_awal" required><br>
            Range x (akhir): <input type="number" name="x_akhir" required><br>
            <input type="submit" name="tampilkan" value="Tampilkan Tabel">
        </form>

        <?php
        if (isset($_POST['tampilkan'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $start = $_POST['x_awal'];
            $end = $_POST['x_akhir'];

            echo "<h3>Tabel Hasil untuk f(x) = {$a}x² + {$b}x + {$c}</h3>";
            echo "<table>
                    <tr><th>x</th><th>f(x)</th></tr>";
            
            for ($x = $start; $x <= $end; $x++) {
                $fx = ($a * ($x**2)) + ($b * $x) + $c;
                echo "<tr><td>$x</td><td>$fx</td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>