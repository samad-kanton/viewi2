<?php


function RenderMenuBar(
    Viewi\Engine $_engine,
    Components\Views\Common\MenuBar $_component,
    array $_slots,
    array $_scope
) {
    $_content = '';
    
    $_content .= '<div class="menu-bar">
    <div class="mui--text-white mui--text-display1 mui--align-vertical">
        My App
    </div>
    <div class="">
        <ul class="mui-list--unstyled mui--text-menu" style="padding: 10px 8px;line-height: 32px;font-size: 16px;">
            <li>
                <a href="/" class="mui--text-light">Home</a>
            </li>
        </ul>
    </div>
</div>';
    return $_content;
}
