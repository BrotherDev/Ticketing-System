import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '192.168.3.223', // Bind to your local IP address
        port: 5173, // Ensure this port is available
        hmr: {
            host: '192.168.3.223', // Enable Hot Module Replacement (HMR) for your IP
        },
    },
});
