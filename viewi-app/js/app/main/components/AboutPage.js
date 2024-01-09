import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { Layout } from "./Layout";

class AboutPage extends BaseComponent {
    _name = 'AboutPage';
    title = "About Page Component";
}

export const AboutPage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; }
];

export { AboutPage }