<?php

namespace Exan\Landviz\Ui\Component;

class Button
{
    public static function new(string $title, string $url)
    {
        return Hyperlink($title)
            ->href($url)
            ->class('btn btn-lv');
    }
}
