import { ClientRoute } from "./ClientRoute";

class WelcomeGuard {
    route = null;
    constructor(route) {
        var $this = this;
        $this.route = route;
    }

    run(c) {
        var $this = this;
        $this.route.navigate("\/getting-started\/welcome");
        // redirect
    }
}

export { WelcomeGuard }