<?php

namespace Exan\Landviz\Ui\Component;

use Element;

class Header
{
    public static function new(): Element
    {
        ob_start();
        require(__DIR__ . '/Bear.php');
        $bear = ob_get_clean();

        return Block(
            Block(
                Block(
                    $bear
                )
                    ->maxHeight('30vh')
                    ->maxWidth('100%'),
            )->class('container-fluid pt-2 text-center'),
            Block()->class('snowflake')->id('special-snowflake'),
            ...array_map(fn () => Block()->class('snowflake'), range(1, 60))
        )
            ->class('px-5 mb-4 rounded-3')->id('header')
            ->backgroundPosition('50% 40%')
            ->overflow('hidden')
            ->relative();
    }
}
