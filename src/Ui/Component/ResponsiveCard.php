<?php

namespace Exan\Landviz\Ui\Component;

class ResponsiveCard
{
    public static function new(string $title, string $imageUrl, string $description, string $footer)
    {
        return Block(
            Block(
                Image()->src($imageUrl)->class('lv-card-img')
            )->class('col-xl-3'),
            Block(
                Block(H5($title))->margin('1rem 0')->fontSize('1.7rem'),
                Block(Text($description)),
                Block(Text($footer))
                    ->class('text-muted')
                    ->marginTop('4rem')
                    ->fontSize('0.7rem'),
            )->class('col-xl-9'),
        )->class('row lv-card')->textAlign('center !important')->textAlign(['XL'], 'left !important');
    }
}
