<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->group('', ['namespace' => 'App\Controllers'], static function (RouteCollection $routes): void {
    $routes->get('/', 'Home::index', ['as' => 'home']);
    $routes->get('about', 'Home::page/about', ['as' => 'about']);
    $routes->get('courses', 'Home::page/courses', ['as' => 'courses']);
    $routes->get('syllabus', 'Home::page/syllabus', ['as' => 'syllabus']);
    $routes->get('contact', 'Home::page/contact', ['as' => 'contact']);
    $routes->get('login', 'Auth::loginForm', ['as' => 'login', 'filter' => 'guest']);
    $routes->post('login', 'Auth::login', ['as' => 'login.post', 'filter' => 'guest']);
    $routes->get('register', 'Auth::registerForm', ['as' => 'register', 'filter' => 'guest']);
    $routes->post('register', 'Auth::register', ['as' => 'register.post', 'filter' => 'guest']);
    $routes->post('logout', 'Auth::logout', ['as' => 'logout']);
});

$routes->group('admin', ['namespace' => 'App\Controllers', 'filter' => 'auth'], static function (RouteCollection $routes): void {
    $routes->get('/', 'Admin::dashboard', ['as' => 'admin.dashboard']);
    $routes->get('dashboard', 'Admin::dashboard');
});
