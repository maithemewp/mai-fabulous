<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6ec2ec3c227cc58ef9e8e1689d6364f
{
    public static $files = array (
        '20716b7470cda7cd561f4000f723e024' => __DIR__ . '/..' . '/maithemewp/mai-installer/mai-installer.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita6ec2ec3c227cc58ef9e8e1689d6364f::$classMap;

        }, null, ClassLoader::class);
    }
}
