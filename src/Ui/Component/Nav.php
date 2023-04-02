<?php

namespace Exan\Landviz\Ui\Component;

use Element;

class Nav
{
    public static function new(): Element
    {
        return Block(
            Hyperlink(
                Image()
                    ->src('/public/assets/img/logo-gray.svg')
                    ->height('32')
                    ->class('me-3'),
                Text('Landviz.nl')
                    ->class('fs-4')
            )->href('/')->class('d-flex align-items-center text-dark text-decoration-none')
        )->class('pb-3 mb-4 border-bottom position-relative');
    }
}
