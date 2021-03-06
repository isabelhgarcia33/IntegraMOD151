<?php
/**
* <b>lang_cback_ctracker.php</b><br><br>
* German Language File for the CBACK Cracker Tracker
*
* @author Christian Knerr (cback)
* @package ctracker
* @version 5.0.0
* @since 21.07.2006 - 17:26:28
* @copyright (c) 2006 www.cback.de
*
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/


/*
 * Language Strings used for the ACP Menu points
 */
$lang['ctracker_module_category'] 		  = 'CrackerTracker';
$lang['ctracker_module_1']                = 'Pr�fsummenscanner';
$lang['ctracker_module_2']                = 'Credits';
$lang['ctracker_module_3']                = 'Dateiscanner';
$lang['ctracker_module_4']                = 'Globale Nachricht';
$lang['ctracker_module_5']                = 'IP&Agent Blocker';
$lang['ctracker_module_6']                = 'Logmanager';
$lang['ctracker_module_7']                = 'Wartung & Tests';
$lang['ctracker_module_8']                = 'Miserable User';
$lang['ctracker_module_9']                = 'Einstellungen';
$lang['ctracker_module_10']               = 'Recovery';
$lang['ctracker_module_11']               = 'Footer';


/*
 * Language Strings used in ACP Modules itself
 */
$lang['ctracker_wrong_module']			  = 'Unbekannte Modulnummer';
$lang['ctracker_img_descriptions']		  = 'Bild';
$lang['ctracker_set_catname1']			  = 'IP, Proxy & UserAgent Blocker';
$lang['ctracker_set_catname2']			  = 'Suchschutz-System';
$lang['ctracker_set_catname3']			  = 'Loginschutz-System';
$lang['ctracker_set_catname4']			  = 'Automatische Spammererkennung';
$lang['ctracker_set_catname5']			  = 'Registrierschutz-System';
$lang['ctracker_set_catname6']			  = 'Passwortkontrolle';
$lang['ctracker_set_catname7']			  = 'Allgemeine Sicherheitsfunktionen';
$lang['ctracker_set_catname8']			  = 'Sonstige Einstellungen';
$lang['ctracker_settings_head']           = 'CrackerTracker Einstellungen';
$lang['ctracker_settings_expl']           = 'Hier kannst Du alle Einstellungen des CBACK CrackerTracker Sicherheitssystems anpassen.';
$lang['ctracker_button_submit']			  = 'Einstellungen speichern';
$lang['ctracker_button_reset']			  = 'Zur�cksetzen';

