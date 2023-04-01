<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Ui\Component\ContentContainer;

class ColorPage
{
    public static function new(array $colors)
    {
        return BasePage::new(array_map(function (string $color) {
            return ContentContainer::new(
                Block(
                    Block('&nbsp;')->class('col')
                        ->background('#' . $color)
                        ->border('1px dashed black'),
                    Block($color)->class('col')
                )->class('row gx-1')->lineHeight('5em'),
            );
        }, $colors));
    }
}

/*

<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3">Custom column padding</div>
    </div>
    <div class="col">
      <div class="p-3">Custom column padding</div>
    </div>
  </div>
</div>


*/
