<?php

    function penjumlahan($a,$b){
        $jumlah = $a + $b;

        echo "Penjumlahan <br>";
        echo "Operator : + <br>";
        echo "Hasil = $jumlah";
    }

    function pengurangan($a,$b){
        $jumlah = $a - $b;

        echo "Penjumlahan <br>";
        echo "Operator : - <br>";
        echo "Hasil = $jumlah";
    }

    function pembagian($a,$b){
        $jumlah = $a / $b;

        echo "Penjumlahan <br>";
        echo "Operator : / <br>";
        echo "Hasil = $jumlah";
    }

    function perkalian($a,$b){
        $jumlah = $a * $b;

        echo "Penjumlahan <br>";
        echo "Operator : * <br>";
        echo "Hasil = $jumlah";
    }

    function modulus($a,$b){
        $jumlah = $a % $b;

        echo "Penjumlahan <br>";
        echo "Operator : % <br>";
        echo "Hasil = $jumlah";
    }

    $a = $_POST['bilangan1'];
    $b = $_POST['bilangan2'];
   
    echo "Bilangan 1 : ";
    echo $a;
    echo "<br> Bilangan 2 : ";
    echo $b;

    echo "<br><br> Berikut merupakan hasil dari setiap operasi<br><br>";

    
        penjumlahan($a,$b);
        echo "<br><br>";
        pengurangan($a,$b);
        echo "<br><br>";
        pembagian($a,$b);
        echo "<br><br>";
        perkalian($a,$b);
        echo "<br><br>";
        modulus($a,$b);

    
    ?>
