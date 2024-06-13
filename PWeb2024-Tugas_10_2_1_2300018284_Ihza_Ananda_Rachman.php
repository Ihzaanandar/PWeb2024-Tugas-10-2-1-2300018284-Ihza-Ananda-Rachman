<!DOCTYPE html>
<html>
<head>
    <title>Program Penilaian</title>
</head>
<body>
    <h2>Masukkan Nilai Anda : </h2>
    <form method="post" action="">
        <input type="text" name="nilai">
        <input type="submit" name="submit" value="submit">
    </form>

  <?php
    if(isset($_POST['submit'])){
        $nilai = $_POST['nilai'];
        if(is_numeric($nilai)){
            $nilai = floatval($nilai);

            if($nilai >= 80.00 && $nilai <= 100){
                echo "Nilai Anda : $nilai <br> Grade : A";
            }else if($nilai >= 76.25 && $nilai <= 79.99){
                echo "Nilai Anda : $nilai <br> Grade : A-";
            }else if($nilai >= 68.75 && $nilai <=76.24){
                echo "Nilai Anda : $nilai <br> Grade : B+";
            }else if($nilai >= 65.00 && $nilai <= 68.74){
                echo "Nilai Anda : $nilai <br> Grade : B";
            }else if($nilai >= 62.50 && $nilai <= 64.99){
                echo "Nilai Anda : $nilai <br> Grade : B-";
            }else if($nilai >= 57.50 && $nilai <= 62.49){
                echo "Nilai Anda : $nilai <br> Grade : C+";
            }else if($nilai >= 55.00 && $nilai <= 57.49){
                echo "Nilai Anda : $nilai <br> Grade : C";
            }else if($nilai >= 51.25 && $nilai <= 54.99){
                echo "Nilai Anda : $nilai <br> Grade : C-";
            }else if($nilai >= 43.75 && $nilai <= 51.25){
                echo "Nilai Anda : $nilai <br> Grade : D+";
            }else if($nilai >= 40.00 && $nilai <= 43.74){
                echo "Nilai Anda : $nilai <br> Grade : D";
            }else if($nilai >= 0.00 && $nilai <= 43.74){
                echo "Nilai Anda : $nilai <br> Grade : E";
            }else{
                echo "Masukkan angka antara 0 dan 100 bro!";
            }
        }else {
            echo "Masukkan berupa angka bro!";
        }
    }
  ?>
</body>