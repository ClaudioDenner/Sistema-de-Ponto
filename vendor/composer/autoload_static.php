<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3983891aaf014264ae91c3e4e087b077
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3983891aaf014264ae91c3e4e087b077::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3983891aaf014264ae91c3e4e087b077::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3983891aaf014264ae91c3e4e087b077::$classMap;

        }, null, ClassLoader::class);
    }
}
