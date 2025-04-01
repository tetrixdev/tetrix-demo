import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    // This section is needed to make the node server accessible for the docker containers
    server: {
        host: '0.0.0.0', // Listen on all network interfaces
        hmr: {
            // Specify the public hostname or IP address for HMR connections
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**/*.blade.php',
                'app/**/*.php',
                'routes/**/*.php',
                'vendor/tetrix/tetrix/src/Views/*.blade.php',
                'vendor/tetrix/tetrix/src/Views/**/*.blade.php',
                'vendor/tetrix/tetrix/src/Components/*.php',
                'vendor/tetrix/tetrix/src/Components/**/*.php'
            ],
        }),
        tailwindcss(),
    ],
});
