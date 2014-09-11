<?php

abstract class Singleton { 

    protected function __construct() { 
    } 

    final public static function getInstance() { 
        static $aoInstance = array(); 

        $calledClassName = get_called_class(); 

        if ( !isset($aoInstance[$calledClassName]) ) { 
            $aoInstance[$calledClassName] = new $calledClassName(); 
        } 

        return $aoInstance[$calledClassName]; 
    } 

    final private function __clone()    { /* ... @return Singleton */ }
    final private function __wakeup()   { /* ... @return Singleton */ }
}