<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furkan Karaaslan</title>
</head>
<body>
<?php
    
    /* Uygulama Ödevi Kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanılarak örneklendirilmesini gerçekleştiriniz.*/

/* Son Giren İlk Çıkar*/
echo "<h1>Stack(YIĞIN)</h1>";
echo "<h2>Son Giren İlk Çıkar (LIFO , last in first out)</h2>";

$otopark = array(
    'Beyaz araba',
    'Kırmızı araba',
    'Mor araba',
    'Sarı araba',
    'Mavi araba',
);
/*array_push // Komutuyla Diziye eleman ekleme yapılır
  array_pop // Komutuyla Diziden Son Giren Elemanı Çıkarır
  array_unshift // Komutuyla Dizinin başına eleman ekleme yapılır
  array_shift // Komutuyla Dizinin ilk elemanını silme işlemi
*/

echo array_pop($otopark); 
print_r($otopark);


/* İlk Giren İlk Çıkar */
echo "<h1>Kuyruk(QUEUE)</h1>";
echo "<h2>İlk Giren İlk Çıkar (FIFO , first in first out )</h2>";

$biletsirasi = array(
    '1.sıra',
    '2.sıra',
    '3.sıra',
    '4.sıra',
    '5.sıra',
);
echo array_shift($biletsirasi);
print_r($biletsirasi);
?>
</body>
</html>