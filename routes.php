<?php

require_once 'app/RouteController.php';

$route = new RouteController();

$route->group(['', 'LoginController'], function ($route) {
    $route->route('admin', 'index');
    $route->route('logout', 'logout');
});

$route->group(['', 'WebController'], function ($route) {
    $route->route('', 'index');
    $route->route('artist', 'Artist');
        $route->route('album', 'Album');
        $route->route('song', 'Song');
        $route->route('chat', 'Chat');



   
    // $route->route('/', 'index');
});




$route->group(['', 'DashboardController', 'auth'], function ($route) {
    $route->route('dashboard', 'index');
    $route->route('/get-dashboard-data', 'getDashboardData');
});



return $route->getRoutes();
