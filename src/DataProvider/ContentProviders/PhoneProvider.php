<?php

namespace Lev\Bizandsoft02\DataProvider\ContentProviders;

use Faker\Provider\ru_RU\PhoneNumber;

class PhoneProvider extends PhoneNumber
{
    protected static $formats = [
        '(812) 123-12-##',
        '(495) 123-12##',
        '+7 (922) 123-123##',
        '(35222) 12-31##',
        '8-800-123-12##',
    ];
}