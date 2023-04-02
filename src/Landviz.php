<?php

namespace Exan\Landviz;

use Exan\Landviz\Http\Controllers\HomeController;
use Settings;
use Slim\App;
use Slim\Factory\AppFactory;

class Landviz
{
    private App $app;

    public function __construct()
    {
        $this->app = AppFactory::create();

        $this->configureNotBack();
        $this->registerRoutes();

        $this->app->run();
    }

    public function registerRoutes()
    {
        $this->app->get('/', HomeController::index(...));
        $this->app->get('/colors', HomeController::colors(...));
        $this->app->get('/projects', HomeController::projects(...));
    }

    public function configureNotBack()
    {
        Settings::$breakPoints = Config::get('notback.breakPoints');
    }
}
