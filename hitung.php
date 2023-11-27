<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Metode SMART</title>
</head>
<body>
    <h2>Hasil Perhitungan Metode SMART</h2>
    <?php
    $criteria = $_POST['criteria'];
    $alternative = $_POST['alternative'];

    echo '<h3>Kriteria:</h3>';
    foreach ($criteria as $k) {
        echo "$k <br>";
    }

    echo '<h3>Alternatif:</h3>';
    foreach ($alternative as $a) {
        echo "$a <br>";
    }
    ?>
</body>
</html>