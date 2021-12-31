<?php

define('ESCAPE_PATTERN',  '/(and|or).*(union|select|insert|update|delete|from|where|limit|create|drop).*/i');
define('ESCAPE_REPLACE',  '');

function sql_escape_string($str)
{
    if(defined('ESCAPE_PATTERN') && defined('ESCAPE_REPLACE')) {
        $pattern = ESCAPE_PATTERN;
        $replace = ESCAPE_REPLACE;
        
        if($pattern)
            $str = preg_replace($pattern, $replace, $str);
    }
    
    $str = call_user_func('addslashes', $str);
    
    return $str;
}

function get_real_client_ip()
{
    $real_ip = $_SERVER['REMOTE_ADDR'];
    
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $_SERVER['HTTP_X_FORWARDED_FOR']) ){
        $real_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    
    return preg_replace('/[^0-9.]/', '', $real_ip);
}