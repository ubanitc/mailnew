<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d2291d486b695244f75221e61af8c54
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d2291d486b695244f75221e61af8c54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d2291d486b695244f75221e61af8c54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d2291d486b695244f75221e61af8c54::$classMap;

        }, null, ClassLoader::class);
    }
}
