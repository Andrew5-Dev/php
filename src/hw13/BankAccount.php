<?php

namespace hw13;
class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "На балансі аккаунту не достатньо коштів!" . PHP_EOL;
        }
    }
}