$lang['ctracker_settings_m1']			  = 'IP Blocker aktivieren';
$lang['ctracker_settings_e1']			  = 'Schaltet den IP, Proxy und UserAgent Blocker ein oder aus.';
$lang['ctracker_settings_m2']			  = 'IP Blocker Loggr��e';
$lang['ctracker_settings_e2']			  = 'Hier kannst Du die Anzahl der Eintr�ge f�r die Logdatei des IP Blockers einstellen. Wird die Anzahl �berschritten wird die Logdatei automatisch gel�scht, um Webspace zu sparen.';
$lang['ctracker_settings_m3']			  = 'Suchschutz aktivieren';
$lang['ctracker_settings_e3']			  = 'Hier kannst Du das Suchschutz-System des CrackerTrackers ein- oder ausschalten.';
$lang['ctracker_settings_m4']			  = 'Suchzeit f�r Benutzer';
$lang['ctracker_settings_e4']			  = 'Zeitspanne die registrierte Benutzer warten m�ssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen k�nnen. (in Sekunden)';
$lang['ctracker_settings_m5']			  = 'Suchanzahl f�r Benutzer';
$lang['ctracker_settings_e5']			  = 'Hier kannst Du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von registrierten Benutzern durchgef�hrt werden d�rfen. Wenn diese Anzahl �berschritten wird, werden weitere Suchanfragen f�r die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.';
$lang['ctracker_settings_m6']			  = 'Suchzeit f�r G�ste';
$lang['ctracker_settings_e6']			  = 'Zeitspanne die G�ste warten m�ssen, wenn das Suchschutz-System aktiviert wird, bis sie erneut suchen k�nnen. (in Sekunden)';
$lang['ctracker_settings_m7']			  = 'Suchanzahl f�r G�ste';
$lang['ctracker_settings_e7']			  = 'Hier kannst Du einstellen, wie viele Suchanfragen in der oben angegebenen Zeitspanne von G�sten durchgef�hrt werden d�rfen. Wenn diese Anzahl �berschritten wird, werden weitere Suchanfragen f�r die oben eingestellte Zeit blockiert, um die Serverbelastung zu reduzieren.';
$lang['ctracker_settings_m8']			  = 'Loginschutz einschalten';
$lang['ctracker_settings_e8']			  = 'Hier kannst Du das Loginschutz-System des CrackerTrackers aktivieren oder deaktivieren.';
$lang['ctracker_settings_m9']			  = 'Loggr��e f�r falsche Logins';
$lang['ctracker_settings_e9']			  = 'Hier kannst Du einstellen, wie viele Eintr�ge in der Logdatei f�r falsche Loginversuche gespeichert werden, bis diese automatisch gel�scht werden, um Webspace zu sparen.';
$lang['ctracker_settings_m10']			  = 'Loginanzahl bis Visuelle Best�tigung';
$lang['ctracker_settings_e10']			  = 'Wie oft darf ein Benutzer sich fehlerhaft einloggen, bis zum Schutz vor BruteForce Attacken die Visuelle Best�tigung angezeigt wird?';
$lang['ctracker_settings_m11']			  = 'Loginhistory';
$lang['ctracker_settings_e11']			  = 'Hier kannst Du die Login History f�r Benutzer aktivieren oder deaktivieren.';
$lang['ctracker_settings_m12']			  = 'Eintr�ge in der Login History pro Benutzer';
$lang['ctracker_settings_e12']			  = 'Hier kannst Du einstellen, wie viele erfolgreiche Logins in der Login History jedes Users gespeichert werden. Bei der Loginhistory haben alle Benutzer die M�glichkeit selbst zu pr�fen, ob die Zeiten und IP Adressen ihrer Logins in Ordnung sind.';
$lang['ctracker_settings_m13']			  = 'Login IP Feature';
$lang['ctracker_settings_e13']			  = 'Aktiviert oder deaktiviert das Login-IP-System. Jeder Benutzer hat die M�glichkeit auf der Loginsicherheit Seite das System zu aktivieren oder deaktivieren, wenn es an dieser Stelle eingeschaltet wurde. Das IP-Schutz-System pr�ft hier �nderungen der Benutzer IP Adresse und informiert den Benutzer beim n�chsten Login dar�ber, dass der IP Bereich seit dem letzten Login ver�ndert wurde. Hier best�nde dann die M�glichkeit, dass sich jemand von einem anderen Ort aus eingeloggt hat.';
$lang['ctracker_settings_m14']			  = 'Spammererkennung';
$lang['ctracker_settings_e14']			  = 'Hier kann der Modus f�r die automatische Spammererkennung eingestellt werden.';
$lang['ctracker_settings_m15']			  = 'Spammer Zeitspanne';
$lang['ctracker_settings_e15']			  = 'Zeitspanne in der Posts eines Benutzers zur Spammererkennung gez�hlt werden. (in Sekunden)';
$lang['ctracker_settings_m16']			  = 'Spammer Postanzahl';
$lang['ctracker_settings_e16']			  = 'Erlaubte Anzahl an Posts in der obigen Zeitspanne. Wird dieser Wert �berschritten, wird der User als Spammer identifiziert und die im obigen Modus eingestellte Aktion durchgef�hrt.';
$lang['ctracker_settings_m17']			  = 'Spammer Loggr��e';
$lang['ctracker_settings_e17']			  = 'Loggr��e in der als Spammer identifizierte Benutzer gespeichert werden.';
$lang['ctracker_settings_m18']			  = 'Registrierschutz';
$lang['ctracker_settings_e18']			  = 'Hier kannst Du den Registrierschutz aktivieren oder deaktivieren.';
$lang['ctracker_settings_m19']			  = 'Blockzeit f�r Registrierung';
$lang['ctracker_settings_e19']			  = 'Hier kann die Zeitspanne eingestellt werden, die zwischen zwei Registrierungen vergehen muss, ehe ein neuer Benutzer sich wieder registrieren kann. (in Sekunden)';
$lang['ctracker_settings_m21']			  = 'IP Watcher';
$lang['ctracker_settings_e21']			  = 'Wenn diese Funktion aktiviert wurde, kann sich ein Benutzer mit einer identischen IP Adresse nur einmal registrieren, bis sich jemand mit anderer IP Adresse wieder registriert hat.';
$lang['ctracker_settings_m22']			  = 'Passwortg�ltigkeit';
$lang['ctracker_settings_e22']			  = 'Aktiviert die �berpr�fung der Passwortg�ltigkeit f�r alle Benutzer.';
$lang['ctracker_settings_m23']			  = 'Passwortg�ltigkeit in Tagen';
$lang['ctracker_settings_e23']			  = 'Wie lange ist ein Benutzerpasswort g�ltig, ehe ein Hinweis zum �ndern erscheint? (in Tagen)';
$lang['ctracker_settings_m24']			  = 'Passwort Komplexit�tskontrolle';
$lang['ctracker_settings_e24']			  = 'Diese Funktion �berpr�ft Benutzerpassw�rter auf Komplexit�t.';
$lang['ctracker_settings_m25']			  = 'Passwort Komplexit�tsmodus';
$lang['ctracker_settings_e25']			  = 'Hier kann eingestellt werden, ob zwingend Zeichen in Passw�rtern vorhanden sein m�ssen.';
$lang['ctracker_settings_m26']			  = 'Passwort Mindestl�nge';
$lang['ctracker_settings_e26']			  = 'Hier kannst Du die Zeichenzahl einstellen, die ein Passwort mindestens haben muss.';
$lang['ctracker_settings_m27']			  = 'Passwort Reset Pr�fer';
$lang['ctracker_settings_e27']			  = 'Erlaubt einem Benutzer in einer nachfolgend einstellbaren Zeitspanne nur einmal sein Passwort zur�ckzusetzen. Dies verhindert, dass Angreifer diese Funktion ausnutzen k�nnen, um einen Benutzer mit Passwort Resetmails zuzuspammen.';
$lang['ctracker_settings_m28']			  = 'Passwort Reset Zeitspanne';
$lang['ctracker_settings_e28']			  = 'In welcher Zeitspanne darf ein Benutzer sein Passwort zur�cksetzen? (in Minuten)';
$lang['ctracker_settings_m29']			  = 'EMail �berwachung';
$lang['ctracker_settings_e29']			  = 'Hier kannst Du die Funktion aktivieren, dass Benutzer die boardinterne Mailfunktion nur innerhalb einer bestimmten Zeitspanne einmal benutzen d�rfen. Dies verhindert Spamming.';
$lang['ctracker_settings_m30']			  = 'EMail Zeitspanne';
$lang['ctracker_settings_e30']			  = 'Wie viel Zeit darf zwischen zwei E-Mails vergehen, die ein Benutzer �ber die boardinterne Mailfunktion versenden darf? (in Minuten)';
$lang['ctracker_settings_m31']			  = 'Auto Recovery';
$lang['ctracker_settings_e31']			  = 'Aktiviert die Funktion automatisch Boardeinstellungen zu sichern. Wenn diese fehlschlagen, kann damit einfach wieder zur letzten funktionierenden Konfiguration zur�ckgekehrt werden.';
$lang['ctracker_settings_m32']			  = 'Visuelle Best�tigung f�r G�ste';
$lang['ctracker_settings_e32']			  = 'Wenn Du diese Funktion einschaltest, m�ssen G�ste beim Schreiben eines neuen Beitrags einen visuellen Code eingeben, damit ihr Post eingetragen wird. Dies sch�tzt vor vollautomatischen Spambots.';
$lang['ctracker_settings_m33']			  = 'Wegwerf-Maildienst Schutz';
$lang['ctracker_settings_e33']			  = 'CrackerTracker hat intern eine Liste von sogenannten Wegwerf-Maildiensten. Wenn Du diese Funktion aktivierst, k�nnen sich keine Benutzer mit einer solchen Mailadresse mehr registrieren, um zum Beispiel die E-Mail Accountaktivierung zu umgehen.';
$lang['ctracker_settings_m34']			  = 'Erkennung von fehlerhafter Konfiguration';
$lang['ctracker_settings_e34']			  = 'Wenn Du diese Funktion aktiviert hast, pr�ft CrackerTracker bei den allgemeinen Boardeinstellungen von phpBB die Angaben auf G�ltigkeit. So kannst Du Dein Board nicht mehr so leicht durch Fehlkonfiguration besch�digen!';
$lang['ctracker_settings_m35']			  = 'Spammer Detection Boost';
$lang['ctracker_settings_e35']			  = 'Wenn Du diese Funktion aktivierst, wird CrackerTracker gezielter auf menschlich durchgef�hrte Spamregistrierungen oder Spamposts achten. Die meisten k�nnen somit erkannt und blockiert werden.';
$lang['ctracker_settings_m36']			  = 'Spammer Keyword Check';
$lang['ctracker_settings_e36']			  = 'Wenn "Spammer Detection Boost" aktiviert wurde, dann kannst Du mit dieser Option zuschalten, dass zus�tzlich Schl�sselw�rter in Profil und Posts gescannt werden, um Spammer als solche zu identifizieren.<br /><br /><b>ACHTUNG:</b> Hier besteht eine h�here Gefahr von Fehlerkennungen f�r neue User. Es sollte dann st�ndig das Logfile f�r Spammer Detection �berpr�ft werden.';


$lang['ctracker_settings_on']			  = 'Aktivieren';
$lang['ctracker_settings_off']			  = 'Deaktivieren';
$lang['ctracker_blockmode_0']			  = 'Ausgeschaltet';
$lang['ctracker_blockmode_1']			  = 'Benutzer bannen';
$lang['ctracker_blockmode_2']			  = 'Benutzer sperren';
$lang['ctracker_complex_1']				  = '[0-9]';
$lang['ctracker_complex_2']				  = '[a-z]';
$lang['ctracker_complex_3']				  = '[A-Z]';
$lang['ctracker_complex_4']				  = '[0-9][a-z]';
$lang['ctracker_complex_5']				  = '[0-9][A-Z]';
$lang['ctracker_complex_6']				  = '[0-9][a-z][A-Z]';
$lang['ctracker_complex_7']				  = '[0-9][*]';
$lang['ctracker_complex_8']				  = '[0-9][a-z][*]';
$lang['ctracker_complex_9']				  = '[0-9][a-z][A-Z][*]';


