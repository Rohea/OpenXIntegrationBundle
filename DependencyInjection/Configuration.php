<?php

namespace Rohea\OpenXIntegrationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {

        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rohea_open_x_integration');

        $rootNode
            ->children()
                ->scalarNode('gridfs_prefix')->defaultValue('RoheaFilemanagerFS')->cannotBeEmpty()->end()
                ->arrayNode('contexts')
                    ->useAttributeAsKey('key') //very necessary to enable keys as indexes
                    ->prototype('array')
                        ->children()
                            ->scalarNode('host')->end()
                            ->scalarNode('base_path')->end()
                            ->scalarNode('username')->end()
                            ->scalarNode('password')->end()
                        ->end()
                    ->end()
                ->end()
            ;

        return $treeBuilder;
    }
}
