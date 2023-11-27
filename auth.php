<?php
@include 'connection.php';

$input_username = $_POST['username'];
$input_password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$input_username' AND password='$input_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;

    $sql_insert = "INSERT INTO user (username, password) VALUES ('$input_username', '$input_password')";
    if ($conn->query($sql_insert) === TRUE) {
        echo "Pengguna berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }

    header('Location: index.php');
    exit();
} else {
    echo 'Username atau password salah. Silakan coba lagi.';
}

$conn->close();
?>
