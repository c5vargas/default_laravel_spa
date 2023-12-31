import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/main.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources/js'),
        },
        extensions: ['.js', '.ts', '.jsx', '.tsx', '.json', '.vue', '.mjs']
    }
});
