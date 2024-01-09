import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { Layout } from "./Layout";

class NavigationPage extends BaseComponent {
    _name = 'NavigationPage';
    title = "Navigation";
}

export const NavigationPage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; }
];

export { NavigationPage }