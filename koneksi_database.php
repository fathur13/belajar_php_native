<!DOCTYPE html>
<html>

<head>
    <title>PHP Native Hello World </title>
</head>

<body>
    <?php
    // informasi koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belajar_php";

    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    echo "Koneksi berhasil" . "<br>";
    ?>

    <?php
    // menutup koneksi
    mysqli_close($conn);
    ?>


    <!-- select -->
    <?php
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mengeksekusi query SELECT
    $result = mysqli_query($conn, "SELECT * FROM pelanggan");

    // menampilkan hasil query
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>


    <!-- insert -->
    <?php
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mengeksekusi query INSERT
    $sql = "INSERT INTO pelanggan (nama, email, telepon) VALUES ('Fathur Rahman', 'Fathur@example.com', '123456789')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan". "<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>


    <!-- update -->
    <?php
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mengeksekusi query UPDATE
    $sql = "UPDATE pelanggan SET telepon='987654321' WHERE nama='Fathur Rahman'";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate". "<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>


    <!-- delete -->
    <?php
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // mengeksekusi query DELETE
    $sql = "DELETE FROM pelanggan WHERE nama='Fathur Rahman'";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>
</body>

</html>