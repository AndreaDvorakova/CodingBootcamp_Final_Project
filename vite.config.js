import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/home-page.scss",
                "resources/css/confirmation.scss",
                "resources/css/carousel.scss",
                "resources/js/app.js",
                "resources/js/drugs.jsx",
                "resources/js/carousel_entry.jsx",
                "resources/js/details.jsx",
            ],
            refresh: true,
        }),
        react(),
    ],
});
