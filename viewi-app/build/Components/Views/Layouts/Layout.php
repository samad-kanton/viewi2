<?php


function RenderLayout(
    Viewi\Engine $_engine,
    Components\Views\Layouts\Layout $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '<!DOCTYPE html>
<html lang="en">

<head>
    <title>';
    $_content .= htmlentities(('
        ' . (($_component->title) ?? '') . ' | Viewi
    ') ?? '');
    $_content .= '</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    ';
    $_content .= $_engine->renderComponent('CssBundle', [
        'links' => ['/mui.css', '/app.css'],
        'combine' => true,
        'minify' => true,
        'purge' => true
    ], [], $_scope);
    $_content .= '
</head>

<body>
    <div id="sidebar">
        ';
    $_content .= $_engine->renderComponent('MenuBar', [], [], $_scope);
    $_content .= '
    </div>
    <div id="content">
        ';
    if (isset($_slots['map']['default'])) {
        $_content .= $_engine->renderSlot($_slots['component'], $_scope, $_slots['map']['default'], $_slots['parent']);
    }
        $_content .= '
    </div>
    ';
        $_content .= $_engine->renderComponent('ViewiAssets', [], [], $_scope);
        $_content .= '
</body>

</html>';
    return $_content;
}
