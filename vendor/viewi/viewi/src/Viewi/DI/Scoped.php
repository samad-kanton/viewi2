<?php

namespace Viewi\DI;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_PARAMETER)]
class Scoped
{
    public const NAME = 'Scoped';
}
