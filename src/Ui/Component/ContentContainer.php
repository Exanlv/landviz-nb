<?php

namespace Exan\Landviz\Ui\Component;

use Element;

class ContentContainer
{
    public static function new(...$elements): Element
    {
        return Block(
            Block(
                ...$elements
            )->class('container px-5 text-center')
        )->class('px-5 mb-5');
    }
}
