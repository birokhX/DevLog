import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { createSvgIconsPlugin } from "vite-plugin-svg-icons";
import { bunny } from "laravel-vite-plugin/fonts";
import tailwindcss from "@tailwindcss/vite";
import path from "node:path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            fonts: [
                bunny("Instrument Sans", {
                    weights: [400, 500, 600],
                }),
            ],
        }),

        tailwindcss(),

        createSvgIconsPlugin({
            iconDirs: [path.resolve(process.cwd(), "resources/icons")],
            symbolId: "icon-[name]",
            inject: "body",
            customDomId: "__svg__icons__dom__",
        }),
    ],

    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
        host: "0.0.0.0",
        port: 8001,
        strictPort: true,
        cors: true,
        hmr: {
            host: "10.240.32.180",
        },
    },
});
