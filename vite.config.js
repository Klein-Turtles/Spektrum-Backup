import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fg from 'fast-glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/admin.scss',
                'resources/js/admin.js',
                ...fg.sync('resources/sass/pages/**/*.scss'),
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
          scss: {
            silenceDeprecations: ['mixed-decls', 'color-functions', 'global-builtin', 'import']
          },
        }
      },
});
