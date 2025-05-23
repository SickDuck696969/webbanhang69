<?php
// Lấy url từ GET, ví dụ: Product/add/123
$url = $_GET['url'] ?? '';

// Nếu URL có chứa 'webbanhang' ở đầu, bỏ qua
$baseFolder = 'webbanhang'; // folder dự án bạn đang dùng

// Tách và bỏ qua phần folder gốc nếu có
if (strpos($url, $baseFolder) === 0) {
    $url = substr($url, strlen($baseFolder));
    $url = ltrim($url, '/');
}

$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

$controllerName = isset($url[0]) && $url[0] !== '' ? ucfirst($url[0]) . 'Controller' : 'ProductController';
$action = isset($url[1]) && $url[1] !== '' ? $url[1] : 'index';

$controllerFile = 'app/controllers/' . $controllerName . '.php';

if (!file_exists($controllerFile)) {
    die('Controller Not Found: ' . $controllerName);
}
require_once $controllerFile;

if (!class_exists($controllerName)) {
    die('Controller class "' . $controllerName . '" not found.');
}

$controller = new $controllerName();

if (!method_exists($controller, $action)) {
    die('Action "' . $action . '" not found in controller "' . $controllerName . '"');
}

$params = array_slice($url, 2);
call_user_func_array([$controller, $action], $params);
