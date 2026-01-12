<!-- 
Name: Graciela Gozum
Date: 01/12/25
Section: WD-201 
-->

<?php

class Customer
{
    public string $firstName;
    public string $lastName;
    public array $accounts;

    public function __construct($firstName, $lastName, $accounts)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accounts = $accounts;
    }

    public function getFullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }
}

