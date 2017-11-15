<?
require 'Task.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=homestead', 'root', 'root');
} catch (Exception $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');


require 'index.blade.php';
