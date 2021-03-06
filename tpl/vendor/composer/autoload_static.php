<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0b9018004cf8babcc0813e5eba17a07
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

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0b9018004cf8babcc0813e5eba17a07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0b9018004cf8babcc0813e5eba17a07::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc0b9018004cf8babcc0813e5eba17a07::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
