<?php

namespace Exan\Landviz\Ui\Pages;

class BlankPage
{
    public static function new(...$elements)
    {
        $links = [
            '<link rel="icon" type="image/x-icon" href="/public/assets/img/favicon.ico">',
            '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">',
            '<link href="/public/assets/css/main.css" rel="stylesheet">',
        ];

        return PageContent(
            Head(
                Title('Landviz'),
                ...$links,
            ),
            Body(
                Block(
                    ...$elements
                )->class('container-lg py-4'),
                Script()->src('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'),
                Script()->src('public/assets/js/main.js')->defer(),
            )->background('#eee')
        );
    }
}
