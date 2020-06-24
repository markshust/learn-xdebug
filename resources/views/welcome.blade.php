<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Xdebug</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Stauffer">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <style>
        .quicksand {
            font-family: 'Nunito', sans-serif;
        }

        ::selection {
            background: #E9D8FD;
        color:#202684;

            /* WebKit/Blink Browsers */
        }

        ::-moz-selection {
            background: #E9D8FD;
        color:#202684;
            /* Gecko Browsers */
        }

        a:not(.nav) {
            font-weight: bold;
            text-decoration: none;
            padding: 2px;
            background: linear-gradient(to right, #5A67D8, #5A67D8);
            background-repeat: repeat-x;
            background-size: 100% 2px;
            background-position: 0 95%;
            -webkit-transition: all 150ms ease-in-out;
            -moz-transition: all 150ms ease-in-out;
            -ms-transition: all 150ms ease-in-out;
            -o-transition: all 150ms ease-in-out;
            transition: all 150ms ease-in-out;
        }

        a:hover {
            color: #B794F4;
            font-weight: bold;
            text-decoration: none;
            padding-bottom: 2px;
            background: linear-gradient(to right, #9F7AEA, #E9D8FD);
            background-repeat: repeat-x;
            background-size: 100% 2px;
            background-position: 50% 95%;
            -webkit-transition: color 150ms ease-in-out;
            -moz-transition: color 150ms ease-in-out;
            -ms-transition: color 150ms ease-in-out;
            -o-transition: color 150ms ease-in-out;
            transition: color 150ms ease-in-out;
        }

        a:focus {
            outline: none;
            background: #E9D8FD;
        }
    </style>

</head>

<body class="bg-gray-100 text-gray-700 font-sans quicksand">

    <div class="p-6 sm:p-10 md:p-16 flex flex-wrap">

        <div class="w-full md:w-1/2 md:pr-32 order-3 /*order-3 md:order-1*/">
        <!--
            <div class="max-w-md md:float-right md:text-right leading-loose tracking-tight md:sticky md:top-0 ">
                <p class="font-bold my-4 md:my-12">Previous Posts</p>

                <ul class="flex flex-wrap justify-between flex-col">
                    <li><a href="#" class="nav">Previous blog posts links</a></li>
                    <li><a href="#" class="nav">A diam sollicitudin tempor id eue</a></li>
                    <li><a href="#" class="nav">Lectus vestibulum mattis ullamcorper velit sed ullamcorper</a></li>
                    <li><a href="#" class="nav">Pulvinar etiam non quam lacus suspendisse faucibus</a></li>
                </ul>
                <a href="#" class="normal font-bold hover:font-bold">more...</a>
            </div>
        -->
        </div>
        <div class="w-full md:w-1/2 order-1 md:order-2">
            <div class="max-w-md leading-loose tracking-tight">
                <h1 class="font-bold my-12">Learn Xdebug</h1>

                <ul>
                    <li><a href="https://nicoverbruggen.be/archives/xdebug-with-valet-and-phpstorm">Xdebug with Laravel Valet and PhpStorm</a></li>
                    <li><a href="https://t.co/se7ZPISkgW?amp=1">Matt &amp; Derick streaming</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full md:w-1/2 md:pr-32 pt-12 md:pt-0 md:sticky md:bottom-0 order-1 /*order-4 md:order-3*/">
            <div class="max-w-md md:float-right md:text-right leading-loose tracking-tight md:mb-16">
                <p class="font-bold my-4 md:my-12">Contribute</p>

                <ul class="flex flex-wrap justify-between flex-row md:flex-col">
                    <li><a href="https://github.com/tightenco/learn-xdebug class="nav mx-2 md:mx-0">Open Source on GitHub</a></li>
                </ul>
            </div>
        </div>
        <!--div class="w-full md:w-1/2 order-2 md:order-4">
            <div class="max-w-md leading-loose tracking-tight">
                <p class="font-bold my-4 md:my-12">About Me</p>

                <p class="mb-8">Arcu risus quis varius quam quisque id diam vel. Consectetur adipiscing elit ut aliquam purus sit amet. Nibh tortor id aliquet lectus proin nibh. </p>
            </div>
        </div-->

    </div>

    <!-- Pin to top right corner -->
    <div class="absolute top-0 right-0 h-12 w-18 p-4">
        <button class="js-change-theme focus:outline-none">🌙</button>
    </div>

    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->

    <script>
        //Toggle mode
        const toggle = document.querySelector('.js-change-theme');
        const body = document.querySelector('body');
        //const profile = document.getElementById('profile');

        toggle.addEventListener('click', () => {
            if (body.classList.contains('text-gray-700')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('text-gray-700');
                body.classList.add('text-gray-300');
                body.classList.remove('bg-gray-100');
                body.classList.add('bg-gray-900');
            } else {
                toggle.innerHTML = "🌙";
                body.classList.remove('text-gray-300');
                body.classList.add('text-gray-700');
                body.classList.remove('bg-gray-900');
                body.classList.add('bg-gray-100');

            }
        });
    </script>

</body>

</html>
