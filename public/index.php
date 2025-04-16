<?php 

require_once("../config.php");

$requestUri = $_SERVER['REQUEST_URI']; //récupérer l'URI de la requête

$uri = parse_url($requestUri, PHP_URL_PATH); //extraire le chemin de l'URI
$endUri = str_replace('/resa/public', '', $uri); 
$endUri = trim($endUri, '/'); 

if ($endUri === "") {
    require_once("../controller/home.controller.php"); 
} else if ($endUri === "nouvelle-reservation") {
    require_once("../controller/create-reservation.controller.php");
} else if ($endUri === "annuler-reservation") {
    require_once("../controller/cancel-reservation.controller.php");
} else if ($endUri === "payer-reservation") {
    require_once("../controller/pay-reservation.controller.php");
} else if ($endUri === "commenter-reservation") {
    require_once("../controller/comment-reservation.controller.php");
}