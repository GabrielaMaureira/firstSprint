<?php
require("Account.php");

$account1 = new Account ("Gabriela", "Maureira"); // Client created with an account by default and 0€

echo $account1->getAccountNumber(). "\n";
$account1->setAccountNumber(9876); // Account nº changed
echo $account1->getAccountNumber(). "\n";

echo $account1->getAmount(). "\n";
echo $account1->deposit(10). "\n";
echo $account1->withdraw(2). "\n";
echo $account1->withdraw(8). "\n";
echo $account1->withdraw(9). "\n";


echo $account1->getAmount(). "\n";


?>