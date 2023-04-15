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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public function getRating(): string
    {
        return $this->rating;
    }
}

class Cinema
{
    private array $movies;

    public function __construct(array $movies)
    {
        foreach ($movies as $movie)
        {
            $this->addMovie($movie);
        }
    }

    public function getMovies(): array
    {
        return $this->movies;
    }

    private function addMovie(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function getMoviesByRating(string $rating): array
    {
        $ratedMovies = [];
        foreach($this->movies as $movie)
        {
            if($movie->getRating() == $rating)
            {
                $ratedMovies[] = $movie;
            }
        }
        return $ratedMovies;
    }
}

$cinema = new Cinema(
    [
        new Movie("Casino Royale", "Eon Productions", "PG-13"),
        new Movie("Glass", "Buena Vista International", "PG-13"),
        new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
    ]
);


echo "     Welcome to CODELEX Cinema \n";
echo "------------------------------------- \n";
echo "Today you can watch following movies: \n";


foreach ($cinema->getMovies() as $movie)
{
    echo "{$movie->getTitle()} from studio {$movie->getStudio()} \n";
}
$userSelectedRating = readline('What rating movies would you like to see? ');
$selectedMovies = $cinema->getMoviesByRating($userSelectedRating);


if(empty($selectedMovies))
{
    exit ("There are no movies in this category.\n");
}

echo "You can enjoy following movies with {$userSelectedRating } rating: \n";

foreach ($selectedMovies as $movie)
{
    echo "{$movie->getTitle()} from studio {$movie->getStudio()} \n";
}


