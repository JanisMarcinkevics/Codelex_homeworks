<?php declare(strict_types=1);

class Account
{
    private string $accountName;

    private float $accountBalance;

    public function __construct(string $accountName, float $accountBalance)
    {
        $this->accountName = $accountName;
        $this->accountBalance = $accountBalance;
    }

    public function withdrawal(float $amount): float
    {
        $this->accountBalance -= $amount;
        return $this->accountBalance;
    }
    public function deposit(float $amount): float
    {
        $this->accountBalance += $amount;
        return $this->accountBalance;
    }

    public function getAccountBalance(): float
    {
        return $this->accountBalance;
    }

    public function getAccountName(): string
    {
        return $this->accountName;
    }
    public function printAccountStatement(): string
    {
        return "{$this->getAccountName()} balance is $ {$this->getAccountBalance()} \n";
    }

    public function transfer(Account $from, Account $to, int $howMuch): void
    {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }

}