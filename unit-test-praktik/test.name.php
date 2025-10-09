<?php
// File: test_name.php
require_once "validator.php";

// Test Case 1: Nama valid (nama lengkap Anda)
try {
    $result = validateName("Hendrik Muh");
    echo "PASS: Nama 'Hendrik Muh' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Hendrik Muh' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 2: Nama tidak valid (mengandung angka)
try {
    $result = validateName("Hendrik Muh123");
    echo "PASS: Nama 'Hendrik Muh123' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Hendrik Muh123' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 3: Nama kosong
try {
    $result = validateName("");
    echo "PASS: Nama kosong diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama kosong tidak diterima. Error: " . $e->getMessage() . "<br>";
}