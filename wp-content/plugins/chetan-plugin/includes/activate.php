<?php

declare(strict_types=1);

namespace Includes;
use Includes\Config;

class Activate
{   
    // Initilize Post name
    private static $post_name = "Book";


    public static function activate()
    {
        // Call init hooks function of config class
        Config::init_hooks();

        // Call Custom Post type function
        self::custom_post_type();
        
        // Refresh database cache
        flush_rewrite_rules();
    }

    /**
     * Add custom theme menu items
     * @return void
     */
    public static function custom_post_type()
    {
        $args = [
            "labels" => [
                "name" => self::$post_name,
                "singular_name" => self::$post_name,
                "add_new" => "Add new " . self::$post_name,
                "add_new_item" => "Add new " . self::$post_name,
            ],
            "public" => true
        ];
        register_post_type('Book', $args);
    }
}
