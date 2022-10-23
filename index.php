<?php


declare(strict_types=1);

namespace App;

require_once('./src/view.php');
include_once('.src/utils/debug.php');

const DEFAULT_ACTION = 'list';

$action = $_GET['action']  ?? DEFAULT_ACTION;

$viewParams = [];

if ($action === 'create') {
    $viewParams['resultCreate'] = 'Udalo sie dodac notatke';
} else {
    $viewParams['resultList'] = 'Wyswietlamy liste notatek';
}

$view = new View();
$view->render($action, $viewParams);
