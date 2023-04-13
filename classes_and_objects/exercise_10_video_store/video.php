<?php declare(strict_types=1);

class Video
{
    private string $title;
    private bool $available;
    private array $ratings = [];

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->available = true;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function isAvailable(): bool
    {
        return $this->available;
    }
    public function setAvailable(bool $isAvailable): void
    {
        $this->available = $isAvailable;
    }

    public function rate(int $rating): void
    {
        $this->ratings[] = $rating;
    }
    public function getAvgRating(): float
    {
        return (count($this->ratings) <=0) ?  0 : array_sum($this->ratings) / count($this->ratings);
    }
}