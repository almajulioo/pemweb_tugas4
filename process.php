<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $age = htmlspecialchars($_POST['age']);
    $file = $_FILES['fileUpload'];

    // Validasi file
    if ($file['size'] > 50000 || $file['type'] !== 'text/plain') {
        die("File harus berupa teks dan berukuran <= 50KB.");
    }

    // Baca isi file
    $fileContent = file_get_contents($file['tmp_name']);

    // Info Browser
    $browserInfo = $_SERVER['HTTP_USER_AGENT'];

    // Simpan ke session untuk ditampilkan di result.php
    session_start();
    $_SESSION['data'] = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'age' => $age,
        'fileContent' => $fileContent,
        'browserInfo' => $browserInfo,
    ];

    header("Location: result.php");
    exit;
}
?>
