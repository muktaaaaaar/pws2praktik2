<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <form action="perhitunganpw2.php" method = "POST">
 <label for="masukan" name = "masukan" >
  Masukan Nilai
 </label>
 <input type="number" value = "nlai" name ="nlai"> <br>
 <button name="submit" type="submit" class="btn btn-primary">Submit</button>
 </form>
</body>
<?php
$nilai =$_POST["nlai"];

if ($nilai>=85 && $nilai<=100) {
  echo "Nilai Anda : A";
}
elseif ($nilai >=70 && $nilai <=84) {
  echo "Nilai Anda : B";
}
elseif ($nilai >=56 && $nilai <=69) {
  echo "Nilai Anda : C";
}
elseif ($nilai >=36 && $nilai <=55) {
  echo "Nilai Anda : D";
}
elseif ($nilai >=0 && $nilai<=35) {
  echo "Nilai Anda : E";
}




?>
</html>