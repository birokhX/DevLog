import "virtual:svg-icons-register";
import Alpine from "alpinejs";
import floatingToolbar from "./components/ui/floating-toolbar";
import tooltip from "./components/ui/tooltip";

Alpine.data("floatingToolbar", floatingToolbar);
Alpine.data("tooltip", tooltip);
window.Alpine = Alpine;
Alpine.start();
