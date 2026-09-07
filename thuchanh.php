<?php
// Câu 1: In ra các số chẵn từ 1 đến 10
echo "Câu 1: Các số chẵn từ 1 đến 10 là:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>";


// Câu 2: Kiểm tra số nguyên tố
$n = 7;
$lasonguyento = true;
if ($n < 2) {
    $lasonguyento = false;
} else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $lasonguyento = false;
            break;
        }
    }
}
echo "Câu 2: ";
if ($lasonguyento == true) {
    echo $n . " là số nguyên tố.<br><br>";
} else {
    echo $n . " không phải là số nguyên tố.<br><br>";
}


// Câu 3: Hàm inHinhchunhat
function inHinhChuNhat($chieurong, $chieucao) {
    for ($i = 1; $i <= $chieucao; $i++) {
        for ($j = 1; $j <= $chieurong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
echo "Câu 3: Hình chữ nhật 5x3:<br>";
inHinhChuNhat(5, 3);
?>
