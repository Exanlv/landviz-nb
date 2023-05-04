<?php

namespace Exan\Landviz;

use Exan\Landviz\Ui\Pages\ErrorPage;
use Mockery;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpInternalServerErrorException;
use Slim\Exception\HttpSpecializedException;
use Slim\Factory\Psr17\ServerRequestCreator;
use Slim\Interfaces\ErrorRendererInterface;
use Slim\Psr7\Request;
use Throwable;

class ErrorRenderer implements ErrorRendererInterface
{
    public function __invoke(Throwable $exception, bool $displayErrorDetails): string
    {
        $renderedException = $exception instanceof HttpSpecializedException
            ? $exception
            : new HttpInternalServerErrorException(
                Mockery::mock(ServerRequestInterface::class) // I'm never using slim again, fuck this
            );

        return ErrorPage::new($renderedException);
    }
}
