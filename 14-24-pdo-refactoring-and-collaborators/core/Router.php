<?

namespace App\core;

class Router {
    protected $routers = [
        'GET' => [],
        'POST' => []
    ];

    public function define($routers)
    {
        $this->routers = $routers;
    }

    public function redirect($uri, $requestType)
    {

        if (array_key_exists($uri, $this->routers[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routers[$requestType][$uri])
            );
        }
        
        throw new Exception("No such route defined for this uri");
    }

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routers['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routers['POST'][$uri] = $controller;
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\controller\\{$controller}";
        $instance = new $controller;
        if (! method_exists($instance, $action)) {
            throw new Exception('{$controller} does not response to {$action} action.');
        }

        return $instance->$action();
    }
}
