let mix = require("laravel-mix");
mix.js("resources/js/script.js", "public/js")
    // .js("resources/js/slick.min.js", "public/js")
    .js("resources/js/quiz.js", "public/js")
    .sass("resources/sass/style.scss", "public/css")
    .sass("resources/sass/quiz.scss", "public/css");
