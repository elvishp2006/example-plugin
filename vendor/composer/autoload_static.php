<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68386ef24f87f40e8ac606675cc518ae
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Example\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Example\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68386ef24f87f40e8ac606675cc518ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68386ef24f87f40e8ac606675cc518ae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}