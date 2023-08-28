<?php

namespace Core;

class Router {
    public static function handle() {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        $routes = include __DIR__ . '/../app/routes.php';

        if (array_key_exists($uri, $routes) && array_key_exists($method, $routes[$uri])) {
            $routeInfo = explode('@', $routes[$uri][$method]);
            $controllerName = "App\\Controllers\\" . $routeInfo[0];
            $methodName = $routeInfo[1];

            $controller = new $controllerName();
            $controller->$methodName();
        } else {
            self::notFound();
        }
    }

    public static function notFound() {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
    }
}
