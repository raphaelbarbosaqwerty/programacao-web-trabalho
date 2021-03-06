<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ace37ff62bcac05146f8309b42ac466
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ace37ff62bcac05146f8309b42ac466::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ace37ff62bcac05146f8309b42ac466::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ace37ff62bcac05146f8309b42ac466::$classMap;

        }, null, ClassLoader::class);
    }
}
