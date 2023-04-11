<?php declare(strict_types=1);

//The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:
//
//  To know the car’s current amount of fuel, in liters.
//  To report the car’s current amount of fuel, in liters.
//  To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car.
//  ( The car can hold a maximum of 70 liters.)
//  To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters.
//  This simulates burning fuel as the car runs.
//
//  The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:
//
//  To know the car’s current mileage.
//  To report the car’s current mileage.
//  To be able to increment the current mileage by 1 kilometer.
//  The maximum mileage the odometer can store is 999,999 kilometer.
//  When this amount is exceeded, the odometer resets the current mileage to 0.
//  To be able to work with a FuelGauge object. It should decrease the FuelGauge object’s current amount of fuel
//  by 1 liter for every 10 kilometers traveled. (The car’s fuel economy is 10 kilometers per liter.)
//
//  Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel,
//  and then run a loop that increments the odometer until the car runs out of fuel. During each loop iteration,
//  print the car’s current mileage and amount of fuel.

class FuelGauge {
    private int $fuelAmount;

    public function __construct() {
        $this->fuelAmount = 0;
    }

    public function getFuelAmount() {
        return $this->fuelAmount;
    }

    public function incrementFuelAmount() {
        if ($this->fuelAmount < 70) {
            $this->fuelAmount++;
        }
    }

    public function decrementFuelAmount() {
        if ($this->fuelAmount > 0) {
            $this->fuelAmount--;
        }
    }
}

class Odometer {
    private int $mileage;
    private FuelGauge $fuelGauge;

    public function __construct(FuelGauge $fuelGauge) {
        $this->mileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function getMileage(): int {
        return $this->mileage;
    }

    public function incrementMileage() {
        if ($this->mileage < 999999) {
            $this->mileage++;
        } else {
            $this->mileage = 0;
        }

        if ($this->mileage % 10 == 0) {
            $this->fuelGauge->decrementFuelAmount();
        }
    }
}

$fuelGauge = new FuelGauge();
$odometer = new Odometer($fuelGauge);

// Fill up the car with fuel
while ($fuelGauge->getFuelAmount() < 70) {
    $fuelGauge->incrementFuelAmount();
}

// Simulate driving the car until it runs out of fuel
while ($fuelGauge->getFuelAmount() > 0) {
    $odometer->incrementMileage();

    echo "Mileage: " . $odometer->getMileage() . " km\n";
    echo "Fuel amount: " . $fuelGauge->getFuelAmount() . " liters\n\n";
}