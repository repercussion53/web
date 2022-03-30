<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    <?php
    
    /* Uygulama Ödevi Kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanılarak örneklendirilmesini gerçekleştiriniz.*/




/* Uygulama: Rasgele üretilen sayı 50'den büyükse 
Geçtiniz:Notunuz:xx
50'den küçükse
Kaldınız:Notunuz:xx
uygulamasını gerçekleştiriniz. */
    $ogr_notu = rand(10,100);
    if($ogr_notu >=50){
        echo "Geçtiniz - Notunuz: $ogr_notu";

    }else{
        echo "Kaldınız - Notunuz: $ogr_notu";
    }

      echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";
      $yazi = "Aydın Adnan Menderes Üniversitesi";
      echo "\$yazi Değişkenin İçeriği: $yazi"; 
      echo "<br>\$yazi Değişkenin Türü: " . gettype($yazi);


      /* İçeriğin Büyük Harfe Dönüştürülmesi */
    echo "<br> \$yazi 'nin  Büyük Harfle yazılması: " .$byazi = strtoupper($yazi);
    echo "<br> \$yazi 'nin  Büyük Harfle yazılması: " .$byazi = mb_strtoupper($yazi);
    echo "<br>";


  /* İçeriğin Küçük Harfe Dönüştürülmesi */
  echo "<br> \$yazi 'nin Küçük Harfle yazılması: " .$kyazi = strtolower($yazi);
  echo "<br> \$yazi 'nin Küçük Harfle yazılması: " .$kyazi = mb_strtolower($yazi);
  echo "<br>";


   /* İçeriğin ilk harfinin Büyük Harfe Dönüştürülmesi */
   echo "<br> \$yazi'nın İlk Harfi Büyük: " . $yazi = ucfirst($kyazi);
   echo "<br>";

    /* İçerikteki her kelimenin ilk harfinin büyük harfe dönüştürülmesi */
    echo "<br> \$yazi'nın Her Kelimesinin İlk Harfi Büyük: ". $yazi = ucwords($kyazi);


    /* İçeriğin  Harf Sayısı: */
    echo "<br> \$yazi'nın Harf Sayısı: " . strlen   ($yazi);
    echo "<br>";


    /*Ascıl Char Dönüşümü */
    echo "Karakter Karşılığı (65) : " . chr(65);
    echo "<br>";
    echo "Karakter Karşılığı (100) : " . chr(100);
    echo "<br>";


    /* 0-255 Arasındaki Değerleri chr fonksiyonuna sokarak satır satır yazdırınız. */

    for($i = 33; $i <= 126; $i++){
        echo "$i: " . chr($i) ." ";
    }


    /* Metnin Parçalanarak Diziye Dönüşürülmesi */
    echo "<br><br>";
    echo $yazi . "<br>";
    $dizi = explode(" ",$yazi);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";

    /* Uygulama: Metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız. */
    $metin ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sequi sapiente veniam natus ducimus ut quaerat eaque, in quasi quibusdam eveniet vero similique est? Hic repudiandae reprehenderit cumque libero rerum.
    ";
    
   
    $kelimeDizisi=explode(" ",$metin);
    $cumleDizisi=explode(".",$metin);
    echo "Kelime Sayısı: " . count($kelimeDizisi);
    echo "<br>";
    echo "Cümle Sayısı: " . count($cumleDizisi);

    /* Uygulama: Veri tabanından 2022-11-20 şeklinde gelen tarihi 20.11.222 şeklinde gösteriniz.*/
    $tarih = "2022-11-20";
    $tarihdizisi = explode("-", $tarih);
    echo "<pre>";
    print_r($tarihdizisi);
    echo "</pre>";
    echo "Tarih: $tarihdizisi[2].$tarihdizisi[1].$tarihdizisi[0]";
    /* Dizinin Metine Dönüştürülmesi (implode) */
    echo "<br>";
    $aylarDizisi= array("Ocak","Şubat","Mart","Nisan");
    echo "<pre>";
    print_r($aylarDizisi);
    echo "</pre>";


    echo $aylarString = implode("-", $aylarDizisi);
    /* str_split String parçalama işlemi yapar. */
    echo "<br>";

    $iban="TR000000111122223333";
    $yeniIban=str_split($iban, 4);
    echo "<pre>";
    print_r($yeniIban);
    echo "</pre>";
    echo "<br> Foreach Iban: "; 
    foreach ($yeniIban as $parca){
        echo $parca . " ";
    }

    echo "<br>";
    echo "Implode Iban: " . implode("-", $yeniIban);
    echo "<br> For Iban: "; 
    for($i = 0; $i< count($yeniIban); $i++){
        echo $yeniIban[$i]." ";
    }






















    ?>
</body>
</html>