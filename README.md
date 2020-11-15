# Enlighter


## Beschreibung

Diese Erweiterung für das Open Source CMS Contao bindet das Script [Enlighter.js](https://github.com/EnlighterJS/EnlighterJS)
ein und ermöglicht es, Quelltext übersichtlich darzustellen. Im Gegensatz zum eingebauten highlight.js, bietet
Enlighter.js u. a. Zeilennummern, Zeilenhervorhebung, das Kopieren des Quelltextes, verschiedene Themes und viele mehr. Das
Highlightning wird global für alle Code-Tags auf der entsprechenden Seite eingestellt. Details sind unter _Einrichtung_
weiter unten zu finden.


## Autor

__e@sy Solutions IT:__ Patrick Froch <info@easySolutionsIT.de>


## Voraussetzungen

- php: >=7.3
- contao/core-bundle: >=4.4


## Installation

Einfach im Contao Manager nach `esit/enlighter` suchen und installieren.


## Einrichtung

### 1. Modul anlegen

 Damit das Syntaxhighlightning funktioniert muss unter Themes > Module ein Modul vom Typ "__Enlighter.js__" angelegt
 werden. Hier können die Einstellungen für das Syntaxhighlightning festgelegt werden.

 Im einzelnen sind dies:

 - Theme
 - Einrückung
 - Das Hervorheben der Zeile beim Überfahren mit der Maus.
 - Die Anzeige der Zeilennummern
 - Ob zu lange Zeilen umgebrochen werden sollen, oder ob horizontal gescrollt werden soll.

### 2. Modul einbinden

Nun muss das Modul im gewünschten Seitenlayout eingebunden werden. Da das Modul keine Ausgabe erzeugt, ist es prinzpiell
egal, wo ein eingebunden wird. Es werden ausschließlich Skripte eingebunden, die an den entsprechenden Stellen
(CSS im Head und JS im Footer) eingebunden werden.

__Im entsprechenden Seitenlaylout darf das mitgelieferte `hieghlight.js` nicht aktiviert sein!__

Das Highlightning wird global für alle Code-Tags auf der entsprechenden Seite eingestellt. Will man es nur auf bestimmten
Seiten, muss man mit mehreren Seitenlayouts arbeiten. Will man einzelne Blöcke nicht auszeichnen, reicht es keine Sprache
anzugeben. Diese Blöcke werden dann ignoriert.

### 3. Code eingeben

Das Highlightning funktioniert mit dem Inhaltselement "Code", Codeblöcken in Markdowntexten, sowie allen anderen
Code-Tags auf der Seite, die als CSS-Klasse eine der [unterstützen Sprachen](https://github.com/EnlighterJS/EnlighterJS#languages)
enthalten. Dies ist auch der Grund, warum beim Inhaltselement "Code" die Sprache für das Syntaxhighlightning ausgewählt werden muss.