import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/bootstrap-css/sass/app.scss", // Point to SCSS file
                "themes/bootstrap-css/js/app.js",
            ],
            buildDirectory: "bootstrap-css",
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "themes/bootstrap-css/js"), // Use path.resolve for consistency
        },
    },
});
