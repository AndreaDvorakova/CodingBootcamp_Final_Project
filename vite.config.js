import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/home-page.scss",
                "resources/js/app.js",
                "resources/js/drugs.jsx",
                "resources/js/register.js",
                "resources/css/resources.css",
            ],
            refresh: true,
        }),
        react(),
    ],
});
