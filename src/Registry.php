<?php 

namespace Registry;

class Registry
{
    private static $_instances = array();

    /**
     * Prevents creating the 'Registry' instance
     *
     * @return void
     */
    public function __construct()
    {        
    }

    /**
     * Prevents cloning of the 'Registry' instance
     *
     * @return void
     */
    public function __clone()
    {        
    }

    /**
     * Prevents unserializing of the 'Registry' instance
     *
     * @return void
     */
    public function __wakeup()
    {
    }

    /**
     * Get class instance from storeroom
     *
     * @param string $key       Instance key
     * @param mixed $default    Default class instance
     * @return mixed
     */
    public static function get(string $key, $default = null)
    {
        if (isset(self::$_instances[$key])) {
            return self::$_instances[$key];
        }
        return $default;
    }
    
    /**
     * Assign class instance with key
     *
     * @param string $key       Instance key
     * @param mixed $instance   Instance
     * @return void
     */
    public static function set(string $key, mixed $instance = null)
    {
        self::$_instances[$key] = $instance;
    }

    /**
     * Remove instance from storeroom
     *
     * @param string $key   Instance jey
     * @return void
     */
    public static function erase(string $key)
    {
        unset(self::$_instances[$key]);
    }
}