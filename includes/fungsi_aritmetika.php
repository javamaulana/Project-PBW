<?php

function hitung_un($a, $b, $n) {
    return $a + ($n - 1) * $b;
}

function hitung_sn($a, $b, $n) {
    $un = hitung_un($a, $b, $n);
    return ($n / 2) * ($a + $un);
}
?>