<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LaslesVPN</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="wrapper">
            @yield('header_block')
            <main class="main">

                @yield('intro_block')
                @yield('benefits_block')
                @yield('feature_block')
                @yield('plan_block')
                @yield('map_block')
                @yield('clients_block')
                @yield('customers_block')
                @yield('buttons_block')
                @yield('subscribe_block')



            </main>

        @yield('footer_block')
        </div>
        <script
            type="text/javascript"
            src="https://code.jquery.com/jquery-3.6.3.min.js"
        ></script>
        <script
            type="text/javascript"
            src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
        ></script>
        <script src="js/script.js"></script>
    </body>
</html>
