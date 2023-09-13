<?php

namespace Lev\Bizandsoft02\DataProvider\ContentProviders;

use Faker\Provider\ru_RU\Internet;

class InternetProvider extends Internet
{
    protected static $userNameFormats = [
        '{{firstName}}.{{lastName}}',
    ];
    protected static $emailFormats = [
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
    ];
    protected static $freeEmailDomain = [
        'yandex.ru', 'ya.ru', 'gmail.com'
    ];
    protected static $tld = [
        'com', 'net', 'org', 'ru',
    ];
}