/*
 * Credits page in ACP
 */
$lang['ctracker_credits_head']			  = 'Credits';
$lang['ctracker_credits_subhead']         = 'Hier befinden sich ein paar Hinweise und die Credits des CBACK CrackerTrackers. Eine Seite um Dir weitere Informationen zu sicherheitsrelevanten Dingen zu geben, sowie eine M�glichkeit "Danke" zu sagen.';
$lang['ctracker_credits_donate']          = 'Spenden';
$lang['ctracker_credits_donate_expl']     = 'Gef�llt Dir <b>CBACK CrackerTracker Professional</b>? Dann w�re es sehr nett von Dir, wenn Du das CBACK Projekt mit einer kleinen PayPal Spende unterst�tzen w�rdest. Weiterentwicklung und Servermiete kosten unser non-profit Projekt viel Geld. Mit einer kleinen Unterst�tzung hilfst Du, dass wir unsere Services wie zum Beispiel den CrackerTracker weiterhin kostenfrei anbieten k�nnen. <br /><br />Vielen Dank f�r die Unterst�tzung!';
$lang['ctracker_credits_credits']		  = 'Credits';
$lang['ctracker_credits_credits_1']		  = 'Idee & Umsetzung';
$lang['ctracker_credits_credits_2']		  = 'Herstellerseite und Supportforum';
$lang['ctracker_credits_credits_3']		  = 'Icons';
$lang['ctracker_credits_credits_4']		  = 'Offizielle Downloadseite';
$lang['ctracker_credits_moddownload']	  = 'CrackerTracker MOD Download';
$lang['ctracker_credits_thanks']		  = 'Dank an...';
$lang['ctracker_credits_thanks_text']	  = 'An dieser Stelle geht ein Dankesch�n an einige Personen die mir bei der MOD Entwicklung mit Ideen, Tests und mehr zur Seite standen.';
$lang['ctracker_credits_thanks_to']		  = '<b>Featureideen, Sicherheitstests und Kontrolllesen</b><br />Tekin Bird�zen<br /><i>(<a href="http://www.cybercosmonaut.de" target="_blank">cYbercOsmOnauT</a>)</i><br /><br /><br /><br /><b>Featurevorschl�ge</b><br />Bernhard Jaud<br /><i>(GenuineParts)</i><br /><br /><br /><br /><b>�bersetzer</b><br />mc-dragon<br /><i>(Englisch)</i><br /><br /><br /><br /><b>Korrektur (Englisch)</b><br />George<br />Sommerset<br /><i>(<a href="http://www.englisch-hilfen.de" target="_blank">www.englisch-hilfen.de</a>)</i><br /><br /><br /><br /><b>Korrektur (Deutsch)</b><br />Johnny (diegoriv)<br /><i>(<a href="http://alpinum.at" target="_blank">Alpinum.at</a>)</i><br /><br /><br /><br /><b>Beta Tester</b><br />Danke an alle Teilnehmer des Beta-Tests,<br />an die CBACK Premium User und nat�rlich auch an<br />einige Kollegen aus der "Modder-Szene", welche bei Beta Tests und Korrekturlesen geholfen haben.</i>';
$lang['ctracker_credits_info']			  = 'Noch mehr Sicherheit?';
$lang['ctracker_credits_info_text']		  = 'Die perfekte Erweiterung f�r phpBB und den CrackerTracker: F�r optimale Sicherheit vor b�sen Spambots und Registrierbots empfehlen wir den Mod <b>Advanced Visual Confirmation</b> von AmigaLink. Dieser MOD erweitert die CAPTCHA Funktion von phpBB und von CrackerTracker Professional mit einem komplexeren System, welches nicht von Bots ausgelesen werden kann. Den MOD kann man auf <a href="http://www.amigalink.de" target="_blank">www.AmigaLink.de</a> herunterladen.<br /><br /><br /><br />Wir empfehlen diesen MOD f�r optimale Sicherheit ebenfalls in Dein Forum einzubauen!';


/*
 * File Hash Check in ACP
 */
$lang['ctracker_fchk_head']				  = 'CrackerTracker Pr�fsummenscanner';
$lang['ctracker_fchk_subhead']			  = 'Dieser Scanner erzeugt f�r jede PHP Datei Deines Forums eine Pr�fsumme, sobald Du auf "Erstelle oder aktualisiere Pr�fsummen" klickst. Danach hast Du immer die M�glichkeit mit "�berpr�fe Datei�nderungen" festzustellen, ob sich die Dateien seit dem letzten Erzeugen von Pr�fsummen ge�ndert haben oder nicht. Damit kannst Du �berwachen, ob sich vielleicht Dateien ge�ndert haben, ohne das Du selbst etwas editiert hast. Dies ist meist ein Anzeichen davon, dass jemand Zugang zu Deinem Foren-Datenbestand bekommen hatte. Achte �brigens auch auf die letzte Pr�fzeit. So siehst Du, ob jemand unbefugt diesen Pr�fsummenscanner aktiviert hat!<br /><br /><br /><b>Information:</b> Nicht alle Server unterst�tzen dieses Feature. Gelegentlich kann es zu Script Timeouts kommen, wenn der Server zu lange braucht, um die phpBB Dateiliste zu erzeugen. Andere Server brechen den Vorgang ab, da er recht performanceintensiv ist.<br /><br /><br />&raquo; Die letzte Aktualisierung der Dateipr�fsummen fand am <b>%s</b> statt.';
$lang['ctracker_fchk_funcheader']		  = 'Funktionen';
$lang['ctracker_fchk_tableheader']		  = 'Systemausgabe';
$lang['ctracker_fchk_option1']			  = 'Erstelle oder aktualisiere Pr�fsummen';
$lang['ctracker_fchk_option2']			  = '�berpr�fe Datei�nderungen';
$lang['ctracker_fchk_select_action']	  = 'Bitte w�hle eine Aktion aus!';
$lang['ctracker_fchk_update_action']	  = 'Aktualisieren der Dateipr�fsummen wurde vollst�ndig ausgef�hrt!';
$lang['ctracker_fchk_tablehead1']		  = 'Dateipfad';
$lang['ctracker_fchk_tablehead2']		  = 'Status';
$lang['ctracker_file_unchanged']		  = 'UNVER�NDERT';
$lang['ctracker_file_changed']		 	  = 'GE�NDERT';
$lang['ctracker_file_deleted']        = 'GEL�SCHT';


/*
 * File Security Scanner in ACP
 */
