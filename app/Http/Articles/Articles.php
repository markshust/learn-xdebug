<?php

namespace App\Http\Articles;

class Articles
{
    const CATEGORY_ARTICLES = 'Articles';
    const CATEGORY_DIFFERENT = 'Different Configurations';
    const CATEGORY_STREAM = 'Live Streams';
    const CATEGORY_VIDEOS = 'Videos';

    const OS_MAC = 'macos';
    const OS_WINDOWS = 'windows';

    const HOSTING_HOMESTEAD = 'homestead';
    const HOSTING_VALET = 'valet';

    const IDE_PHPSTORM = 'phpstorm';
    const IDE_VSCODE = 'vscode';

    public $links = [
        [
            'category'  => self::CATEGORY_DIFFERENT,
            'os'        => self::OS_MAC,
            'hosting'   => self::HOSTING_VALET,
            'ide'       => self::IDE_PHPSTORM,
            'title'     => 'macOS, Laravel Valet, and PHPStorm',
            'url'       => 'https://nicoverbruggen.be/archives/xdebug-with-valet-and-phpstorm',
        ],
        [
            'category'  => self::CATEGORY_DIFFERENT,
            'os'        => self::OS_MAC,
            'hosting'   => self::HOSTING_HOMESTEAD,
            'ide'       => self::IDE_VSCODE,
            'title'     => 'Laravel Homestead, VS Code',
            'url'       => 'https://tighten.co/blog/debugging-configure-xdebug-and-laravel-homestead-and-vs-code-and-phpunit',
        ],
        [
            'category'  => self::CATEGORY_VIDEOS,
            'os'        => self::OS_MAC,
            'hosting'   => '',
            'ide'       => self::IDE_VSCODE,
            'title'     => 'Jose Soto: Debugging Visual Studio Code and Xdebug Setup for PHP',
            'url'       => 'https://www.youtube.com/watch?v=fVXYW3thKCI',
        ],
        [
            'category'  => self::CATEGORY_VIDEOS,
            'os'        => '',
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Gary Hockin: Step into Debugging',
            'url'       => 'https://www.youtube.com/watch?v=SlluEqL0oOI',
        ],
        [
            'category'  => self::CATEGORY_VIDEOS,
            'os'        => self::OS_MAC,
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Jose Soto: The Easiest Way to get Xdebug on a Fresh macOS Install',
            'url'       => 'https://www.youtube.com/watch?v=vEaXuCYQc3I',
        ],
        [
            'category'  => self::CATEGORY_VIDEOS,
            'os'        => '',
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Jose Soto: Step Debug PHP Scripts using Xdebug in Vim',
            'url'       => 'https://www.youtube.com/watch?v=1Z9OoQtB6mw',
        ],
        [
            'category'  => self::CATEGORY_STREAM,
            'os'        => self::OS_MAC,
            'hosting'   => self::HOSTING_VALET,
            'ide'       => self::IDE_VSCODE,
            'title'     => 'Matt &amp; Derick: installing Xdebug on macOS and connecting it with VS Code running on Laravel Valet',
            'url'       => 'https://www.youtube.com/watch?v=iloCjuqMdKU',
        ],
        [
            'category'  => self::CATEGORY_STREAM,
            'os'        => '',
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Gary Hockin and Derick: talking PHP 8 and Xdebug',
            'url'       => 'https://www.twitch.tv/videos/634382280',
        ],
        [
            'category'  => self::CATEGORY_STREAM,
            'os'        => '',
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Gary Hockin and Derick: Xdebug Clinic with Derick Rethans ~ Adding Xdebug to different developer environments',
            'url'       => 'https://www.twitch.tv/videos/666848345',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => self::OS_MAC,
            'hosting'   => self::HOSTING_VALET,
            'ide'       => self::IDE_PHPSTORM,
            'title'     => 'Xdebug with Laravel Valet and PhpStorm',
            'url'       => 'https://nicoverbruggen.be/archives/xdebug-with-valet-and-phpstorm',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => '',
            'hosting'   => '',
            'ide'       => self::IDE_PHPSTORM,
            'title'     => 'How to debug php cli – artisan commands or unit tests',
            'url'       => 'https://42coders.com/how-to-debug-php-cli-artisan-commands-or-unit-tests',
            'extra'     => 'Laravel, Homestead, and PHPStorm',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => '',
            'hosting'   => '',
            'ide'       => '',
            'title'     => 'Debugging: Configure VS Code + XDebug + PHPUnit',
            'url'       => 'https://tighten.co/blog/configure-vscode-to-debug-phpunit-tests-with-xdebug/',
            'extra'     => 'Old macOS installation instructions!',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => '',
            'hosting'   => self::HOSTING_HOMESTEAD,
            'ide'       => self::IDE_VSCODE,
            'title'     => 'Debugging: Configure Xdebug + Laravel Homestead + VS Code + PHPUnit',
            'url'       => 'https://tighten.co/blog/debugging-configure-xdebug-and-laravel-homestead-and-vs-code-and-phpunit/',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => '',
            'hosting'   => 'docker',
            'ide'       => self::IDE_PHPSTORM,
            'title'     => 'Turbocharged PHP Development with Xdebug, Docker & PHPStorm',
            'url'       => 'https://jump24.co.uk/journal/turbocharged-php-development-with-xdebug-docker-and-phpstorm/',
        ],
        [
            'category'  => self::CATEGORY_ARTICLES,
            'os'        => '',
            'hosting'   => 'docker',
            'ide'       => '',
            'title'     => 'Faster environment with xDebug and Docker',
            'url'       => 'http://blog.chorip.am/articles/faster-environment-with-xDebug-and-Docker',
        ],
    ];

    public function all($os, $hosting, $ide)
    {
        $this->links = collect($this->links);

        if ($os) {
            $this->links = $this->links->filter(fn ($link) => $link['os'] == $os);
        }

        if ($hosting) {
            $this->links = $this->links->filter(fn ($link) => $link['hosting'] == $hosting);
        }

        if ($ide) {
            $this->links = $this->links->filter(fn ($link) => $link['ide'] == $ide);
        }

        return collect($this->links)->groupBy('category')->toArray();
    }
}
