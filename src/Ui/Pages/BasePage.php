<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Ui\Component\Header;
use Exan\Landviz\Ui\Component\Nav;

class BasePage
{
    public static function new(...$elements)
    {
        $links = [
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">',
            '<link href="/assets/css/main.css" rel="stylesheet">',
        ];

        return PageContent(
            Head(
                Title('Landviz'),
                ...$links,
            ),
            Body(
                Block(
                    Nav::new(),
                    Header::new(),
                    ...$elements
                )->class('container-lg py-4'),
                Script()->src('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'),
                Script()->src('/assets/js/main.js')->defer(),
            )->background('#eee')
        );
    }
}
