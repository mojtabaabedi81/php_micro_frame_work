<?php

use App\MigrationManager;

//require the autoloder
require_once './vendor/autoload.php';

//make the object from migration manager
$manager = new MigrationManager();
$action = $argv[1] ?? '';
if ($action === 'migrate') {
    $manager->migrate();
} elseif ($action === 'rollback') {
    $manager->rollback();
} else {
    echo "Usage: php migrate.php [migrate|rollback]\n";
}
