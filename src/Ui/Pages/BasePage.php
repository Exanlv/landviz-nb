<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Ui\Component\Header;
use Exan\Landviz\Ui\Component\Nav;

class BasePage
{
    public static function new(...$elements)
    {
        return BlankPage::new(
            Nav::new(),
            Header::new(),
            ...$elements
        );
    }
}
