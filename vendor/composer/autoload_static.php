<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f7e5f00993d26025339a9d1454471f1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CleanPhp\\Invoicer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CleanPhp\\Invoicer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f7e5f00993d26025339a9d1454471f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f7e5f00993d26025339a9d1454471f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}