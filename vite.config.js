import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import sassGlobImports from 'vite-plugin-sass-glob-import';
import autoprefixer from 'autoprefixer';
import viteImagemin from 'vite-plugin-imagemin';
import path from 'path';

export default defineConfig({
    base: '/icebreaker/',
    plugins: [
        laravel({
            input: ['resources/sass/style.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: true
                },
            },
        }),
        sassGlobImports({}), // sassファイル一括import
        viteImagemin({ // 画像自動圧縮
            gifsicle: {
                optimizationLevel: 7,
                interlaced: false,
            },
            optipng: {
                optimizationLevel: 7,
            },
            mozjpeg: {
                quality: 20,
            },
            pngquant: {
                quality: [0.8, 0.9],
                speed: 4,
            },
            svgo: {
                plugins: [
                    {
                        name: 'removeViewBox',
                    },
                    {
                        name: 'removeEmptyAttrs',
                        active: false,
                    },
                ],
            },
        }),
    ],
    css: {
        postcss: {
            plugins: [
                autoprefixer({}) // autoprefixer
            ],
        }
    },
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue.es.js'),
        }
    }
});