$lang['ctracker_fscan_complete']		  = 'Der Dateiscan wurde erfolgreich ausgef�hrt. Bitte klicke nun auf "Ergebnisse anzeigen", damit die Liste mit den Pr�fergebnissen angezeigt wird und Du die M�glichkeit hast, die Dateien zu korrigieren. <br /><br /><br /><br /><u>HINWEIS:</u><br /><br />Gelegentlich kann es vorkommen, dass CrackerTracker eine Datei als unsicher erkennt. Dies liegt nat�rlich daran, dass PHP Codedateien sehr, sehr unterschiedlich sein k�nnen und gelegentlich ein Programmierer sogar unbedingt m�chte, dass Code von au�en beschrieben werden kann. In diesem Fall - und wirklich NUR wenn Du Dir absolut sicher bist und die Datei genauestens �berpr�ft hast - kannst Du die entsprechende Datei mit einem Signalkommentar bei der Pr�fung als sicher einstufen, sodass Du beim n�chsten Scan nicht mehr mit dieser Datei als unsicher konfrontiert wirst. F�ge dazu einfach nach dem Dateibeginn <?php den folgenden Kommentar ein: <br /><br /><br /><i>// CTracker_Ignore: File Checked By Human</i><br /><br /><br />Wenn Du Dir unsicher bist kannst Du auch auf der <a href="http://www.community.cback.de" target="_blank">CBACK Community</a> genauere Anweisungen f�r die Scanergebnisse, und wie man diese Stellen bereinigen kann, erfahren. Bitte benutze auch die dortige Forensuche, da zu diesen Anfragen sicherlich schon viele beantwortete Threads vorliegen.';
$lang['ctracker_fscan_unchecked']		  = 'NICHT �BERPR�FT';
$lang['ctracker_fscan_ok']				  = 'SICHER';
$lang['ctracker_fscan_prob_1']			  = 'extension.inc nicht / zu sp�t eingebunden';
$lang['ctracker_fscan_prob_2']			  = '$phpbb_root_path ist m�glicherweise nicht richtig initialisiert';
$lang['ctracker_fscan_prob_3']			  = 'common.php / pagestart.php m�glicherweise nicht oder zu sp�t eingebunden';
$lang['ctracker_fscan_prob_4']			  = 'Code in der Datei ist m�glicherweise au�erhalb von phpBB ausf�hrbar';
$lang['ctracker_fscan_prob_5']			  = 'extension.inc fehlt und/oder $phpbb_root_path und/oder gesetzte Konstante nicht gefunden';
$lang['ctracker_fscan_prob_def']		  = 'Eine undefinierter Fall ist beim Scannen aufgetreten';
$lang['ctracker_fscan_important']		  = 'Bitte beachten!';
$lang['ctracker_fscan_sel_action']		  = 'Zum Starten der �berpr�fung aller Dateien klicke bitte auf "Dateipr�fung starten". Wenn dies beendet ist, klicke auf "Ergebnisse anzeigen", um die Resultate der �berpr�fung zu sehen. Diese Liste kann jederzeit wieder �ber diesen ACP Punkt abgerufen werden, bis eine neuen Pr�fung gestartet wird.<br /><br /><br />Aus technischen Gr�nden ist es jedoch nicht m�glich eine <u>eindeutige</u> und <u>unfehlbare</u> Auskunft �ber die Sicherheit eines PHP Skriptes zu geben. Wiege Dich also nicht in falschen Sicherheitsvorstellungen! Es kann vorkommen, dass der Scanner eine sichere Datei als unsicher einstuft, und es kann auch passieren, dass dieser Scanner eine Datei als sicher anzeigt die anderweitig eine L�cke aufweist. PHP ist so tiefgehend und Codes sind meist noch von so vielen anderen Faktoren oder Bereichen abh�ngig, dass ein 100%iges Resultat nicht geliefert werden kann. Ansonsten g�be es keine unsicheren Skripte mehr. ;-)<br /><br /><br />Dieser Scanner ist auf einige L�cher in den includes Dateien spezialisiert und sp�rt Bereiche des Forums auf, die von au�en erreichbar sind. Damit bietest Du eine Angriffsfl�che die der CrackerTracker nicht �berwachen kann, da CrackerTracker nur innerhalb des Forums arbeitet. Mit diesem Scanner kann man einen Gro�teil dieser Gefahren leicht aufsp�ren und beseitigen.<br /><br /><br />Weitere Hinweise und Anleitungen und Hilfen, wie als unsicher gezeigte Dateien korrigiert werden k�nnen, findest Du mit der Suchfunktion auf der CBACK Community!<br /><br /><br />';
$lang['ctracker_fscan_head']			  = 'CBACK CrackerTracker Sicherheitsscanner';
$lang['ctracker_fscan_subhead']			  = 'Dieser Sicherheitsscanner pr�ft alle PHP Dateien Deines Forums auf gravierende Sicherheitsprobleme und legt hier besonderes Augenmerk darauf, dass keine includes L�cken vorliegen die durch W�rmer ausgenutzt werden. Diese L�cken k�nnen meist so ausgenutzt werden, dass Code von au�en eingeschleust wird ohne andere Boarddateien anzusprechen. Damit bleibt auch das CrackerTracker-System inaktiv und kann die Datei nicht sch�tzen. Mit diesem ACP Modul hast Du die M�glichkeit solche L�cken gezielt aufzusp�ren.<br /><br /><br /><b>Bitte beachten:</b> Nicht alle Server unterst�tzen diese Funktion! Bei sehr gro�en Boards kann es durchaus passieren, dass dieses performanceintensive Scansystem die PHP Execution Time �berschreitet. Der Algorithmus des Scanners wurde so gut wie m�glich optimiert, dass sich dies in Grenzen h�lt, aber es kann auf einigen Maschinen dennoch vorkommen. Wir bitten dies zu ber�cksichtigen.<br /><br /><br />&raquo; Die letzte �berpr�fung fand am <b>%s</b> statt.';
$lang['ctracker_fscan_option1']			  = 'Dateipr�fung starten';
$lang['ctracker_fscan_option2']			  = 'Ergebnisse anzeigen';


/*
 * Global message in ACP
 */
$lang['ctracker_glob_msg_head']			  = 'Globale Nachricht';
$lang['ctracker_glob_msg_subhead']		  = 'Hier kannst Du eine globale Nachricht an alle Benutzer hinterlassen. Diese Nachricht ist dann beim n�chsten Login f�r den Benutzer als Meldungsbox sichtbar. Du hast die M�glichkeit entweder auf einen Thread zu verweisen oder einen beliebigen eigenen Text zu schreiben. Ein eigener Text ist allerdings auf 255 Zeichen begrenzt! Das reicht aber aus, wenn Du z.B. wegen �nderungen im Template nur schnell darauf hinweisen m�chtest, dass man beispielsweisen den Browser Cache leeren soll. ;)';
$lang['ctracker_glob_msg_entry']	      = 'Globale Nachricht erstellen';
$lang['ctracker_glob_msg_submit']		  = 'Eintragen';
$lang['ctracker_glob_msg_reset']		  = 'Nachricht zur�ckziehen';
$lang['ctracker_glob_msg_type']			  = 'Typ der globalen Nachricht';
$lang['ctracker_glob_type_1']			  = 'Text';
$lang['ctracker_glob_type_2']			  = 'Link';
$lang['ctracker_glob_msg_txt']			  = 'Text der globalen Nachricht';
$lang['ctracker_glob_msg_link']			  = 'Linkziel in der Nachricht';
$lang['ctracker_glob_msg_reset']		  = 'Aktuelle Nachricht zur�ckziehen';
$lang['ctracker_glob_res_txt']			  = 'Eine vorher eingetragene Nachricht kann mit einem Klick auf den Button "Aktuelle Nachricht zur�ckziehen" abgeschaltet werden. Die Benutzer erhalten dann die letzte Globale Nachricht nicht mehr weiter.';
$lang['ctracker_glob_msg_saved']		  = 'Die globale Nachricht wurde erfolgreich gespeichert.<br /><br />Klicke <a href="%s">HIER</a> um zur�ck zur CrackerTracker Verwaltung zu gelangen.';
$lang['ctracker_glob_msg_reset_ok']		  = 'Die globale Nachricht wurde nun von der Nutzertabelle entfernt. Benutzer bekommen die eingetragene Nachricht nicht mehr angezeigt.<br /><br />Klicke <a href="%s">HIER</a> um zur�ck zur CrackerTracker Verwaltung zu gelangen.';
$lang['ctracker_dbg_mode']            = '<b>CrackerTracker l&auml;uft im DEBUG MODE. Dies sollte kein Dauerzustand sein.<br />Bitte stelle wieder den normalen Modus ein, sobald Du es nicht mehr ben&ouml;tigst.<br /><br /><u>Diese Meldung kann nicht gel&ouml;scht werden!</u></b>';

