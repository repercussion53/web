<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-5</title>
</head>
<body>
    <h3> Php'de Diziler Devam</h3>
    <?php
      $isimler = array();

      $isimler[] = "Ahmet";
      $isimler[] = "Mehmet";
      $isimler[0] = "Ayşe";
      $isimler[] = "Nur";
      
      echo "<pre>";
      print_r($isimler);
      echo "</pre>";

      $isimler2 = array();
      $isimler2 ["isim1"] = "Kerim";
      $isimler2 ["isim2"] = "Hatice";
      $isimler2 ["isim3"] = "Burcu";
      $isimler2[] ="Hüseyin";
      $isimler2[] ="Gülcan";

      echo "<pre>";
      print_r($isimler2);
      echo "</pre>";



      $ogrencidetay = array(
          "id"    => 1,
          "adi"   => "Nurullah",
          "soyadi" => "Yıldız",
          "bolum" => "Bilgisayar",
          "yas" => "25",
          "dersler" => array(
              "ders1" => "Veri Tabanı",
              "ders2" => "Web Programlama",
              "ders3" => "Mobil Programlama" 
          ),
          "sinif" => "2"
        );
      echo "<pre>";
      print_r($ogrencidetay);
      echo "</pre>";

     echo "Öğrencinin Dersleri: ";
      echo $ogrencidetay["dersler"]["ders1"]. "<br>";
      echo $ogrencidetay["dersler"]["ders2"]. "<br>";
      echo $ogrencidetay["dersler"]["ders3"]. "<br>";
 
      


    ?>
</body>
</html>