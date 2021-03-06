<?php namespace Hao\Socialnetwork;

use Illuminate\Support\Facades\Lang;
use Backend;
use System\Classes\PluginBase;

/**
 * Socialnetwork Plugin Information File
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
            'name'        => 'Socialnetwork',
            'description' => 'No description provided yet...',
            'author'      => 'Hao',
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
        return [
            'Hao\Socialnetwork\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'hao.socialnetwork.access_meetics' => [
                'tab' => 'Socialnetwork',
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
        return [
            'socialnetwork' => [
                'label'       => Lang::get('hao.socialnetwork::lang.plugin.name'),
                'url'         => Backend::url('hao/socialnetwork/index/index'),
                'icon'        => 'icon-commenting-o',
                'permissions' => ['hao.socialnetwork.*'],
                'order'       => 500,

                'sideMenu' => [
                    'meetics' => [
                        'label' => Lang::get('hao.socialnetwork::lang.plugin.menus.meetics'),
                        'icon' => 'icon-maxcdn',
                        'url' => Backend::url('hao/socialnetwork/meetics'),
                        'permissions' => ['hao.socialnetwork.access_meetics'],
                    ],
                ]
            ],
        ];
    }
}
