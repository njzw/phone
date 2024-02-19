<?php

use JenesisZw\Phone;

require __DIR__ . '/src/bootstrap/app.php';

$phone = "0782000340"; // Zimbabwe Econet Number

$test = (new Phone($phone, 'ZW'))->getProviderInfo();


function dd($data)
{
    echo "<code>";
    echo "<pre>";
    die(print_r($data, true));
    echo "</pre>";
    echo "</code>";
}


dd($test);