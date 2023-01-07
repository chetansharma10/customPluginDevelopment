<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15d81be8ab08bad9e2c87b05ec6d14c1
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15d81be8ab08bad9e2c87b05ec6d14c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15d81be8ab08bad9e2c87b05ec6d14c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15d81be8ab08bad9e2c87b05ec6d14c1::$classMap;

        }, null, ClassLoader::class);
    }
}
