<?php
include_once('include/config.php');

include_once('instagram.php');

include './vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

echo $twig->render('index.twig', array("insta-content" => instaHtml($access_token, $instagram_uid), "pagetitle" => "ovdingen"));
