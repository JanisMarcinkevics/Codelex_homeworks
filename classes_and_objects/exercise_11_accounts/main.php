<?php declare(strict_types=1);

require_once 'Account.php';

$mattsAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 0);

$mattsAccount->withdrawal(100);
$myAccount->deposit(100);

echo "Account statements: \n";
echo $mattsAccount->printAccountStatement();
echo $myAccount->printAccountStatement();

$a = new Account("A", 100);
$b = new Account("B", 0);
$c = new Account("C", 0);

$a->transfer($a, $b, 50);
$b->transfer($b, $c, 25);

echo "\nAccount statements: \n";
echo $a->printAccountStatement();
echo $b->printAccountStatement();
echo $c->printAccountStatement();
