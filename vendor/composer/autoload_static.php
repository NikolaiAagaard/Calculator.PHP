<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ea626ffb20e1eb99d8ea3f56f034ef3
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8ea626ffb20e1eb99d8ea3f56f034ef3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
