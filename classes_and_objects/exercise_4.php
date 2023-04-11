<?php declare(strict_types=1);

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;
    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPG(array $movies): array
    {
        return array_filter($movies, function($movie)
        {
            return $movie->rating === 'PG';
        });
    }
}

$movies =
    [
        new Movie("Casino Royale", "Eon Productions", "PG-13"),
        new Movie("Glass", "Buena Vista International", "PG-13"),
        new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
    ];

return Movie::getPG($movies);

