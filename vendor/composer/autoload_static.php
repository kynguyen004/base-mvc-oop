<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5fe857eb6a404d3229cce22f070d059
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nguyenbaky\\Crud\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nguyenbaky\\Crud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5fe857eb6a404d3229cce22f070d059::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5fe857eb6a404d3229cce22f070d059::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5fe857eb6a404d3229cce22f070d059::$classMap;

        }, null, ClassLoader::class);
    }
}
