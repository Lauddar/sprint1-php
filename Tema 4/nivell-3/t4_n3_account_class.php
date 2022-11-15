<?php

class Account
{
    private $account_number;
    private $name;
    private $surname;
    private $current_balance;

    public function __construct($account_number, $name, $surname, $current_balance)
    {
        $this->account_number = $account_number;
        $this->name = $name;
        $this->surname = $surname;
        $this->current_balance = $current_balance;
    }

    public function setAccountNumber($account_number)
    {
        $this->account_number = $account_number;
    }

    public function getAccountNumber()
    {
        return $this->account_number;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setSurname($surname)
    {
        $this->name = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setCurrentBalance($current_balance)
    {
        $this->current_balance = $current_balance;
    }

    public function getCurrentBalance()
    {
        return $this->current_balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->setCurrentBalance(self::getCurrentBalance() + $amount);
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0) {
            if (($this->getCurrentBalance() - $amount) >= 0) {
                $this->setCurrentBalance(self::getCurrentBalance() - $amount);
            } else {
                echo "Operació no permesa. Fons insuficient. <br>";
            }
        }
    }
}







?>