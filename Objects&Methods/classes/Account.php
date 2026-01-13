<!-- 
Name: Graciela Gozum
Date: 01/12/25
Section: WD-201 
-->

<?php
class Account
{
    public string $number;
    public string $type;
    public float $balance;

    public function __construct($number, $type, $balance)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}

?>
