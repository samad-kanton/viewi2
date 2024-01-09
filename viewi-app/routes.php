<?php

use Components\Views\Home\HomePage;
use Components\Views\GettingStarted\Welcome\WelcomePage;
use Components\Views\GettingStarted\HowItWorks\HowItWorksPage;
use Components\Views\GettingStarted\Access\AccessPage;
use Components\Views\GettingStarted\Navigation\NavigationPage;
// use Components\Views\CustomJs\CustomJsPage;
use Components\Views\NotFound\NotFoundPage;
use Viewi\App;
use Viewi\Components\Http\Message\Response;

/**
 * @var App $app
*/

$router = $app->router();
$router->get('/', HomePage::class);
$router->get('/getting-started', WelcomePage::class);
$router->get('/getting-started/welcome', WelcomePage::class);
$router->get('/getting-started/how-it-works', HowItWorksPage::class);
$router->get('/getting-started/access-myshopos', AccessPage::class);
$router->get('/getting-started/navigating-myshopos', NavigationPage::class);
// $router->get('/custom-js', CustomJsPage::class);
$router
    ->get('*', NotFoundPage::class)
    ->transform(function (Response $response) {
        return $response->withStatus(302, 'Page Not Found');
    });
