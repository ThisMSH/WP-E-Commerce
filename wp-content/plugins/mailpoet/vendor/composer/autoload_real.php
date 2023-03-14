<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInit22fbd4a7bccd583f35c4e3bc254daf9d
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInit22fbd4a7bccd583f35c4e3bc254daf9d', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInit22fbd4a7bccd583f35c4e3bc254daf9d', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInit22fbd4a7bccd583f35c4e3bc254daf9d::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInit22fbd4a7bccd583f35c4e3bc254daf9d::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequire22fbd4a7bccd583f35c4e3bc254daf9d($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequire22fbd4a7bccd583f35c4e3bc254daf9d($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
