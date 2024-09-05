import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/js/scripts.js','resources/css/app.css', 'resources/js/app.js' ,'public/css/styles.css',,
                'resources/assets/demo/chart-area-demo.js','resources/assets/demo/chart-bar-demo.js',
                'resources/assets/demo/chart-pie-demo.js','resources/assets/demo/datatables-demo.js',
                'public/js/datatables-simple-demo.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            overlay: false, 
        },
    },
});
