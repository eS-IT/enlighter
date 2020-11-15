'use strict';

/**
 * @author      pfroch <info@easySolutionsIT.de>
 * @copyright   e@sy Solutions IT 2020
 * @license     EULA
 * @package     enlighter
 * @version     1.0.0
 * @since       15.11.20 - 13:05
 */
window.addEventListener('load', function() {
    const supportedLanguages = [
        'assembly', 'asm', 'avrassembly', 'avrasm', 'c', 'cpp', 'c++', 'csharp', 'css', 'cython', 'cordpro', 'diff',
        'docker', 'dockerfile', 'generic', 'standard', 'groovy', 'go', 'golang', 'html', 'ini', 'conf', 'java', 'js',
        'javascript', 'jquery', 'jquery', 'ext.js', 'json', 'kotlin', 'less', 'lua', 'gfm', 'md', 'markdown', 'octave',
        'matlab', 'nsis', 'php', 'powershell', 'prolog', 'py', 'python', 'purebasic', 'pb', 'raw', 'ruby', 'ruby',
        'scss', 'sass', 'shell', 'bash', 'sql', 'squirrel', 'swift', 'typescript', 'vhdl', 'visualbasic', 'vb',
        'verilog', 'xml', 'yaml'
    ];

    const elems = document.getElementsByTagName("code");

    for (let elem of elems) {
        const cssClasses = elem.classList;

        for (let cssClass of cssClasses) {
            // Alle Css-Klassen durchlaufen und auf eine der unterstuetzten Programmiersprachen prüfen

            if ('sh' === cssClass) {
                // Klasse "sh" nach "shell" aendern, da Enlighter nur "shell" unterstützt!
                elem.classList.remove(cssClass);
                cssClass = 'shell';
                elem.classList.add(cssClass);
            }

            if (-1 !== supportedLanguages.indexOf(cssClass)) {
                // enlighterSettings wird in der Klasse des Modules erzeugt!
                enlighterSettings.language = cssClass; // Sprache festlegen!
                EnlighterJS.enlight(elem, enlighterSettings);
            }
        }
    }
});