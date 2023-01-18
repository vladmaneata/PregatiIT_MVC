<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit106511f2e528f7f7a4613861fbfa4d39
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit106511f2e528f7f7a4613861fbfa4d39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit106511f2e528f7f7a4613861fbfa4d39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit106511f2e528f7f7a4613861fbfa4d39::$classMap;

        }, null, ClassLoader::class);
    }
}