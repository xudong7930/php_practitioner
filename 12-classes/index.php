<?
require 'function.php';

class Task {
    public $title;
    private $finish = false;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function isComplete()
    {
        return $this->finish;
    }

    public function complete()
    {
        $this->finish = true;
    }
}

$tasks = [
    new Task('go to store'),
    new Task('wash your clothes'),
    new Task('clean you room')
];
$tasks[1]->complete();

require 'index.blade.php';
