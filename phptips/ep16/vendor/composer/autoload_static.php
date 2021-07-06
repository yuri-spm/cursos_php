<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d0dbbff64a27e9a91e52428f99846d7
{
    public static $files = array (
        '84890b0b3f66bf7468d396cea9c018f0' => __DIR__ . '/../..' . '/source/Minify.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d0dbbff64a27e9a91e52428f99846d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d0dbbff64a27e9a91e52428f99846d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d0dbbff64a27e9a91e52428f99846d7::$classMap;

        }, null, ClassLoader::class);
    }
}