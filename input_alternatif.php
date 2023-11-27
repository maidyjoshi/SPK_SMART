<!DOCTYPE html>
<html>
<head>
    <title>Input Alternatif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Input Alternatif</h2>
        <form action="save_alternatif.php" method="post">
            <div class="form-group">
                <label for="jumlah_alternatif">Jumlah Alternatif:</label>
                <input type="number" class="form-control" id="jumlah_alternatif" name="jumlah_alternatif" required>
            </div>
            <button type="submit" class="btn btn-primary">Buat Tabel Alternatif</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>