<?php

// * Pada source code dibawah ini, terlihat class AuthService yang memiliki method getDateFormat() & dan class turunannya AlurProsesService yang memiliki method dengan nama method yang sama.
// * Polymorphism merupakan poly yaitu banyak dan morph yaitu bentuk, jadi bisa dikatakan banyak bentuk yang dapat mengubah karakteristik yang ada di dalam method tersebut.
// * sebagai contoh, pada source code dibawah ini AlurProsesService extends ke AuthService yang merupakan class indukannya, dan juga memiliki nama method yang sama yaitu getDateFormat(),
// * dikarenakan AlurProsesService memiliki bentuk method yang sama sehingga terjadilah polymorphism yaitu mengubah karakteristik ataupun bentuk dari isi method yang dimiliki class induknya.
class AuthService
{
    protected $dateFormat = 'd-m-Y';

    protected function getDateFormat()
    {
        echo $this->dateFormat;
    }
}

class AlurProsesService extends AuthService
{
    public function getDateFormat()
    {
        echo "Y-m-d";
    }
}

$alurProsesService = new AlurProsesService();
$alurProsesService->getDateFormat();
