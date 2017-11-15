<?

namespace App\controller;

use App\core\App;

class PageController {
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');
        $names = App::get('database')->selectAll('names');

        return view('index', compact('tasks', 'names'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
