<?php

class Pesawat
{
    const Mesin = "Turbo";
}

//menampilkan var constant dengan nama class
echo Pesawat::Mesin . "<br>";

//menampilkan var constant dengan sebuah objek
$garuda = new Pesawat();
echo $garuda::Mesin;