/*
 * IP&Agent Blocker
 */
$lang['ctracker_ipb_delete']			  = 'Eintrag l�schen';
$lang['ctracker_ipb_blocklist']			  = 'Blocklisteintr�ge';
$lang['ctracker_ipb_head']				  = 'Proxy, IP & UserAgent Blocker';
$lang['ctracker_ipb_description']		  = 'Hier kannst Du die Blockliste f�r den CrackerTracker Proxy, IP und UserAgent Blocker verwalten. Du kannst sowohl vorhandene Eintr�ge l�schen sowie neue Eintr�ge hinzuf�gen. Bei einem Neueintrag hast Du die M�glichkeit den Stern (*) als Jokerzeichen zu benutzen, um beliebige Kombinationen aus dem Filtereintrag in der Liste einzutragen. z.B.: lwp* sperrt lwp-1 genauso wie lwp-simple etc. oder 100.*.*.* sperrt alle IP Adressen die mit 100. beginnen.<br /><br /><b>WARNUNG:</b> Achte darauf, dass Du nicht Deinen eigenen UserAgent oder Deine eigene IP sperrst. Ansonsten kannst Du das Forum nicht mehr betreten!';
$lang['ctracker_ipb_new_entry']			  = 'Neueintrag';
$lang['ctracker_ipb_added']				  = 'Eintrag erfolgreich hinzugef�gt!';
$lang['ctracker_ipb_deleted']			  = 'Eintrag erfolgreich gel�scht!';
$lang['ctracker_ipb_add_now']			  = 'Eintrag hinzuf�gen';


/*
 * Log Manager
 */
$lang['ctracker_log_manager_title']		  = 'Logfile Manager';
$lang['ctracker_log_manager_subtitle']	  = 'Hier kannst Du alle Logdateien des CrackerTrackers anzeigen und l�schen.';
$lang['ctracker_log_manager_overview']	  = 'Log Manager �bersicht';
$lang['ctracker_log_manager_blocked']	  = 'CrackerTracker hat bisher <b>%s</b> Attacken blockiert.';
$lang['ctracker_log_manager_overview']	  = 'Logdatei �bersicht';
$lang['ctracker_log_manager_head1']		  = 'Logname';
$lang['ctracker_log_manager_head2']		  = 'Anzahl der Eintr�ge';
$lang['ctracker_log_manager_head3']		  = 'Funktionen';
$lang['ctracker_log_manager_name2']		  = 'Wurm & Exploit Protection';
$lang['ctracker_log_manager_name3']		  = 'IP, Proxy & UserAgent Blocker';
$lang['ctracker_log_manager_name4']		  = 'Fehlerhafte Logins';
$lang['ctracker_log_manager_name5']		  = 'Blockierte Spammer';
$lang['ctracker_log_manager_name6']     = 'Debug-Eintr�ge';
$lang['ctracker_log_manager_view']		  = 'ANSEHEN';
$lang['ctracker_log_manager_delete']	  = 'L�SCHEN';
$lang['ctracker_log_manager_delete_all']  = 'Alle Logdateien l�schen';
$lang['ctracker_log_manager_deleted']	  = 'Das Logfile wurde erfolgreich gel�scht!';
$lang['ctracker_log_manager_all_deleted'] = 'Alle Logdateien wurden erfolgreich gel�scht!';
$lang['ctracker_log_manager_showheader1'] = 'Diese Logdatei enth�lt aktuell <b>einen</b> Eintrag. Klicke <b><a href="%s">HIER</a></b>, um zur Logdatei �bersicht zur�ckzukehren.';
$lang['ctracker_log_manager_showheader']  = 'Diese Logdatei enth�lt aktuell <b>%s</b> Eintr�ge.<br />Klicke <b><a href="%s">HIER</a></b>, um zur Logdatei �bersicht zur�ckzukehren.';
$lang['ctracker_log_manager_showlog']	  = 'Logdatei ansehen';
$lang['ctracker_log_manager_cell_1']	  = 'Datum / Zeit';
$lang['ctracker_log_manager_cell_2a']	  = 'Aufruf';
$lang['ctracker_log_manager_cell_2b']	  = 'Benutzername';
$lang['ctracker_log_manager_cell_3']	  = 'Referer';
$lang['ctracker_log_manager_cell_4']	  = 'UserAgent';
$lang['ctracker_log_manager_cell_5']	  = 'IP Adresse';
$lang['ctracker_log_manager_cell_6']	  = 'Remote Host';
$lang['ctracker_log_manager_sysmsg']	  = 'Letzte Bereinigung der Logdatei fand am <b>%s</b> statt.';


/*
 * Footer configuration
 */
$lang['ctracker_footer_head']			  = 'Footerverwaltung';
$lang['ctracker_footer_subhead']		  = 'Hier kannst Du ausw�hlen, welchen Footer CrackerTracker in Deinem Forum anzeigen soll. Wir bitten darum, dass der Footer und damit der Hinweis zu www.cback.de intakt bleibt!';
$lang['ctracker_select_footer']			  = 'Footer ausw�hlen';
$lang['ctracker_footer_saveit']			  = 'Footerlayout �bernehmen';
$lang['ctracker_footer_done']			  = '�nderungen am Footer Layout wurden erfolgreich gespeichert!';


/*
 * Maintenance Module in ACP
 */
