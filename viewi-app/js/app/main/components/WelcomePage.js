import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { Layout } from "./Layout";

class WelcomePage extends BaseComponent {
    _name = 'WelcomePage';
    title = "Welcome";
}

export const WelcomePage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; }
];

export { WelcomePage }