import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import basicSsl from '@vitejs/plugin-basic-ssl';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        basicSsl(), // Generate SSL certificate for Vite
    ],
    server: {
        host: 'colegio-kilamba.test', // Match the Laragon domain
        https: true,
        hmr: {
            host: 'colegio-kilamba.test',
            protocol: 'wss', // 'wss' is a WebSocket secure for HTTPS
        },
    },
});
