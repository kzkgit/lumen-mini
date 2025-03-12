<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return view('index');
});

/** @var \Laravel\Lumen\Routing\Router $router */
$router->post('/contact', 'ContactController@sendContactForm');

/** @var \Laravel\Lumen\Routing\Router $router */
$router->post('/weather', 'WeatherController@getWeather');
