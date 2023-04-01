<?php

namespace Exan\Landviz\Http\Controllers;

use Exan\Landviz\Ui\Pages\ColorPage;
use Exan\Landviz\Ui\Pages\HomePage;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public static function index(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $response->getBody()->write(
            HomePage::new()
        );

        return $response;
    }

    public static function colors(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $response->getBody()->write(
            ColorPage::new(['ED6A5A', '75180C', 'F4F1BB', '9BC1BC', 'E6EBE0'])
        );

        return $response;
    }
}
