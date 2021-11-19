<?php

include "index.html";

class buah {
    var $TotalMangga, $TotalJambu, $TotalSalak;

    public function __construct($Mangga , $Jambu, $Salak){
        $this->Mangga = $Mangga;
        $this->Jambu = $Jambu;
        $this->Salak = $Salak;
    }

    public function getMangga(){
        $this->TotalMangga = $this->Mangga * 15000;
        echo "<p>Harga Mangga : ".$this->TotalMangga;
    }

    public function getJambu(){
        $this->TotalJambu = $this->Jambu * 13000;
        echo "<p>Harga Jambu : ".$this->TotalJambu;
    }

    public function getSalak(){
        $this->TotalSalak = $this->Salak * 10000;
        echo "<p>Harga Salak : ".$this->TotalSalak;
    }

    public function Total(){
        $Total = $this->TotalMangga + $this->TotalJambu + $this->TotalSalak;
        echo "<br>Total Belanjaan : Rp. ".$Total;
    }
}

$Mangga = $_POST["Mangga"];
$Jambu = $_POST["Jambu"];
$Salak = $_POST["Salak"];
echo "<br><br><div>
        <header><h3><br>Total Belanjaan</h2></header>
    </div>";

$transaksi = new buah($Mangga, $Jambu, $Salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->Total();

?>
