<?php
include_once('./Request.php');
include_once('./Router.php');
$router = new Router(new Request);

# Run the router __call method, get to $name, $arguments to ['/', function($request)]
$router->get('/', function ($request) {
    return <<<HTML
        <h1>Hello world</h1>
    HTML;
});

$router->get('/profile', function ($request) {
    return <<<HTML
        <h1>Profile</h1>
    HTML;
});

$router->post('/data', function ($request) {
    return json_encode($request->getBody());
});
