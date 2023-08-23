<?php
//Silence is golden


define('ABSPATH') or die('Hey, you can\t access this file, you silly human');

class LssPlugin
{
    //methods
    function activate(){
        
    }
    function deactivate(){
        
    }
    function uninstall(){
        
    }
}
if (class_exists('lssPlugin'))
{
    $lssPlugin = new LssPlugin();
}

register_activation_hook(__FILE__,  array($lssPlugin, 'activate'));

register_deactivation_hook(__FILE__,  array($lssPlugin, 'deactivate'));