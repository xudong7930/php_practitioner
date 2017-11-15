<?
require 'vendor/autoload.php';

use App\core\{Router, Request};


$database = require 'core/bootstrap.php';

$router = Router::load('app/routes.php');
$router->redirect(Request::uri(), Request::method());
