<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesapla</title>

    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
error_reporting(0);

if(isset($_POST['gonder']))
{
    $sayi1 = $_POST['sayi1'];
    $sayi2 = $_POST['sayi2'];
    $islem = $_POST['optradio'];
}
else{
    "Hatalı bir işlem.";
}

function topla($sayi1,$sayi2)
{
    return $sayi1 + $sayi2;

}

function cikar($sayi1,$sayi2)
{
    return $sayi1-$sayi2;
}

function bol($sayi1,$sayi2)
{
    return $sayi1/$sayi2;
}

function carp($sayi1,$sayi2)
{
    return $sayi1*$sayi2;
}

$toplam = topla($sayi1,$sayi2);
$cikar = cikar($sayi1,$sayi2);
$bol = bol($sayi1,$sayi2);
$carp = carp($sayi1,$sayi2);

if($islem == "topla")
{
    echo
    "<div class='card text-white bg-primary mb-6' style='max-width: 50rem;margin: auto; margin-top: 250px;'>
    <div class='card-header;'>Toplama İşlemi</div>
    <div class='card-body'>
      <h5 class='card-title'>Sonuç: $toplam</h5>
      <p class='card-text'>$sayi1 ve $sayi2 Sayılarının Toplamı</p>
    </div>
    <div class='card-footer text-white bg-transparent border-dark'><a href='hesapla.php' style='
    list-style: none; color: white;' style='color: white;'>İşlem Menüsüne Dön</a></div>
  </div>";
}
elseif($islem == "cikar")
{
    echo
    "<div class='card text-white bg-secondary mb-6' style='max-width: 50rem;margin: auto; margin-top: 250px;'>
    <div class='card-header;'>Çıkarma İşlemi</div>
    <div class='card-body'>
      <h5 class='card-title'>Sonuç: $cikar</h5>
      <p class='card-text'>$sayi1 ve $sayi2 Sayılarının Çıkarma İşlemi</p>
    </div>
    <div class='card-footer text-white bg-transparent border-dark'><a href='hesapla.php' style='
    list-style: none; color: white;' style='color: white;'>İşlem Menüsüne Dön</a></div>
  </div>";
}
elseif($islem=="bol")
{
    echo
    "<div class='card text-white bg-success  mb-6' style='max-width: 50rem;margin: auto; margin-top: 250px;'>
    <div class='card-header;'>Bölme İşlemi</div>
    <div class='card-body'>
      <h5 class='card-title'>Sonuç: $bol</h5>
      <p class='card-text'>$sayi1 ve $sayi2 Sayılarının Bölme İşlemi</p>
    </div>
    <div class='card-footer text-white bg-transparent border-dark'><a href='hesapla.php' style='
    list-style: none; color: white;' style='color: white;'>İşlem Menüsüne Dön</a></div>
  </div>";
}
elseif($islem=="carp")
{
    echo
    "<div class='card text-white bg-danger  mb-6' style='max-width: 50rem;margin: auto; margin-top: 250px;'>
    <div class='card-header;'>Çarpma İşlemi</div>
    <div class='card-body'>
      <h5 class='card-title'>Sonuç: $carp</h5>
      <p class='card-text'>$sayi1 ve $sayi2 Sayılarının Çarpma İşlemi</p>
    </div>
    <div class='card-footer text-white bg-transparent border-dark'><a href='hesapla.php' style='
    list-style: none; color: white;' style='color: white;'>İşlem Menüsüne Dön</a></div>
  </div>";
}
else
{
    
    echo "<div class='alert alert-primary' role='alert'>
    Hesaplama Yapabilmek İçin Sayıları Eksiksiz Girmeniz Gerekir.
    </div>";
}

?>
</body>
</html>