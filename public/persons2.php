<?php
require_once("../src/connection.php");

use Dsw\Blade\Person as Person;
use Philo\Blade\Blade;

$views = '../views';
$cache = '../cache';

$blade = new Blade($views, $cache);

$persons = Person::all();

// foreach($persons as $person) {
//   echo "<p>" . $person->name . "</p>";
// }
echo $blade->view()->make('layouts.persons', compact('persons'))->render();