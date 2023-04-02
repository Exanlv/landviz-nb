<?php

namespace Exan\Landviz\Ui\Pages;

use Exan\Landviz\Config;
use Exan\Landviz\Ui\Component\Category;
use Exan\Landviz\Ui\Component\ContentContainer;
use Exan\Landviz\Ui\Component\HighlightedProjects;

class HomePage
{
    public static function new(array $projects)
    {
        return BasePage::new(
            ContentContainer::new(
                H3('Welcome'),
                P('Hey! I\'m Max. I started getting into programming late 2016 '),
                P(
                    'I\'m a backend developer experienced in Javascript, Typescript, PHP, Java, Python and SQL. ',
                    'I also know my way around HTML and CSS and some light photo editing. ',
                    'As for frameworks, most of my experience is with Laravel. ',
                    'I have however also worked with Symfony, Angular, Fastify and jQuery. '
                ),
                P(
                    'Check out my GitHub profile ',
                    Hyperlink('here!')
                        ->href('https://github.com/Exanlv')
                        ->target('_blank')
                )
            )->class('text-center'),

            ContentContainer::new(
                HighlightedProjects::new($projects)
            )->class('text-center'),

            ContentContainer::new(
                Hyperlink('View all')
                    ->href('/projects')
            )->marginTop('7rem')->class('text-center'),
        );
    }
}
