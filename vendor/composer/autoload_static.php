<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4c3d6a26f1e3e84f9e9e9c8de5463a7
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nguyenhoaky\\Gd2Php2\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nguyenhoaky\\Gd2Php2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4c3d6a26f1e3e84f9e9e9c8de5463a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4c3d6a26f1e3e84f9e9e9c8de5463a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4c3d6a26f1e3e84f9e9e9c8de5463a7::$classMap;

        }, null, ClassLoader::class);
    }
}
