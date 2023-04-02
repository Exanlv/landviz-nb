<?php

namespace Exan\Landviz\Http\Controllers;

use Exan\Landviz\Config;
use Exan\Landviz\Ui\Pages\ColorPage;
use Exan\Landviz\Ui\Pages\HomePage;
use Exan\Landviz\Ui\Pages\ProjectsPage;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public static function index(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $response->getBody()->write(
            HomePage::new(
                array_filter(Config::get('projects'), fn ($p) => $p['highlighted'])
            )
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

    public static function projects(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $allProjects = Config::get('projects');
        $allCategories = Config::get('categories');

        $categories = [];

        foreach ($allCategories as $category => $projects) {
            $categories[] = [
                'name' => $category,
                'projects' => array_map(fn ($project) => $allProjects[$project], $projects)
            ];
        }

        $response->getBody()->write(
            ProjectsPage::new($categories)
        );

        return $response;
    }
}
