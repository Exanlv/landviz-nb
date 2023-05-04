<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Ui\Component\Button;
use Exan\Landviz\Ui\Component\ContentContainer;
use Exan\Landviz\Ui\Component\ProjectCategory;

class ProjectsPage
{
    public static function new(array $projects)
    {
        return BasePage::new(
            array_map(function (array $project) {
                return ContentContainer::new(
                    ProjectCategory::new($project),
                );
            }, $projects),
            ContentContainer::new(
                Button::new('Back', '/'),
            )->marginTop('3rem')->class('text-center')
        );
    }
}
