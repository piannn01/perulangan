//1. Perulangan For
<?

for ($i =0; $i < 10; $i++){
    //echo "<h2>Ini perulangan ke-$i</h2>":
}

?>

//2. Perulangan While
<?php

$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

?>

//3. Perulangan Do/While
<?php

$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

?>

//4. Perulangan Foreach
<?php
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP",
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

?>

//5. Perulangan Bersarang
//contoh 1 :
<?php

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}

?>

//contoh 2 :
<?php

$i = 0;
while($i < 10){
    for ($J = 0; $j < 10; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    
    $i++;
}
