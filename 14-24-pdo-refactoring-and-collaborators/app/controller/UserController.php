<?

namespace App\controller;

class UserController {

    public function store()
    {
        App::get('database')->insert('names', [
            'name' => trim($_POST['names'])
        ]);

        redirect('/');
    }
}
