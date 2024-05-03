<?php


function RenderNotFoundPage(
    Viewi\Engine $_engine,
    Components\Views\NotFound\NotFoundPage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_engine->renderComponent('Layout', [
        'title' => 'Page Not Found'
    ], ['component' => $_component, 'parent' => $_slots, 'map' => [
        'default' => 'RenderNotFoundPage_Layout_default'
    ]], $_scope);
    return $_content;
}


function RenderNotFoundPage_Layout_default(
    Viewi\Engine $_engine,
    Components\Views\NotFound\NotFoundPage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '
    <h1>Page not found</h1>
';
    return $_content;
}
