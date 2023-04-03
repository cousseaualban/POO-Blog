<?php
use App\Autoloader;
use App\Database;

require '../app/autoloader.php';

Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}



ob_start();

if($p === 'home'){
    require '../pages/home.php';
} elseif ($p === 'article') {
    require '../pages/single.php';
} elseif ($p === 'category') {
    require '../pages/category.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';

?>