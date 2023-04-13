<?php declare(strict_types=1);

require_once 'application.php';
require_once 'video.php';
require_once 'videoStore.php';

$videoStore = new VideoStore();
$app = new Application($videoStore);
$app->run();

