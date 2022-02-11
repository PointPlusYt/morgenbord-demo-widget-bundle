<?php

namespace MorgenBord\DemoWidgetBundle;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class DemoWidgetConfiguration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('widget_parameters');

        // https://symfony.com/doc/current/components/config/definition.html#processing-configuration-values
        // ... add node definitions to the root of the tree
        $treeBuilder->getRootNode()
        ->children()
            ->variableNode('auto_connect')
                ->defaultTrue()
            ->end()
        ;

        return $treeBuilder;
    }
}