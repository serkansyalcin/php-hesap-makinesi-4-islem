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
<div class="container">
<form method="post" action="index.php">
  <div class="form-group mt-5">
    <label>1.Sayıyı Girin</label>
    <input type="text" class="form-control" name="sayi1" placeholder="1.Sayıyı Giriniz">
  </div>
  <div class="form-group">
    <label>2.Sayıyı Girin</label>
    <input type="text" class="form-control" name="sayi2" placeholder="2.Sayıyı Giriniz">
  </div>
  <div class="form-group">
  <div class="radio">
  <label><input type="radio" name="optradio" value="topla" >Topla</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="cikar">Çıkar</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="carp">Çarp</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="bol">Böl</label>
</div>
  </div>

  
  <button type="submit" name="gonder" class="btn btn-primary">Hesapla</button>
</form>
</div>
</body>
</html>