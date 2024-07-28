<?php

use hw13\BankAccount;

require_once __DIR__  . '/BankAccount.php';

$account = new BankAccount("12");

echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн". PHP_EOL;

echo "На яку сумму повнити баланс?" . PHP_EOL;
$argument = (float)fgets(STDIN);
$account->deposit($argument);

echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн". PHP_EOL;

echo "Скільки зняти коштів" . PHP_EOL;
$argument = (float)fgets(STDIN);
$account->withdraw($argument);

echo "Інформація по рахунку: " . PHP_EOL;
echo "Номер рахунку: №" . $account->getAccountNumber() . PHP_EOL;
echo "Баланс: " . $account->getBalance() . " Грн". PHP_EOL;