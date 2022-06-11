<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1edf342a860448a8ac208932067759ea
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Db\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Db\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1edf342a860448a8ac208932067759ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1edf342a860448a8ac208932067759ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1edf342a860448a8ac208932067759ea::$classMap;

        }, null, ClassLoader::class);
    }
}