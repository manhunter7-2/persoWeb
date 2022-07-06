<?php
class autoloader{
    public static function register():void{
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($class_name): void {
        $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
        require __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR.$class_name.".php";
    }
}
