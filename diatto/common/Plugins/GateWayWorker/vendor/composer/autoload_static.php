<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4e34532a1d845b06a4253c44ea489ec
{
    public static $prefixLengthsPsr4 = array(
        'W' =>
            array(
                'Workerman\\' => 10,
            ),
        'G' =>
            array(
                'GatewayWorker\\' => 14,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'Workerman\\' =>
            array(
                0 => __DIR__ . '/..' . '/workerman/workerman',
            ),
        'GatewayWorker\\' =>
            array(
                0 => __DIR__ . '/..' . '/workerman/gateway-worker/src',
            ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4e34532a1d845b06a4253c44ea489ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4e34532a1d845b06a4253c44ea489ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
