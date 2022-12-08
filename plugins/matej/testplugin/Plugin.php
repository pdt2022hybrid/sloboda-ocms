<?php namespace Matej\Testplugin;

use Backend;
use System\Classes\PluginBase;

/**
 * Testplugin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Testplugin',
            'description' => 'No description provided yet...',
            'author'      => 'Matej',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Matej\Testplugin\Components\test' => 'test',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'matej.testplugin.some_permission' => [
                'tab' => 'Testplugin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'testplugin' => [
                'label'       => 'Testplugin',
                'url'         => Backend::url('matej/testplugin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['matej.testplugin.*'],
                'order'       => 500,
            ],
        ];
    }
}
