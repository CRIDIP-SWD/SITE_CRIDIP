<?php
require "app/Autoloader.php";
\App\Autoloader::register();

if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = 'index';
}

ob_start();
if($view === 'index'){require "view/index.php";}

$content = ob_get_clean();
require "view/default.php";