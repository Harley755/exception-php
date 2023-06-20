<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd6ce5ed972495bd389166b36cc3eacf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
            'Class\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'Class\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd6ce5ed972495bd389166b36cc3eacf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd6ce5ed972495bd389166b36cc3eacf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd6ce5ed972495bd389166b36cc3eacf::$classMap;

        }, null, ClassLoader::class);
    }
}