import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/views/styles.css', 'resources/views/app.js', 'resources/views/admin/app.js'],
            refresh: true,
        }),
    ],
});
