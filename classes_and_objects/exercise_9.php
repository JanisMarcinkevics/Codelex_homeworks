<?php declare(strict_types=1);

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
    function show_user_name_and_balance(): string
    {
        if($this->balance >=0)
        {
            return "{$this->getname()}, $" . $this->getBalance() . PHP_EOL;
        }
        else {
            return "{$this->getname()}, -$" . -$this->getBalance() . PHP_EOL;
        }
    }
}

$ben = new BankAccount("Benson", -17.25);

echo $ben->show_user_name_and_balance();