<?php
$nama = "John Doe"; // tipe data string
$umur = 30; // tipe data integer
$gaji = 1000.50; // tipe data float
$menikah = true; // tipe data boolean
$hobi = array("membaca", "menulis", "bermain musik"); // tipe data array


$umur = 30;

if ($umur >= 18) {
  echo "Anda sudah dewasa";
} else {
  echo "Anda masih anak-anak";
}


for ($i = 1; $i <= 10; $i++) {
    echo $i;
  }
  
  $i = 1;
  while ($i <= 10) {
    echo $i;
    $i++;
  }
  
  $hobi = array("membaca", "menulis", "bermain musik");
  foreach ($hobi as $h) {
    echo $h;
  }

  
  function tambah($a, $b) {
    $c = $a + $b;
    return $c;
  }
  
  $x = 5;
  $y = 3;
  $hasil = tambah($x, $y);
  echo $hasil; // output: 8
  
?>
