<?php

// * Pada source code dibawah ini, terlihat ada class AuthService yang merupakan class induk & ada class AlurProsesService yang merupakan class turunan.
// * untuk dapat menunjukan inheritence, saya membuat method getDateFormat yang dapat diakses pada class AlurProsesService, seperti dibawah ini.
// * dengan menambahkan kata kunci extends maka method getDateFormat dapat di akses melalui class turunannya yaitu AlurProsesService.

class AuthService
{
    public $dateFormat = 'd-m-Y';

    public function getDateFormat()
    {
        echo $this->dateFormat;
    }
}

class AlurProsesService extends AuthService
{

}

$alurProsesService = new AlurProsesService();
$alurProsesService->getDateFormat();
