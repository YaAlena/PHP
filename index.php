<?php


declare(strict_types=1);

namespace App;

// To powinno byc na wersji na swiat. Dla nas bledy sa wazne.
// error_reporting(0);
// ini_set('diaplay_errors', '0');

require_once('./Exception/AppException.php');
require_once('./Exception/StorageException.php');
require_once('./Exception/ConfigurationException.php');
require_once('./src/Controller.php');
require_once('./src/utils/debug.php');
require_once('./config/config.php');

use App\Exception\AppException;
use App\Exception\StorageException;
use App\Exception\ConfigurationException;
use Throwable;

$request = [
    'get' => $_GET,
    'post' => $_POST,
];

try {
    Controller::initConfiguration($configuration);
    $controller = new Controller($request);
    $controller->run();
} catch (AppException $e) {
    echo "<h1>Wystapil blad w aplikacji</h1>";
    echo '<h3>' . $e->getMessage() . '</h3>';
} catch (Throwable $e) {
    echo "<h1>Wystapil blad w aplikacji</h1>";
}
