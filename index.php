<?php
//Silence is golden


define('ABSPATH') or die('Hey, you can\t access this file, you silly human');

class LssPlugin
{
    function __construct(){
        add_action('init', array($this, 'custom_post_type'));
    }
    function activate(){

    }
    function deactivate(){
        
    }
    function uninstall(){
        
    }
    function custom_post_type(){
        register_post_type('course', ['online'=>true, 'label'=>'Couses']);
    }
}
if (class_exists('lssPlugin'))
{
    $lssPlugin = new LssPlugin();
}

register_activation_hook(__FILE__,  array($lssPlugin, 'activate'));

register_deactivation_hook(__FILE__,  array($lssPlugin, 'deactivate'));