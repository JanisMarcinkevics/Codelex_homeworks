<?php declare(strict_types=1);

//Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $p1, Point $p2): string
    {
        $tempX = $p1->x;
        $tempY = $p1->y;
        $p1->x = $p2->x;
        $p1->y = $p2->y;
        $p2->x = $tempX;
        $p2->y = $tempY;

        return "(" . $p1->x . ", " . $p1->y . ") (" . $p2->x . ", " . $p2->y . ")";
    }

}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
echo $p1->swapPoints($p1, $p2);


