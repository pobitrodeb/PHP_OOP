<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit681d59ae98b6ae563ef56e8b014b1e2e
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

        spl_autoload_register(array('ComposerAutoloaderInit681d59ae98b6ae563ef56e8b014b1e2e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit681d59ae98b6ae563ef56e8b014b1e2e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit681d59ae98b6ae563ef56e8b014b1e2e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
