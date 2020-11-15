<?php declare(strict_types = 1);
/**
 * @package     enlighter
 * @filesource  ModuleEnlighter.php
 * @since       15.11.2020 - 10:34
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @see        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 */
namespace Esit\Enlighter\Classes\Contao\Modules;

/**
 * Class ModuleEnlighter
 * @package Enlighter\Classes\Contao\Modules
 */
class ModuleEnlighter extends \Module
{


    /**
     * Template
     * @var string
     */
    protected $strTemplate = '';


    /**
     * Scripttag
     * @var string
     */
    protected $scriptTag = '<script src="%s"></script>';


    /**
     * Scripttag für die Einstellungen;
     * @var string
     */
    protected $settingsTag = '<script>const enlighterSettings = %s;</script>';


    /**
     * Zu ladenden Skripte
     * @var string[]
     */
    protected $scriptsToLoad = [
        'bundles/esitenlighter/enlighter/dist/enlighterjs.min.js',
        'bundles/esitenlighter/js/syntax_highlight_init.js'
    ];


    /**
     * Generate module
     */
    public function generate(): string
    {
        if ('BE' === TL_MODE) {
            // Backend-Ausgabe
            $objTemplate           = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### FRONTEND MODUL ###';
            $objTemplate->title    = $this->headline;
            $objTemplate->id       = $this->id;
            $objTemplate->link     = $this->name;
            $objTemplate->href     = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     */
    protected function compile(): void
    {
        // generate settings
        $enlishgterSettings = [
            'theme'         => $this->enlightertheme ?: 'enlighter',
            'textOverflow'  => $this->enlightertextoverflow ?: 'scroll',
            'indent'        => $this->enlighterindent ?: 4,
            'linehover'     => '' !== $this->enlighterlinehover,
            'linenumbers'   => '' !== $this->enlighterlinenumbers
        ];

        // include settings
        $GLOBALS['TL_BODY'][]   = \sprintf($this->settingsTag, \json_encode($enlishgterSettings));

        // include css
        $GLOBALS['TL_CSS'][]    = 'bundles/esitenlighter/enlighter/dist/enlighterjs.min.css';

        // include js
        foreach ($this->scriptsToLoad as $item) {
            $GLOBALS['TL_BODY'][] = \sprintf($this->scriptTag, $item);
        }
    }
}
