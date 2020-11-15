<?php declare(strict_types = 1);
/**
 * @package     enlighter
 * @filesource  EsitEnlighterExtension.php
 * @version     1.0.0
 * @since       15.11.2020 - 09:56
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 */
namespace Esit\Enlighter\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class EsitEnlighterExtension
 * @package Esit\Enlighter\DependencyInjection
 */
class EsitEnlighterExtension extends Extension implements PrependExtensionInterface
{


    /**
     * Konfiguriert den Logger, damit die Konfiguration nicht in app/config/config.yml geschrieben werden muss.
     * @param ContainerBuilder $container
     */
    public function prepend(ContainerBuilder $container): void
    {
        $configFile     = '/src/Esit/Enlighter/Resources/config/logger.yml';
        $pathForRelpace = '/src/Esit/Enlighter/Classes/Services';

        // Kernel hier nicht verfügbar, root manuell erstellen!
        $root = str_replace($pathForRelpace, '', __DIR__);

        if (\is_file($root . '/' . $configFile)) {
            // Konfiguration aus Yaml-Datei laden
            $configs = Yaml::parseFile($root . $configFile);

            if (\is_array($configs)) {
                // Konfiguraionen verarbeiten
                foreach ($configs as $bundle => $config) {
                    $container->prependExtensionConfig($bundle, $config);
                }
            }
        }
    }


    /**
     * Lädt die Konfigurationen
     * @param array            $mergedConfig
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        if (\is_file(__DIR__ . '/../Resources/config/services.yml')) {
            $loader->load('services.yml');
        }

        if (\is_file(__DIR__ . '/../Resources/config/listener.yml')) {
            $loader->load('listener.yml');
        }
    }
}
