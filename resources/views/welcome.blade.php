<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Xdebug</title>
    <meta name="description" content="Learn Xdebug, the PHP debugger, quickly and easily!">
    <meta name="author" content="Matt Stauffer">

    <meta property="og:site_name" content="Learn Xdebug">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="Learn Xdebug">
    <meta property="og:description" content="Learn Xdebug, the PHP debugger, quickly and easily!">
    <meta property="og:url" content="https://learnxdebug.com/">
    <meta property="og:image:height" content="630">
    <meta property="og:image:width" content="1200">
    <meta property="og:image" content="https://learnxdebug.com/social.png">

    <meta name="twitter:creator" content="@stauffermatt">
    <meta name="twitter:title" content="Learn Xdebug">
    <meta name="twitter:description" content="Learn Xdebug, the PHP debugger, quickly and easily!">
    <meta name="twitter:image" content="https://learnxdebug.com/social.png">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <style>
        .nunito {
            font-family: 'Nunito', sans-serif;
        }

        ::selection {
            background: #e9d8fd;
            color: #202684;
        }

        a:not(.nav) {
            background: linear-gradient(to right, #5A67D8, #5A67D8);
            background-repeat: repeat-x;
            background-size: 100% 2px;
            background-position: 0 95%;
            font-weight: bold;
            padding: 2px;
            text-decoration: none;
            transition: all 150ms ease-in-out;
        }

            a:hover {
                text-decoration: underline;
            }

            a:not(.nav):hover {
                background: linear-gradient(to right, #9f7aea, #e9d8fd);
                background-repeat: repeat-x;
                background-size: 100% 2px;
                background-position: 50% 95%;
                color: #b794f4;
                font-weight: bold;
                padding-bottom: 2px;
                text-decoration: none;
                transition: color 150ms ease-in-out;
            }

            a:focus {
                background: #e9d8fd;
                outline: none;
            }
    </style>

</head>

<body class="bg-gray-100 font-sans nunito text-gray-700 js-light-mode">
    <div class="p-6 sm:p-10 md:p-16 flex flex-wrap">
        <div class="w-full md:w-1/2 md:pr-32 order-3 md:order-1">
            <div class="max-w-md md:float-right md:text-right tracking-tight md:sticky md:top-0 ">
                <p class="font-bold my-2 md:my-12">Sections</p>

                <ul>
                    <li class="mb-3"><a href="#different-configurations" class="nav">Different configurations</a></li>
                    <li class="mb-3"><a href="#videos" class="nav">Videos</a></li>
                    <li class="mb-3"><a href="#live-streams" class="nav">Live Streams</a></li>
                    <li class="mb-3"><a href="#articles" class="nav">Articles</a></li>
                    <li class="mb-3"><a href="#what-is-xdebug" class="nav">What is Xdebug?</a></li>
                    <li class="mb-3"><a href="#who-made-this-site" class="nav">Who made this site?</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full md:w-1/2 order-1 md:order-2">
            <div class="max-w-md tracking-tight">
                <h1 class="font-bold text-4xl mb-6">Learn Xdebug</h1>

                <p class="mb-4">Welcome to "Learn Xdebug!" The Xdebug docs are in limbo as Derick prepares for the release of Xdebug 3 in December, so here are some easy options for you to learn Xdebug.</p>

                <p class="mb-4">The goal here is for it to be easy for you to learn Xdebug, and also for us to collect and standardize learning materials for Derick to use for building the new docs.</p>

                <h2 class="font-bold text-lg md:text-2xl mb-2 mt-10 md:mt-6" id="different-configurations">Different Configurations</h2>
                <ul class="list-disc ml-6">
                    <li class="mb-2"><a href="https://nicoverbruggen.be/archives/xdebug-with-valet-and-phpstorm">macOS, Laravel Valet, and PHPStorm</a></li>
                    <li class="mb-2"><a href="https://tighten.co/blog/debugging-configure-xdebug-and-laravel-homestead-and-vs-code-and-phpunit/">Laravel Homestead, VS Code</a></li>
                </ul>

                <h2 class="font-bold text-lg md:text-2xl mb-2 mt-10 md:mt-6" id="videos">Videos</h2>
                <ul class="list-disc ml-6">
                    <li class="mb-2"><a href="https://www.youtube.com/watch?v=fVXYW3thKCI">Jose Soto: Debugging Visual Studio Code and Xdebug Setup for PHP</a></li>
                    <li class="mb-2"><a href="https://www.youtube.com/watch?v=SlluEqL0oOI">Gary Hockin: Step into Debugging</a></li>
                    <li class="mb-2"><a href="https://www.youtube.com/watch?v=vEaXuCYQc3I">Jose Soto: The Easiest Way to get Xdebug on a Fresh macOS Install</a></li>
                    <li class="mb-2"><a href="https://www.youtube.com/watch?v=1Z9OoQtB6mw">Jose Soto: Step Debug PHP Scripts using Xdebug in Vim</a></li>
                </ul>

                <h2 class="font-bold text-lg md:text-2xl mb-2 mt-10 md:mt-6" id="live-streams">Live Streams</h2>
                <ul class="list-disc ml-6">
                    <li class="mb-2"><a href="https://www.youtube.com/watch?v=iloCjuqMdKU">Matt &amp; Derick: installing Xdebug on macOS and connecting it with VS Code running on Laravel Valet</a></li>
                    <li class="mb-2"><a href="https://www.twitch.tv/videos/634382280">Gary Hockin and Derick: talking PHP 8 and Xdebug</a></li>
                    <li class="mb-2"><a href="https://www.twitch.tv/videos/666848345">Gary Hockin and Derick: Xdebug Clinic with Derick Rethans ~ Adding Xdebug to different developer environments</a></li>
                </ul>

                <h2 class="font-bold text-lg md:text-2xl mb-2 mt-10 md:mt-6" id="articles">Articles</h2>
                <ul class="list-disc ml-6">
                    <li class="mb-2"><a href="https://nicoverbruggen.be/archives/xdebug-with-valet-and-phpstorm">Xdebug with Laravel Valet and PhpStorm</a></li>
                    <li class="mb-2"><a href="https://42coders.com/how-to-debug-php-cli-artisan-commands-or-unit-tests/">How to debug php cli – artisan commands or unit tests</a> (Laravel, Homestead, and PHPStorm)</li>
                    <li class="mb-2"><a href="https://tighten.co/blog/configure-vscode-to-debug-phpunit-tests-with-xdebug/">Debugging: Configure VS Code + XDebug + PHPUnit</a> (old macOS installation instructions!)</li>
                    <li class="mb-2"><a href="https://tighten.co/blog/debugging-configure-xdebug-and-laravel-homestead-and-vs-code-and-phpunit/">Debugging: Configure Xdebug + Laravel Homestead + VS Code + PHPUnit</a></li>
                    <li class="mb-2"><a href="https://jump24.co.uk/journal/turbocharged-php-development-with-xdebug-docker-and-phpstorm/">Turbocharged PHP Development with Xdebug, Docker & PHPStorm</a></li>
                    <li class="mb-2"><a href="https://dev.to/jump24/turbocharged-php-development-with-xdebug-docker-phpstorm-1n6c">Debugging: Long form setup of Xdebug, PhpStorm, and Docker on OSX</a></li>
                </ul>
            </div>
        </div>

        <div class="w-full md:w-1/2 md:pr-32 pt-12 md:pt-0 md:sticky md:bottom-0 order-4 md:order-3">
            <div class="max-w-md md:float-right md:text-right tracking-tight md:mb-16">
                <p class="font-bold my-2 md:mt-12 md:mb-6">Links</p>

                <ul>
                    <li><a href="https://github.com/tightenco/learn-xdebug" class="nav">This site on GitHub</a></li>
                    <li><a href="https://twitter.com/derickr" class="nav">Derick on Twitter</a></li>
                    <li><a href="https://twitter.com/stauffermatt" class="nav">Matt on Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="w-full md:w-1/2 order-2 md:order-4 mt-8 md:mt-16">
            <div class="max-w-md tracking-tight">
                <h2 class="font-bold my-4 text-xl" id="what-is-xdebug">What is Xdebug?</h2>

                <p class="mb-8"><a href="http://xdebug.org/">Xdebug</a> is a PHP extension that adds a step debugger, a profiler, PHPUnit code coverage; adds stack traces for Notices, Warnings, Errors, and Exceptions; and upgrades <code>var_dump()</code>. It's created and supported by <a href="https://twitter.com/derickr">Derick Rethans</a>.</p>

                <h2 class="font-bold my-4 text-xl" id="who-made-this-site">Who made this site?</h2>

                <p class="mb-8"><a href="https://twitter.com/stauffermatt">Matt Stauffer</a>, from <a href="https://tighten.co/">Tighten</a>, after streaming with Derick to learn about Xdebug.</p>
            </div>
            </div>
        </div>

    </div>

    <!-- Light/dark mode -->
    <div class="absolute top-0 right-0 h-12 w-18 p-4">
        <button class="js-change-theme focus:outline-none">🌙</button>
    </div>

    <script>
        // Toggle dark/light mode
        const toggle = document.querySelector('.js-change-theme');
        const body = document.querySelector('body');

        toggle.addEventListener('click', () => {
            if (body.classList.contains('js-light-mode')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('js-light-mode');
                body.classList.add('js-dark-mode');
                body.classList.remove('text-gray-700');
                body.classList.add('text-gray-300');
                body.classList.remove('bg-gray-100');
                body.classList.add('bg-gray-900');
            } else {
                toggle.innerHTML = "🌙";
                body.classList.remove('js-dark-mode');
                body.classList.add('js-light-mode');
                body.classList.remove('text-gray-300');
                body.classList.add('text-gray-700');
                body.classList.remove('bg-gray-900');
                body.classList.add('bg-gray-100');
            }
        });
    </script>
</body>
</html>
