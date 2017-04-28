const { mix } = require('laravel-mix');

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts/');
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');
mix.copy('node_modules/font-awesome/fonts', 'public/fonts/');
mix.scripts(['node_modules/jquery/dist/jquery.min.js',
             'node_modules/bootstrap/dist/js/bootstrap.min.js',
             'node_modules/angular/angular.min.js'],
             'public/js/all.js');