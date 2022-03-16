<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama -I</title>
</head>

<body>
    <!-- Açıklama satırı -->
    <?php
    //Açıklama satırı
    /* Açıklama satırı Bloğu 
   Shift+Alt+A 
   */
    /* Kullanılan Komutlar 
  echo: Ekrana yazdırma işlemi yapar.
  İçerisinde html etikeleri kullanılabilir. 
  Çift veya Tek tırnak ile kullanılabilir.
  Çift tırnak içerisinde değişken içerikleri gösterilir.
  Nokta işareti ile birleştirme yapılabilir.
  \ kaçış karakteridir.
   */
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo "<h4>Aydın Meslek Yüksekokulu</h4>";
    echo "Bilgisayar Programcılığı" . " Web Teknolojileri" . "<br>";
    echo "Bilgisayar Programcılığı" . "<br>" . "Web Teknolojileri";


    echo "<hr> <h4> Değişken Tanımlama Kurulları</h4>";
    echo "<ol>
  <li>Değişken isimleri $ ile başlar. </li>
  <li>Değişken isimleri sayısal bir ifade ile başlayamaz.</li>
  <li>Değişken isimlerinde boşluk kullanılamaz . İki kelime varsa birinci_sinif , birinciSinif , birinci-sinif örneklerindeki kullanımlar önerilir.</li>
  <li>Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır.</li>
  <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi </li>
  <li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak \" veya tek tırnak ' kullanılır.</li>
  <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır.</li>
  <li>Değişken ismi, değişkenin içeriğini ifade etmelidir.</li>
  <li>Değişkenler ekrana echo komutu ile yazdırılır.</li>
  
  

  
  </ol>";
    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";
    $isim = "Furkan";
    $soyisim = "KARAASLAN";
    $yas = 21;
    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";
    /* Uygulama :
  Üniversite - Myo -Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
  Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz. */

    $üniversite = "Adnan Menderes Üniversitesi";
    $MeslekYüksekokulu = "Aydın Meslek Yüksekokulu";
    $ad = "Furkan";
    $soyad = "Karaaslan";
    $numara = 216001044;
    ?>
    <form action="">
        <label for="üni">Üniversite</label>
        <input type="text" name="" disabled value="<?php echo $üniversite; ?>" id="üniversite"><br>

        <label for="MeslekYüksekokulu">MeslekYüksekokulu</label>
        <input type="text" name="" disabled value="<?php echo $MeslekYüksekokulu; ?>" id="MeslekYüksekokulu"><br>

        <label for="isim">isim</label>
        <input type="text" name="" disabled value="<?php echo $isim; ?>" id="isim"><br>

        <label for="üni">Soyad</label>
        <input type="text" name="" disabled value="<?php echo $soyad; ?>" id="soyad"><br>

        <label for="numara">Numara</label>
        <input type="text" name="" disabled value="<?php echo $numara; ?>" id="numara"><br>




    </form>




    <!--  -->
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</body>

</html>