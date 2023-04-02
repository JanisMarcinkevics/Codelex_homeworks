<?php

//Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40
// that they work in a single week.
// For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.


$wagePerHour = null;
$workingTime = null;

$employer = readline("Please enter the name of employer: ");

while ($wagePerHour == null) {
    $input = readline("What is the wage per hour for $employer? ");
    if (is_numeric($input)) {
        $wagePerHour = $input;
    } else {
        echo "wrong input!\n";
    }
}

if ($wagePerHour < 8) {
    exit ("This salary level is under required $8.00 per hour\n");
}

while ($workingTime == null) {
    $input = readline("how many hours did $employer worked this week? ");
    if (is_numeric($input)) {
        $workingTime = $input;
    } else {
        echo "wrong input!\n";
    }
}

if ($workingTime > 60) {
    exit("$employer has worked too much this week. It's not allowed to work so much hours!\n");
}

if ($workingTime <= 40) {
    $weekSalary = number_format($workingTime * $wagePerHour, 2);
} else {
    $weekSalary = number_format((40 * $wagePerHour + ($workingTime - 40) * $wagePerHour * 1.5), 2);
}

echo "{$employer}'s Salary for this week is $ $weekSalary \n";