<?php

namespace Exan\Landviz;

use Exan\Landviz\Http\Controllers\HomeController;
use Settings;
use Slim\App;
use Slim\Factory\AppFactory;

class Landviz
{
    public function __construct(private App $app)
    {
        $this->app = AppFactory::create();

        $this->app->addRoutingMiddleware();

        $this->registerErrorHandling();

        $this->configureNotBack();
        $this->registerRoutes();

        $this->app->run();
    }

    private function registerErrorHandling()
    {
        $this->app->addErrorMiddleware(false, false, false)
            ->getDefaultErrorHandler()
            ->registerErrorRenderer('text/html', ErrorRenderer::class);

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
