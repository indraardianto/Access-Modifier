<?php

class Pesawat
{


    public function info_pesawat()
    {
        echo self::tampilkan();
    }

    public function tampilkan()
    {
        return "Pesawat ";
    }
}


$batik = new Pesawat();
$batik->tampilkan();
echo $batik->tampilkan() . "<br>";
echo $batik->info_pesawat();
