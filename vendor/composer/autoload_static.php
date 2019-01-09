<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a15906930f070af7d2b7f5b3ec2f2a
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1a15906930f070af7d2b7f5b3ec2f2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1a15906930f070af7d2b7f5b3ec2f2a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite1a15906930f070af7d2b7f5b3ec2f2a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
