<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc5e94ce2b9994cf36abb7f9d744c84b7
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

        spl_autoload_register(array('ComposerAutoloaderInitc5e94ce2b9994cf36abb7f9d744c84b7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc5e94ce2b9994cf36abb7f9d744c84b7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc5e94ce2b9994cf36abb7f9d744c84b7::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
