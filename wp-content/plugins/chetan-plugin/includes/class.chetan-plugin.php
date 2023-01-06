<?php
class ChetanPlugin {
    private static $post_name = "Book";

    public static function activate(){
        self::custom_post_type();
        flush_rewrite_rules();
    }

    public static function deactivate(){
        flush_rewrite_rules();
    }

    
    public static function custom_post_type(){
        $args = [
            "labels" => [
                "name" =>self::$post_name,
                "singular_name" => self::$post_name,
                "add_new" => "Add new ".self::$post_name,
                "add_new_item" => "Add new ".self::$post_name,
            ],
            "public"=>true
        ];
        register_post_type('Book',$args);
    }
}