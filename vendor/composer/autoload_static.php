<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90ffc5ab61d187781e6fedac71b76498
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'C' => 
        array (
            'ClientUpdateServer\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/unit',
        ),
        'ClientUpdateServer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ClientUpdateServer\\Response' => __DIR__ . '/../..' . '/src/Response.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90ffc5ab61d187781e6fedac71b76498::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90ffc5ab61d187781e6fedac71b76498::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90ffc5ab61d187781e6fedac71b76498::$classMap;

        }, null, ClassLoader::class);
    }
}