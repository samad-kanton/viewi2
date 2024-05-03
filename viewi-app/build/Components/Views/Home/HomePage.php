<?php


function RenderHomePage(
    Viewi\Engine $_engine,
    Components\Views\Home\HomePage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= $_engine->renderComponent('Layout', [
        'title' => $_component->title
    ], ['component' => $_component, 'parent' => $_slots, 'map' => [
        'default' => 'RenderHomePage_Layout_default'
    ]], $_scope);
    return $_content;
}


function RenderHomePage_Layout_default(
    Viewi\Engine $_engine,
    Components\Views\Home\HomePage $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '
    <h1>';
    $_content .= htmlentities($_component->title ?? '');
    $_content .= '</h1>
';
    return $_content;
}
