<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa9f5b78e5a2d17f70451128fe11b923
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa9f5b78e5a2d17f70451128fe11b923::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa9f5b78e5a2d17f70451128fe11b923::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa9f5b78e5a2d17f70451128fe11b923::$classMap;

        }, null, ClassLoader::class);
    }
}