<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb4de448d2a358c8f906c009eff687f7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb4de448d2a358c8f906c009eff687f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb4de448d2a358c8f906c009eff687f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb4de448d2a358c8f906c009eff687f7::$classMap;

        }, null, ClassLoader::class);
    }
}
