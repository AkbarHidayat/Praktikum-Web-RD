<?php 

    function urut(&$Nama){
        sort($Nama);
    }


    $Nama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    echo "Susunan Awal : <br>";
    $i = 0;
    foreach($Nama as $nama){
        if($i < count($Nama)-1){
            echo $nama."  ";
        }else{
            echo $nama;
        }
        $i++;
    }

    echo "<br><br>";
    echo "Susunan Final : <br>";
    urut($Nama);

    $i = 0;
    foreach($Nama as $nama){
        if($i < count($Nama)-1){
            echo $nama."  ";
        }else{
            echo $nama;
        }
        $i++;
    }
?>