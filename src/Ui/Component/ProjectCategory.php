<?php

namespace Exan\Landviz\Ui\Component;

class ProjectCategory
{
    public static function new(array $category): array
    {
        return [
            H3($category['name'])->class('text-center'),
            ...array_map(
                fn (array $project) => ResponsiveCard::new(
                    $project['name'],
                    $project['image'],
                    $project['url'],
                    $project['description'],
                    'Uses ' . implode(', ', $project['tech'])
                ),
                $category['projects']
            )
        ];
    }
}
