<?php
$nama = "John Doe";
echo strlen($nama); // output: 8
echo substr($nama, 0, 4); // output: John
echo strpos($nama, "Doe"); // output: 5


$namafile = "data.txt";
$file = fopen($namafile, "r"); // membuka file untuk dibaca
$konten = fread($file, filesize($namafile)); // membaca konten file
fclose($file); // menutup file

$file = fopen($namafile, "w"); // membuka file untuk ditulis
$konten = "Ini adalah teks baru";
fwrite($file, $konten); // menulis konten ke file
fclose($file); // menutup file


$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// memeriksa koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// menjalankan query SQL
$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);

// menampilkan hasil query
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

// menutup koneksi
mysqli_close($conn);

?>