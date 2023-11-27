<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            position: fixed;
            top: 0;
            width: 100%;
        }

        .navbar a {
            color: black;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding-top: 80px;
            background-image: url('path/to/background_image.jpg');
            background-size: cover;
            background-position: center;
            height: calc(100vh - 80px);
        }

        .content h1 {
            color: white;
            text-align: center;
            padding-top: 20%;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">SMART</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="input_alternatif.php">Input Alternatif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#input_kriteria">Input Kriteria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#input_nilai">Input Nilai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="container">
            <h1>Selamat Datang!</h1>
            <!-- Isi konten lainnya -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>