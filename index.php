<?php
/*
 * El frontend controler se encarga de configurar nuestra
 * aplicación.
 */
require 'config.php';
require 'helpers.php';

//Library
require 'library/Request.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';

//Llamar al controlador indicado
if (empty($_GET['url']))
{
    $url = "";
}
else
{
    $url = $_GET['url'];
}

$request = new Request($url);

$request->execute();