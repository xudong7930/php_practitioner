<?

class Task {
    public $title;
    public $finish;

    public function isComplete()
    {
        return $this->finish;
    }
}
