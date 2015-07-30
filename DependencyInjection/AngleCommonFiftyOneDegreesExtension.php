<?php
namespace Angle\Common\FiftyOneDegreesBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader;


class AngleCommonFiftyOneDegreesExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        if (!isset($config['51_degrees']['data_file_path'])) {
            throw new \InvalidArgumentException(
                'The option "angle_common_fifty_one_degrees.51_degrees.data_file_path" must be set.'
            );
        }

        $container->setParameter(
            'angle_common_fifty_one_degrees.51_degrees.data_file_path.',
            $config['51_degrees']['data_file_path']
        );
    }

    /**
     * {@inheritdoc}
     * @version 0.0.1
     * @since 0.0.1
     */
    public function getAlias()
    {
        return 'angle_common_fifty_one_degrees';
    }
}