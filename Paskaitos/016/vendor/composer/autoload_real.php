<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit165ba99df15d27e0fa8c50e898e9e49b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit165ba99df15d27e0fa8c50e898e9e49b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit165ba99df15d27e0fa8c50e898e9e49b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit165ba99df15d27e0fa8c50e898e9e49b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
