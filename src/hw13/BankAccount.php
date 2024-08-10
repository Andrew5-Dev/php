<?php

namespace hw13;
use Exception;

class BankAccount
{
    private int $accountNumber;
    private float $balance;

    public function __construct(int $accountNumber, float $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() : int
    {
        return $this->accountNumber;
    }

    public function getBalance() : float
    {
        return $this->balance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    /**
     * @throws Exception
     */
    public function withdraw(float $amount) : float
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
           return  throw new Exception("На балансі аккаунту не достатньо коштів!");
        }
        return $this->balance;
    }

}

