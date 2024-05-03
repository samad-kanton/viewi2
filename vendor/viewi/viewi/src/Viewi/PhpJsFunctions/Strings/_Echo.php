<?php

namespace Viewi\PhpJsFunctions\Strings;

use Viewi\JsTranspile\BaseFunction;

class _Echo extends BaseFunction
{
    public static string $name = 'echo';

    public static function getUses(): array
    {
        return [];
    }

    public static function getJs(): string
    {
        $jsToInclude = __DIR__ . DIRECTORY_SEPARATOR . '_Echo.js';
        return file_get_contents($jsToInclude);
    }
}
