<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpödev</title>
</head>
<body>
    <?php 



echo "1.Uygulama: 0 ile 100 arasında Tek mi Çift mi olduğunu bulan program<br>";
$random = rand(0,100);
$tek= $random % 2;
if ($tek !=0){

    echo "sayınız tektir: " . $random;

}else{
        echo "sayınız çifttir: " . $random;
}
    
echo "<br>2.Uygulama: 0 ile 100 arasında üretilen değerde Kaldığınızı veya Geçtiğinizi bulan program<br>";
 $random = rand(0,100);

 if($random <=49){
     echo "Kaldınız , Notunuz :" . $random;
 }else{
     echo "Geçtiniz , Notunuz :" . $random;
 }

    echo "<br>3.Uygulama: 18 yaşından büyük olanların ehliyet alıp alamıcağını kontrol eden if programı<br>";
    
     $random = rand(1980,2022);
       if($random <2004){
           echo "Ehliyet Alabilirsiniz , Doğum Tarihiniz : " . $random;
       }else{
           echo "Ehliyet Alamazsınız , Doğum Tarihiniz : " . $random;
       }
      




       echo "<br>4.Uygulama: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız.<br>";
      
       $ogrenciDetaylari = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Nurullah",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => "25",
            "dersler"   => array(
                "ders1" => "Veri Tabanı",
                "ders2" => "Web Programlama",
                "ders3" => "Mobil Programlama"
            ),
            "sinif"     => "2"
        ),
        "ogrenci2" => array(
            "id"        => 2,
            "adi"       => "Ayşen",
            "soyadi"    => "Güler",
            "bolum"     => "Makine",
            "yas"       => "22",
            "dersler"   => array(
                "ders1" => "Matematik",
                "ders2" => "Sayı Teorileri",
                "ders3" => "Model Geliştirme"
            ),
            "sinif"     => "4"
        )
        
    );
    foreach($ogrenciDetaylari as $sırala){
        echo "<pre>";
       print_r($sırala);
       echo "</pre>";
    }
   





    ?>
  
</body>
</html>