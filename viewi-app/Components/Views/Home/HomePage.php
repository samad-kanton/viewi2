<?php

namespace Components\Views\Home;

use Components\Services\Middleware\WelcomeGuard;
use Viewi\Components\Attributes\Middleware;
use Viewi\Components\BaseComponent;

#[Middleware([WelcomeGuard::class])]
class HomePage extends BaseComponent
{
    public string $title = 'Viewi - Reactive application for PHP';
}
