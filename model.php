<?php

$json = file_get_contents('php://input');
$obj = json_decode($json);

$name = $obj->user->name;
$vida = $obj->vida;

foreach ($vida as $key) {
  print_r($key->vida);
}