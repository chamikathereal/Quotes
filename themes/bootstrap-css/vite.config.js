import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";




export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes\bootstrap-css\",
                "themes\bootstrap-css\js/app.js"
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
            '@': '/themes\bootstrap-css\js',
            
        }
    },
    
});
