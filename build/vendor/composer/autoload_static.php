<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita80df4942d4ccb76cb3b5cc5c6d79458
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SMTP2GOWPPlugin\\SMTP2GO\\' => 24,
            'SMTP2GOWPPlugin\\Psr\\Http\\Message\\' => 33,
            'SMTP2GOWPPlugin\\Psr\\Http\\Client\\' => 32,
            'SMTP2GOWPPlugin\\GuzzleHttp\\Psr7\\' => 32,
            'SMTP2GOWPPlugin\\GuzzleHttp\\Promise\\' => 35,
            'SMTP2GOWPPlugin\\GuzzleHttp\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SMTP2GOWPPlugin\\SMTP2GO\\' => 
        array (
            0 => __DIR__ . '/..' . '/smtp2go-oss/smtp2go-php/src/SMTP2GO',
        ),
        'SMTP2GOWPPlugin\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'SMTP2GOWPPlugin\\Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'SMTP2GOWPPlugin\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'SMTP2GOWPPlugin\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'SMTP2GOWPPlugin\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita80df4942d4ccb76cb3b5cc5c6d79458::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita80df4942d4ccb76cb3b5cc5c6d79458::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita80df4942d4ccb76cb3b5cc5c6d79458::$classMap;

        }, null, ClassLoader::class);
    }
}
