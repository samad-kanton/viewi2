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
        MyshopOS Docs
    </div>
    <div class="">
        <ul class="mui-list--unstyled mui--text-menu" style="padding: 10px 8px;line-height: 32px;font-size: 16px;">
            <li>
                <a href="/" class="mui--text-light">Welcome</a>
            </li>
            <li>
                <a href="/getting-started/how-it-works" class="mui--text-light">How It Works</a>
            </li>
            <li>
                <a href="/getting-started/access-myshopos" class="mui--text-light">Access MyshopOS</a>
            </li>
            <li>
                <a href="/getting-started/navigating-myshopos" class="mui--text-light">Navigating MyshopOS</a>
            </li>
        </ul>
    </div>
</div>';
    return $_content;
}
