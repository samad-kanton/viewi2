<?php


function RenderViewiAssets(
    Viewi\Engine $_engine,
    Viewi\Components\Assets\ViewiAssets $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_component->data;
    $_content .= '
<script';
    $tempVal = $_component->appPath;
    if ($tempVal !== null) {
        $_content .= ' src="' . htmlentities($tempVal ?? '') . '"';
    }
    $_content .= ' async="async" defer="defer"></script>';
    return $_content;
}
