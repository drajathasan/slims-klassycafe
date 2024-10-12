<?php
use SLiMS\Theme\View as Core;

class View extends Core
{
    protected static array $globalVariable = [];

    public static function registerGlobalVariable(string $key, $value)
    {
        self::$globalVariable[$key] = $value;
    }

    public static function registerGlobalVariables(array $variables)
    {
        self::$globalVariable = array_merge(self::$globalVariable, $variables);
    }

    public static function getGlobalVariable()
    {
        return self::$globalVariable;
    }
}
