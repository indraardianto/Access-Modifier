<?php

class Pesawat
{

    public $nama;
    public $mesin;
    public $merk;

    public function info_pesawat()
    {

        return "$this->nama, $this->mesin, $this->merk";
    }

    public function tampilkan()
    {
        echo self::info_pesawat();
    }
}


class Garuda extends Pesawat
{

    public function info_garuda()
    {
        echo parent::info_pesawat();
    }

    public function tampilkan()
    {
        return "Siap diterbangkan";
    }
}

$cargo = new Pesawat();
$cargo->nama = "Pesawat Cargo";
$cargo->mesin = "Honda";
$cargo->merk = "DS001HR";

echo $cargo->info_pesawat() . "<br>";
echo $cargo->tampilkan() . "<br>";

$garuda = new Garuda();
echo $garuda->info_garuda();
echo $garuda->tampilkan();
