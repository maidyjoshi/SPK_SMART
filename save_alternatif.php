<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_alternatif = $_POST['jumlah_alternatif'];

    // Insert ke database sesuai jumlah alternatif yang dimasukkan
    $sql = "INSERT INTO alternative (nama) VALUES ";
    $placeholders = array_fill(0, $jumlah_alternatif, "(?)");
    $sql .= implode(",", $placeholders);

    $stmt = $conn->prepare($sql);

    // Binding parameter untuk setiap input nama
    for ($i = 1; $i <= $jumlah_alternatif; $i++) {
        $nama_alternatif = "A" . $i;
        $stmt->bind_param("s", $nama_alternatif); // Mengubah "n" menjadi "s" untuk tipe data string
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();

    // Redirect kembali ke halaman input_alternatif.php setelah selesai menyimpan
    header("Location: input_alternatif.php");
    exit();
}
?>