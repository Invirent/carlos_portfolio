import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});


{{ HTML::script('css/bootstrap.min.css'); }}
{{ HTML::script('css/font-awesome.min.css'); }}
{{ HTML::script('css/style.css'); }}