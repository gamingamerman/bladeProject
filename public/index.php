<?php

require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$titulo = 'Este es el titulo';
$edad = 12;
$maximo = 15;
$aficiones = ['PHP', 'Javascript', 'fuck niggers'];

echo $blade->view()->make('master', compact('titulo', 'edad', 'maximo', 'aficiones'))->render();