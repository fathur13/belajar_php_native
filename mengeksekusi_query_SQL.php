<!-- select -->
<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "username", "password", "myDB");

// mengeksekusi query SELECT
$result = mysqli_query($conn, "SELECT * FROM customers");

// menampilkan hasil query
while($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
}

// menutup koneksi
mysqli_close($conn);
?>

<!-- insert -->
<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "username", "password", "myDB");

// mengeksekusi query INSERT
$sql = "INSERT INTO customers (name, email, phone) VALUES ('John Doe', 'john@example.com', '123456789')";
if(mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);
?>

<!-- update -->
<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "username", "password", "myDB");

// mengeksekusi query UPDATE
$sql = "UPDATE customers SET phone='987654321' WHERE name='John Doe'";
if(mysqli_query($conn, $sql)) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);
?>

<!-- delete -->
<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "username", "password", "myDB");

// mengeksekusi query DELETE
$sql = "DELETE FROM customers WHERE name='John Doe'";
if(mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);
?>