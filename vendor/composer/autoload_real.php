<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4c3d6a26f1e3e84f9e9e9c8de5463a7
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

        spl_autoload_register(array('ComposerAutoloaderInite4c3d6a26f1e3e84f9e9e9c8de5463a7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4c3d6a26f1e3e84f9e9e9c8de5463a7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4c3d6a26f1e3e84f9e9e9c8de5463a7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
