<?php

namespace Exan\Landviz\Ui\Component;

class HighlightedProjects
{
    public static function new(array $projects): array
    {
        return [
            H3('Highlighted Projects')->marginBottom('3rem'),
            Block(
                array_map(function ($project) {
                    return Card::new($project['name'], $project['image'], $project['description'], 'Uses ' . implode(', ', $project['tech']));
                }, $projects)
            )->class('row row-cols-1 row-cols-lg-2 g-4')
        ];
    }
}
