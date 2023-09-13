<?php

namespace Lev\Bizandsoft02\DataProvider\ContentProviders;

use Faker\Provider\ru_RU\Person;

class PersonProvider extends  Person
{
    protected static $firstNameMale = [
        'Валентин', 'Валериан', 'Валерий', 'Василий', 'Вениамин'
    ];

    protected static $firstNameFemale = [
        'Александра', 'Алина', 'Алиса', 'Алла', 'Альбина',
    ];

    protected static $middleNameMale = [
        'Сергеевич', 'Иванович', 'Фёдорович', 'Львович', 'Романович',
    ];

    protected static $middleNameFemale = [
        'Александровна', 'Алексеевна', 'Андреевна', 'Дмитриевна', 'Евгеньевна',
    ];

    protected static $lastName = [
        'Новиков', 'Морозов', 'Петров', 'Волков', 'Соловьёв',
    ];
}