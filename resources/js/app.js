import "virtual:svg-icons-register";
import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import floatingToolbar from "./components/ui/floating-toolbar";
import tooltip from "./components/ui/tooltip";

Alpine.data("floatingToolbar", floatingToolbar);
Alpine.data("tooltip", tooltip);
Livewire.start();
