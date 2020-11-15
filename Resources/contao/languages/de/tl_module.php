<?php declare(strict_types=1);
/**
 * @package     enlighter
 * @filesource  tl_module.php
 * @since       15.11.2020 - 10:42
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 */

/**
 * Set Tablename
 */
$table = 'tl_module';


/**
 * Fields
 */
$GLOBALS['TL_LANG'][$table]['enlightertheme']               = ['Theme', 'Bitte wählen Sie das Theme für der Code Highlighter aus.'];
$GLOBALS['TL_LANG'][$table]['enlighterindent']              = ['Einrückung', 'Bitte geben Sie die Weite der Einrückung ein.'];
$GLOBALS['TL_LANG'][$table]['enlighterlinehover']           = ['Zeile hervorheben', 'Ist der Haken gesetzt, wird die Zeile beim ÜBerfahren mit der Maus hervorgehoben.'];
$GLOBALS['TL_LANG'][$table]['enlighterlinenumbers']         = ['Zeilennummern anzeigen', 'Ist der Haken gesetzt, werden die Zeilennummern angezeigt.'];
$GLOBALS['TL_LANG'][$table]['enlightertextoverflow']        = ['Zeilenumbruch', 'Bitte wählen Sie, ob zu lange Zeilen umgebrochen werden sollen, oder ob gescrollt werden soll.'];


/**
 * Legends
 */
$GLOBALS['TL_LANG'][$table]['enlighter_legend']             = 'Enlighter Einstellungen';


/**
 * Reference
 */
$GLOBALS['TL_LANG'][$table]['enlightertextoverflow_ref']    = ['break' => 'Zeile umbrechen', 'scroll' => 'Hozizontal Scrollen'];
$GLOBALS['TL_LANG'][$table]['enlightertheme_ref']           = [
    'atomic'        => 'Atomic',
    'beyond'        => 'Beyond',
    'bootstrap4'    => 'Bootstrap',
    'classic'       => 'Classic',
    'dracula'       => 'Dracula',
    'droide'        => 'Droide',
    'eclipse'       => 'Eclipse',
    'enlighter'     => 'Enlighter',
    'godzilla'      => 'Godzilla',
    'minimal'       => 'Minimal',
    'monokai'       => 'Monokai',
    'mowtwo'        => 'MowTwo',
    'rowhammer'     => 'Rowhammer'
];