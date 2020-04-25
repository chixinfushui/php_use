<?php
/**
 * Created by PhpStorm.
 * User: cetc28
 * Date: 2020/4/25
 * Time: 15:29
 */

header('Content-type:text/html;charset=utf-8');
function my_error($errno, $errstr, $serrfile, $errline)
{
    if (!(error_reporting() & $errno)) {
        return false;
    }
    switch ($errno) {
        case E_ERROR:
        case E_USER_ERROR:
            echo 'fatal error in file' . $serrfile . 'on line' . $errline . '<br>';
            echo 'error info : ' . $errstr;
            break;
        case E_WARNING:
        case E_USER_WARNING:
            echo 'fatal error in file' . $serrfile . 'on line' . $errline . '<br>';
            echo 'error info : ' . $errstr;
            break;
        case E_NOTICE:
        case E_USER_NOTICE:
            echo 'fatal error in file' . $serrfile . 'on line' . $errline . '<br>';
            echo 'error info : ' . $errstr;
            break;
        default:
            break;
    }
}

echo $a;
 
echo '<br>';
set_error_handler('my_error');
echo $a;
