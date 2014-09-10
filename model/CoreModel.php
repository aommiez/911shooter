<?php

class CoreModel {
    protected static $cn, $setting;
    public static function getSetting(){
        if(is_null(self::$setting)){
            self::$setting = include(dirname(__FILE__).'/setting.php');
        }
        return self::$setting;
    }

    public static function getCn(){
        if(is_null(self::$cn)){
            $setting = self::getSetting();
            $db_setting = $setting['db'];

            $db_host = $db_setting['host'];
            $db_name = $db_setting['database'];
            $db_user = $db_setting['username'];
            $db_pass = $db_setting['password'];

            self::$cn = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
        }
        return self::$cn;
    }

    public static function djLogin ($user,$pass) {
        $cn = self::getCn();
        $pass = md5($pass);
        $sql = "SELECT COUNT(id) FROM dj Where user = '{$user}' AND pass = '{$pass}'";
        return $cn->query($sql);
    }

    public static function getDjProfileById ($id) {
        $cn = self::getCn();
        $sql = "SELECT * FROM dj Where id = '{$id}'";
        return $cn->query($sql);
    }
}