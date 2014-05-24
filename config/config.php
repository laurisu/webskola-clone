<?php

require_once '../vendor/j4mie/idiorm/idiorm.php';
require_once '../vendor/j4mie/paris/paris.php';

ORM::configure('mysql:host=localhost;dbname=webskola-clone');
ORM::configure('username', 'root');
ORM::configure('password', '');