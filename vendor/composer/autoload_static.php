<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5a58b4b7f487384f5aa3430775e76ba
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lev\\Bizandsoft02\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lev\\Bizandsoft02\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5a58b4b7f487384f5aa3430775e76ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5a58b4b7f487384f5aa3430775e76ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5a58b4b7f487384f5aa3430775e76ba::$classMap;

        }, null, ClassLoader::class);
    }
}
