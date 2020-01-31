var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/js/app.js')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning()
    .configureBabel(() => {}, {
        useBuiltIns: 'usage',
        corejs: 3
    })
    .enableSassLoader(function(sassOptions) {}, {
        resolveUrlLoader: false
    })
    .enablePostCssLoader((options) => {
        options.config = {
            path: 'config/postcss.config.js'
        };
    })
;

module.exports = Encore.getWebpackConfig();
