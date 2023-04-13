<?php declare(strict_types=1);

class Application
{
    private VideoStore $videoStore;

    public function __construct(VideoStore $videoStore)
    {
        $this->videoStore = $videoStore;
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video \n";
            echo "Choose 3 to return video \n";
            echo "Choose 4 to rate video \n";
            echo "Choose 5 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->create();
                    break;
                case 2:
                    $this->rent();
                    break;
                case 3:
                    $this->return();
                    break;
                case 4:
                    $this->rate();
                    break;
                case 5:
                    $this->listInventory(
                        $this->videoStore->getAll()
                    );
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    public function create(): void
    {
        while (true) {
            $videoTitle = readline('Please input a title of video you would like to add: ');
            $this->videoStore->add(new Video($videoTitle));
            $toContinue = readline('Do you want to add more? (y/n): ');
            if ($toContinue == 'n') {
                break;
            }
        }
    }

    private function rent(): void
    {
        $this->listInventory($this->videoStore->getAll());

        $videoIndex = (int)readline('Please input the ID of the video you would like to rent: ');
        $video = $this->videoStore->getByIndex($videoIndex);

        if ($video == null) {
            echo "Video not found.\n";
            return;
        }
        if (!$video->isAvailable()) {
            echo "{$video->getTitle()} is currently rented out.\n\n";
        } else {
            echo "Enjoy {$video->getTitle()} movie!\n\n";
            $this->videoStore->rent($video);
        }
    }

    private function return(): void
    {
        $this->listInventory(
            $this->videoStore->getAllTaken()
        );

        $videoIndex = (int)readline('Please input the ID of the video you would like to return: ');

        $video = $this->videoStore->getByTakenIndex($videoIndex);

        if (in_array($video, $this->videoStore->getAll())) {
            $returnedIndex = array_search($video, $this->videoStore->getAll());
            $returnedVideo = $this->videoStore->getByIndex($returnedIndex);
            $this->videoStore->return($returnedVideo);
        }

        if ($video == null) {
            echo "Video not found.\n";
            return;
        }

        $this->videoStore->return($video);
    }

    private function rate(): void
    {
        $this->listInventory($this->videoStore->getAll());

        $videoIndex = (int)readline('Please input the ID of the video you would like to rate: ');
        $video = $this->videoStore->getByIndex($videoIndex);

        if ($video == null) {
            echo "Video not found.\n";
            return;
        }
        $rating = (int)readline('Please input the rating: ');

        $video->rate($rating);

        echo PHP_EOL;
    }

    private function listInventory(array $videos = [])
    {
        foreach ($videos as $index => $video) {
            /** @var Video $video */
            $isAvailable = $video->isAvailable() ? 'Yes' : 'No';
            echo "[{$index}] Title: {$video->getTitle()}, Rating {$video->getAvgRating()}, Available: $isAvailable \n";
        }
    }
}