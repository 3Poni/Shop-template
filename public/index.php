<?php
session_start();

use Vendor\Errorhandler\ErrorHandler;
use Vendor\Routing\App;

require "../Vendor/Errorhandler/errorhandler.php";

require "../Vendor/Routing/App.php";


$e = new ErrorHandler;
$e->register();

require  "../config.php";

require  "../Vendor/autoload.php";

require "../Routes/api.php";

require  "../Routes/web.php";

$app = (new App)->run();



