<?php
include './vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

echo $twig->render('telefoon.twig', array("pagetitle" => "Telefoon Service - ovdingen"));