$lang['ctracker_ma_unknown']			  = '<font color="#FFB900"><b>UNBEKANNT</b></font>';
$lang['ctracker_ma_secure']			  	  = '<font color="#1CBF00"><b>SICHER</b></font>';
$lang['ctracker_ma_warning']			  = '<font color="#FF0000"><b>WARNUNG</b></font>';
$lang['ctracker_ma_active']			  	  = '<font color="#1CBF00"><b>AKTIV</b></font>';
$lang['ctracker_ma_inactive']			  = '<font color="#FF0000"><b>INAKTIV</b></font>';
$lang['ctracker_ma_on']				  	  = 'EINGESCHALTET';
$lang['ctracker_ma_off']				  = 'AUSGESCHALTET';
$lang['ctracker_ma_ca']				  	  = '<font color="#1CBF00"><b>OK</b></font>';
$lang['ctracker_ma_ci']					  = '<font color="#FF0000"><b>NICHT GESETZT</b></font>';
$lang['ctracker_ma_head']				  = 'Wartung und Systempr�fung';
$lang['ctracker_ma_subhead']			  = 'Hier hast Du die M�glichkeit Wartungsfunktionen am CrackerTracker-System durchzuf�hren. Des Weiteren �berpr�ft dieses System automatisch die CrackerTracker Sicherheitsmodule auf Funktion und gibt Dir Hinweise zur Sicherheitsoptimierung Deines Systems.';
$lang['ctracker_ma_systest']			  = 'Automatischer Systemtest';
$lang['ctracker_ma_sectest']			  = 'Sicherheitstest';
$lang['ctracker_ma_maint']				  = 'Wartungsfunktionen';
$lang['ctracker_ma_name_1']				  = 'Wurm- & Exploitschutz-System';
$lang['ctracker_ma_name_2']				  = 'Variable Control Unit';
$lang['ctracker_ma_name_3']				  = 'IP, Proxy & UserAgent Protection Unit';
$lang['ctracker_ma_name_4']				  = 'Wurmheuristik Definitionssatz - Anzahl der Definitionen: <b>%s</b>';
$lang['ctracker_ma_syshead_1']			  = 'Sicherheitsmodul';
$lang['ctracker_ma_syshead_2']			  = 'Status';
$lang['ctracker_ma_seccheck_1']			  = 'Pr�fpunkt';
$lang['ctracker_ma_seccheck_2']			  = 'Version / Status';
$lang['ctracker_ma_seccheck_3']			  = 'Empfehlung';
$lang['ctracker_ma_seccheck_4']			  = 'Status';
$lang['ctracker_ma_scheck_1']			  = 'PHP Version (<a href="http://www.php.net" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_scheck_2']			  = '&raquo; PHP SAFE MODE';
$lang['ctracker_ma_scheck_3']			  = '&raquo; PHP GLOBALS';
$lang['ctracker_ma_scheck_4']			  = 'phpBB Version (<a href="http://www.phpbb.com" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_scheck_4a']			  = '&raquo; Visuelle Best�tigung';
$lang['ctracker_ma_scheck_4b']			  = '&raquo; Accountaktivierung';
$lang['ctracker_ma_scheck_5']			  = 'CBACK CrackerTracker (<a href="http://www.cback.de" target="_blank">Webseite besuchen</a>)';
$lang['ctracker_ma_chmod']				  = '<b>CHMOD777 Status:</b> ';
$lang['ctracker_ma_desc_link']			  = 'JETZT AUSF�HREN';
$lang['ctracker_ma_desc1']				  = '<b>IP, Proxy & UserAgent Tabelle leeren</b><br />Hiermit kannst Du <u>alle</u> Eintr�ge aus der IP, Proxy & UserAgent Tabelle entfernen.';
$lang['ctracker_ma_desc2']				  = '<b>Werkseinstellung: IP, Proxy & UserAgent Blocker</b><br />Hiermit kannst Du den Auslieferungszustand der IP, Proxy & UserAgent Datenbanktabelle wiederherstellen. Deine Filter gehen dabei verloren!';
$lang['ctracker_ma_desc3']				  = '<b>Login History l�schen</b><br />Hier kannst Du alle Eintr�ge in der Login History entfernen, unabh�ngig vom User und unabh�ngig von der eingestellten Speicherzahl pro User.';
$lang['ctracker_ma_desc4']				  = '<b>Datei-Hashpr�fungstabelle leeren</b><br />L�scht alle gespeicherten Eintr�ge in der Tabelle f�r den Datei-Hashcheck.';
$lang['ctracker_ma_desc5']				  = '<b>Sicherheitsscanner Tabelle leeren</b><br />L�scht alle Ergebnisse, die bei der Datei-Sicherheitspr�fung in der Datenbank gespeichert wurden.';
$lang['ctracker_ma_succ_main']			  = 'Vorgang erfolgreich ausgef�hrt!';
$lang['ctracker_ma_err_main']			  = 'Vorgang nicht erfolgreich ausgef�hrt!';


/*
 * Miserable User Module in ACP...
 */
$lang['ctracker_mu_success']			  = 'Der Benutzer wurde als "Miserable User" markiert und wird ab sofort Probleme beim Surfen auf Deinem Forum haben. ;)';
$lang['ctracker_mu_error_admin']		  = 'ADMINS oder MODs k�nnen nicht als Miserable User markiert werden!';
$lang['ctracker_mu_deleted']			  = 'Der gew�hlte Benutzer wurde erfolgreich von der Miserable User Benutzerliste entfernt.';
$lang['ctracker_mu_head']				  = 'Miserable User';
$lang['ctracker_mu_subhead']			  = 'Ein Benutzer verh�lt sich nicht so wie er soll, jedoch besteht die Bef�rchtung, dass er sich bei einem normalen Ban wieder mit anderem Account anmeldet oder genau das ist sogar schon passiert? Dann gibt es hier die Funktion "Miserable User", eine Funktion, welche relativ h�ufig gew�nscht wurde. Allerdings koppelt das CrackerTracker-System dies nicht an das "Wir l�sen unsinnige Fehlermeldungen aus" System an, welches leicht durchschaubar ist, sondern geht nach dem Prinzip "Don\'t feed the Monkey" vor: Wenn ein Benutzer als Miserable User markiert ist kann lediglich der Administrator seine Posts lesen. F�r andere Benutzer sind die Beitr�ge unsichtbar, folglich kann niemand auf den St�renfried eingehen bis es diesem langweilig wird und er das Forum von sich aus verl�sst.<br /><b>Hinweis: <u>Diese Funktion wirkt sich nur auf die Anzeige der Postings in einem Thread aus.</u> Mit "Zitat" oder "Suche" sieht man die Postings des "Miserable User" weiterhin!</b>';
$lang['ctracker_mu_select']				  = 'Benutzer als Miserable User markieren';
$lang['ctracker_mu_find']				  = 'Benutzernamen suchen';
$lang['ctracker_mu_send']				  = 'Benutzer eintragen';
$lang['ctracker_mu_entr']				  = 'Markierte Benutzer';
$lang['ctracker_mu_uname']				  = 'Eingetragener Benutzername';
$lang['ctracker_mu_remove']				  = 'Eintr�ge entfernen';
$lang['ctracker_mu_no_defined']			  = 'Zur Zeit sind keine Benutzer als "Miserable User" markiert.';


/*
 * Recovery feature in ACP
 */
$lang['ctracker_rec_head']				  = 'System Recovery';
$lang['ctracker_rec_subhead']			  = 'Hier hast Du die M�glichkeit, die Konfigurationstabelle Deines Forums zu sichern oder zur letzten funktionierenden Konfiguration zur�ckzukehren. Wenn Du die Funktion in den allgemeinen Einstellungen des CrackerTrackers aktiviert hast, dann wird die Konfigurationstabelle Deines Forums jedesmal gesichert, wenn Du die Allgemeine Forenkonfiguration �nderst. (ACHTUNG! Es handelt sich <b>NICHT</b> um ein komplettes Datenbankbackup!)<br /><br />Wenn Du nicht mehr ins ACP kommst nachdem Du Einstellungen ver�ndert hast, dann kannst Du die letzte als funktionierend bekannte Konfiguration auch �ber die Notfallkonsole des CrackerTrackers reaktivieren. Lese hierzu den Dateikommentar in der Datei <i>ctracker/emergency.php</i> f�r weitere Instruktionen zur Notfallwiederherstellung der Forenkonfiguration. Bitte beachte, dass diese Datei immer erst vor Benutzung freigegeben werden muss. Wie das geht steht ebenfalls im Dateikommentar.<br /><br /><b>ACHTUNG!</b> Diese Funktion sollte nur bei akuten Problemen benutzt werden!';
$lang['ctracker_rec_last_saved']		  = 'Letztes Backup der Konfigurationstabelle: <b>%s</b>';
$lang['ctracker_rec_never_saved']		  = 'Die Konfigurationstabelle wurde bislang noch nicht gesichert!';
$lang['ctracker_rec_backup']			  = 'Backup der Konfigurationstabelle';
$lang['ctracker_rec_restore']			  = 'Wiederherstellen der zuletzt gespeicherten Konfigurationstabelle';
$lang['ctracker_rec_succ']				  = 'Der Datenbankvorgang wurde erfolgreich ausgef�hrt.';
$lang['ctracker_rec_pab']				  = 'Wiederherstellung erst nach einem erfolgreichen Backup m�glich!';


