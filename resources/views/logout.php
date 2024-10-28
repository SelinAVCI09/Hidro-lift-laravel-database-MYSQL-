<?php
// Oturumu başlat
session_start();

// Tüm oturum değişkenlerini temizle
session_unset();

// Oturumu yok et
session_destroy();

// Kullanıcıyı giriş sayfasına yönlendir
header("Location: index.php");
exit();

