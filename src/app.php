<?php

// example.com/src/app.php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => function ($request) {
            // $foo sera dispo dans le template
            $request->attributes->set('foo', 'bar');

            // on appelle le controleur par défaut
            $response = render_template($request);

            // modification des header de la réponse
            $response->headers->set('Content-Type', 'text/plain');

            return $response;
        }
)));
$routes->add('bye', new Routing\Route('/bye', array(
    '_controller' => 'render_template'
)));

return $routes;