/*
 * Language Strings used at multiple places
 */
$lang['ctracker_error_updating_userdata'] = 'CBACK CrackerTracker konnte die Datenbankoperationen in der Benutzertabelle nicht ausf�hren.';
$lang['ctracker_error_database_op']       = 'CBACK CrackerTracker konnte die Datenbankoperation nicht korrekt durchf�hren.';
$lang['ctracker_message_dialog_title']    = 'CBACK CrackerTracker Professional';


/*
 * Language Strings used for the footer itself
 */
$lang['ctracker_fdisplay_imgdesc']		  = 'Forensicherheit';
$lang['ctracker_fdisplay_n'] 			  = '<a href="http://www.cback.de" target="_blank">Sicherheit</a> durch <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a>.';
$lang['ctracker_fdisplay_c'] 			  = 'Gesch�tzt durch <a href="http://www.cback.de" target="_blank">CBACK CrackerTracker</a><br /><b>%s</b> abgewehrte Angriffe.';
$lang['ctracker_fdisplay_g'] 			  = '<b>%s</b> Angriffe abgewehrt';


/*
 * Language Strings for the class_ct_database.php
 */
$lang['ctracker_error_loading_config']    = 'Die CBACK CrackerTracker Konfiguration konnte nicht von der Datenbank geladen werden. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_updating_config']   = 'Die CBACK CrackerTracker Konfiguration konnte nicht aktualisiert werden. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_loading_blocklist'] = 'Die CBACK CrackerTracker Blockliste konnte nicht von der Datenbank geladen werden. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_insert_blocklist']  = 'Der Datensatz konnte nicht in die CBACK CrackerTracker Blockliste eingef�gt werden. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_delete_blocklist']  = 'Der Datensatz konnte nicht von der CBACK CrakerTracker Blockliste entfernt werden. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_login_history']     = 'Es trat ein Fehler bei den Datenbankoperationen innerhalb der CBACK CrackerTracker Login History auf. Hast Du das Installationsskript ausgef�hrt und die Datei "includes/constants.php" korrekt editiert?';
$lang['ctracker_error_del_login_history'] = 'Die CBACK CrackerTracker Login History Tabelle konnte nicht geleert werden.';


/*
 * Language Strings used in class_ct_userfunctions.php
 */
$lang['ctracker_info_search_time']        = "Aus Sicherheitsgr�nden ist die Suche nur %s mal innerhalb %s Sekunden m�glich. Diese Anzahl wurde �berschritten. Daher musst Du nun <span id=\"waittime\">%s</span> Sekunden warten, bis Du den n�chsten Suchvorgang ausf�hren kannst. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>";
$lang['ctracker_info_regist_time']        = "Aus Sicherheitsgr�nden ist eine Registrierung nur alle %s Sekunden m�glich. Diese Anzahl wurde �berschritten. Daher musst Du nun <span id=\"waittime\">%s</span> Sekunden warten, bis Du eine weitere Registrierung vornehmen kannst. <script type=\"text/javascript\"><!-- \n var wait = %s; var waitt = wait * 1000; for(i=1; i <= wait; i++) { window.setTimeout(\"newoutput(\" + i + \")\", i * 1000); } function newoutput(waitcounter) { if ( (waitt/1000) == waitcounter ) { document.getElementById(\"waittime\").innerHTML = \"0\"; } else { document.getElementById(\"waittime\").innerHTML = (waitt/1000) - waitcounter; } } //--></script>";
$lang['ctracker_info_regip_double']		  = 'Es fand bereits eine Registrierung von dieser IP Adresse statt. Aus Sicherheitsgr�nden darf man sich nacheinander lediglich einmal von der gleichen IP Adresse registrieren!';
$lang['ctracker_info_profile_spammer']	  = 'Dieser Registrierversuch wurde als Spammer-Account identifiziert! Wenn Du denkst, dass das ist eine fehlerhafte Erkennung ist, dann wende Dich bitte an den Administrator dieses Forums, damit dieser Dir einen Account erstellen kann!';
$lang['ctracker_info_password_minlng']    = 'Der Administrator hat eingestellt, dass das Passwort aus mindestens <b>%s</b> Zeichen bestehen muss. Dein gew�hltes Passwort war aber nur <b>%s</b> Zeichen lang. Bitte klicke auf "Zur�ck" um die Angaben zu korrigieren.';
$lang['ctracker_info_password_cmplx']	  = 'Der Administrator hat eingestellt, dass das Passwort <b>mindestens</b> folgende Dinge enthalten muss: %s';
$lang['ctracker_info_password_cmplx_1']	  = 'Zahlen';
$lang['ctracker_info_password_cmplx_2']	  = 'Kleinbuchstaben';
$lang['ctracker_info_password_cmplx_3']	  = 'Gro�buchstaben';
$lang['ctracker_info_password_cmplx_4']	  = 'Sonderzeichen';
$lang['ctracker_info_pw_expired']		  = 'Der Administrator hat eingestellt, dass ein Passwort nur f�r <b>%s Tage</b> g�ltig sein darf. Wir empfehlen aus Sicherheitsgr�nden, dass Du Dein Passwort jetzt �nderst. Klicke hierzu auf "Profil".';


/*
 * Language Strings used in ct_visual_confirm.php
 */
$lang['ctracker_login_wrong']   = 'Der eingegebene visuelle Best�tigungscode war leider nicht korrekt!';
$lang['ctracker_code_dbconn']   = 'Konnte visuellen Best�tigungscode nicht von der Datenbank laden! Wenn Du ein phpBB Plus hast musst Du die phpBB-eigenen Module f�r die Visuelle Best�tigung nachinstallieren. Lies hierzu bitte im Ordner "add_ons" des CrackerTracker MODPaketes die Hinweise zu phpBB Plus!';
$lang['ctracker_login_success'] = 'Dein Account wurde nun wieder freischaltet.<br /><br />Klicke <a href="%s">HIER</a> um zur Loginseite zu gelangen.';
$lang['ctracker_code_count']    = 'Die maximale Anzahl der Eingabeversuche f�r die Visuelle Best�tigung wurde f�r diese Session �berschritten.';


/*
 * Language Strings used in ctracker_login.php
 */
