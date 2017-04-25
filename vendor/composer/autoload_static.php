<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit197e2a05ac5239bb684f05d735576ebc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit197e2a05ac5239bb684f05d735576ebc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit197e2a05ac5239bb684f05d735576ebc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
