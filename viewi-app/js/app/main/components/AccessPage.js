import { BaseComponent } from "../../../viewi/core/component/baseComponent";
import { Layout } from "./Layout";

class AccessPage extends BaseComponent {
    _name = 'AccessPage';
    title = "Access";
}

export const AccessPage_x = [
    function (_component) { return _component.title; },
    function (_component) { return _component.title; }
];

export { AccessPage }