$lang['ctracker_login_title']   = 'CrackerTracker Accountfreischaltung';
$lang['ctracker_login_logged']  = 'Eingeloggte Benutzer k�nnen diese Seite nicht aufrufen.';
$lang['ctracker_login_confim']  = 'Die eingestellte Anzahl fehlerhafter Loginversuche f�r Deinen Account wurde erreicht. Zum Schutze Deines Accounts wurde dieser nun f�r den Login gesperrt und muss von Dir �ber die visuelle Best�tigung wieder freigeschaltet werden.<br /><br />Bitte trage dazu nun den folgenden Buchstaben- und Zahlencode in das Eingabefeld ein und dr�cke auf den Button "Freischalten", um Deinen Account wieder freizuschalten. Wenn dies getan ist, kannst Du Dich wie gewohnt �ber die Loginseite einloggen.';
$lang['ctracker_login_button']  = 'Freischalten';


/*
 * Language Strings for IP Warning Engine
 */
$lang['ctracker_ipwarn_info']	= 'IP Range Scanning f�r Deinen Account ist <b>%s</b>';
$lang['ctracker_ipwarn_prof']	= 'IP Range Scanner';
$lang['ctracker_ipwarn_pdes']	= 'Der IP Range Scanner pr�ft, wenn aktiviert, die sogenannte IP Range auf Ver�nderungen. Wenn sich jemand mit Deinem Account von einer anderen Position aus eingeloggt hat, wirst Du dar�ber mit einer kurzen Nachricht informiert (Nat�rlich auch, wenn Du Dich selbst von verschiedenen Positionen aus einloggst. ;-)). Bitte schaue im Footer nach, ob die Warnfunktion noch aktiviert ist, falls ein Angreifer diese deaktiviert hat. Die Protokollierung bleibt jedoch bestehen, damit Du nach der Aktivierung noch die M�glichkeit hast Ver�nderungen zu pr�fen.';
$lang['ctracker_ipwarn_chng']	= '<b>&raquo; HINWEIS &laquo;</b><br />Die IP Range f�r Deinen Account hat sich ver�ndert. Der aktuelle Login fand von <b>%s</b> statt, der vorherige von <b>%s</b>. Wenn Du Dich nicht selbst von einer anderen Position aus eingeloggt hast, dann besteht die M�glichkeit, dass jemand unberechtigt Deinen Account benutzt hat!';
$lang['ctracker_ipwarn_welc']	= '<b>&raquo; HINWEIS &laquo;</b><br />Der IP Range Scanner f�r Deinen Account ist noch nicht initialisiert. Dies ist nach 2 Logins der Fall. Wenn Du den Scanner jetzt initialisieren m�chtest, dann logge Dich bitte zweimal aus und wieder ein.';
$lang['ctracker_ipwarn_send']	= 'Einstellungen �bernehmen';


/*
 * Language Strings for Login History
 */
$lang['ctracker_lhistory_h']	= 'Login History';
$lang['ctracker_lhistory_i']	= 'Hier kannst Du das Protokoll Deiner letzten <b>%s</b> Logins ansehen und anhand der IP Adressen und Zeiten �berpr�fen, ob auch wirklich nur Du derjenige bist, der diesen Account nutzt. Sollten unbekannte Loginzeiten oder IP Adressen in der Login History auftreten, besteht die M�glichkeit, dass jemand Dein Passwort ausgesp�ht hat. In diesem Fall solltest Du das Passwort f�r Deinen Account �ndern und ggf. Deinen Mailaccount �berpr�fen.';
$lang['ctracker_lhistory_h1']	= 'Login Datum und Zeit';
$lang['ctracker_lhistory_h2']	= 'gespeicherte IP Adresse';
$lang['ctracker_lhistory_nav']	= 'CrackerTracker Login History';
$lang['ctracker_lhistory_err']  = 'Sie m�ssen eingeloggt sein, um diese Funktionen des CrackerTrackers nutzen zu k�nnen!';
$lang['ctracker_lhistory_off']  = 'Login History wurde vom Admin deaktiviert.';


/*
 * Other Language Strings used in the Board itself
 */
$lang['ctracker_gmb_link']		= 'Der Administrator hat einen wichtigen Hinweis f�r alle Benutzer hinterlassen. Dieser kann nachfolgend abgerufen werden:<br /><br /><a href="%s">%s</a><br />';
$lang['ctracker_gmb_mark']		= 'Nachricht als gelesen markieren';
$lang['ctracker_gmb_markip']	= 'Hinweis ausblenden';
$lang['ctracker_gmb_loginlink']	= 'Loginsicherheit';
$lang['ctracker_gmb_1stadmin']	= 'Die Berechtigungen oder Einstellungen des ersten Admins k�nnen nicht ver�ndert werden!';
$lang['ctracker_gmb_pu_1']		= '<b>CBACK CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Port 21 wird f�r FTP Dienste verwendet. Wenn das Forum auf diesen Port umgestellt wird, ist es normalerweise nicht mehr lauff�hig, da Browser diesen Port ebenfalls als FTP Dienst handhaben.';
$lang['ctracker_gmb_pu_2']		= '<b>CBACK CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Die Sessionl�nge ist zu klein eingestellt! Du wirst dadurch m�glicherweise st�ndig aus dem Forum ausgeloggt, bevor Du die Einstellung wieder korrigieren kannst.';
$lang['ctracker_gmb_pu_3']		= '<b>CBACK CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Der Skript Pfad beginnt und/oder endet entweder nicht mit einem Slash (/www/) oder besteht nicht ausschlie�lich aus dem Slash (/)!';
$lang['ctracker_gmb_pu_4']		= '<b>CBACK CrackerTracker - Erkennung von Fehlkonfiguration</b><br /><br />Der Servername darf nicht mit einem Slash (/) enden!';
$lang['ctracker_binf_spammer']	= 'Das Spammerschutz-System beobachtet Dich! Du hast die h�chste eingestellte Anzahl Posts innerhalb von %s Sekunden erreicht. Wenn Du vor <b>%s</b> Sekunden wieder versuchst einen Post zu schreiben, wird Dein Benutzeraccount <b>gesperrt!</b><br /><br />Bitte warte also die angegebene Zeit, bis Du erneut postest. Wir bitten die Unannehmlichkeiten zu entschuldigen, dies ist lediglich eine Ma�nahme zur Sicherheit des Forums.';
$lang['ctracker_binf_sban']		= 'Das Spammer-Blocksystem hat nun Deinen Benutzeraccount gebannt / gesperrt, da Du als Spammer identifiziert wurdest.';
$lang['ctracker_sendmail_info'] = 'Aus Sicherheitsgr�nden kannst Du leider nur alle %s Minuten eine EMail senden!';
$lang['ctracker_pwreset_info']	= 'Aus Sicherheitsgr�nden ist es leider nur m�glich, dass Du Dir alle %s Minuten die Passwort-Reset Mail zuschicken kannst. Wenn Du Deinen Account dringend ben�tigst und Probleme beim Versenden der Passwort Reset Mail aufgetreten sind, dann kontaktiere bitte den Administrator dieses Forums!';
$lang['ctracker_vc_guest_post'] = 'Visuelle Best�tigung f�r G�ste';
$lang['ctracker_vc_guest_expl'] = 'Bitte trage den nachfolgenden Zahlen- / Buchstabencode in das Eingabefeld ein bevor Du Deinen Post abschickst. F�r G�ste dieses Forums ist diese Ma�nahme zum Schutz vor automatischen Spambots erforderlich.';

?>