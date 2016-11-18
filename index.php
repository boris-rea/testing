<?php
namespace DesignPatterns\Creational\Singleton;
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;
    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$toto = $tata ?? 'ok';
=======
>>>>>>> index
=======
	$toto = $tata ?? 'ok';
>>>>>>> php7
=======
	$toto = $tata ?? 'ok';
>>>>>>> 8361bdded3290d9f41ce599a7db9fd9daaf7277b
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }
    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }
    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }
    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}
