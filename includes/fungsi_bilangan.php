<?php

function cek_ganjil_genap($angka) {
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

function cek_prima($angka) {
    if ($angka < 2) return false;
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}
?>