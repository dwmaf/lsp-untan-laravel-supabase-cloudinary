import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import DataTable from 'datatables.net-dt';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
            'resources/js/app.js', 
            'resources/css/style.css',
            'resources/js/scripts.js', 
            'resources/js/datatables-simple-demo.js'
            ],
            refresh: true,
        }),
    ],
});
