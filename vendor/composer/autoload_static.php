<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit40c46d322fbf12cb190c65f19476f55a
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit40c46d322fbf12cb190c65f19476f55a::$classMap;

        }, null, ClassLoader::class);
    }
}