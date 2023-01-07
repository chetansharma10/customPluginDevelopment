<?php

namespace Includes;

class Config
{

    // Initilize Class Name
    private static $className = Config::class;

    /**
     * Initialize the hooks
     * @return void
     */
    public static function init_hooks()
    {
        add_action('admin_enqueue_scripts', [self::$className, 'add_admin_files']);
        add_action('admin_menu', [self::$className, 'add_plugin_menu_to_sidebar']);
        add_filter('plugin_action_links_chetan-plugin/chetan-plugin.php', [self::$className, 'add_link_to_plugin']);
    }

    /**
     * Used to add settings link in a plugin,and it will redirect to specific template,
     * It is a part of filters hook
     * @param mixed $links
     * @return array
     */
    public static function add_link_to_plugin($links)
    {
        $settings_links="<a href='?page=chetan_plugin'>Settings</a>";
        array_push($links,$settings_links);
        return $links;
    }

    /**
     * Add Plugin Menu to Sidebar where we see all theme settings
     * @return void
     */
    public static function add_plugin_menu_to_sidebar()
    {
        add_menu_page("ChetanPlugin", "Chetan Plugin", "manage_options", "chetan_plugin", [self::$className,'add_page_to_plugin'], 'dashicons-format-status', 110);
    }

    /**
     * Including the template for plugin
     * @return void
     */
    public static function add_page_to_plugin(){
        require_once plugin_dir_path(__FILE__)."../" . "templates/template.chetan-plugin.php";
    }

    /**
     * Read all files .xyz in directory of single path and return files path array
     * @param mixed $basePath
     * @param mixed $resultant
     * @return void
     */
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

    /**
     * Get Files Paths from readFiles logic function
     * @param mixed $basePath
     * @return array
     */
    public static function get_files_paths($basePath):array{
        $resultant = array();
        self::readFiles($basePath, $resultant);
        return $resultant;
    }

    /**
     * Read all files path from filesPaths array and include using wp_enqueue
     * @return void
     */
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

}
