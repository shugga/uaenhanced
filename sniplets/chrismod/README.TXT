Dieses Pack enth�lt s�mtliche _ge�nderten_ Dateien (und nur diese) nach dem aktuellen Stand
der Modifizierungen auf tntchris.dyndns.org/ugaagga.
Dieses Sammlung enth�llt keine Grafiken oder Regeldateien.
Beachtet, dass sie f�r das Windowssystem modifiziert wurden und unter Unix/Linux nicht lauff�hig sind.
Dies betrifft insbesondere den Ticker.
Dieser Mod basiert auf der Source von Runde 4 und er funktioniert nicht mit Sourcedateien aus einer anderen Runde!

Uga-Agga k�nnt ihr euch unter www.uga-agga.org downloaden.
Ich gebe keine Hilfe und keinen Support, weder zur Installation von Uga-Agga selbst, noch zur Installation dieses
Mods. Weiterhin �bernehme ich keinerlei Verantwortung f�r Sch�den oder Datenverlust, die durch den Einsatz dieses Mods m�glicherweise
entstehen k�nnen. Ich empfehle vor dem Einsatz ein Backup durchzuf�hren!


�NDERUNGEN GAME:

Sortierung der Rankings (implemented)
Anzeige der Einzelpunkteverteilung im Ranking (f�r jeweiligen Spieler) (implemented)
Grafische Anzeige des Punkteverlaufs der letzten 10 Tage (Spieler) (implemented)
Terraineffekte 


Bewegungsmenu Auswahlen: Alle Einheiten, voll beladen
Anzeige des letzten Logins
Farmschutz (erweiterter Anf�ngerschutz)
Siedlungsliste
Adressbuch 
Urlaubsmodus 
Terminkalender:
Eigene Bewegungen, fremde Bewegungen und die ausstehenden Termine k�nnen nun eingeklappt werden. N�tzlich bei vielen Eintr�gen. L�uft einwandfrei wies scheint, k�nnte allerdings mit bestimmten Browsern Probleme geben.
Ausserdem werden jetzt dort auch R�ckkehrbewegungen angezeigt.
Baumen�s 
Siedlungsreihenfolge
Artefakte (k�nnen beim Einweihen zerst�rt werden)
Statistiken 
Nachrichten-Ticker 
Quests 
G�tter 
Anf�hrer 



�NDERUNGEN TICKER:

ticker.c allgemein etwas ge�ndert (zur einfacheren Handhabung, beachtet das config)
Memoryleak behoben (Problem in den original SQL Funktionen, niemand wei� warum, durch eigene Funktion ersetzt)
Gaussfunktion f�r Wunder hinzugef�gt
Funktionen f�r Anf�hrer hinzugef�gt
Wunderberichte ge�ndert (bewunderte bekommen jetzt genaue Berichte)
diverse Funktionen f�r G�tter (Angriffe, Wunder)
Funktionen f�r Urlaubsmodus
Funktionen f�r Artefaktzerst�rung
Funktionen zur �nderung der Spezialgeb�ude (beim Entdecken einer Religion)
Funktionen f�r Statistiken
Questhandler (unvollst�ndig, beeintr�chtig aber den Ticker nicht, sollte nicht entfernt werden)
Funktionen f�r Monster entfernt (beeintr�chtigte Ticker)




INSTALLATION:

1. Uga Agga normal installieren
2. Datenbanken und Tabellen anlegen mittels db_complete.sql
3. Datenbank an eure Regeln anpassen (mit der Datei "game_rules.db" aus /src/dbs des original UAs)
4. S�mtliche Dateien mit denen im Ordner changed ersetzen
5. Ticker aus ticker_src_win kompilieren (eure Regeldateien noch einf�gen)
6. H�hlen anlegen etc (wie original)
7. Scripte einrichten (zus�tzliche Scripte aus Utilities nicht vergessen)

Zus�tzlich sind noch diverse �nderungen bzw Konfigurationen zu machen (mu� man beim original auch). Darunter z.B.
der G�tterstamm und die beiden G�tterwissenschaften im Ticker. Au�erdem m�ssen noch einige Scripte angepa�t werden.



Die jeweils aktuellen Dateien, sowie evt Hilfe ist zu Finden unter http://tntchris.dyndns.org/comawiki/
Zum Spiel mit den neusten �nderungen: http://tntchris.dyndns.org/ugaagga/
Zum original UgaAgga: www.uga-agga.org


chris--- (tntchris88@gmx.de)