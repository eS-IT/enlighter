<?php declare(strict_types = 1);
/**
 * @package     enlighter
 * @filesource  Plugin.php
 * @version     1.0.0
 * @since       15.11.2020 - 09:56
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @see        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 */
namespace Esit\Enlighter\Classes\Contao\Manager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Esit\Enlighter\EsitEnlighterBundle;

/**
 * Class Plugin
 * @package Esit\Enlighter\Classes\Contao\Manager
 */
class Plugin implements BundlePluginInterface
{


    /**
     * @param  ParserInterface                                             $parser
     * @return array|\Contao\ManagerPlugin\Bundle\Config\ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [BundleConfig::create(EsitEnlighterBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
    }
}
