<?php

declare(strict_types=1);
namespace Includes;

class Deactivate{
    
    // Deactivate the plugin
    public static function deactivate(){
        flush_rewrite_rules();
    }
}


