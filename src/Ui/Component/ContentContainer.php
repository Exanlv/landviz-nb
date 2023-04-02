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
            )->class('container px-md-5')
        )->class('px-md-5 mb-5');
    }
}
