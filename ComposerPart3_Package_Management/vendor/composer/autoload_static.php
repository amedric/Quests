<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb24d1aa6e804d85e0f7a42a1c0ba1f1b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
        'A' => 
        array (
            'Andyr\\ComposerPart3\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
        'Andyr\\ComposerPart3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb24d1aa6e804d85e0f7a42a1c0ba1f1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb24d1aa6e804d85e0f7a42a1c0ba1f1b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb24d1aa6e804d85e0f7a42a1c0ba1f1b::$classMap;

        }, null, ClassLoader::class);
    }
}
