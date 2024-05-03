<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit78cbdf6cdc5bf0d84c9251a06ce0091d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit78cbdf6cdc5bf0d84c9251a06ce0091d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit78cbdf6cdc5bf0d84c9251a06ce0091d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit78cbdf6cdc5bf0d84c9251a06ce0091d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
