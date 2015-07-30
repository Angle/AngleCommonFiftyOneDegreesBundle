<?php
namespace Angle\Common\FiftyOneDegreesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return \Symfony\Component\Config\Definition\NodeInterface
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('angle_common_fifty_one_degrees');

        $rootNode
            ->children()
                ->arrayNode('51_degrees')
                    ->children()
                        ->scalarNode('data_file_path')
                            ->defaultValue(null)
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}