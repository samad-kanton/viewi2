import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { Layout } from "./Layout";

class HomePage extends BaseComponent {
    _name = 'HomePage';
    title = "Viewi - Reactive application for PHP";
}

export const HomePage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; }
];

export { HomePage }