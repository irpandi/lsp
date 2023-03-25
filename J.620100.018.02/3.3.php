<?php

// * Overloading di PHP merupakan penyediaan sarana untuk secara dinamis "menciptakan" properti atau method,
// * yang dapat di proses melalui penciptaan berbagai tindakan di dalam class.
// * contohnya pada class MethodTest dibawah ini, di php memiliki 2 method overloading yaitu __call & __callStatic,
// * sehingga pada pemanggilannya di definisikan dapat sebagai object ataupun sebagai method static.

class MethodTest
{
    public function __call($name, $arguments)
    {
        // * value dari $name adalah case sensitive.
        echo "Memanggil method '$name' "
        . implode(', ', $arguments) . "<br/>";
    }

    public static function __callStatic($name, $arguments)
    {
        // * value dari $name adalah case sensitive.
        echo "Memanggil method '$name' "
        . implode(', ', $arguments) . "<br/>";
    }
}

$obj = new MethodTest;

$obj->Jalankan('->pada konteks Object');
MethodTest::Jalankan('->pada konteks Static');
