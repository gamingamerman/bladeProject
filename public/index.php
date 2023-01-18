<?php
require '../vendor/autoload.php';

use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$titulo = "Este es el titulo";
$nombre = "Pepe Pepón";
$edad = 12;
$maximo = 3;
//$aficiones = ['PHP', 'Javascript', 'Blade', 'AJAX'];
$aficiones = [];
//echo $blade->view()->make('plantilla1', ['nombre' => $nombre, 'titulo' => $titulo])->render();
echo $blade->view()->make('plantilla1', compact('nombre','titulo','edad','maximo', 'aficiones'))->render();