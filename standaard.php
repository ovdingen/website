<?php
include './vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

echo $twig->render('project/standaard.twig', array("pagetitle" => "Standaard pagina - ovdingen"));
