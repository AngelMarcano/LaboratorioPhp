<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita03a948e6021c8fe55f91fcb3ce97a70
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita03a948e6021c8fe55f91fcb3ce97a70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita03a948e6021c8fe55f91fcb3ce97a70::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
