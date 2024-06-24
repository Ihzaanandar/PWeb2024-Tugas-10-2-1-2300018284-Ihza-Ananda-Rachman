<?php
    // Listing-listing Array dalam materi google classroom

    // 1. Deklarasi dan Menampilkan Array
    echo "1. Deklarasi dan Menampilkan Array<br><br>";
    $arrBuah = array("Mangga", "Lemon", "Apel", "Nanas");
    echo $arrBuah[0] . "<br>"; //Mangga
    echo $arrBuah[2] . "<br><br>"; //Apel
    
    $arrWarna = array();
    $arrWarna[] = "Hitam";
    $arrWarna[] = "Pink";
    $arrWarna[] = "Jingga";
    $arrWarna[] = "Kuning";
    echo $arrWarna[1] . "<br>"; //Pink
    echo $arrWarna[3] . "<br><br>"; //Kuning
    
    echo "<hr>";
    
    echo "2. Array assosiatif (indeks selain angka)<br><br>";
    $arrNilai = array("Agus"=>60, "Ani"=>100, "Joni"=>80, "Jontor"=>49);
    echo $arrNilai['Jontor'] . "<br>";
    echo $arrNilai['Agus'] . "<br><br>";
    
    $arrNilai = array();
    $arrNilai['Bude'] = 99; 
    $arrNilai['Budo'] = 90; 
    $arrNilai['Budu'] = 92; 
    
    echo $arrNilai['Budo'] . "<br>"; //90
    echo $arrNilai['Bude'] . "<br><br>"; //99
    
    echo "<hr>";
    
    echo "3. Menampilkan seluruh isi Array dengan For dan Foreach<br><br>";
    
    echo "Menampilkan warna dengan For<br>";
    $arrWarna = array("Green", "Blue", "Purple", "Yellow", "Red", "Black");
    for($i = 0; $i <count($arrWarna); $i++){
        echo "Warna pelangi <font color=$arrWarna[$i]>" . $arrWarna[$i] ."</font><br>";
    }
    
    echo "<br>Menampilkan warna dengan Foreach<br>";
    foreach($arrWarna as $warna){
        echo "Warna Pelangi <font color=$warna>" . $warna . "</font><br>";
    }
    
    echo "<hr>";
    
    echo "4. Menampilkan seluruh isi Array assosiatif dengan Foreach dan While-list<br><br>";
    
    $arrNilai = array("Joko"=> 78, "Joki"=>43, "Joke"=>87, "joka"=>67);
    echo "Menampilkan isi Array assosiatif dengan Foreach<br>";
    foreach($arrNilai as $nama=>$nilai){
        echo "Nilai $nama=$nilai<br>";
    }
    
    reset($arrNilai);
    
    // echo "<br>Menampilkan isi Array assosiatif dengan While dan List<br>";
    // while(list($nama, $nilai)=each($arrNilai)){
        //     echo "Nilai $nama=$nilai<br>";
        // }
        
        echo "<hr>";
        
        echo "5. Mencetak struktur array<br><br>";
        $arrWarna = array("Red", "Brown", "Orange", "Blue", "Pink");
        $arrNilai = array("Joko"=> 78, "Joki"=>43, "Joke"=>87, "joka"=>67);
        echo "<pre>";
        print_r($arrWarna);
        echo "<br>";
        print_r($arrNilai);
        echo "</pre>";
        
        echo "<hr>";
        
        echo "6. Mengurutkan array denga sort() dam rsort()<br><br>";
        $arrNilai = array("Joko"=> 78, "Joki"=>43, "Joke"=>87, "joka"=>67);
        echo "Array sebelum diurutkan<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        sort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan sort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        rsort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan rsort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        echo "<hr>";
        
        echo "7. Mengurutkan array denga asort() dam arsort()<br><br>";
        $arrNilai = array("Joko"=> 78, "Joki"=>43, "Joke"=>87, "Joka"=>67);
        echo "Array sebelum diurutkan<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        asort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan asort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        arsort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan arsort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        echo "<hr>";
        
        echo "8. Mengurutkan array denga ksort() dam krsort()<br><br>";
        $arrNilai = array("Joko"=> 78, "Joki"=>43, "Joke"=>87, "Joka"=>67);
        echo "Array sebelum diurutkan<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        ksort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan ksort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        krsort($arrNilai);
        reset($arrNilai);
        echo "<br>Array setelah diurutkan dengan krsort()<br>";
        echo "<pre>";
        print_r($arrNilai);
        echo "</pre>";
        
        echo "<hr>";
        
        echo "9. Mengatur posisi pointer dalam<br><br>";
        $transport = array('Mobil', 'Motor', 'Sepeda', 'Perahu');
        echo "<pre>";
        print_r ($transport);
        echo "</pre>";
        $mode = current($transport);
        echo $mode . "<br>";    
        $mode = next($transport);
        echo $mode . "<br>";    
        $mode = current($transport);
        echo $mode . "<br>";    
        $mode = prev($transport);
        echo $mode . "<br>";    
        $mode = end($transport);
        echo $mode . "<br>";    
        $mode = current($transport);
        echo $mode . "<br>";
        
        echo "<hr>";
        
        echo "10. Mencari element array<br><br>";
        $arrBuah = array("Mangga", "Lemon", "Apel", "Nanas", "Kedondong");
        if(in_array("Mangga", $arrBuah)){
            echo "Ada buah mangga di dalam array tersebut!";
        }else{
            echo "Tidak ada buah mangga di array tersebut";
        }
        
        echo "<hr>";
        
        echo "11. Fungsi tanpa : return value dan parameter<br><br>";
        function cetak_ganjil(){
            for($i = 0; $i < 100; $i++){
                if($i%2== 1){
                    echo "$i, ";
                }
            }
        }
        cetak_ganjil();
        
        echo "<hr>";
        
        echo "12. Fungsi tanpa : return value tapi dengan parameter<br><br>";
        function cetakGanjil($awal, $akhir){
            for($i = $awal; $i < $akhir; $i++){
                if($i%2== 1){
                    echo "$i, ";
                }
            }
        }
        $a = 10;
        $b = 50;
        echo "<b> Bilangan ganjil dari $a sampai $b, adalah : </b><br<br>";
        cetakGanjil($a, $b);
        
        echo "<hr>";
        
        echo "13. Fungsi dengan return value dan parameter<br><br>";
        function luas_lingkaran($jari){
            return 3.14 * $jari * $jari;
        }
        
        $r = 10;
        echo "Luas lingkaran dengan jari-jari $r : ";
        echo luas_lingkaran($r);
        
        echo "<hr>";
        
        echo "14. Passing by value<br><br>";
        function tambah_string($str){
            $str = $str . " , Yogyakarta";
            return $str;
        }
        
        $string = "Universitas Ahmad Dahlan";
        echo "\$string = string <br>";
        echo tambah_string($string) . "<br";
        echo "\$string = $string<br>";
        
        echo "<hr>";
        
        echo "15. Passing by reference<br><br>";
        function tambahstring(&$str){
            $str = $str . ",Yogyakarta";
            return $str;
        }
        
        $string = "Universitas Ahmad Dahlan";
        echo "\$string = string <br>";
        echo tambahstring($string) . "<br";
        echo "\$string = $string<br>";
        
        echo "<hr>";
        
        echo "16. Tampilkan UDF dan fungsi yang didukung PHP versi saat ini<br><br>";
        function luaslingkaran($jari){
            return 3.14 * $jari *$jari;
        }
        
        $arr = get_defined_functions();
        echo "<pre>";
        print_r($arr);
        echo "</pre>";        
        ?>