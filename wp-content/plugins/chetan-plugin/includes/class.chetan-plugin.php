<?php
class ChetanPlugin
{
    private static $post_name = "Book";

    public static function activate()
    {
        self::init_hooks();
        self::custom_post_type();
        flush_rewrite_rules();
    }

    public static function deactivate()
    {
        flush_rewrite_rules();
    }

    public static function init_hooks()
    {
        add_action('admin_enqueue_scripts', [ChetanPlugin::class, 'add_admin_files']);
        add_action('admin_menu', [ChetanPlugin::class, 'add_plugin_menu_to_sidebar']);
        add_filter('plugin_action_links', [ChetanPlugin::class, 'add_link_to_plugin']);
    }

    public static function add_link_to_plugin($links)
    {
        $settings_links="<a href='?page=chetan_plugin'>Settings</a>";
        array_push($links,$settings_links);
        return $links;
    }

    public static function add_plugin_menu_to_sidebar()
    {
        add_menu_page("ChetanPlugin", "Chetan Plugin", "manage_options", "chetan_plugin", [ChetanPlugin::class,'add_page_to_plugin'], 'dashicons-format-status', 110);
    }

    public static function add_page_to_plugin(){
        require_once plugin_dir_path(__FILE__)."../" . "templates/template.chetan-plugin.php";
    }


    public static function readFiles($basePath, &$resultant)
    {
        $files = scandir($basePath);
        for ($i = 2; $i < count($files); $i++) {
            $value = $basePath . $files[$i];
            if (is_dir($value)) {
                // If the directory,then read further
                self::readFiles($value . '/', $resultant);
            } else {
                // If not the directory
                array_push($resultant, $value);
            }
        }
    }

    public static function get_files_paths($basePath):array{
        $resultant = array();
        self::readFiles($basePath, $resultant);
        return $resultant;
    }
    public static function add_admin_files()
    {
        $files_paths=self::get_files_paths(plugin_dir_path(__FILE__) . ".." . "/assets/admin/");
        foreach($files_paths as $key=>$value){
            if(str_ends_with($value,"css")){
                wp_enqueue_style("File" . $key, plugins_url(explode("/plugins/",$value)[1]));
            }
            if(str_ends_with($value,"js")){
                wp_enqueue_script("File" . $key, plugins_url(explode("/plugins/",$value)[1]));
            }
        }
        
    }

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
