<?php

namespace Lev\Bizandsoft02;

use AmoCRM\AmoContact;

class Contact extends AmoContact
{
    public function __construct(array $data = [], $subdomain = null)
    {
        parent::__construct($data, $subdomain);
    }

    public function createContact(array $phoneNumbers, array $emails): int|array
    {
        $this->setCustomFields(
            [
                '2211713' => $phoneNumbers,
                '2211715' => $emails
            ]
        );

        return $this->save();
    }
}