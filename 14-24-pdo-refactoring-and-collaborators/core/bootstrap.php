<?

use App\core\App; 
use App\core\database\QueryBuilder;
use App\core\database\Connection;


App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($name, $data=[])
{
    extract($data);
    return require "app/views/{$name}.blade.php";
}

function redirect($path)
{
    header("Location: /".ltrim($path, '/'));
}
