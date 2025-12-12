<?php

require_once __DIR__ . '/helper.php';

class Router
{
    protected array $routes = [];

    public function get(string $path, callable $callback): void
    {
        $this->addRoute('GET', $path, $callback);
    }

    public function post(string $path, callable $callback): void
    {
        $this->addRoute('POST', $path, $callback);
    }

    protected function addRoute(string $method, string $path, callable $callback): void
    {
        $path = $this->normalize($path);
        $this->routes[$method][$path] = $callback;
    }

    protected function normalize(string $path): string
    {
        // remove trailing slash, but keep root '/'
        $path = rtrim($path, '/');
        return $path === '' ? '/' : $path;
    }

    protected function getRequestPath(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($uri, PHP_URL_PATH) ?: '/';

        // If the application is hosted in a subfolder, strip the script folder from path
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
        $scriptDir = str_replace('\\', '/', dirname($scriptName));
        if ($scriptDir !== '/' && $scriptDir !== '.' && strpos($path, $scriptDir) === 0) {
            $path = '/' . ltrim(substr($path, strlen($scriptDir)), '/');
        }

        return $this->normalize($path);
    }

    public function resolve(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $path = $this->getRequestPath();

        if (isset($this->routes[$method][$path])) {
            $callback = $this->routes[$method][$path];
            call_user_func($callback);
            return;
        }

        // Not found - try common fallback for files with .html extension
        if ($method === 'GET' && preg_match('/\.html$/', $path)) {
            // strip .html and try again
            $withoutExt = $this->normalize(preg_replace('/\.html$/', '', $path));
            if (isset($this->routes['GET'][$withoutExt])) {
                call_user_func($this->routes['GET'][$withoutExt]);
                return;
            }
        }

        // 404
        http_response_code(404);
        if (file_exists(__DIR__ . '/app/views/404.view.php')) {
            include __DIR__ . '/app/views/404.view.php';
            return;
        }

        echo "<h1>404 Not Found</h1>";
    }
}
