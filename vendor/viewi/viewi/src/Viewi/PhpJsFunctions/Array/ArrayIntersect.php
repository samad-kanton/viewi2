<?php

namespace Viewi\PhpJsFunctions\Array;

use Viewi\JsTranspile\BaseFunction;

class ArrayIntersect extends BaseFunction
{
    public static string $name = 'array_intersect';

    public static function getUses(): array
    {
        return [];
    }

    public static function getJs(): string
    {
        $jsToInclude = __DIR__ . DIRECTORY_SEPARATOR . 'ArrayIntersect.js';
        return file_get_contents($jsToInclude);
    }
}
