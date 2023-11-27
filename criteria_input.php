<!DOCTYPE html>
<html>
<head>
    <title>Input Kriteria</title>
</head>
<body>
    <h2>Input Kriteria</h2>
    <form action="save_criteria.php" method="post">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jumlah_kriteria = $_POST['jumlah_kriteria'];

            // Buat form untuk setiap kriteria berdasarkan jumlah yang dimasukkan pengguna
            for ($i = 1; $i <= $jumlah_kriteria; $i++) {
                echo "<h3>Kriteria $i</h3>";
                echo '<label for="kode_kriteria'.$i.'">Kode Kriteria:</label>';
                echo '<input type="text" name="kode_kriteria[]" id="kode_kriteria'.$i.'" required><br>';
                
                echo '<label for="nama_kriteria'.$i.'">Nama Kriteria:</label>';
                echo '<input type="text" name="nama_kriteria[]" id="nama_kriteria'.$i.'" required><br>';
                
                echo '<label for="bobot_kriteria'.$i.'">Bobot Kriteria:</label>';
                echo '<input type="text" name="bobot_kriteria[]" id="bobot_kriteria'.$i.'" required><br>';
                
                echo '<label for="jenis_kriteria'.$i.'">Jenis Kriteria:</label>';
                echo '<input type="text" name="jenis_kriteria[]" id="jenis_kriteria'.$i.'" required><br>';
    
                // Input subkriteria untuk setiap kriteria
                echo '<h4>Input Subkriteria</h4>';
                echo '<label for="jumlah_subkriteria'.$i.'">Jumlah Subkriteria:</label>';
                echo '<input type="number" name="jumlah_subkriteria[]" id="jumlah_subkriteria'.$i.'" required><br>';
    
                // Form untuk setiap subkriteria
                echo '<div id="subkriteria'.$i.'">';
                echo '</div>';
                echo '<script>
                        document.getElementById("jumlah_subkriteria'.$i.'").addEventListener("change", function() {
                            var container = document.getElementById("subkriteria'.$i.'");
                            container.innerHTML = ""; // Kosongkan container terlebih dahulu
    
                            var jumlah = parseInt(this.value);
                            for (var j = 1; j <= jumlah; j++) {
                                container.innerHTML += "<label for=\"nama_subkriteria'.$i.'_'+j.'\">Nama Subkriteria "+j+":</label>";
                                container.innerHTML += "<input type=\"text\" name=\"nama_subkriteria['+($i-1)+'][]\" id=\"nama_subkriteria'.$i.'_'+j.'\" required>";
                                container.innerHTML += "<label for=\"nilai_subkriteria'.$i.'_'+j.'\">Nilai Subkriteria "+j+":</label>";
                                container.innerHTML += "<input type=\"text\" name=\"nilai_subkriteria['+($i-1)+'][]\" id=\"nilai_subkriteria'.$i.'_'+j.'\" required><br>";
                            }
                        });
                    </script>';
            }
        }
        ?>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>