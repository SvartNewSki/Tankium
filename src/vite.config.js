import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/css/item.css', 
                'resources/css/main.css',
                'resources/css/header.css', 
                'resources/css/footer.css', 
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});