<?php

namespace Lev\Bizandsoft02\DataProvider;

use Faker\Factory;
use Lev\Bizandsoft02\DataProvider\Providers\PhoneProvider;

class ContactDataProvider
{
    /**
     * @var \Faker\Generator
     */
    private static $faker;
    public static function init():void
    {
        self::$faker = Factory::create("ru_RU");
        self::$faker->addProvider(new PhoneProvider(self::$faker));
    }

    public static function makeFakeName():string
    {
        return self::$faker->name();
    }
    public static function makeFakePhone():array
    {
        $phoneEnum = ['WORK','HOME'];
        return [
            'value' => self::$faker->optional(1,1)->phoneNumber(),
            'enum'  =>  $phoneEnum[array_rand($phoneEnum)]
        ];
    }

    public static function makeFareEmail():array
    {
        $phoneEnum = ['WORK'];
        return [
            'value' => self::$faker->email(),
            'enum'  =>  $phoneEnum[array_rand($phoneEnum)]
        ];
    }
}