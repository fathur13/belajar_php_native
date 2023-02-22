<!DOCTYPE html>
<html>

<head>
    <title>PHP Native Hello World </title>
</head>

<body>
    <!-- contoh 1 -->
    <?php
    // membuka file
    $namafile = "data.txt";
    $file = fopen($namafile, "r");

    // membaca konten file
    $konten = fread($file, filesize($namafile));
    echo $konten;

    // menutup file
    fclose($file);
    ?>

    <!-- contoh 2 -->
    <?php
    // membuka file
    $namafile = "data.txt";
    $file = fopen($namafile, "w");

    // menulis konten ke file
    $konten = "Ini adalah teks baru pembuat fathur ";
    fwrite($file, $konten);

    // menutup file
    fclose($file);
    ?>

    <!-- contoh 3 -->
    <?php
    // membuka file
    $namafile = "data.txt";
    $file = fopen($namafile, "a");

    // menambahkan konten ke file
    $konten = "Ini adalah teks tambahan";
    fwrite($file, $konten);

    // menutup file
    fclose($file);
    ?>
</body>

</html>