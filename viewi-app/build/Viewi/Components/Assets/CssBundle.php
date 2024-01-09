<?php


function RenderCssBundle(
    Viewi\Engine $_engine,
    Viewi\Components\Assets\CssBundle $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_component->cssHtml;
    return $_content;
}
