<?php declare(strict_types=1);


class VideoStore
{
    private array $videos = [];
    private array $takenVideos = [];

    public function add(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function rent(Video $video): void
    {
        $video->setAvailable(false);
        $this->takenVideos[] = $video;
    }

    public function return(Video $video): void
    {
        if ($video->isAvailable()) return;

        $video->setAvailable(true);
    }

    public function getByIndex(int $index): ?Video
    {
        return $this->videos[$index] ?? null;
    }

    public function getByTakenIndex(int $index): ?Video
    {
        return $this->takenVideos[$index] ?? null;
    }

    public function getAll(): array
    {
        return $this->videos;
    }

    public function getAllTaken(): array
    {
        $takenVideos = [];

        foreach ($this->videos as $video) {
            /** @var Video $video */
            if (!$video->isAvailable()) {
                $takenVideos[] = $video;
            }
        }
        return $takenVideos;
    }
}
