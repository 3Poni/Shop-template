<?php
session_start();

use Vendor\Errorhandler\ErrorHandler;
use Vendor\Routing\App;

require "../vendor/errorhandler/errorhandler.php";

require "../vendor/routing/app.php";


$e = new ErrorHandler;
$e->register();

require  "../config.php";

require  "../vendor/autoload.php";

require "../routes/api.php";

require  "../routes/web.php";

$app = (new App)->run();



