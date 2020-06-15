<?php

class Kendaraan
{

    public $nama;
    protected $warna;
    private $stnk;

    public function Maju()
    {

        return "Kendaraan maju ";
    }

    public function info_stnk_kendaraan()
    {
        $this->stnk = "STNK001DT";
        return "Nomor STNK : $this->stnk";
    }
}

class Motor extends Kendaraan
{

    public function info_motor()
    {
        $this->warna = "Merah";
        return "Nama Kendaraan : $this->nama, Warna : $this->warna";
    }

    public function info_stnk()
    {
        return $this->stnk;
    }
}


$mobil = new Kendaraan();
$mobil->nama = "Mercedes";
echo $mobil->Maju();
echo $mobil->nama . "<br>";
echo $mobil->info_stnk_kendaraan() . "<br>";

$motor = new Motor();
$motor->nama = "RX-King";
echo $motor->info_motor();
echo $motor->info_stnk();
