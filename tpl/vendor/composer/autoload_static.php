<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit167e71e549393b81c90ba0e9ed28a609
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit167e71e549393b81c90ba0e9ed28a609::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
