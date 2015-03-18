<?php

// des libs comme twig permettent d'échapper automatiquement le text et simplifie donc ce traitement 

$input = isset($_GET['name']) ? $_GET['name'] : 'World';

header('Content-Type: text/html; charset=utf-8');

printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
