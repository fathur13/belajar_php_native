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

    // menyiapkan statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM pelanggan WHERE nama=?");

    // mengikat parameter
    mysqli_stmt_bind_param($stmt, "s", $name);

    // menentukan nilai parameter
    $name = "Fathur";

    // mengeksekusi statement
    mysqli_stmt_execute($stmt);

    // mengambil hasil query
    $result = mysqli_stmt_get_result($stmt);

    // menampilkan hasil query
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }

    // menutup statement dan koneksi
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    ?>
</body>

</html>