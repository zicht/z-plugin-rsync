<?php
/**
 * For licensing information, please see the LICENSE file accompanied with this file.
 *
 * @author Gerard van Helden <drm@melp.nl>
 * @copyright 2012 Gerard van Helden <http://melp.nl>
 */
namespace Zicht\Tool\Plugin\Rsync;

use \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use \Zicht\Tool\Plugin as BasePlugin;

/**
 * rsync plugin
 */
class Plugin extends BasePlugin
{
    /**
     * Configures the rsync parameters
     *
     * @param \Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition $rootNode
     * @return mixed|void
     */
    public function appendConfiguration(ArrayNodeDefinition $rootNode)
    {
        $rootNode
            ->children()
                ->arrayNode('sync')
                    ->children()
                        ->scalarNode('options')->end()
                        ->scalarNode('exclude_file')->end()
                        ->scalarNode('backup_folder')->end()
                        ->booleanNode('backup')->end()
                    ->end()
                ->end()
            ->end()
        ;
    }
}