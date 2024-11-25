<?php

// ---------------------------------------------------------------
// CHECK PHP VERSION
// ---------------------------------------------------------------

$minPhpVersion = '8.1'; // Minimal versi PHP yang diperlukan
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo $message;
    exit(1);
}

// ---------------------------------------------------------------
// SET THE CURRENT DIRECTORY
// ---------------------------------------------------------------

// Path ke front controller (file ini)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Pastikan direktori saat ini menunjuk ke direktori front controller
if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

// ---------------------------------------------------------------
// BOOTSTRAP THE APPLICATION
// ---------------------------------------------------------------
// Proses ini mengatur konstanta jalur, memuat dan mendaftar autoloader,
// serta memuat konstanta dan memulai bootstraping sesuai lingkungan.


// LOAD OUR PATHS CONFIG FILE
// Ubah jalur ini sesuai dengan struktur folder Anda jika perlu.
require FCPATH . '/app/Config/Paths.php'; // Pastikan jalur aplikasi Anda benar

// Inisialisasi objek jalur
$paths = new Config\Paths();

// LOAD THE FRAMEWORK BOOTSTRAP FILE
require $paths->systemDirectory . '/Boot.php';

// Menjalankan aplikasi
exit(CodeIgniter\Boot::bootWeb($paths));