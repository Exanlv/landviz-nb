<?php

namespace Exan\Landviz\Ui\Component;

use Element;

class Header
{
    public static function new(): Element
    {
        return Block(
            Block(
                Block(
                    file_get_contents('/home/exan/Projects/notback-try/public/assets/img/bear.svg')
                )
                    ->maxHeight('30vh')
                    ->maxWidth('100%'),
                // Image()->src('/assets/img/bear.svg')
                //     ->maxHeight('30vh')
                //     ->maxWidth('100%')
            )->class('container-fluid pt-2 text-center'),
            ...array_map(fn () => Block()->class('snowflake'), range(1, 60))
        )
            ->class('px-5 mb-4 rounded-3')
            ->background('linear-gradient(0deg, #9BC1BC, #E6EBE0)')
            ->overflow('hidden')
            ->relative();
    }
}
