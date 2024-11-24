<?php
session_start();
if (!isset($_SESSION['data'])) {
    die("Tidak ada data untuk ditampilkan.");
}

$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Hasil Pendaftaran</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?= htmlspecialchars($data['name']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= htmlspecialchars($data['email']); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?= htmlspecialchars($data['password']); ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?= htmlspecialchars($data['age']); ?></td>
        </tr>
        <tr>
            <td>Isi File</td>
            <td><pre><?= htmlspecialchars($data['fileContent']); ?></pre></td>
        </tr>
        <tr>
            <td>Browser/OS Info</td>
            <td><?= htmlspecialchars($data['browserInfo']); ?></td>
        </tr>
    </table>
</body>
</html>
