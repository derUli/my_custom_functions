# my_custom_functions
My Custom Functions - UliCMS Module

## Beschreibung
Definieren Sie Ihre eigenen PHP-Funktionen, die Sie update-sicher und unabhängig vom Theme in Ihrem Code verwenden können.
Die Code-Eingabe erfolgt in einem Code-Editor mit Syntax Highlighting.
Syntax-Fehler werden abgefangen, so dass statt einem Fatal Error nur eine Warning erscheint, wenn Code mit fehlerhafter Syntax eingegeben wurde. Jedoch können Laufzeitfehler nicht abgefangen werden. Sofern Sie über keinen direkten Dateizugriff auf den Webserver verfügen, sollten sie ihren Code deshalb vor dem Speichern sorgfältig auf Fehler prüfen.
Der eingegebene Code wird in der folgenden Datei gespeichert:
ULICMS_ROOT/content/custom_code/functions.php

Der Code wird in der after_init Hook ausgeführt.



## Voraussetzungen
* Abhängigkeit php_check_syntax
* UliCMS 2018.1 oder neuer
