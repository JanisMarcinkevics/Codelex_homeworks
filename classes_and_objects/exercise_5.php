<?php declare(strict_types=1);

//Create a class called Date that includes:
// three pieces of information as instance variables — a month, a day and a year.
//
//Your class should have a constructor that initializes the three instance variables and assumes that
// the values provided are correct. Provide a set and a get for each instance variable.
//
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.
//
//Write a test application named DateTest that demonstrates class Date capabilities.


class Date
{
    private int $month;
    private int $day;
    private int $year;

    function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    function setMonth(int $month): void
    {
        $this->month = $month;
    }

    function getMonth(): int
    {
        return $this->month;
    }

    function setDay(int $day): void
    {
        $this->day = $day;
    }

    function getDay(): int
    {
        return $this->day;
    }

    function setYear(int $year): void
    {
        $this->year = $year;
    }

    function getYear(): int
    {
        return $this->year;
    }

    function DisplayDate(): string
    {
        return $this->month . '/' . $this->day . '/' . $this->year;
    }
}

class DateTest
{
    function run() {
        $date = new Date(4, 9, 2023);
//        $date->setDay(8);
//        $date->setMonth(11);
//        $date->setYear(2022);
        echo $date->DisplayDate() . PHP_EOL;
    }
}

$test = new DateTest();
$test->run();
