<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <p>Masukkan Tinggi Segitiga </p>
        <input type="number" name="nilai">
        <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            $tinggi = $_POST['nilai'];

        for($baris = 1; $baris <= $tinggi; $baris++){
            for($i = 1; $i <= $tinggi - $baris; $i++){
                echo "&nbsp;&nbsp;";
            }
            for($j = 1; $j < 2 * $baris; $j++){
                echo "*";
            }
            echo "<br>";
        }
        }
    ?>
</body>
</html>