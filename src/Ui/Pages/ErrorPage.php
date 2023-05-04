<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Ui\Component\Button;
use Exan\Landviz\Ui\Component\ContentContainer;
use Slim\Exception\HttpSpecializedException;

class ErrorPage
{
    public static function new(HttpSpecializedException $e)
    {
        return BlankPage::new(
            Block(
                Image()
                    ->src('/public/assets/img/error.svg')
                    ->maxWidth('30rem'),
                H4($e->getTitle()),
                P($e->getDescription()),
                Button::new('Go back home', '/')
            )->textAlign('center')
        );
    }
}
