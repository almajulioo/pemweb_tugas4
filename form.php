<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Pendaftaran</h2>
    <form id="registrationForm" action="process.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" required>
        <span class="error" id="nameError"></span>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="emailError"></span>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <span class="error" id="passwordError"></span>

        <label for="age">Umur</label>
        <input type="number" id="age" name="age" required min="1" max="100">
        <span class="error" id="ageError"></span>

        <label for="fileUpload">Upload File (Teks)</label>
        <input type="file" id="fileUpload" name="fileUpload" accept=".txt" required>
        <span class="error" id="fileError"></span>

        <button type="submit">Submit</button>
    </form>

    <script>
        function validateForm() {
            let isValid = true;

            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();
            const age = document.getElementById("age").value.trim();
            const file = document.getElementById("fileUpload").files[0];

            document.getElementById("nameError").textContent = name.length >= 3 ? "" : "Nama minimal 3 karakter.";
            document.getElementById("emailError").textContent = email.includes("@") ? "" : "Email tidak valid.";
            document.getElementById("passwordError").textContent = password.length >= 6 ? "" : "Password minimal 6 karakter.";
            document.getElementById("ageError").textContent = age >= 1 && age <= 100 ? "" : "Umur harus antara 1-100.";
            document.getElementById("fileError").textContent = file && file.size <= 50000 ? "" : "File harus berukuran <= 50KB dan berupa teks.";

            isValid = !document.querySelector(".error:not(:empty)");
            return isValid;
        }
    </script>
</body>
</html>
