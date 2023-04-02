<?php

namespace Exan\Landviz\Ui\Component;

class Card
{
    public static function new(string $title, string $imageUrl, string $description, string $footer)
    {
        return Block(
            Block(
                Block(
                    H5($title)->margin('1rem')->fontSize('1.7rem')
                ),
                Block(
                    Image()->src($imageUrl)
                        ->margin('auto')
                        ->width('calc(100% - 4rem)')
                        ->maxWidth('15rem')
                        ->borderRadius('1rem')
                        ->transform(['hover'], 'scale(1.05)')
                        ->transitionDuration('0.3s')
                        ->boxShadow('0.5rem 0.5rem 1rem rgba(0, 0, 0, 0.05)')
                ),
                Block(Text($description))
                    ->marginTop('2rem'),
                Block(Text($footer))
                    ->class('text-muted')
                    ->marginTop('4rem')
                    ->fontSize('0.7rem')
            )
                ->height('100%')
                ->maxWidth('27rem')
                ->margin('auto !important')
                ->class('lv-card')
        );
    }
}
