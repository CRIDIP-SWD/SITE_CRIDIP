<?php
require 'app/classe.php';
App\autoloader::register();

if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = "index";
}

ob_start();
if($view === 'index'){require "view/index.php";}
if($view === 'event'){require "view/event.php";}
if($view === 'conseil'){require "view/conseil.php";}
if($view === 'coach'){require "view/coaching.php";}
if($view === 'developpement'){require "view/dev.php";}
if($view === 'contact'){require "view/contact.php";}

$content = ob_get_clean();
require "view/default.php";