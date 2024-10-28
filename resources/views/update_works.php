<?php
// Veritabanı bağlantısı
$mysqli = new mysqli('127.0.0.1', 'root', '', 'laravel', 3306);

if ($mysqli->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Formdan gelen verileri al
    $id = $_POST['id']; // Düzenlenecek kaydın ID'si
    $admin_id = $_POST['admin_id'];
    $text = $_POST['text'];
    $label = $_POST['label'];
    $photo_urls = $_POST['photo_urls'];

    // Veritabanında güncelleme yap
    $update_sql = "UPDATE works SET admin_id=?, text=?, label=?, photo_urls=? WHERE id=?";
    $stmt = $mysqli->prepare($update_sql);
    $stmt->bind_param("isssi", $admin_id, $text, $label, $photo_urls, $id);

    if ($stmt->execute()) {
        header("Location: admin_home.php");
        exit();
    } else {
        echo "Güncelleme başarısız: " . $mysqli->error;
    }
} else {
    // Düzenlenecek kaydı almak için ID'yi kullan
    $id = $_GET['id'];
    $select_sql = "SELECT * FROM works WHERE id=?";
    $stmt = $mysqli->prepare($select_sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

// Bağlantıyı kapat
$mysqli->close();
?>
