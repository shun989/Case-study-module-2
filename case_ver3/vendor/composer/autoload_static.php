<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d0234d1a9a6199b79694b9dbd042d2c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d0234d1a9a6199b79694b9dbd042d2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d0234d1a9a6199b79694b9dbd042d2c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}