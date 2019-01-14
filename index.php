<?php
session_start();

// Access to the controller:
require 'Controller/Router.php';


$router = new Router();
$router->routerQuery();