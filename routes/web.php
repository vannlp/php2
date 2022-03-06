<?php
require_once "./controllers/HomeController.php";

$router = new \Bramus\Router\Router();

$router->get("/", function () {
    echo '123';
});

$router->get("/home", "HomeController@index");

$router->get("/hello/{id}", "HomeController@hello");

$router->before('GET|POST', '/admin/.*', function () {
    checkLogin();
});

$router->get("/admin", function () {
    echo "admin";
});

$router->run();
