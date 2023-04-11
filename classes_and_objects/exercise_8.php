<?php declare(strict_types=1);

class SavingsAccount
{
    private float $balance;
    private float $annualInterestRate;

    public function __construct(float $balance, float $annualInterestRate)
    {
        $this->balance = $balance;
        $this->annualInterestRate = $annualInterestRate;
    }

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    public function addMonthlyInterest(): void
    {
        $monthlyInterestRate = $this->annualInterestRate / 12;
        $monthlyInterest = $monthlyInterestRate * $this->balance / 100;
        $this->balance += $monthlyInterest;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

while (true) {
    $startingBalance = readline("How much money is in the account? ");
    if (!is_numeric($startingBalance)) {
        echo "Please enter a numeric amount!\n";
        continue;
    }
    $startingBalance = (float)$startingBalance;
    if ($startingBalance < 0) {
        echo "This amount cannot be negative! \n";
        continue;
    }
    break;
}

while (true) {
    $annualInterestRate = readline("Enter the annual interest rate: ");
    if (is_numeric($annualInterestRate)) {
        $annualInterestRate = (float)$annualInterestRate;
        break;
    } else {
        echo "Please enter a numeric rate!\n";
    }
}

while (true) {
    $months = readline("How long has the account been opened? ");
    if (!is_numeric($months)) {
        echo "Please provide a numeric input!\n";
        continue;
    }
    $months = (int)$months;
    if ($months < 0) {
        echo "Please enter a positive number! \n";
        continue;
    }
    break;
}

$savingsAccount = new SavingsAccount($startingBalance, $annualInterestRate);

$totalDeposits = 0;
$totalWithdrawals = 0;
$totalInterestEarned = 0;

for ($i = 1; $i <= $months; $i++) {
    while (true) {
        $deposit = readline("Enter deposit amount for month $i: ");
        if (!is_numeric($deposit)) {
            echo "Please enter a numeric amount!\n";
            continue;
        }
        $deposit = (float)$deposit;
        if ($deposit < 0) {
            echo "This amount cannot be negative! \n";
            continue;
        }
        break;
    }

    $savingsAccount->deposit($deposit);
    $totalDeposits += $deposit;

    while (true) {
        $withdrawal = readline("Enter withdrawn  amount for month $i: ");
        if (!is_numeric($withdrawal)) {
            echo "Please enter a numeric amount!\n";
            continue;
        }
        $withdrawal = (float)$withdrawal;
        if ($withdrawal < 0) {
            echo "This amount cannot be negative! \n";
            continue;
        }
        break;
    }

    $savingsAccount->withdraw($withdrawal);
    $totalWithdrawals += $withdrawal;

    $savingsAccount->addMonthlyInterest();

}
$totalInterestEarned = $savingsAccount->getBalance() - $startingBalance - $totalDeposits + $totalWithdrawals;
$endingBalance = $savingsAccount->getBalance();

echo "Total deposited: $" . number_format($totalDeposits, 2) . PHP_EOL;
echo "Total withdrawn: $" . number_format($totalWithdrawals, 2) . PHP_EOL;
echo "Interest earned: $" . number_format($totalInterestEarned, 2) . PHP_EOL;
echo "Ending balance: $" . number_format($endingBalance, 2) . PHP_EOL;
