<?php

require_once '../vendor/j4mie/idiorm/idiorm.php';
require_once '../vendor/j4mie/paris/paris.php';

ORM::configure('mysql:host=localhost;dbname=dbname');
ORM::configure('username', 'root');
ORM::configure('password', '');