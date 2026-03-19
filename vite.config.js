import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        cors: {
            origin: '*', // Permite todas as origens (ideal para desenvolvimento local)
        },
        // Se estiver a usar HTTPS no Laragon, adicione isto:
        https: {
            key: 'C:/laragon/etc/ssl/laragon.key',
            cert: 'C:/laragon/etc/ssl/laragon.crt',
        },
        host: 'colegio-kilamba.test',
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
