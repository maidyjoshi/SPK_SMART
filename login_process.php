<?php
include 'connection.php';

$error = ""; // Variabel untuk menyimpan pesan kesalahan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Buat prepared statement
    $stmt = $conn->prepare("SELECT id, username, password FROM user WHERE username = ?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Ambil data pengguna dari database
        $user = $result->fetch_assoc();
        $hashed_password = $user['password'];

        // Verifikasi kata sandi
        if (password_verify($input_password, $hashed_password)) {
            // Jika verifikasi berhasil, arahkan ke halaman landing_page.php
            header("Location: landing_page.php");
            exit();
        } else {
            $error = "Username atau password salah!";
        }
    } else {
        $error = "Username atau password salah!";
    }

    $stmt->close();
}

// Redirect kembali ke halaman login.php dengan membawa pesan kesalahan
header("Location: login.php?error=" . urlencode($error));
exit();
?>