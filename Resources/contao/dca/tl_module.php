<?php declare(strict_types=1);
/**
 * @package     enlighter
 * @filesource  tl_module.php
 * @since       15.11.2020 - 10:25
 * @author      Patrick Froch <info@easySolutionsIT.de>
 * @link        http://easySolutionsIT.de
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 */

/**
 * Set Tablename: tl_module
 */
$table = 'tl_module';

/* Palettes */
$GLOBALS['TL_DCA'][$table]['palettes']['enlighter'] = '{title_legend},name,type;{enlighter_legend},enlightertheme,enlighterindent,enlightertextoverflow,enlighterlinenumbers,enlighterlinehover;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop;';

/* Fields */
$GLOBALS['TL_DCA'][$table]['fields']['enlightertheme'] = [
    'label'                 => !empty($GLOBALS['TL_LANG'][$table]['enlightertheme']) ? $GLOBALS['TL_LANG'][$table]['enlightertheme'] : '',
    'exclude'               => true,
    'inputType'             => 'select',
    'default'               => 'enlighter',
    'options'               => ['atomic', 'beyond', 'bootstrap4', 'classic', 'dracula', 'droide', 'eclipse', 'enlighter', 'godzilla', 'minimal', 'monokai', 'mowtwo', 'rowhammer'],
    'reference'             => $GLOBALS['TL_LANG'][$table]['enlightertheme_ref'],
    'eval'                  => ['mandatory'=>true, 'maxlength'=>255, 'chosen'=>true, 'tl_class'=>'w50'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA'][$table]['fields']['enlighterindent'] = [
    'label'                 => !empty($GLOBALS['TL_LANG'][$table]['enlighterindent']) ? $GLOBALS['TL_LANG'][$table]['enlighterindent'] : '',
    'exclude'               => true,
    'inputType'             => 'text',
    'default'               => '4',
    'eval'                  => ['mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'natural'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA'][$table]['fields']['enlightertextoverflow'] = [
    'label'                 => !empty($GLOBALS['TL_LANG'][$table]['enlightertextoverflow']) ? $GLOBALS['TL_LANG'][$table]['enlightertextoverflow'] : '',
    'exclude'               => true,
    'inputType'             => 'select',
    'default'               => 'scroll',
    'options'               => ['break', 'scroll'],
    'reference'             => $GLOBALS['TL_LANG'][$table]['enlightertextoverflow_ref'],
    'eval'                  => ['mandatory'=>true, 'maxlength'=>255, 'chosen'=>true, 'tl_class'=>'w50'],
    'sql'                   => "varchar(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA'][$table]['fields']['enlighterlinenumbers'] = [
    'label'                 => !empty($GLOBALS['TL_LANG'][$table]['enlighterlinenumbers']) ? $GLOBALS['TL_LANG'][$table]['enlighterlinenumbers'] : '',
    'exclude'               => true,
    'inputType'             => 'checkbox',
    'default'               => 1,
    'eval'                  => ['tl_class'=>'w50 m12 clr'],
    'sql'                   => "char(1) NOT NULL default '1'"
];

$GLOBALS['TL_DCA'][$table]['fields']['enlighterlinehover'] = [
    'label'                 => !empty($GLOBALS['TL_LANG'][$table]['enlighterlinehover']) ? $GLOBALS['TL_LANG'][$table]['enlighterlinehover'] : '',
    'exclude'               => true,
    'inputType'             => 'checkbox',
    'default'               => 1,
    'eval'                  => ['tl_class'=>'w50 m12'],
    'sql'                   => "char(1) NOT NULL default '1'"
];
