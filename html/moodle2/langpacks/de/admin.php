<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'admin', language 'de', branch 'MOODLE_31_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Kein Zugriff';
$string['accounts'] = 'Nutzerkonten';
$string['addcategory'] = 'Kursbereich hinzufügen';
$string['additionalhtml'] = 'Zusätzliches HTML';
$string['additionalhtml_desc'] = 'Die folgenden Felder erlauben die Eingabe von HTML-Code, der automatisch auf jeder Seite eingefügt wird. Vorgesehen sind Anweisungen innerhalb des HEAD-Bereichs, direkt am Anfang des BODY-Bereichs und direkt am Ende des BODY-Bereichs. <br /><br />Auf diese Weise können benutzerdefinierte Kopf- oder Fußzeilen auf jeder Seite eingefügt werden. Zur Einbindung von externen Diensten wie Google Analytics ist es sehr einfach, die notwendigen Anweisungen hier einzutragen und unabhängig vom gewählten Design zu benutzen.';
$string['additionalhtmlfooter'] = 'Vor dem Schließen von BODY';
$string['additionalhtmlfooter_desc'] = 'Dieser HTML-Code wird auf jeder Seite direkt vor dem Ende des BODY-Bereichs eingefügt';
$string['additionalhtmlhead'] = 'Innerhalb von HEAD';
$string['additionalhtmlhead_desc'] = 'Dieser HTML-Code wird auf jeder Seite innerhalb des HEAD-Bereichs eingefügt';
$string['additionalhtml_heading'] = 'Zusätzlicher HTML-Code für jede Seite
';
$string['additionalhtmltopofbody'] = 'Nach dem Öffnen von BODY';
$string['additionalhtmltopofbody_desc'] = 'Dieser HTML-Code wird auf jeder Seite direkt am Anfang des BODY-Bereichs eingefügt';
$string['admincategory'] = 'Bereich: {$a}';
$string['adminseesall'] = 'Administrator/innen sehen alles';
$string['adminseesallevents'] = 'Administrator/innen sehen alle Termine';
$string['adminseesownevents'] = 'Administrator/innen sehen nur eigene Termine';
$string['advancedfeatures'] = 'Zusatzoptionen';
$string['allcountrycodes'] = 'Alle Ländercodes';
$string['allowbeforeblock'] = 'Zugelassene IP-Adressen vorrangig behandeln';
$string['allowbeforeblockdesc'] = 'Standardmäßig wird die Liste der gesperrten IP-Adressen zuerst berücksichtigt. Falls diese Einstellung aktiviert ist, hat die Liste der zugelassenen IP-Adressen Vorrang.';
$string['allowblockstodock'] = 'Blöcke im Dock erlauben';
$string['allowcategorythemes'] = 'Designwechsel im Kursbereich erlauben';
$string['allowcoursethemes'] = 'Designwechsel im Kurs erlauben';
$string['allowediplist'] = 'Zugelassene IP-Adressen';
$string['allowemailaddresses'] = 'E-Mail-Domains vorgeben';
$string['allowframembedding'] = 'Frame-Einbettung erlauben';
$string['allowframembedding_help'] = 'Diese Option ermöglicht das Einbetten dieser Website als Frame in einem fremden System. Das Einschalten dieser Option wird nur bei der Verwendung des Einschreibe-Plugins \'Veröffentlichen als LTI-Tool\' empfohlen. Ansonsten sollte die Option aus Sicherheitsgründen deaktiviert sein.';
$string['allowguestmymoodle'] = 'Dashboard für Gäste erlauben';
$string['allowobjectembed'] = 'object/embed erlauben';
$string['allowthemechangeonurl'] = 'Designwechsel über URL erlauben';
$string['allowuserblockhiding'] = 'Blöckeminimierung erlauben';
$string['allowuserswitchrolestheycantassign'] = 'Rollenwechsel für Nutzer/innen erlauben, die kein Recht zur Rollenzuweisung besitzen';
$string['allowuserthemes'] = 'Designwechsel für Nutzer/innen erlauben';
$string['alternativefullnameformat'] = 'Vollständiger Name - Alternative';
$string['alternativefullnameformat_desc'] = 'Legen Sie hier fest wie Namen für Nutzer angezeigt werden, die über die Berechtigung  \'viewfullname\' verfügen. Dies sind normalerweise: Manager, Trainer und Trainer ohne Bearbeitungsrecht. Es können die gleichen Platzhalter verwendet werden wie für die Einstellungen des \'Vollständigen Namens\'.';
$string['appearance'] = 'Darstellung';
$string['aspellpath'] = 'Pfad zu <i>aspell</i>';
$string['authentication'] = 'Authentifizierung';
$string['authpreventaccountcreation'] = 'Accounterstellung während Authentifizierung verhindern';
$string['authpreventaccountcreation_help'] = 'Wenn sich ein Benutzer authentifiziert, wird auf der Site automatisch ein Account angelegt, wenn dieser noch nicht existiert. Diese Option sollte aktiviert werden wenn eine externe Datenbank wie z.B. LDAP zur Authentifizierung genutzt wird und sich nur bereits existierende Nutzer authentifizieren sollen. Neue Accounts müssen dann von Hand oder cvs Nutzerupload angelegt werden. Hinweis: diese Einstellung gilt nicht für die MNet-Authentifizierung.';
$string['authsettings'] = 'Übersicht';
$string['autolang'] = 'Sprache erkennen';
$string['autologinguests'] = 'Auto-Login für Gäste';
$string['availablelicenses'] = 'Verfügbare Lizenzen';
$string['availablesearchareas'] = 'Verfügbare Bereiche zur Suche';
$string['availableto'] = 'Verfügbar für';
$string['backgroundcolour'] = 'LaTeX Transparenzfarbe';
$string['backups'] = 'Sicherung';
$string['backup_shortname'] = 'Kurstitel als Name für Sicherungsdatei verwenden';
$string['backup_shortnamehelp'] = 'Den Kurstitel und nicht die Kurs-ID-Nummer als Teil der Bezeichnung der Sicherungsdatei verwenden.';
$string['badwordsconfig'] = 'Geben Sie eine kommagetrennte Liste der Wörter ein, die zensiert werden sollen.';
$string['badwordsdefault'] = 'Wenn die Liste leer ist, wird die Wortliste aus dem Sprachpaket verwendet.';
$string['badwordslist'] = 'Wortzensurliste';
$string['blockediplist'] = 'Gesperrte IP-Adressen';
$string['blockeditingmenu'] = 'Menü für Blockbearbeitung';
$string['blockeditingmenu_desc'] = 'Wenn diese Option aktiviert ist, werden die meisten der Werkzeuge zur Blockbearbeitung in einem Dropdown-Menü angezeigt. Dies sorgt für mehr Übersichtlichkeit.';
$string['blockinstances'] = 'Instanzen';
$string['blockmultiple'] = 'Mehrfach';
$string['blockprotect'] = 'Gegen Löschen schützen';
$string['blockprotect_help'] = 'Wenn Sie bestimmte Blöcke sperren, kann niemand Instanzen neu hinzufügen oder löschen. (Man kann sie natürlich wieder entsperren, wenn Instanzen bearbeitet werden müssen.)

Dies soll dazu dienen, um Blocks wie die Navigation oder die Einstellungen zu schützen, die sehr schwer wiederherzustellen sind, wenn sie aus Versehen gelöscht wurden.';
$string['blocksettings'] = 'Übersicht';
$string['blockunprotect'] = 'Schutz aufheben';
$string['bloglevel'] = 'Blogsichtbarkeit';
$string['bookmarkadded'] = 'Lesezeichen hinzugefügt';
$string['bookmarkalreadyexists'] = 'Sie haben für diese Seite bereits ein Lesezeichen gesetzt.';
$string['bookmarkdeleted'] = 'Lesezeichen gelöscht';
$string['bookmarkthispage'] = 'Seite als Lesezeichen speichern';
$string['cacheapplication'] = 'Anwendungs-Cache';
$string['cacheapplicationhelp'] = 'Elemente im Cache gelten für alle Nutzer/innen und verfallen erst nach einer gewissen Zeit';
$string['cachejs'] = 'JavaScript Cache';
$string['cachejs_help'] = 'Bei Javascript führen Komprimierung und Caching zu höherer Leistung. Diese Option sollte für Produktivsysteme unbedingt aktiviert sein. Entwickler möchten die Option eventuell deaktivieren.';
$string['cacherequest'] = 'Abfrage-Cache';
$string['cacherequesthelp'] = 'Nutzerspezifischer Cache, der nach Bearbeitung der Abfrage abläuft. Er ersetzt Bereiche wo statische Speicher verwendet werden.';
$string['cachesession'] = 'Session-Chache';
$string['cachesessionhelp'] = 'Nutzerspezifischer Zwischenspeicher, der die Session beschleunigt und mit dem Abmelden gelöscht wird';
$string['cachesettings'] = 'Cache-Einstellungen';
$string['caching'] = 'Caching';
$string['calendarexportsalt'] = 'Exportschlüssel für den Kalender';
$string['calendarsettings'] = 'Kalender';
$string['calendartype'] = 'Kalendertyp';
$string['calendartype_desc'] = 'Wählen Sie den standardmäßigen Kalendertyp für die gesamte Website. Diese Einstellung kann in den Kurseinstellungen oder in den persönlichen Nutzerprofilen geändert werden.';
$string['calendar_weekend'] = 'Tage am Wochenende';
$string['cannotdeletemodfilter'] = 'Der Filter \'{$a->filter}\' kann nicht deinstalliert werden, weil er Teil des Moduls \'{$a->module}\' ist.';
$string['cannotuninstall'] = '{$a} kann nicht deinstalliert werden.';
$string['cfgwwwrootslashwarning'] = 'In der Datei config.php ist die Einstellung für $CFG->wwwroot  falsch eingetragen. Das Zeichen \'/\' am Ende muss gelöscht werden, weil es andernfalls Probleme verursachen kann. Siehe <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['cfgwwwrootwarning'] = 'In der Datei config.php ist die Einstellung für $CFG->wwwroot  falsch eingetragen. Der Text passt nicht zu der URL, mit der die Seite aufgerufen wurde. Eine Änderung ist notwendig, weil es andernfalls zu Problemen kommen kann. Siehe <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['change'] = 'Ändern';
$string['checkboxno'] = 'Nein';
$string['checkboxyes'] = 'Ja';
$string['choosefiletoedit'] = 'Wählen Sie eine Datei zur Bearbeitung';
$string['cleanup'] = 'Aufräumarbeiten';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 'y';
$string['cliincorrectvalueerror'] = 'Fehler: Falscher Wert "{$a->value}" für "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Falscher Wert - bitte nochmal';
$string['clistatusdisabled'] = 'Status: deaktiviert';
$string['clistatusenabled'] = 'Status: aktiviert';
$string['clistatusenabledlater'] = 'Der CLI Wartungsmodus wird aktiviert in {$a}';
$string['clitypevalue'] = 'Wert eingeben';
$string['clitypevaluedefault'] = 'Wert eingeben oder Standardwert benutzen ({$a})';
$string['cliunknowoption'] = 'Nicht erkannte Optionen:
  {$a}
Hilfe wird über die Option --help angezeigt.';
$string['cliupgradefinished'] = 'Die Aktualisierung wurde erfolgreich beendet';
$string['cliupgradenoneed'] = 'Für die installierte Version {$a} ist kein Upgrade notwendig. Danke für den Versuch!';
$string['cliyesnoprompt'] = 'y (yes=ja) oder n (no=nein) eingeben';
$string['commentsperpage'] = 'Angezeigte Kommentare pro Seite';
$string['commonactivitysettings'] = 'Grundeinstellungen';
$string['commonfiltersettings'] = 'Grundeinstellungen';
$string['commonsettings'] = 'Grundeinstellungen';
$string['componentinstalled'] = 'Komponente installiert';
$string['computedfromlogs'] = 'Logdaten seit {$a}';
$string['condifmodeditdefaults'] = 'Diese Einträge werden standardmäßig benutzt, wenn eine Aktivität oder ein Material neu angelegt wird.';
$string['confeditorhidebuttons'] = 'Wählen Sie die Optionen, die im HTML-Editor verborgen sein sollen.';
$string['configallcountrycodes'] = 'Diese Länderliste wird an unterschiedlichen Stellen benutzt, z.B. im Nutzerprofil.
Falls das Feld leer bleibt, wird standardmäßig die gesamte Liste aus der Datei countries.php im englischen Sprachpaket benutzt.
Dies ist die Liste gemäß ISO 3166-1.
Über eine kommagetrennte Liste können Sie die Auswahlmöglichkeiten einschränken, z.B. \'GB,FR,ES\'.
Falls Sie weitere, nicht standardmäßige Codes, ergänzen möchten, so müssen Sie diese Codes in der Datei countries.php in Ihrem Sprachpaket hinzufügen.';
$string['configallowassign'] = 'Die linksseitig genannten Rolleninhaber dürfen alle rechts in den Spalten markierten Rollen an andere Nutzer/innen zuweisen';
$string['configallowblockstodock'] = 'Diese Option legt fest, ob Nutzer/innen die Blöcke in ein spezielles Dock ablegen können, wobei nicht alle Designs diese Möglichkeit unterstützen.';
$string['configallowcategorythemes'] = 'Wenn Sie diese Option aktivieren, können Designs auf Kategorieebene gesetzt werden. Dies wirkt sich gleichzeitig auf alle Unterkategorien und Kurse aus, falls diese nicht wiederum eigene Designs verwenden. ACHTUNG: Kategorie-Designs können zu einer Reduzierung der Arbeitsgeschwindigkeit führen!!';
$string['configallowcoursethemes'] = 'Mit der Aktivierung erlauben Sie die Auswahl kursspezifischer Designs. Ein Kursdesign hat Vorrang vor allen anderen Designfestlegungen (Website, Kursbereich, Nutzer, Session).';
$string['configallowemailaddresses'] = 'Wenn Sie die Eingabe bestimmter E-Mail-Domains bei der Neueingabe verbindlich vorgeben möchten, tragen Sie hier bitte eine leerzeichengetrennte Liste der zulässigen Domains ein, z.B. <strong>unserefirma.de</strong>. Alle übrigen Domains werden zurückgewiesen. Um Subdomains zu erlauben, fügen Sie die Domain mit einem führenden Punkt \'.\' hinzu.';
$string['configallowguestmymoodle'] = 'Diese Option erlaubt Gästen den Zugriff auf das Dashboard. Andernfalls werden Gäste auf die Startseite geleitet.';
$string['configallowobjectembed'] = 'Aus Sicherheitsgründen dürfen normale Nutzer/innen keine Multmedia-Objekte über die Tags EMBED und OBJECT in den HTML-Code einbinden. Aktivieren Sie diese Option, wenn Sie die Tags erlauben wollen. Multimedia-Objekte sind alternativ über den Mediafilter nutzbar, ohne Sicherheitsprobleme zu verursachen.';
$string['configallowoverride'] = 'Die linksseitig genannten Rolleninhaber dürfen alle nach rechts markierten Rollen ändern';
$string['configallowoverride2'] = 'Wählen Sie, welche Rollen durch eine Rolle aus der linken Spalte verändert werden dürfen. <br />Beachten Sie dabei, dass diese Einstellungen ausschließlich für Nutzer/innen gelten, für die die Rechte moodle/role:override oder moodle/role:safeoverride gesetzt sind.';
$string['configallowswitch'] = 'Legen Sie fest, in welche anderen Rollen ein Nutzer von der aktuellen Rollen aus wechseln kann. Zusätzlich zu dieser Einstellung ist die Berechtigung moodle/role:switchroles für die aktuelle Rolle erforderlich. <br />Anmerkung: Der Wechsel in eine Rolle kann nur erfolgen, wenn diese die Berechtigung moodle/course:view besitzen und nicht die Berechtigung moodle/site:doanything. Einige Spalten sind daher u.U. deaktiviert.';
$string['configallowthemechangeonurl'] = 'Wenn diese Option aktiv ist, kann das Design jeder Seite über den URL-Zusatz \'theme={themename}\' geändert werden, z.B. als  moodledomain.de/?theme=afterburner oder als moodledomain.de/course/view.php?id=2&theme=afterburner';
$string['configallowuserblockhiding'] = 'Möchten Sie das Minimieren von Blöcken zulassen? Die Blöcke werden dabei bis auf die Kopfzeile reduziert. Jede Person beeinflusst ausschließlich ihre eigene Nutzeransicht.';
$string['configallowuserswitchrolestheycantassign'] = 'Standardmäßig besteht für das Recht zum Rollenwechsel die Notwendigkeit, dass jemand das Recht moodle/role:assign besitzt. Falls diese Einstellung aktiviert ist, entfällt diese Notwendigkeit. <br />Die verfügbaren Rollen, die im Dropdown-Menü "Rolle wechseln..." angezeigt werden, sind nur durch die Einstellungen in der Tabelle "Rollenzuweisungen erlauben" beschränkt. Es wird unbedingt empfohlen, dass diese Tabelle niemandem erlaubt, zu höheren Rollen mit mehr Rechten zu wechseln als ihm ursprünglich zugewiesen wurden.';
$string['configallowuserthemes'] = 'Die Einstellung erlaubt allen Nutzer/innen, ein eigenes Design auszuwählen. Damit wird das Design der Website überschrieben, aber keine kursspezifische Design-Vorgabe.';
$string['configallusersaresitestudents'] = 'Mit dieser Option legen Sie den Zugriff zu den Lernaktivitäten auf der Startseite fest. Wenn Sie \'Ja\' auswählen, können alle eingetragenen Nutzer/innen die Lernaktivitäten auf der Startseite durchführen. Wenn Sie \'Nein\' auswählen, können nur diejenigen, die derzeit in mindestens einem Kurs eingetragen sind, die Lernaktivitäten auf der Startseite ausführen. Nur Administrator/innen und speziell zugelassene Trainer/innen dürfen die Aktivitäten auf der Startseite einrichten und bearbeiten.';
$string['configauthenticationplugins'] = 'Bitte wählen Sie die Plugins zur Authentifizierung aus, die Sie benutzen möchten, und ordnen Sie diese in eine Reihenfolge der Nutzung.</br>
<b>Hinweis:</b> Bei einer späteren Deaktivierung von Authentifizierungsverfahren kann es passieren, dass Nutzer, die mit dem deaktivierten Verfahren registriert wurden, keinen Zugang mehr erhalten. Prüfen Sie dies sorgfältig.</br>';
$string['configautolang'] = 'Leitet die Standardsprache von den Browsereinstellungen des Nutzers ab. Wenn die Funktion deaktiviert ist wird die Default-Einstellung für die Sprache der Moodle-Installation verwendet.';
$string['configautologinguests'] = 'Sollen Gäste automatisch eingeloggt werden, wenn der Kurs den Zugang für Gäste erlaubt?';
$string['configbloglevel'] = 'Diese Einstellung erlaubt es, die Sichtbarkeit von Blogeinträgen für dieses Moodle zu beschränken. Beachten Sie, dass die Einstellung den Maximalrahmen beim Lesen festlegt, nicht aber den Blogtyp beim Schreiben ändert. Sie können das Blogsystem auch vollständig deaktivieren.';
$string['configcalendarcustomexport'] = 'Eigenen Datumsbereich beim Kalenderexport aktivieren';
$string['configcalendarexportsalt'] = 'Dieser Zufallstext (hash salt) wird benutzt, um die Sicherheit der Authentifikationstoken für den Kalenderexport zu erhöhen. Bitte beachten Sie, dass alle aktuellen Token ungültig werden, wenn Sie diesen Text ändern.';
$string['configcookiehttponly'] = 'Diese Funktion aktiviert neue Funktionen unter PHP 5.2.0. Um bestimmte XSS-Angriffe zu verhindern, werden Cookies nur über echte HTTP--Anfragen versandt. Cookies sollten nicht für Skripte zugänglich sein. Diese Funktion wird nicht von allen Browsern unterstützt. Es kann auch sein, dass im aktuellen Code noch nicht überall die Funktion unterstützt wird.';
$string['configcookiesecure'] = 'Wenn Ihr Server über HTTPS-Verbindungen erreicht wird, ist es empfehlenswert die Funktion zum Übertragen sicherer Cookies zu aktivieren. Wenn die Funktion aktiviert wird müssen Sie sicherstellen, dass der Server nicht über HTTP-Verbindungen erreichbar ist bzw. eine Umleitung an https:// Adressen besteht und idealerweise HSTS-Header versendet werden. Falls die <em>wwwroot</em> Adresse nicht mit https:// beginnt wird die Einstellung automatisch wieder deaktiviert.';
$string['configcountry'] = 'Diese Option legt das Land fest, das als Vorgabe für neue Nutzerkonten eingetragen ist. Wenn Nutzer/innen ihr Land selber eintragen sollen, lassen Sie das Feld leer.';
$string['configcourseoverviewfilesext'] = 'Liste von Dateitypen, die für die Kursbeschreibung erlaubt sind (Komma getrennt)';
$string['configcourseoverviewfileslimit'] = 'Diese Option legt fest, wie viele Dateien maximal in einer Kursbeschreibung hinzugefügt werden dürfen.';
$string['configcourserequestnotify'] = 'Anmeldename der Person, die bei einer Kursanfrage benachrichtigt werden soll';
$string['configcourserequestnotify2'] = 'Nutzer/innen, die benachrichtigt werden sollen, wenn ein Kurs angefordert wird. Es werden nur Nutzer/innen gelistet, die eine Kursanfrage annehmen dürfen.';
$string['configcoursesperpage'] = 'Geben Sie die Kursanzahl an, die pro Seite in einer Kursliste gezeigt werden soll.';
$string['configcourseswithsummarieslimit'] = 'Diese Option legt fest, wie viele Kurse mit Beschreibung in einer Kursübersicht maximal angezeigt werden. Bei einer größeren Kursanzahl wird eine andere Darstellung gewählt.';
$string['configcronclionly'] = 'Die Ausführung von cron.php im Webbrowser könnte vertrauliche Informationen anzeigen. Deswegen wird empfohlen, cron.php ausschließlich über die Kommandozeile auszuführen oder im Webbrowser zusätzlich ein Cron-Kennwort zu verlangen.';
$string['configcronremotepassword'] = 'Dies bedeutet, dass das Script cron.php nicht im Webbrowser aufgerufen werden kann, ohne das Kennwort folgendermaßen an die URL anzuhängen: <pre>
http://www.beispiel.de/admin/cron.php?password=geheim
</pre>Falls das Feld leer bleibt, wird kein Kennwort benötigt.';
$string['configcurlcache'] = 'Speicherzeit für cURL Cache (in Sekunden)';
$string['configcustommenuitems'] = 'Das eigene Menü wird auf allen Seiten in der Kopfzeile angezeigt.

Jeder Menüpunkt steht in einer eigenen Zeile. Jede Zeile besteht aus dem gezeigten Text, einer URL (optional), einem Tooltipp (optional) und einer Sprachzuordnung (optional, falls ein Menüpunkt nur mit bestimmten Sprachen sichtbar sein soll).

Die Trennung erfolgt jeweils durch einen senkrechten Strich (|). Eine Struktur mit Untermenüs wird über Bindestriche (-) geregelt, Trennlinien werden mit dem Rautenzeichen (#) angelegt.
<pre>
Moodle Community|http://moodle.org
-Moodle Support|http://moodle.org/support
-#
-Moodle Entwickler|http://moodle.org/development
--Moodle Tracker|http://tracker.moodle.org
--Moodle Docs|http://docs.moodle.org|Moodle-Dokumentation
--Deutsche Moodle Docs|http://docs.moodle.org/de|Dokumentation in Deutsch|de,de_du,de_kids
-Moodle News|http://moodle.org/Nachrichten von Moodle
####
Moodle.com|http://moodle.com
-Moodle Commercial Hosting|http://moodle.com/hosting
-Moodle Commercial Support|http://moodle.com/support
</pre>';
$string['configcustomusermenuitems'] = 'Sie können den Inhalt des Nutzermenüs konfigurieren (mit Ausnahme des Abmeldelinks, der automatisch hinzugefügt wird). Jede Menüzeile wird durch das Zeichen | getrennt und besteht aus 1.) einem Text oder der Angabe "langstringname, componentname" oder reinem Text, 2.) einer URL und 3.) einem Icon als pix-Symbol oder als Link. Trennungen können durch Eingabe einer Linie oder einem oder mehreren #-Zeichen eingegeben werden.';
$string['configdbsessions'] = 'Bei der Aktivierung dieser Einstellung wird die Datenbank verwendet, um Informationen über aktuelle Sessions abzuspeichern. Das ist sinnvoll bei sehr großen Anwendungen oder Anwendungen, die über mehrere Cluster von Servern verteilt arbeiten. Meist kann die Einstellung deaktiviert bleiben. Bei einer Einstellungsänderung werden alle aktuellen Nutzer/innen ausgeloggt (auch die Administrator/innen). Falls Sie MySQL benutzen, stellen Sie sicher, dass \'max_allowed_packet\' in der Datei my.cnf (oder my.ini) mindestens 4M ist.
Andere Treiber für Sessions können direkt in der config.php angepasst werden. Vorlagen finden Sie dazu in der config-dist.php-Datei. Diese Option wird nicht mehr angezeigt wenn Einstellungen in der config.php vorgenommen wurden.';
$string['configdebug'] = 'Wenn Sie diese Funktion einschalten, werden die Fehlermeldungen von PHP erweitert, so dass mehr Warnungen ausgegeben werden. Dies ist nur für Entwickler nützlich.';
$string['configdebugdisplay'] = 'Wenn diese Option aktiviert ist, werden Fehlermeldungen direkt auf der HTML-Seite angezeigt. Auftretende Fehler stören dann aber XHTML, JavaScript, Cookies und HTTP-Header. Wenn die Option deaktiviert ist, werden alle Fehlermeldungen in die Logdaten des Webservers geschrieben. Die PHP-Variable error_log enthält den Pfad zur Logdatei.';
$string['configdebugpageinfo'] = 'Wenn diese Option aktiviert ist, werden Seiteninformationen in der Fußzeile angezeigt.';
$string['configdebugsmtp'] = 'Umfassende Debug-Mitteilungen zum Versand von E-Mails über den eingestellten SMTP-Server erstellen.';
$string['configdebugvalidators'] = 'Aktivieren Sie diese Option, um Links zu externen Validierungsservern in der Fußzeile anzuzeigen. Möglicherweise müssen Sie einen neuen Nutzer mit dem Anmeldenamen <em>w3cvalidator</em> erstellen und den Gastzugang freischalten. Diese Änderungen erlauben unauthorisierte Serverzugriffe und sollten nicht auf Produktivsystemen eingeschaltet werden!';
$string['configdefaulthomepage'] = 'Diese Option legt fest, welche Seite eingeloggte Nutzer/innen als Startseite bekommen.';
$string['configdefaultrequestcategory'] = 'Von Nutzer/innen beantragte Kurse werden automatisch in diesem Kursbereich angelegt.';
$string['configdefaultrequestedcategory'] = 'Voreingestellter Kursbereich, in dem beantragte Kurse angelegt werden.';
$string['configdefaultuserroleid'] = 'Angemeldete Nutzer/innen erhalten für die gesamte Website automatisch die hier angegebene Rolle zugewiesen, u.z. zusätzlich zu anderen Rollenzuweisungen. Standardmäßig ist die Rolle "Authentifizierte/r Nutzer/in" eingestellt. Achten Sie darauf, dass Sie mit Ihrer Einstellung keine Konflikte mit anderen Rollen schaffen und dass die Nutzer/innen sinnvolle Dinge tun können, z.B. ihr Nutzerprofil verwalten, den eigenen Kalender verwalten oder Blogeinträge schreiben.';
$string['configdeleteincompleteusers'] = 'Nach dieser Zeitspanne werden alte unvollständige Nutzerkonten gelöscht';
$string['configdeleteunconfirmed'] = 'Wenn Sie die Authentifikation per E-Mail verwenden, geben Sie hier den Zeitraum an, innerhalb dessen die Nutzer/innen ihre Registrierung bestätigen müssen. Unbestätigte Zugänge verfallen und werden gelöscht.';
$string['configdenyemailaddresses'] = 'Um E-Mail-Adressen mit bestimmten Domains zu sperren, werden die Domainnamen hier in diese Liste eingetragen. Alle anderen Domains werden akzeptiert. Um Subdomains zu sperren, wird der Domainname mit einem führenden Punkt (.) angegeben. <strong>hotmail.de yahoo.co.uk .live.com</strong>.';
$string['configdisableuserimages'] = 'Diese Einstellung verbietet die Möglichkeit, dass Nutzer/innen ihre Profilbilder ändern können.';
$string['configdisplayloginfailures'] = 'Erfolglose Anmeldeversuche anzeigen';
$string['configdndallowtextandlinks'] = 'Mit dieser Option kann Drag-and-drop für Texte und Links auf eine Kursseite aktiviert werden. Beachten Sie, dass das Verschieben von Texten zwischen verschiedenen Browsern unzulässig ist. Daten könnten verloren gehen oder Texte beschädigt werden.';
$string['configdoclang'] = 'Diese Spracheinstellung wird in den Links zu Dokumentationsseiten verwendet.';
$string['configdocroot'] = 'Diese Angabe legt den Pfad zur offiziellen Moodle-Dokumentation fest. Über den Link \'Dokumentation zu dieser Seite\' wird eine kontextspezifische Dokumentation zu jeder Seite angeboten. Wenn das Feld leer ist, wird der Link nicht angezeigt.';
$string['configdoctonewwindow'] = 'Wenn diese Option aktiviert ist, werden alle Links zur Moodle-Dokumentation in einem neuen Fenster angezeigt';
$string['configeditordictionary'] = 'Dieser Wert wird verwendet, wenn aspell kein Wörterbuch für die nutzergewählte Sprache hat.';
$string['configeditorfontlist'] = 'Zeichensätze auswählen, die im Editormenü erscheinen sollen';
$string['configemailchangeconfirmation'] = 'Wenn Nutzer/innen in ihrem Profil die E-Mail-Adresse ändern, dann ist eine E-Mail-Bestätigung notwendig';
$string['configenableblogs'] = 'Diese Option aktiviert für alle Nutzer/innen einen eigenen Blog.';
$string['configenablecalendarexport'] = 'Exportieren oder Abonnieren von Kalendern erlauben';
$string['configenablecomments'] = 'Kommentare aktivieren';
$string['configenablecourserequests'] = 'Diese Option erlaubt es allen Nutzer/innen, Anfragen zur Einrichtung von Kursen zu stellen.';
$string['configenabledevicedetection'] = 'Diese Option erlaubt die Unterscheidung zwischen Handys, Smartphones, Tablets oder Standard (PCs, Laptops, usw.), um Designs und andere Funktionen zuzuweisen.';
$string['configenablemobilewebservice'] = 'Aktivieren Sie den Webservice für \'Moodle Mobile\' und andere mobile Apps, die diesen Webservice benötigen. Weitere Informationen: {$a}';
$string['configenablerssfeeds'] = 'Diese Option aktiviert RSS Feeds für die gesamte Website. Zusätzlich ist erforderlich, die RSS Feeds in den einzelnen Modulen zu aktivieren. Öffnen Sie dazu in der Administration die Moduleinstellungen.';
$string['configenablerssfeedsdisabled'] = 'Diese Option ist nicht verfügbar, weil RSS Feeds für alle Seiten deaktiviert sind. Um diese zu aktivieren, öffnen Sie die Variableneinstellung in der Administration.';
$string['configenablerssfeedsdisabled2'] = 'RSS Feeds sind auf Serverebene deaktiviert. Sie müssen zuerst unter Server/RSS aktiviert werden.';
$string['configenablesafebrowserintegration'] = 'Diese Einstellung fügt in den Testeinstellungen die Auswahl \'Nutzung des Safe Exam Browser erforderlich\' hinzu. Weitere Informationen:  http://www.safeexambrowser.org';
$string['configenablestats'] = 'Wenn diese Option aktiviert ist, werden per Cronjob die Logdaten verarbeitet und Statistiken erstellt. Je nach Serverlast könnte der Vorgang einige Zeit dauern. Die Funktion erstellt Datenlisten und Graphen für Kurse und die gesamte Website.';
$string['configenabletrusttext'] = 'Normalerweise bereinigt Moodle grundsätzlich alle Texte, die von Nutzer/innen eingegeben werden, und entfernt damit mögliche Skripte und Media-Dateien, die ein Sicherheitsrisiko darstellen könnten. Das Trusted-Content-System ist ein Weg, bestimmten Nutzer/innen die Möglichkeit zu geben, erweiterte Inhalte auch ohne Filterung in ihren Beiträgen zu benutzen. Um dieses System zu aktivieren, müssen Sie zuerst diese Option zulassen, danach gewähren Sie das Trusted-Content-Recht in der betreffenden Moodle-Rollenbeschreibung. Texte, die von den betreffenden Nutzer/innen geschrieben oder hochgeladen werden, werden als vertrauenswürdig markiert und vor der Anzeige nicht gefiltert.';
$string['configenablewebservices'] = 'Diese Option aktiviert Webservices, über die sich andere Systeme in diesem Moodle anmelden und Operationen ausführen können. Sicherheitshalber sollte diese Option deaktiviert sein, wenn Sie keine Webservices verwenden.';
$string['configenablewsdocumentation'] = 'Mit dieser Option wird die automatische Erstellung einer Dokumentation zu den Webservices aktiviert. Webservice-Nutzer können auf ihre eigene Dokumentation für die Sicherheitsschlüssel \'{$a}\' zugreifen. Es werden ausschließlich die aktivierten Protokolle angezeigt.';
$string['configerrorlevel'] = 'Wählen Sie die Menge der PHP-Warnungen, die angezeigt werden sollen. \'Normal\' ist meist eine gute Wahl.';
$string['configexportlookahead'] = 'Zahl der Tage in der Zukunft deren Termine exportiert werden sollen.';
$string['configexportlookback'] = 'Zahl der Tage in der Vergangenheit deren Termine exportiert werden sollen.';
$string['configextendedusernamechars'] = 'Aktivieren Sie diese Einstellung, damit beliebige Zeichen im Anmeldenamen zulässig werden (Anmerkung: Dies beeinflusst nicht bereits vorhandene Namen). In der Grundeinstellung \'Nein\' sind nur alphanumerische Zeichen (sowie (_)Unterstrich, (-) Bindestrich, (.) Punkt oder das (@) at-Symbol erlaubt. Falls Sie \'Ja\' auswählen, könnten bestimmte Sonderzeichen (z.B. deutsche Umlaute) Probleme verursachen!';
$string['configextramemorylimit'] = 'Einige Skripte wie Suche, Sicherung, Wiederherstellung oder Cron erfordern mehr Arbeitsspeicher. Tragen Sie höhere Werte für große Websites ein.';
$string['configfilterall'] = 'Filter über alle Begriffe (inkl. aller Überschriften, Titel, Navigationselemente usw.). Im Zusammenhang mit dem Filter "Mehrsprachiger Inhalt" könnte eine Aktivierung nützlich sein, aber den Server stark belasten und zur Reduzierung der Arbeitsgeschwindigkeit führen.';
$string['configfiltermatchoneperpage'] = 'Der Filter für die automatische Verlinkung soll nur das erste Vorkommen eines Begriffes auf einer Seite verlinken. Wiederholt auf einer Seite auftretende Begriffe werden nur einmal verlinkt.';
$string['configfiltermatchonepertext'] = 'Der Filter für die automatische Verlinkung soll nur das erste Vorkommen eines Begriffes in jedem Abschnitt auf einer Seite (z.B. Block) verlinken. Wiederholt auftretende Begriffe werden nur einmal verlinkt. Diese Einstellung wird ignoriert, wenn die Einstellung \'configfiltermatchoneperpage\' aktiv ist.';
$string['configfilteruploadedfiles'] = 'Beim Aktivieren dieser Option werden alle hochgeladenen HTML- und Textdateien über den Filter bearbeitet, bevor sie angezeigt werden.';
$string['configforcelogin'] = 'Normalerweise können die Startseite und die Kursübersicht (nicht jedoch die Kurse) angezeigt werden, ohne dass man angemeldet ist. Aktivieren Sie diese Option, wenn eine Anmeldung zwingend sein soll, um IRGENDETWAS auf der Website sehen zu können.';
$string['configforceloginforprofiles'] = 'Diese Option legt fest, dass Nutzerprofile nur für angemeldete Personen sichtbar sind (nicht für Gäste oder Suchmaschinen). Wenn Sie die Funktion ausschalten, sind die in den Nutzerprofilen hinterlegten Beschreibungen weltweit abrufbar und könnten zur Veröffentlichung von anstößigen Inhalten oder Werbung (Spam) missbraucht werden.';
$string['configfrontpage'] = 'Die ausgewählten Elemente werden auf der Startseite angezeigt.';
$string['configfrontpagecourselimit'] = 'Max. Anzahl von Kursen';
$string['configfrontpagecourselimithelp'] = 'Maximale Anzahl von Kursen, die in der Kursliste auf der Startseite gezeigt werden.';
$string['configfrontpageloggedin'] = 'Die ausgewählten Elemente werden auf der Startseite angezeigt, nachdem Nutzer/innen eingeloggt sind.';
$string['configfullnamedisplay'] = 'Diese Option legt fest, wie vollständige Namen angezeigt werden. Der Standardwert \'language\' verwendet den Eintrag \'fullnamedisplay\' aus dem jeweiligen Sprachpaket. Für die meisten Websites ist die Standardeinstellung \'firstname lastname\' geeignet, aber Sie könnten auch den Vor- oder den Nachnamen ausblenden.

Mögliche Platzhalter sind: firstname, lastname, firstnamephonetic, lastnamephonetic, middlename, alternatename.';
$string['configgeoipfile'] = 'Pfad zur binären GeoIPCity-Datei. Diese Datei ist kein Bestandteil von Moodle und muss separat von <a href="http://www.maxmind.com/">MaxMind</a> bezogen werden. Die Ortsdatenbank GeoIPCity gibt es als kommerzielle Version oder als freie Version. Die freie Version kann unter <a href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz"> http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz </a> heruntergeladen und ins Verzeichnis \'{$a}\' auf dem Server entpackt werden.';
$string['configgetremoteaddrconf'] = 'Wenn Ihr Server hinter einem Reverse Proxy steht, können sie mit diesen Einträgen festlegen, welche HTTP-Header vertraut wird, dass sie die Remote-IP Adresse enthalten. Die Header werden in der angegebenen Reihenfolge ausgelesen. Die erste verfügbare wird verwandt.';
$string['configgradebookroles'] = 'Diese Einstellung erlaubt Ihnen die Kontrolle, wer in den Bewertungen erscheint. Teilnehmer/innen müssen zuerst eine der Rollen in einem Kurs einnehmen, bevor sie in den Bewertungen dieses Kurses angezeigt werden.';
$string['configgradeexport'] = 'Wählen Sie bitte, welches Exportformat Sie für die Bewertungen bevorzugen. Das gewählte Plugin wird dann das Feld "zuletzt exportiert" in jeder Bewertung setzen und benutzen. Dies wird beispielsweise die exportierten Daten als "neu" oder "geändert" markieren. Wenn Sie nicht sicher sind, wählen Sie nichts aus.';
$string['confighiddenuserfields'] = 'Markieren Sie die Felder, deren Inhalte vor anderen Nutzer/innen, nicht aber vor Trainer/innen und Administrator/innen verborgen werden sollen. Dies schützt die Privatsphäre. Mit gedrückter Ctrl/Strg-Taste können Sie mehrere Felder markieren.';
$string['configidnumber'] = 'Diese Option legt fest, ob (a) nicht nach einer ID-Nummer gefragt wird, (b) zwar nach einer ID-Nummer gefragt wird, aber das Feld leer bleiben kann oder (c) nach einer zwingenden Eingabe einer ID-Nummer gefragt wird. Eine eingegebene ID-Nummer wird im Nutzerprofil angezeigt.';
$string['configintro'] = 'Auf dieser Seite können Sie zahlreiche Variablen konfigurieren, die Einstellungen von Moodle auf dem Server beeinflussen. Überlegen Sie nicht zu lange - die Standard-Einstellungen funktionieren normalerweise sehr gut. Sie können jederzeit später alle Einstellungen ändern.';
$string['configintroadmin'] = 'Sie müssen den Hauptadministrator einrichten, der die vollständige Kontrolle über die Website hat. Achten Sie darauf, unbedingt einen sicheren Anmeldenamen, ein sicheres Kennwort sowie eine gültige E-Mail-Adresse anzugeben. Weitere Administrator/innen können Sie später festlegen.';
$string['configintrosite'] = 'Diese Seite erlaubt es Ihnen, die Startseite und den Namen der Webseite festzulegen. Sie können die Einstellungen später jederzeit bearbeiten.';
$string['configiplookup'] = 'Wenn Sie auf eine IP-Adresse (z.B. 123.45.67.98) in den Logdaten klicken, dann sollten Sie auf einer Übersicht den Ort gezeigt bekommen, von wo aus der Zugriff erfolgte. Es existieren für diese Aufgabe unterschiedliche Module, aber jedes hat spezifische Vor- und Nachteile.';
$string['configkeeptagnamecase'] = 'Diese Option legt fest, dass die ursprüngliche Schreibweise von Schlagwörtern erhalten bleibt, wie sie von den Nutzer/innen eingegeben wurden.';
$string['configlang'] = 'Die Standardsprache wird für die gesamte Website festgelegt. Alle Personen können ihre eigene Sprache über das Sprachmenü wählen oder in ihrem persönlichen Profil anpassen.';
$string['configlanglist'] = 'Wenn das Feld leer ist, können alle  installierten Sprachen ausgewählt werden. Die Einträge im Sprachmenü können über eine Liste von Sprachcodes festgelegt werden (Komma getrennt, z.B. de,en,es_es,fr,it)';
$string['configlangmenu'] = 'Diese Option legt fest, ob Sie das Sprachmenü auf der Startseite und auf der Anmeldungsseite angezeigt wird. Dies schränkt nicht die Möglichkeit, dass alle ihre bevorzugte Sprache im Nutzerprofil einstellen können.';
$string['configlangstringcache'] = 'Alle Texte des Sprachpakets sind zur Leistungsoptimierung zwischengespeichert. Wenn Sie Texte lokal ändern, müssen Sie die Zwischenspeicherung deaktivieren, um die Änderungen sofort wirksam zu machen. Normalerweise sollte die Option aber aktiviert sein.';
$string['configlatinexcelexport'] = 'Wählen Sie die Kodierung für die Excel-Exporte.';
$string['configlocale'] = 'Wählen Sie eine Einstellung für \'locale\', die für die gesamte Website gelten soll - dies wird die Anzeige der deutschen Umlaute und jedes Datums beeinflussen. Die für die Einstellung notwendigen Dateien müssen auf Ihrem Server installiert sein. Für ein deutschsprachiges System wird z.B. de_DE.UTF-8 eingetragen. Normalerweise sollte das Feld leer bleiben können.';
$string['configloginhttps'] = 'Wenn Sie diese Einstellung aktivieren, wird eine sichere HTTPS-Verbindung für den Anmeldevorgang  genutzt. Danach wird eine normale HTTP-Verbindung verwendet.
<br />ACHTUNG: Die Einstellung erfordert eine gesonderte Aktivierung von HTTPS auf dem Server. Wenn diese Aktivierung NICHT besteht, können Sie sich selbst vom Zugriff zur Website ausschließen!!!';
$string['configloglifetime'] = 'Die angegebene Zeitdauer gibt an, für welchen Zeitraum die Logdaten der Nutzeraktivitäten gespeichert werden. Ältere Logdaten werden automatisch gelöscht. Speichern Sie die Logdaten nur so lange, wie sie unbedingt benötigt werden. Wenn Sie bei Ihrem Server Leistungseinbrüche feststellen, sollten Sie den Zeitraum reduzieren. Werte kleiner als 30 werden nicht empfohlen, weil dann die Statistiken nicht mehr richtig arbeiten können.';
$string['configlookahead'] = 'Tage in der Vorausschau';
$string['configmaxbytes'] = 'Dieser Wert legt für die gesamte Website die maximale Dateigröße zum Hochladen fest. Der Eintrag wird seinerseits eingeschränkt durch die PHP-Einstellung \'post_max_size\' und \'upload_max_filesize\' sowie die Apache-Einstellung \'LimitRequestBody\'.

Die Einstellung \'Servermaximum\' setzt für Moodle den größten Wert, den der Server zulässt. Möchten Sie die maximal wählbare Dateigröße auf Kurs- oder Modulebene einschränken, wählen Sie hier einen entsprechend kleineren Wert aus.';
$string['configmaxconsecutiveidentchars'] = 'Kennwörter dürfen maximal diese Zahl aufeinanderfolgender gleicher Zeichen haben. Der Wert \'0\' deaktiviert die Prüfung.';
$string['configmaxeditingtime'] = 'Hiermit bestimmen Sie die Zeitdauer, in der Beiträge in Foren, Glossaren bearbeitet werden dürfen. Normalerweise sind 30 Minuten ein guter Wert.';
$string['configmaxevents'] = 'Ereignisse in der Vorausschau';
$string['configmaxusersperpage'] = 'Maximale Anzahl von Personen, die bei der Nutzerauswahl in Kursen, Gruppen oder Webservices angezeigt werden';
$string['configmessaging'] = 'Diese Option aktiviert das Mitteilungssystem systemweit, d.h. für alle Kurse und für alle Nutzer/innen.';
$string['configmessagingallowemailoverride'] = 'Nutzer/innen erlauben, sich Nachrichten an andere E-Mail-Adressen senden zu lassen als im Profil angegeben.';
$string['configmessagingdeletereadnotificationsdelay'] = 'Gelesene Mitteilungen können gelöscht werden, um Platz zu sparen. Diese Einstellung legt die Zeitdauer fest, nach der eine Mitteilung gelöscht wird.';
$string['configmessaginghidereadnotifications'] = 'Gelesene Mitteilungen über Ereignisse (z.B. neue Forumsbeiträge) verbergen';
$string['configminpassworddigits'] = 'Kennwörter müssen mindestens die angegebene Zahl von Ziffern enthalten.';
$string['configminpasswordlength'] = 'Kennwörter müssen mindestens die angegebene Zahl von Zeichen enthalten.';
$string['configminpasswordlower'] = 'Kennwörter müssen mindestens die angegebene Zahl von Kleinbuchstaben enthalten.';
$string['configminpasswordnonalphanum'] = 'Kennwörter müssen mindestens die angegebene Zahl von Sonderzeichen enthalten.';
$string['configminpasswordupper'] = 'Kennwörter müssen mindestens die angegebene Zahl von Großbuchstaben enthalten.';
$string['configmobilecssurl'] = 'CSS-Datei zur Anpassung Ihrer mobilen App';
$string['configmodchooserdefault'] = 'Soll die Aktivitätenauswahl den Nutzer/innen als Standardeinstellung gezeigt werden?';
$string['configmycoursesperpage'] = 'Maximale Zahl der gezeigten Kurse in Übersicht \'Meine Kurse\'';
$string['configmymoodleredirect'] = 'Die Einstellung führt Personen (außer Admins) beim Anmelden automatisch auf \'Meine Startseite\'. Auch die Navigation zur Startseite entsprechend verändert.';
$string['configmypagelocked'] = 'Diese Option schützt die standardmäßig gezeigte Seite vor Änderungen durch Nicht-Admins';
$string['confignavcourselimit'] = 'Die Zahl legt die Anzahl der maximal in der Navigation angezeigten Kurse fest, falls Nutzer/innen nicht eingeloggt oder noch in keinem Kurs eingetragen sind ';
$string['confignavshowallcourses'] = 'Wenn diese Option aktiviert ist, sehen Nutzer/innen Kurse, in denen sie eingeschrieben sind, sowohl unter \'Meine Kurse\' wie auch in der Kursstruktur. Wenn die Funktion deaktiviert ist, sehen sie nur den Link \'Meine Kurse\' in der Navigation. Die Anzahl der angezeigten Kurse wird durch die Einstellung \'Kursbegrenzung (navcourselimit)\' beschränkt solange der Nutzer nicht eingeloggt oder nicht in Kurse eingeschrieben ist.';
$string['confignavshowcategories'] = 'Kursbereiche in Navigationsleiste und Navigationsblöcken anzeigen. Diese Einstellung wirkt sich nicht auf die Anzeige der eingeschriebenen Kurse im Bereich \'Meine Kurse\' aus, wo die Kurse immer ohne Kursbereiche gelistet werden.';
$string['confignotifyloginfailures'] = 'Mitteilungen zu Login-Fehlern können an ausgewählte Nutzer/innen versandt werden. Dazu muss ein interner Logstore (z.B. Standard-Logstore) aktiviert sein.';
$string['confignotifyloginthreshold'] = 'Nach wie vielen erfolglosen Anmeldeversuchen hintereinander für ein Nutzerkonto oder über eine IP-Adresse soll eine Mitteilung gesendet werden?';
$string['confignotloggedinroleid'] = 'Nicht auf der Website eingeloggte Nutzer/innen werden behandelt, als ob sie diese Rolle hätten. Die Rolle \'Gast\' ist in der Regel brauchbar. Sie können aber auch neue Rollen erstellen, die mehr oder weniger Einschränkungen vornehmen. Viele Aktivitäten, z.B. Beiträge schreiben oder Tests durchführen, erfordern aber immer eine richtige Anmeldung.';
$string['configopentogoogle'] = 'Wenn diese Option aktiviert ist, kann Google Ihre Website als Gast besuchen. Außerdem wird jeder automatisch als Gast eingeloggt, wenn er über die Google-Suche auf Ihre Website kommt. Dies gilt natürlich nur für Kurse, die einen Gastzugang (ohne Schlüssel) zulassen.';
$string['configoverride'] = 'In der config.php festgelegt';
$string['configpasswordpolicy'] = 'Diese Option legt fest, dass die Kennwörter hinsichtlich der Kennwortregeln überprüft werden. Nutzen Sie die nachfolgenden Parameter, um die Kennwortregeln anzupassen. Die Parameter werden ignoriert, falls Sie hier "Nein" setzen.';
$string['configpasswordresettime'] = 'Diese Option legt die maximale Zeitdauer fest, um die Anforderung einer Kennwortrücksetzung zu bestätigen, bevor diese verfällt. Normalerweise sind 30 Minuten ausreichend.';
$string['configpathtodu'] = 'Pfad für du, meistens /usr/bin/du. Mit dieser Option werden Seiten mit Verzeichnissen und vielen Dateien schneller angezeigt.';
$string['configperfdebug'] = 'Nach der Aktivierung der Option wird eine Performance-Information in der Fußzeile des Standardthemes angezeigt.';
$string['configprofileroles'] = 'Liste der Rollen, die in Nutzerprofilen und auf der Teilnehmerseite sichtbar sind';
$string['configprofilesforenrolledusersonly'] = 'Um eine unerwünschte Nutzung durch Spammer zu vermeiden, sind die Profilbeschreibungen von Nutzer/innen ohne vorhandene Kurseinschreibung gesperrt. Neue Nutzer/innen müssen sich in mindestens einem Kurs eingeschrieben haben, um eine Profilbeschreibung hinzufügen zu können.';
$string['configprotectusernames'] = 'Standardmäßig werden keine Hinweise für vergessene Anmeldenamen und Kennwörter angezeigt.';
$string['configproxybypass'] = 'Liste von Servernamen oder IP-Adressen (auch Teile davon), die ohne Proxy geladen werden (Komma getrennt, z.B. 192.168., .meineseite.de)';
$string['configproxyhost'] = 'Wenn dieser <b>Moodle-Server</b> einen Proxy für den Internetzugriff (z.B. eine Firewall) benötigt, dann tragen Sie hier den Namen und den Port des Proxys ein. Andernfalls lassen Sie das Feld leer.';
$string['configproxypassword'] = 'Für den Internetzugang ist eventuell ein Kennwort nötig. Lassen Sie das Feld leer, falls der Proxy kein Kennwort verlangt. Die PHP-Extension cURL ist notwendig!';
$string['configproxyport'] = 'Falls dieser Server einen Proxy benutzt, geben Sie hier bitte den Proxy-Port an.';
$string['configproxytype'] = 'Typ des Web-Proxys. Für die Unterstützung von SOCKS5 ist PHP5 und die PHP-Extension cURL notwendig!';
$string['configproxyuser'] = 'Für den Internet-Zugriff muss eventuell ein Anmeldename eingegeben werden. Lassen Sie das Feld leer, falls der Proxy keinen Anmeldenamen verlangt. Die PHP-Extension cURL ist notwendig!';
$string['configrecaptchaprivatekey'] = 'Dieser Code dient der Kommunikation zwischen Moodle und dem Recaptcha-Server.  Sie erhalten den Code unter <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['configrecaptchapublickey'] = 'Der Code dient zur Anzeige des Recaptcha-Elements bei der Nutzerregistrierung, generiert über <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['configrequestcategoryselection'] = 'Die Auswahl einer Kategorie zulassen wenn Kursanfrage erstellt wird.';
$string['configrequestedstudentname'] = 'Begriff für Teilnehmer/in in beantragten Kursen';
$string['configrequestedstudentsname'] = 'Begriff für Teilnehmer/innen in beantragten Kursen';
$string['configrequestedteachername'] = 'Begriff für Trainer/in in beantragten Kursen';
$string['configrequestedteachersname'] = 'Begriff für Trainer/innen in beantragten Kursen';
$string['configsectioninterface'] = 'Gestaltung';
$string['configsectionmail'] = 'E-Mail';
$string['configsectionmaintenance'] = 'Wartung';
$string['configsectionmisc'] = 'Verschiedenes';
$string['configsectionoperatingsystem'] = 'Arbeitsweise';
$string['configsectionpermissions'] = 'Rechte ändern';
$string['configsectionrequestedcourse'] = 'Kursanträge';
$string['configsectionsecurity'] = 'Sicherheit';
$string['configsectionstats'] = 'Statistiken';
$string['configsectionuser'] = 'Nutzer/in
';
$string['configsecureforms'] = 'Moodle kann eine erhöhte Sicherheitsstufe für Daten aus Web-Formularen nutzen. Sofern dies eingeschaltet ist, wird die Variable HTTP_REFERER gegen die Adresse des aktuellen Formulars geprüft.
In einigen wenigen Fällen kann das Probleme verursachen, wenn der Nutzer eine Firewall benutzt (z.B. Zonealarm), die so konfiguriert ist, dass der HTTP_REFERER nicht mitgesendet wird.
Das Ergebnis ist, dass Sie bei einem Formular nicht weiterkommen.
Sofern Nutzer/innen z.B. Probleme mit der Zugangsseite haben, sollten Sie diese Einstellung deaktivieren - allerdings ist Ihre Seite so offener für Brute-Force-Attacken. Im Zweifelsfall belassen Sie es bei \'Ja\'.';
$string['configsessioncookie'] = 'Diese Einstellung beeinflusst die Namen der Cookies, die für Moodle-Zugriffe benutzt werden. Dieser Eintrag ist sinnvoll, um die Überlagerung der Cookies zu verhindern, wenn mehrere Moodle-Systeme auf der gleichen Website installiert sind.';
$string['configsessioncookiedomain'] = 'Diese Einstellung erlaubt es Ihnen, die Domain zu verändern, von der Moodle-Cookies benutzbar sind. Dies ist nützlich für Moodle-Anpassungen (z.B. Plugins zur Authentifikation oder zum Einschreiben), die Informationen bezüglich der Moodle-Session mit Programmen auf einer anderen Subdomain teilen müssen.<br /><strong>ACHTUNG: Es wird dringend empfohlen, diese Einstellung leer zu lassen und nicht zu verändern - ein falscher Wert könnte dazu führen, dass alle Logins auf diese Website zurückgewiesen werden!! </strong>';
$string['configsessioncookiepath'] = 'Es könnte notwendig sein, ein Ziel für die Rücksendung von Moodle-Cookies anzugeben. Dafür können Sie hier ein Unterverzeichnis Ihrer Website definieren. Andernfalls sollte die Grundeinstellung \'/\' ausreichend sein.';
$string['configsessiontimeout'] = 'Wenn angemeldete Nutzer/innen länger keine Aktionen ausführen (z.B. keine Seiten laden), werden sie automatisch abgemeldet. Diese Variable legt die betreffende Zeitspanne fest.';
$string['configshowcommentscount'] = 'Kommentarzähler anzeigen, danach kostet es nur eine weitere Anfrage, um die Kommentarlinks zu zeigen';
$string['configshowicalsource'] = 'Quelleninformationen bei iCal-Terminen anzeigen';
$string['configshowsiteparticipantslist'] = 'Alle Teilnehmer/innen und Trainer/innen der Website werden in der Nutzergesamtliste geführt. Wer soll diese Liste sehen dürfen?';
$string['configsitedefaultlicense'] = 'Standardlizenz';
$string['configsitedefaultlicensehelp'] = 'Die Standardlizenz regelt die Veröffentlichung von Inhalte auf dieser Website';
$string['configsitemaxcategorydepth'] = 'Maximale Bereichstiefe';
$string['configsitemaxcategorydepthhelp'] = 'Diese Option legt die maximale Verschachtelungstiefe von Kursunterbereichen fest, die in der Kursliste angezeigt werden. Tiefere Kursunterbereiche können über Links aufgeklappt werden.';
$string['configslasharguments'] = '\'Slash-Parameter\' (unter Benutzung von <em>PATH_INFO</em>) sind notwendig für Lernpakete (SCORM) und für alle Ressourcen, die aus mehreren Dateien bestehen. Wenn Ihr Browser keine \'Slash-Parameter\' unterstützt und Sie das auch nicht ändern können, deaktivieren Sie die Option, wobei dann einige Dinge nicht funktionieren.
<br />Hinweis: In künftigen Moodle-Versionen wird die Verwendung von \'Slash-Parametern\' verpflichtend sein.';
$string['configsmartpix'] = 'Wenn diese Option aktiviert ist, werden Icons durch ein PHP-Skript bereitgestellt, das das aktuelle Design, alle übergeordneten Designs (parent themes) und das /pix Verzeichnis im Moodle-Installationsverzeichnis durchsucht. Damit müssen Grafiken u.U. nicht mehrfach in verschiedenen Designs bereitgestellt werden - zu Lasten geringfügiger Geschwindigkeitseinbußen.';
$string['configstartwday'] = 'Beginn der Woche';
$string['configstatsfirstrun'] = 'Die Einstellung legt den Zeitraum fest, um den die auszuwertenden Logdaten zurückliegen dürfen. Wenn Sie sehr viele Aktivitäten in den Kursen haben oder sich einen Server mit anderen Anwendungen teilen, sollten Sie keinen zu langen Zeitraum wählen. Die Auswertung erfordert eine hohe Serverleistung. (Hinweis: für diese Einstellung gilt: 1 Monat = 28 Tage. In der grafischen Auswertung und den Berichten ist 1 Monat = 1 Kalendermonat.)';
$string['configstatsmaxruntime'] = 'Die Berechnung der Statistiken kann sehr viel Rechenleistung erfordern. Verwenden Sie eine Kombination aus diesem Feld und dem nächsten, um festzulegen zu welchem Zeitpunkt und für welchen Zeitraum die Berechnung erfolgen soll.';
$string['configstatsmaxruntime2'] = 'Die Berechnung der Statistiken kann sehr aufwendig sein. Besonders durch die maximal Dauer für Prozesse wird hier eine Begrenzung gesetzt. Mit einem Cron-Job können daher höchstens 31 Tage der Statistik berechnet werden.';
$string['configstatsmaxruntime3'] = 'Die Berechnung der Statistiken kann auf dem Server sehr viel Last erzeugen. Daher können Sie hier festlegen wie viel Zeit täglich dafür höchstens eingesetzt werden soll. Weiter unten legen Sie fest für wie viel Tage innerhalb eines Cron-Job-Durchlaufs die Berechnung der Statistiken erfolgen soll.';
$string['configstatsruntimedays'] = 'Wenn Sie die Statistik-Funktion aktivieren werden für einen zurückliegenden Zeitraum statistische Berechnungen durchgeführt. Damit dadurch die Serverbelastung nicht zu hoch wird, können Sie hier festlegen, dass pro Cron-Job-Durchlauf nur für eine bestimmte Zahl von Tagen die Berechnung erfolgt. Ist die Statistik-Ermittlung auf dem aktuellen Stand erfolgt wird jeweils für einen Tag die Statistik ergänzt';
$string['configstatsruntimestart'] = 'Zu welchem Zeitpunkt soll die Berechnung der Statistiken begonnen werden? Bitte wählen Sie unterschiedliche Zeitpunkte, wenn auf einen physikalischen Server mehrere Moodle-Instanzen laufen.';
$string['configstatsuserthreshold'] = 'Kurse mit einer geringeren Zahl von Nutzer/innen als in diesem Wert angegeben, werden beim Erstellen von Kursstatistiken nicht berücksichtigt.';
$string['configstrictformsrequired'] = 'Wenn diese Option aktiviert ist, wird die alleinige Eingabe eines Leerzeichens oder Zeilenumbruchs in Pflichtfeldern von Formularen verhindert.';
$string['configstripalltitletags'] = 'Wenn diese Option deaktiviert ist, dürfen HTML-Tags in Namen von Materialien und Aktivitäten (z.B. zur Formatierung) benutzt werden.';
$string['configsupportemail'] = 'Diese E-Mail-Adresse wird Nutzer/innen dieser Website per E-Mail zugesandt, wenn Sie z.B. ein neues Kennwort anfordern oder selber einen Nutzerzugang anlegen. Wenn das Feld leer bleibt, wird keine E-Mail-Adresse angeboten. Die E-Mail-Adresse wird auch als Absenderadresse dieser Benachrichtigungen verwendet. Fehlt hier der Eintrag, so wird die E-Mail-Adresse des primären Administrators verwendet.';
$string['configsupportname'] = 'Beim Versand von E-Mails an Nutzer wird der hier eingetragene Name als Ansprechpartner für den Support genannt. Dies betrifft z. B. E-Mails beim Anlegen neuer Nutzeraccounts oder dem Anfordern von neuen Kennwörtern.';
$string['configsupportpage'] = 'Tragen Sie hier die Adresse einer Webseite ein, auf der Ihre Nutzer/innen speziell von Ihnen bereitgestellte Hilfeinformationen finden. Geben Sie die Adresse mit einem http:// oder https:// ein. Die Adresse wird bspw. in E-Mails an Nutzer/innen beim Anlegen von Nutzerzugängen oder dem Anfordern von neuen Kennwörtern angezeigt. Wenn Sie keinen Eintrag vornehmen, wird in den E-Mails nichts angezeigt.';
$string['configtempdatafoldercleanup'] = 'Temporäre Dateien werden aus dem Bereich moodledata gelöscht, wenn sie älter als die ausgewählte Zeit sind.';
$string['configthemedesignermode'] = 'Aus Performancegründen werden Bilder und CSS-Dateien eines Designs im Browser und auf dem Server zwischengespeichert (gecacht). Schalten Sie diese Option an, wenn Sie neue Designs entwickeln oder optimieren, damit die Daten nicht in den Cache geschrieben werden.  Achtung: Die Aktivierung des Design-Entwickler-Modus wirkt sich negativ auf die Serverleistung aus! Der Theme-Cache kann auch manuell über die Theme-Auswahlseite gelöscht werden.';
$string['configthemelist'] = 'Wenn das Feld leer ist, können alle  installierten Designs ausgewählt werden. Die Einträge im Designmenü können über eine Liste festgelegt werden (Komma getrennt, z.B. formal_white,leatherbound,standard)';
$string['configtimezone'] = 'Diese Option legt die standardmäßige Zeitzone für die Zeitanzeige fest. Cronjobs und andere Servereinstellungen werden in dieser Zeitzone festgelegt. Sie müssen die Einstellung ändern, wenn \'Ungültige Zeitzone\' angezeigt wird.';
$string['configuseblogassociations'] = 'Soll es für Nutzer/innen möglich sein, ihre Blogeinträge über die Zuordnung an Kurse und Kursmodule zu organisieren?';
$string['configuseexternalyui'] = 'An Stelle von Moodle internen Dateien können die YUI Libraries von Yahoo verwendet werden. <br />ACHTUNG: Wenn diese Option aktiviert ist, muss eine Internetverbindung bestehen, damit Ajax mit der Website funktioniert. Diese Funktion kann nicht in Verbindung https:// genutzt werden.';
$string['configuserquota'] = 'Maximale Speichergröße, die alle in ihrem privaten Dateibereich speichern dürfen. {$a->bytes} bytes = {$a->displaysize}';
$string['configusesitenameforsitepages'] = 'Wenn diese Option aktiviert ist, wird in der Navigation die Kurzbezeichnung der Website anstelle von \'Startseite\' gezeigt.';
$string['configusetags'] = 'Diese Option aktiviert die Schlagwörter für die gesamte Website. Mit Schlagwörtern lassen sich Dinge kategorisieren.';
$string['configvariables'] = 'Variablen konfigurieren';
$string['configverifychangedemail'] = 'Diese Option aktiviert die Prüfung bei der Änderung von E-Mail-Adressen, ob sie von vorgegebenen oder zurückzuweisenden E-Mail- Domains stammen. Ist die Funktion deaktiviert, erfolgt die Prüfung nur bei der Neuanlage von Nutzerkonten.';
$string['configvisiblecourses'] = 'Kurse werden in verborgenen Kursbereichen normal angezeigt.';
$string['configwarning'] = 'Vorsicht bei der Veränderung dieser Einstellungen! <br />Ungeeignete Werte könnten Probleme verursachen.';
$string['configyuicomboloading'] = 'Diese Option aktiviert eine Ladeoptimierung für die YUI Libraries. Zur Performance-Steigerung sollte die Einstellung auf Produktivsystemen aktiviert sein.';
$string['confirmation'] = 'Bestätigung';
$string['confirmdeletecomments'] = 'Möchten Sie die Kommentare wirklich löschen?';
$string['confirmed'] = 'Bestätigt';
$string['cookiehttponly'] = 'Nur HTTP-Cookies';
$string['cookiesecure'] = 'Nur sichere Cookies';
$string['country'] = 'Land';
$string['coursecontact'] = 'Kursverwaltung';
$string['coursecontact_desc'] = 'Diese Einstellung legt fest, wer zur Verwaltung eines Kurses angezeigt wird. Wem eine der hier angekreuzten Rollen für den Kurs zugewiesen wurde, dessen Name wird in der Beschreibung aufgelistet.';
$string['courselistshortnames'] = 'Lange Kursnamen anzeigen';
$string['courselistshortnames_desc'] = 'In der Kursliste werden sowohl die kurzen wie auch die langen Kursnamen angezeigt. Nach der Aktivierung dieser Einstellung wird der Text \'courseextendednamedisplay\' verwendet, den Sie über die Sprachverwaltung anpassen können.';
$string['coursemgmt'] = 'Kurse und Kursbereiche verwalten';
$string['courseoverview'] = 'Kursbeschreibung';
$string['courserequestnotify'] = 'Mitteilung zur Kursanfrage';
$string['courserequestnotifyemail'] = 'Nutzer {$a->user} hat einen neuen Kurs unter {$a->link} angefordert';
$string['courserequests'] = 'Kursanfragen';
$string['courserequestspending'] = 'Offene Kursanfragen';
$string['courses'] = 'Kurse';
$string['coursesperpage'] = 'Kurse pro Seite';
$string['courseswithsummarieslimit'] = 'Maximale Kursanzahl mit Beschreibung';
$string['creatornewroleid'] = 'Rolle für Kursersteller/in in neuen Kursen';
$string['creatornewroleid_help'] = 'Falls ein/e Nutzer/in nicht bereits das Recht besitzt, den neuen Kurs zu verwalten, wird die Person mit dieser Rolle automatisch in den Kurs eingeschrieben.';
$string['cron'] = 'Cron';
$string['cronclionly'] = 'cron nur über die Kommandozeile starten';
$string['cronerrorclionly'] = 'Der Internetzugriff für diese Seite wurde deaktiviert.';
$string['cronerrorpassword'] = 'Sie haben kein gültiges Kennwort angegeben.';
$string['cron_help'] = 'Der Cronjob gewährleistet, dass alle Moodle-Module ihre ausstehenden Aufgaben regelmäßig ausführen, z.B. arbeitet der Versand der Emails aus Moodle-Foren über diesen Mechanismus. Das Script sollte möglichst alle 5 Minuten ausgeführt werden.';
$string['cronremotepassword'] = 'Kennwort für cron';
$string['cronwarning'] = 'Das <a href="{$a}">Cron-Script</a> wurde in den letzten 24 Stunden nicht ausgeführt.';
$string['cronwarningcli'] = 'Das Script  cli/cron.php wurde in den letzten 24 Stunden nicht ausgeführt.';
$string['ctyperequired'] = 'Die PHP-Extension ctype wird benötigt, um die Geschwindigkeit der Website zu steigern und die Mehrsprachkompatibilität zu anzubieten.';
$string['curlcache'] = 'cURL cache TTL';
$string['curlrequired'] = 'Die PHP-Extension cURL wird benötigt, um mit den Moodle Repositories zu kommunizieren';
$string['curltimeoutkbitrate'] = 'Bitrate für die Berechnung von curl Timeouts (Kbps)';
$string['curltimeoutkbitrate_help'] = 'Beim Download von Dateien aus dem Internet wird ein Timeout ausgelöst, wenn die Geschwindigkeit zu gering wird. Als Teil der Berechnung wird die Dateigröße wird mit Hilfe von HTTP HEAD-Anfragen bestimmt. 0 deaktiviert alle HEAD-Anfragen.';
$string['currenttheme'] = 'Aktuelles Design';
$string['customcheck'] = 'Weitere Prüfungen';
$string['custommenu'] = 'Zusätzliches Menü';
$string['custommenuitems'] = 'Einträge im zusätzlichen Menü';
$string['customusermenuitems'] = 'Einträge im Nutzermenü';
$string['datarootsecurityerror'] = '<p><strong>Sicherheitswarnung!</strong></p><p>Ihr Verzeichnis dataroot liegt an der falschen Stelle auf dem Webserver, so dass sensible Dateien für alle im Internet zugänglich sind. Angreifer könnten dieses Problem ausnutzen, um unauthorisierten administrativen Zugriff auf Ihre Website zu erhalten!</p>
<p>Sie <em>müssen</em> das Verzeichnis dataroot \'{$a}\' an eine andere Stelle bewegen, die nicht in Ihrem öffentlichen Webverzeichnis liegt, und anschließend die Einstellung <code>$CFG->dataroot</code> in der Datei config.php entsprechend anpassen.</p>';
$string['datarootsecuritywarning'] = 'Ihre Einstellungen sind möglicherweise unsicher. Bitte stellen Sie sicher, dass das Verzeichnis dataroot \'{$a}\' nicht direkt aus dem Internet aufrufbar ist.';
$string['dbsessions'] = 'Sitzungsinformationen in der Datenbank speichern';
$string['debug'] = 'Debug-Mitteilungen';
$string['debugall'] = 'ALLE: Alle PHP-Mitteilungen anzeigen';
$string['debugdeveloper'] = 'DEVELOPER: PHP-Mitteilungen für Entwickler anzeigen';
$string['debugdisplay'] = 'Debug-Mitteilungen anzeigen';
$string['debugging'] = 'Debugging';
$string['debugminimal'] = 'MINIMAL: Nur schwerwiegende Fehler anzeigen';
$string['debugnone'] = 'KEINE: Keine Fehler oder Warnungen anzeigen';
$string['debugnormal'] = 'NORMAL: Fehler, Warnungen und Bemerkungen anzeigen';
$string['debugpageinfo'] = 'Seiteninformation anzeigen';
$string['debugsmtp'] = 'Debug-Mitteilungen zum E-Mail-Versand';
$string['debugstringids'] = 'Herkunft der Texte anzeigen';
$string['debugstringids_desc'] = 'Diese Option soll bei der Übersetzung helfen. Wenn die Option aktiviert und der Parameter strings=1 an eine aufgerufene URL angehängt ist, werden Sprachdatei und Text-ID neben jedem ausgegebenen Text angezeigt.';
$string['debugvalidators'] = 'Prüflinks anzeigen';
$string['defaultcity'] = 'Stadt/Ort';
$string['defaultcity_help'] = 'Wenn Sie in diesem Feld eine Stadt bzw. einen Ort eintragen, wird diese Eingabe als Voreinstellung beim Anlegen neuer Nutzerkonten verwendet.';
$string['defaultformatnotset'] = 'Fehler beim Standardformat für Kurse. Kontrollieren Sie die Einstellungen.';
$string['defaulthomepage'] = 'Standardmäßige Startseite';
$string['defaultrequestcategory'] = 'Kategorie für beantragte Kurse';
$string['defaultsettinginfo'] = 'Standard: {$a}';
$string['defaultuserroleid'] = 'Rolle für Nutzer/innen';
$string['deleteincompleteusers'] = 'Unvollständige Nutzerkonten löschen';
$string['deleteunconfirmed'] = 'Unbestätigte Nutzerkonten löschen';
$string['deleteuser'] = 'Nutzerkonto löschen';
$string['density'] = 'LaTeX Größe';
$string['denyemailaddresses'] = 'E-Mail-Domains zurückweisen';
$string['development'] = 'Entwicklung';
$string['devicedetectregex'] = 'Reguläre Ausdrücke zur Geräteerkennung';
$string['devicedetectregex_desc'] = '<p>Standardmäßig werden von Moodle folgende Gerätetypen unterschieden:
<br>- Standard (PCs, Laptops, usw.),
<br>- Mobile (Smartphones und andere kleine digitale Endgeräte),
<br>- Tablet (iPads, Android-Tablets),
<br>- Legacy (veraltete Geräte mit Internet Explorer 6).</p>
<p>In der Designauswahl können diesen Gerätetypen unterschiedliche Designs zugewiesen werden.</p>

<p>Die Einstellung erlaubt zur Erkennung von speziellen Gerätetypen auch reguläre Ausdrücke, welche dann Vorrang vor den standardmäßigen Gerätetypen haben.</p>

<p>Mit dem regulären Ausdruck \'/(MIDP-1.0|Maemo|Windows CE)/\' könnten Sie beispielsweise häufig verwendete FeaturePhones erkennen und den Rückgabewert \'FeaturePhone\' angeben. Dies würde \'FeaturePhone\' zur Designauswahl hinzufügen, so dass Sie für diesen Gerätetyp dann ein spezielles Design vorgeben könnten. Alle anderen Smartphones würden weiterhin das für \'Mobile\' zugeordnete Design verwenden.</p>';
$string['devicedetectregexexpression'] = 'Regulärer Ausdruck';
$string['devicedetectregexvalue'] = 'Rückgabewert';
$string['devicetype'] = 'Gerätetyp';
$string['disableuserimages'] = 'Nutzerbilder deaktivieren';
$string['displayerrorswarning'] = 'Die Aktivierung der PHP-Einstellung <em>display_errors</em> wird für produktive Websites nicht empfohlen, weil einige der Fehlermeldungen sensible Informationen über Ihre Serverkonfiguration preisgeben könnten.';
$string['displayloginfailures'] = 'Login-Fehler anzeigen';
$string['dndallowtextandlinks'] = 'Drag-and-drop für Text und Links';
$string['doclang'] = 'Sprache für Dokumentation';
$string['docroot'] = 'Basisadresse zur Dokumentation';
$string['doctonewwindow'] = 'In neuem Fenster öffnen';
$string['download'] = 'Download';
$string['durationunits'] = 'Wartezeit';
$string['edithelpdocs'] = 'Hilfetexte bearbeiten';
$string['editlang'] = 'Bearbeiten';
$string['editorbackgroundcolor'] = 'Hintergrundfarbe';
$string['editordictionary'] = 'Wörterbuch für den Editor';
$string['editorfontfamily'] = 'Zeichensatzart';
$string['editorfontlist'] = 'Zeichensatzliste';
$string['editorfontsize'] = 'Schriftgröße';
$string['editorhidebuttons'] = 'Verborgene Tasten';
$string['editorkillword'] = 'Word-Format-Filter';
$string['editorspelling'] = 'Rechtschreibprüfung für den Editor';
$string['editorspellinghelp'] = 'Diese Einstellung aktiviert bzw. deaktiviert die Rechtschreibprüfung. Wenn sie aktiviert ist, muss <strong>aspell</strong> auf dem Server installiert sein.';
$string['editstrings'] = 'Menütexte bearbeiten';
$string['emailchangeconfirmation'] = 'Bestätigung der E-Mail-Änderung';
$string['emoticonalt'] = 'Alternativtext';
$string['emoticoncomponent'] = 'Komponente';
$string['emoticonimagename'] = 'Bildname';
$string['emoticons'] = 'Emoticons';
$string['emoticons_desc'] = 'Dieses Formular definiert die Emoticons (oder Smileys) für Ihre Website. Um eine Zeile aus der Tabelle zu entfernen, löschen Sie die Werte und speichern Sie das Formular ab. Um ein neues Emoticon hinzuzufügen, füllen Sie die Felder in der letzten leeren Tabellenzeile aus. Um alle Felder auf die Standardwerte zurückzusetzen, klicken Sie auf den entsprechenden Link.

* Text (erforderlich) - Dieser Text wird durch ein Bild des Emoticons ersetzt. Der Text muss mindestens zwei Zeichen lang sein.
* Bildname (erforderlich) - Dateiname des Bildes ohne Erweiterung, inclusive Pfad relativ zum Verzeichnis \'pix\'.
* Komponente (erforderlich) - Komponente, die das Symbol in Moodle bereitstellt.
* Alternativtext (optional) - Der alternative Text kann String-ID und Komponente des Emoticons anzeigen.';
$string['emoticonsreset'] = 'Emoticons auf Standardwerte zurücksetzen';
$string['emoticontext'] = 'Text';
$string['emptysettingvalue'] = 'Leer';
$string['enableblogs'] = 'Blogs aktivieren';
$string['enablecalendarexport'] = 'Kalender-Export aktivieren';
$string['enablecomments'] = 'Kommentare aktivieren';
$string['enablecourserequests'] = 'Kursanfragen erlauben';
$string['enablecssoptimiser'] = 'CSS Optimierer aktivieren';
$string['enablecssoptimiser_desc'] = 'Wenn diese Option aktiviert ist, wird CSS vor dem Caching durch eine Codeoptimierung geleitet. Doppelte Zuweisungen und überflüssige Leerzeichen werden entfernt. Die gleichzeitige Nutzung mit dem Designbearbeitungsmodus kann eine hohe Serverlast bewirken, hilft aber bei der Erstellung von optimiertem CSS.';
$string['enabled'] = 'Aktiviert';
$string['enabledevicedetection'] = 'Geräteerkennung';
$string['enableglobalsearch'] = 'Globale Suche aktivieren';
$string['enableglobalsearch_desc'] = 'Diese Option aktiviert eine regelmäßige automatische Indizierung und Synchronisierung.';
$string['enablegravatar'] = 'Gravatar aktivieren';
$string['enablegravatar_help'] = 'Wenn diese Option aktiviert ist, versucht Moodle ein Profilbild von Gravatar anzuzeigen, falls Nutzer/innen kein eigenes Profilbild hochgeladen haben.';
$string['enablemobilewebservice'] = 'Webservice für mobile Endgeräte aktivieren';
$string['enablerecordcache'] = 'Zwischenspeicherung erlauben';
$string['enablerssfeeds'] = 'RSS Feeds aktivieren';
$string['enablesafebrowserintegration'] = '\'Safe Exam Browser\' vorsehen';
$string['enablesearchareas'] = 'Suchbereiche aktivieren';
$string['enablestats'] = 'Statistiken aktivieren';
$string['enabletrusttext'] = 'Trusted-Content-System aktivieren';
$string['enablewebservices'] = 'Webservices aktivieren';
$string['enablewsdocumentation'] = 'Dokumentation zu Webservices';
$string['enrolinstancedefaults'] = 'Standardeinstellungen zur Einschreibung';
$string['enrolinstancedefaults_desc'] = 'Standardeinstellungen zur Einschreibung in neue Kurse';
$string['enrolmultipleusers'] = 'Nutzer/innen einschreiben';
$string['environment'] = 'Serverkonfiguration';
$string['environmenterrortodo'] = 'Sie müssen zunächst alle Probleme mit der Serverkonfiguration beheben, bevor Sie mit der Installation von Moodle fortfahren können.';
$string['environmenterrorupgrade'] = 'Hinweis: Sie sollten unbedingt die Probleme mit der Serverkonfiguration beheben, bevor Sie mit der Aktualisierung fortfahren. Falls Sie die Aktualisierung trotzdem durchführen und die Anforderungen missachten, könnten Fehler entstehen, eventuell auch Datenverluste. Möchten Sie wirklich weiter fortfahren?';
$string['environmentmustfixsetting'] = 'Die PHP-Einstellung muss geändert werden';
$string['environmentok'] = 'Die Serverkonfiguration entspricht den Anforderungen.';
$string['environmentrecommendcustomcheck'] = 'Wenn dieser Test fehlschlägt, dann ist ein  mögliches Problem vorhanden.';
$string['environmentrecommendinstall'] = 'sollte installiert und aktiviert sein';
$string['environmentrecommendversion'] = 'empfohlen: {$a->needed} - installiert: {$a->current}';
$string['environmentrequirecustomcheck'] = 'Dieser Test muss erfolgreich verlaufen.';
$string['environmentrequireinstall'] = 'muss installiert und aktiviert sein';
$string['environmentrequireversion'] = 'notwendig: {$a->needed} - installiert: {$a->current}';
$string['environmentsettingok'] = 'Empfohlene Einstellung gefunden';
$string['environmentshouldfixsetting'] = 'Die PHP-Einstellung sollte geändert werden';
$string['environmentxmlerror'] = 'Fehler beim Auslesen der Serverkonfiguration ({$a->error_code})';
$string['errordeletingconfig'] = 'Fehler beim Löschen der Konfigurationsdaten für das Plugin \'{$a}\'';
$string['errorsetting'] = 'Einige Einstellungen konnten nicht gespeichert werden:';
$string['errorwithsettings'] = 'Einige Einstellungen wurden wegen eines Fehlers nicht geändert:';
$string['eventshandlersinuse'] = 'Die folgenden Plugins verwenden veraltete Verarbeitungsprozesse gemäß der \'Events 1 API\' \'{$a}\'. Aktualisieren Sie diese Plugins auf die \'Events 2 API\'. Informationen unter https://docs.moodle.org/dev/Event_2#Event_dispatching_and_observers.';
$string['everyonewhocan'] = 'Alle, die \'{$a}\' können';
$string['exceptions'] = 'Ausnahmen';
$string['execpathnotallowed'] = 'Das Setzen von Systempfaden ist in der config.php deaktiviert.';
$string['experimental'] = 'Experimentell';
$string['experimentalsettings'] = 'Experimentelle Einstellungen';
$string['extendedusernamechars'] = 'Sonderzeichen in Anmeldenamen';
$string['extramemorylimit'] = 'Eigene PHP-Memory-Begrenzung';
$string['fatalsessionautostart'] = '<p>Schwerwiegender Konfigurationsfehler - bitte benachrichtigen Sie Ihren Server-Administrator</p> <p>Um ordnungsgemäß zu arbeiten, ist für Moodle eine Änderung in den PHP-Einstellungen notwendig.<br /><code> session.auto_start=off</code> muss gesetzt sein!<br />Diese Einstellung wird auf den Server geändert, u.z.  in der Datei <code>php.ini</code>, in der Apache/IIS Konfiguration oder in der Datei  <code>.htaccess</code>.</p>';
$string['filecreated'] = 'Neue Datei angelegt';
$string['filestoredin'] = 'Verzeichnis zum Speichern der Sprachdateien :';
$string['filestoredinhelp'] = 'Wo soll die Datei gespeichert werden';
$string['filterall'] = 'Alle Begriffe filtern';
$string['filtermatchoneperpage'] = 'Filter einmal pro Seite anwenden';
$string['filtermatchonepertext'] = 'Filter einmal pro Text anwenden';
$string['filters'] = 'Filter';
$string['filtersettings'] = 'Übersicht';
$string['filtersettingsgeneral'] = 'Generelle Filtereinstellungen';
$string['filteruploadedfiles'] = 'Filter für hochgeladene Dateien';
$string['forcelogin'] = 'Anmeldung notwendig';
$string['forceloginforprofileimage'] = 'Anmeldung notwendig, um Profilbilder anzuzeigen';
$string['forceloginforprofileimage_help'] = 'Diese Option legt fest, dass Nutzer/innen eingeloggt sein müssen, um Profilbilder sehen zu können. Bei E-Mail-Mitteilungen wird nur das Standardbild eingesetzt.';
$string['forceloginforprofiles'] = 'Anmeldung notwendig, um Profile anzuzeigen';
$string['forcetimezone'] = 'Zeitzone festlegen';
$string['formatuninstallwithcourses'] = 'Das Format \'{$a->format}\' wird in {$a->count} Kursen verwendet. Das Format dieser Kurse wird auf \'{$a->defaultformat}\' (Standardformat dieser Website) geändert, wobei formatspezifische Daten verloren gehen könnten. Möchten Sie den Vorgang fortsetzen?';
$string['frontpage'] = 'Startseite';
$string['frontpagebackup'] = 'Sicherung';
$string['frontpagedefaultrole'] = 'Standardrolle für Startseite';
$string['frontpagefilters'] = 'Filter der Startseite';
$string['frontpageloggedin'] = 'Startseite nach Anmeldung';
$string['frontpageoverrides'] = 'Rechteänderungen für Startseite';
$string['frontpagequestions'] = 'Testfragen';
$string['frontpagerestore'] = 'Wiederherstellung';
$string['frontpageroles'] = 'Rollen für Startseite';
$string['frontpagesettings'] = 'Einstellungen';
$string['fullnamedisplay'] = 'Vollständiger Name';
$string['fullnamedisplayprivate'] = 'Vollständiger Name - angepasst';
$string['gdrequired'] = 'Die PHP-Extension GD wird zur Bildumwandlung benötigt.';
$string['generalsettings'] = 'Grundeinstellungen';
$string['geoipfile'] = 'GeoIP-Ortsdaten';
$string['getremoteaddrconf'] = 'Geloggte IP-Adressen Quelle';
$string['globalsearch'] = 'Globale Suche';
$string['globalsearchmanage'] = 'Globale Suche verwalten';
$string['googlemapkey3'] = 'Google Maps API V3 Key';
$string['googlemapkey3_help'] = 'Um die Lokalisierung von IP-Adressen über Google-Maps zu ermöglichen, benötigen Sie einen API Key von Google. Sie erhalten diesen Schlüssel kostenfrei unter: <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key" target="_blank">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a>';
$string['gotofirst'] = 'Zum ersten fehlenden Text springen';
$string['gradebook'] = 'Bewertungen';
$string['gradebookroles'] = 'Bewertete Rollen';
$string['gradeexport'] = 'Exportformat für die Bewertungen';
$string['gravatardefaulturl'] = 'Gravatar Standardbild';
$string['gravatardefaulturl_help'] = 'Gravatar benötigt ein Standardbild, wenn für bestimmte Nutzer/innen kein Profilbild gefunden werden kann. Sie haben mehrere Möglichkeiten: (1) Das Feld bleibt leer und Moodle verwendet ein vorgegebenes Bild. (2) Sie geben ein von Ihnen gewählten Bild über eine vollständige URL vor. (3) Oder Sie lassen <a href="https://en.gravatar.com/site/implement/images/#default-image">Standardbilder von Gravatar</a> erzeugen.';
$string['groupenrolmentkeypolicy'] = 'Regeln zum Einschreibeschlüssel für Gruppen';
$string['groupenrolmentkeypolicy_desc'] = 'Diese Option legt fest, dass für Einschreibeschlüssel zu Gruppen die gleichen Regeln gelten wie für Kennwörter.';
$string['guestroleid'] = 'Rolle für Gäste';
$string['guestroleid_help'] = 'Diese Rolle ist automatisch Gästen zugewiesen. Sie wird außerdem vorübergehend vergeben, wenn Nutzer/innen über den \'Gastzugang\' einen Kurs betreten, sich dort aber nicht einschreiben.';
$string['helpadminseesall'] = 'Sollen Administrator/innen alle Kalendereinträge sehen oder nur die sie selbst betreffenden?';
$string['helpcalendarcustomexport'] = 'Eigenen Datumsbereich beim Kalenderexport aktivieren. Damit diese Opton wirksam wird, müssen Kalenderexporte generell aktiviert sein.';
$string['helpexportlookahead'] = 'Wie viele Tage im voraus sollen Termine beim Kalenderexport berücksichtigt werden?';
$string['helpexportlookback'] = 'Wie viele Tage in der Vergangenheit sollen Termine beim Kalenderexport berücksichtigt werden?';
$string['helpforcetimezone'] = 'Sie können die Zeitzone festlegen. Alternativ können Sie allen Personen erlauben, ihre eigene Zeitzone zu wählen.';
$string['helpshowicalsource'] = 'Wenn diese Option aktiviert ist, werden Name und Link bei iCal-importierten Terminen gezeigt.';
$string['helpsitemaintenance'] = 'Der Wartungsmodus sperrt die Website für Arbeiten am System, für Installationen von Updates und Zusatzmodulen. Die Anmeldung ist ausschließlich für Administrator/innen möglich.';
$string['helpstartofweek'] = 'An welchem Tag soll die Woche im Kalender beginnen?';
$string['helpupcominglookahead'] = 'Wie viele Tage im Voraus sollen künftige Termine gesucht werden?';
$string['helpupcomingmaxevents'] = 'Wie viele Termine sollen maximal als künftige Termine angezeigt werden?';
$string['helpweekenddays'] = 'Welche Tage der Woche sollen als Wochenende farbig hervorgehoben werden?';
$string['hiddenuserfields'] = 'Nutzerfelder verbergen';
$string['hidefromall'] = 'Für alle verbergen';
$string['hidefromnone'] = 'Für niemanden verbergen';
$string['hidefromstudents'] = 'Für Teilnehmer/innen verbergen';
$string['htmleditor'] = 'HTML-Editor';
$string['htmleditorsettings'] = 'Einstellungen für den HTML-Editor';
$string['htmlsettings'] = 'HTML-Einstellungen';
$string['http'] = 'HTTP';
$string['httpsecurity'] = 'HTTP-Sicherheit';
$string['hubs'] = 'Hubs';
$string['iconvrequired'] = 'Die PHP-Extension ICONV muss installiert sein';
$string['ignore'] = 'Ignorieren';
$string['includemoduleuserdata'] = 'Nutzerdaten aus Modulen einbeziehen';
$string['incompatibleblocks'] = 'Inkompatible Blöcke';
$string['indexdata'] = 'Indizierungsdaten';
$string['installhijacked'] = 'Die Installation muss von der ursprünglichen IP-Adresse aus abgeschlossen werden.';
$string['installsessionerror'] = 'Die PHP Sessions können nicht initialisiert werden. Bitte prüfen Sie, ob Ihr Browser Cookies akzeptiert.';
$string['intlrecommended'] = 'Die PHP-Extension Intl gewährleistet die Internationalisierung, etwa eine lokalisierte Sortierung';
$string['invalidsection'] = 'Ungültiger Abschnitt';
$string['invaliduserchangeme'] = 'Der Anmeldename "changeme" ist reserviert. Wählen Sie einen anderen Anmeldenamen.';
$string['ipblocked'] = 'Diese Website ist im Moment nicht verfügbar.';
$string['ipblocker'] = 'IP-Adressen';
$string['ipblockersyntax'] = 'Schreiben Sie jeden IP-Eintrag im Textfeld in eine neue Zeile.
<ul>
<li>vollständige IP-Adressen (z.B. 192.168.10.1)</li>
<li>unvollständige IP-Adressen (z.B. 192.168.) für alle IP-Adressen, die mit diesen Zahlen beginnen</li>
<li>IP-Adressbereich (z.B. 192.168.10.20-50) für alle IP-Adressen im Bereich (hier 20 bis 50)</li>
<li>IP-Adressen in CDIR-Schreibweise (z.B. 231.54.211.0/20)</li>
<li>Textdomains sind nicht erlaubt (z.B. \'meinedomain.de\')</li>
<li>Leere Zeilen werden ignoriert</li>
</ul>';
$string['iplookup'] = 'IP-Adressen-Suche';
$string['iplookupgeoplugin'] = 'Ortsdaten werden aktuell durch den Dienst <a href="http://www.geoplugin.com">geoPlugin</a> bereitgestellt. Bessere Ergebnisse erhalten Sie mit der Ortsdatenbank \'<a href="http://www.maxmind.com">GeoLite City von MaxMind.com</a>\'.';
$string['iplookupinfo'] = 'Standardmäßig nutzt Moodle zur Lokalisierung von IP-Adressen die Datenbank NetGeo. Die Datenbank wird nicht gepflegt und liefert leider oft seltsame Daten. Die Installation der freien Datenbank \'MaxMind GeoLiteCity\' wird empfohlen. Die IP-Adressen werden auf einer einfachen Übersichtskarte lokalisiert. Mit einem Googlekonto und einen freien API Key könnten Sie auch interaktive Karten über Google Maps verwenden.';
$string['iplookupmaxmindnote'] = 'Moodle benutzt zur Darstellung die Ortsdatenbank \'<a href="http://www.maxmind.com">GeoLite City von MaxMind.com</a>\'.';
$string['keeptagnamecase'] = 'Schreibweise der Schlagwörter beibehalten';
$string['lang'] = 'Sprache';
$string['langcache'] = 'Sprachmenü-Cache
';
$string['langcache_desc'] = 'Cache für Sprachmenü. Wenn diese Option aktiviert ist, wird eine Liste der in Moodle aktivierten Sprachpakete zwischengespeichert. Der Cache wird automatisch aktualisiert, wenn Sie ein Sprachpaket über die Sprachverwaltung installieren oder löschen. Falls Sie ein Sprachpaket manuell auf den Server kopieren, müssen Sie auch den Sprachcache löschen.';
$string['langlist'] = 'Sprachen im Sprachmenü';
$string['langmenu'] = 'Sprachmenü';
$string['langpackwillbeupdated'] = 'Bei der Aktualisierung wird auch das Sprachpaket erneuert.';
$string['langstringcache'] = 'Sprachcache';
$string['languagesettings'] = 'Einstellungen';
$string['latinexcelexport'] = 'Excel-Kodierung';
$string['legacyfilesaddallowed'] = '\'Alte Kursdateien\' erweiterbar';
$string['legacyfilesaddallowed_help'] = 'Falls ein Verzeichnis \'Alte Kursdateien\' im Kurs vorhanden ist, dürfen dort weitere Dateien, Verzeichnisse und Unterverzeichnisse hinzugefügt werden.';
$string['legacyfilesinnewcourses'] = '\'Alte Kursdateien\' in neuen Kursen';
$string['legacyfilesinnewcourses_help'] = 'Standardmäßig ist das Verzeichnis \'Alte Kursdateien\' nur in Kursen verfügbar, die aus Moodle 1.9.x importiert wurden. Beachten Sie bitte, dass einige Features (z.B. Sicherung und Wiederherstellung einzelner Aktivitäten) nicht zu dieser Option kompatibel sind.';
$string['libcurlwarning'] = 'Es wurde festgestellt, dass libcurl das CURLOPT_PROTOCOL nicht unterstützt.  Aus Sicherheitsgründen sollte die libcurl-Installation aktualisiert werden.';
$string['licensesettings'] = 'Lizenzeinstellungen';
$string['linkadmincategories'] = 'Adminbereiche verlinken';
$string['linkadmincategories_help'] = 'Wenn diese Option aktiviert ist, werden die Einstellungen für die verschiedenen Administrationsbereiche als Links auf den Übersichtsseiten bereitgestellt.';
$string['linkcoursesections'] = 'Kursabschnitte immer mit Link';
$string['linkcoursesections_help'] = 'Für die Kursabschnitte werden normalerweise nur dann Links angeboten, wenn das Kursformat nur einen einzelnen Abschnitt pro Seite anzeigt. Wenn diese Option aktiviert ist, wird immer ein Link zur Verfügung gestellt.';
$string['loading'] = 'Lädt';
$string['localetext'] = '"locale" für die Website';
$string['localstringcustomization'] = 'Lokales Sprachpaket anpassen';
$string['location'] = 'Lokales';
$string['locationsettings'] = 'Einstellungen';
$string['locked'] = 'Gesperrt';
$string['lockoutduration'] = 'Kontosperrdauer';
$string['lockoutduration_desc'] = 'Die Kontosperrung wird automatisch nach dieser Zeit aufgehoben.';
$string['lockoutemailbody'] = 'Ihr Konto mit dem Anmeldenamen {$a->username} wurde nach mehreren ungültigen Login-Versuchen auf dem Server \'{$a->sitename}\' gesperrt.

Um das Konto sofort zu entsperren, gehen Sie auf folgende Adresse {$a->link}. In den meisten Fällen sollte dies als klickbarer  Link angezeigt werden. Sollte ein Klick nicht funktionieren, kopieren Sie die Adresse in das Adressfeld Ihres Webbrowsers.

Um Hilfe zu bekommen, wenden Sie sich an {$a->admin}';
$string['lockoutemailsubject'] = 'Ihr Konto auf \'{$a}\' wurde gesperrt';
$string['lockouterrorunlock'] = 'Ungültige Daten zur Kontofreigabe';
$string['lockoutthreshold'] = 'Schwelle zur Kontosperrung';
$string['lockoutthreshold_desc'] = 'Nach wie vielen erfolglosen Anmeldeversuchen soll ein Nutzerkonto vorübergehend gesperrt werden? Mit dieser Option werden Angriffe auf Ihr System erschwert.';
$string['lockoutwindow'] = 'Kontrollzeitraum zur Kontosperrung';
$string['lockoutwindow_desc'] = 'Kontrollzeitraum für die Schwelle zur Kontosperrung. Wenn keine weiteren Fehlversuche erfolgten, wird der Zähler nach dieser Zeit zurückgesetzt.';
$string['log'] = 'Logdaten';
$string['logguests'] = 'Gastzugriff loggen';
$string['logguests_help'] = 'Diese Einstellung legt fest, ob die Aktionen über den Gastzugang unabhängig von den anderen Nutzerkonten geloggt werden soll. Es wird dringend empfohlen, bei produktiven Websites diese Einstellung zu aktivieren, auch wenn zur Verringerung der Serverlast die Deaktivierung von Logdaten für den Gastzugang erwogen wird.';
$string['loginhttps'] = 'Login über HTTPS';
$string['loginpageautofocus'] = 'Autofokus auf Login';
$string['loginpageautofocus_help'] = 'Das Aktivieren dieser Option verbessert die Benutzbarkeit der Loginseite, aber ein Autofokus auf bestimmte Felder könnte Probleme hinsichtlich der Barrierefreiheit verursachen.';
$string['loginpasswordautocomplete'] = 'Vervollständigung von Kennwörtern verhindern';
$string['loginpasswordautocomplete_help'] = 'Wenn diese Options aktiviert ist, dürfen Kennwörter nicht im Browser gespeichert werden.';
$string['loglifetime'] = 'Logdaten speichern';
$string['logstorenotrequired'] = 'Logdatenspeicherung nicht nötig';
$string['logstoressupported'] = 'Logdaten für diesen Bericht';
$string['longtimewarning'] = '<b>Bitte beachten Sie, dass dieser Vorgang sehr lange dauern kann.</b>';
$string['maintenancemode'] = 'Wartungsmodus';
$string['maintenancemodeisscheduled'] = 'Die Website wird in {$a->min} Minuten {$a->sec} Sekunden in den Wartungsmodus geschaltet.';
$string['maintfileopenerror'] = 'Fehler beim Aktivieren des Wartungsmodus';
$string['maintinprogress'] = 'Die Wartung dauert eine Weile ....';
$string['manageformats'] = 'Kursformate verwalten';
$string['manageformatsgotosettings'] = 'Standardformat kann geändert werden in \'{$a}\'';
$string['managelang'] = 'Verwalten';
$string['managelicenses'] = 'Lizenzen verwalten';
$string['manageqbehaviours'] = 'Frageverhalten verwalten';
$string['manageqtypes'] = 'Fragetypen verwalten';
$string['maturity100'] = 'Beta';
$string['maturity150'] = 'Release Candidate';
$string['maturity200'] = 'Stable Version';
$string['maturity50'] = 'Alpha';
$string['maturityallowunstable'] = 'Hinweis: dieses Script kann mit der Option --allow-unstable ausgeführt werden';
$string['maturitycoreinfo'] = 'Diese Website arbeitet mit einer Entwicklerversion: \'{$a}\'';
$string['maturitycorewarning'] = 'Die Moodle-Version, mit der Sie gerade installieren oder aktualisieren möchten, ist markiert als \'{$a}\' und nicht für einen produktiven Einsatz vorgesehen. Für einen produktive Einsatz sollten Sie unbedingt eine Moodle-Version aus einem STABLE-Zweig verwenden.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxconsecutiveidentchars'] = 'Aufeinander folgende identische Zeichen';
$string['maxeditingtime'] = 'Maximale Zeit zur Beitragsbearbeitung';
$string['maxtimelimit'] = 'Maximale Laufzeit';
$string['maxtimelimit_desc'] = 'Diese Option legt die maximale Laufzeit (in Sekunden) für PHP-Scripte fest, die Moodle ohne Anzeige erlaubt. Wenn der Wert 0 gesetzt ist, werden die Standardwerte von Moodle benutzt. Sollten Sie einen Frontend-Server mit eigenem Zeitlimit benutzen, müssen Sie diesen Wert niedriger setzen, um PHP-Fehler protokollieren zu können. Diese Option wird nicht auf CLI-Scripte angewendet.';
$string['maxusersperpage'] = 'Maximale Nutzeranzahl pro Seite';
$string['mbstringrecommended'] = 'Die Installation der Bibliothek MBSTRING wird zur Leistungsverbesserung dringend empfohlen. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['mediapluginavi'] = '.avi Filter aktivieren';
$string['mediapluginflv'] = '.flv Filter aktivieren';
$string['mediapluginimg'] = 'Automatische Einbettung von verlinkten Bildern aktivieren';
$string['mediapluginmov'] = '.mov Filter aktivieren';
$string['mediapluginmp3'] = '.mp3 Filter aktivieren';
$string['mediapluginmpg'] = '.mpg Filter aktivieren';
$string['mediapluginogg'] = '.ogg Filter aktivieren';
$string['mediapluginogv'] = '.ogv Filter aktivieren';
$string['mediapluginram'] = '.ram Filter aktivieren';
$string['mediapluginrm'] = '.rm Filter aktivieren';
$string['mediapluginrpm'] = '.rpm Filter aktivieren';
$string['mediapluginswf'] = '.swf  Filter aktivieren';
$string['mediapluginswfnote'] = 'Sicherheitswarnung: Standardmäßig dürfen normale Nutzer/innen keine SWF-Flashdateien einbetten.';
$string['mediapluginwmv'] = '.wmv Filter aktivieren';
$string['mediapluginyoutube'] = 'YouTube Link-Filter aktivieren';
$string['messaging'] = 'Mitteilungen aktivieren';
$string['messagingallowemailoverride'] = 'E-Mail-Adresse für Mitteilungen überschreiben';
$string['messagingdeletereadnotificationsdelay'] = 'Gelesene Benachrichtigungen löschen';
$string['messaginghidereadnotifications'] = 'Gelesene Benachrichtigungen verbergen';
$string['minpassworddigits'] = 'Ziffern';
$string['minpasswordlength'] = 'Kennwortlänge';
$string['minpasswordlower'] = 'Kleinbuchstaben';
$string['minpasswordnonalphanum'] = 'Sonderzeichen';
$string['minpasswordupper'] = 'Großbuchstaben';
$string['misc'] = 'Verschiedenes';
$string['mnetrestore_extusers'] = '<strong>Achtung:</strong> Die Sicherungsdatei enthält externe Moodle-Nutzerkonten, die bei der Wiederherstellung angelegt werden.';
$string['mnetrestore_extusers_admin'] = '<strong>Achtung: </strong>Diese Sicherungsdatei scheint von einer anderen Moodle-Instanz zu stammen und externe Nutzerkonten aus dem Moodle-Netzwerk zu enthalten. Der Wiederherstellungsvorgang wird versuchen, die Moodle-Netzwerk-Server für alle erzeugten Nutzer/innen anzupassen. Die nicht passenden Nutzerkonten werden automatisch auf die interne Authentifizierung gesetzt (anstelle von MNET) und in der Logdatei festgehalten.';
$string['mnetrestore_extusers_mismatch'] = '<strong>Achtung:</strong> Die Sicherungsdatei wurde in einem anderen Moodle erzeugt und enthält externe Nutzerkonten aus dem Moodle-Netzwerk, die evtl. nicht wiederhergestellt werden können. Diese Aktion wird nicht unterstützt. Nur wenn Sie sicher sind, dass die Sicherung aus diesem Moodle stammt oder dass alle Nutzerkonten aus dem Moodle-Netzwerk verfügbar sind, können Sie die Wiederherstellung fortsetzen.';
$string['mnetrestore_extusers_noadmin'] = '<strong>Achtung: </strong>Diese Sicherungsdatei scheint von einer anderen Moodle-Instanz zu stammen und externe Nutzerkonten aus dem Moodle-Netzwerk zu enthalten. Sie sind nicht berechtigt, diese Art von Wiederherstellung durchzuführen. Bitte nehmen Sie Kontakt mit dem Administrator Ihrer Website auf oder führen Sie alternativ die Wiederherstellung für den Kurs ohne Nutzerinformationen (Module, Dateien, ...) durch.';
$string['mnetrestore_extusers_switchuserauth'] = 'Der externe Nutzer {$a->username} aus dem Moodle-Netzwerk (von {$a->mnethosturl} kommend) wechselte zum lokal authentifizierten Nutzer {$a->auth}';
$string['mobile'] = 'Mobile';
$string['mobilecssurl'] = 'CSS';
$string['modchooserdefault'] = 'Aktivitätenauswahl';
$string['modeditdefaults'] = 'Grundeinstellungen für die Aktivität';
$string['modeditingmenu'] = 'Menü für Aktivitätsbearbeitung';
$string['modeditingmenu_desc'] = 'Wenn diese Option aktiviert ist, werden die meisten der Werkzeuge zur Bearbeitung der Aktivitäten und Materialien in einem Dropdown-Menü angezeigt. Dies sorgt für mehr Übersichtlichkeit';
$string['modsettings'] = 'Übersicht';
$string['modulesecurity'] = 'Modul-Sicherheit';
$string['moodleorghubname'] = 'Moodle.net';
$string['multilangforceold'] = 'Alte Mehrsprach-Syntax festlegen:
ohne <span class="multilang"> und ohne <lang>';
$string['mustenablestats'] = 'Die Statistiken wurden für die Website nicht aktiviert.';
$string['mycoursesperpage'] = 'Zahl der Kurse';
$string['mydashboard'] = 'Standard Systemdashboard';
$string['mymoodle'] = 'Dashboard';
$string['mymoodleredirect'] = 'Weiterleitung zum Dashboard';
$string['mypage'] = 'Standardmäßiges Dashboard';
$string['mypagelocked'] = 'Standardseite sperren';
$string['myprofile'] = 'Standardmäßige Profilseite';
$string['navadduserpostslinks'] = 'Links zu Nutzerbeiträgen einfügen';
$string['navadduserpostslinks_help'] = 'Bei jedem Nutzer werden zwei Links in die Navigation für Forenthemen und Diskussionsbeiträge des Nutzers auf der Startseite und in seinen Kursen eingefügt.';
$string['navcourselimit'] = 'Kursgrenze';
$string['navexpandmycourses'] = '\'Meine Kurse\' erweitert im Dashboard anzeigen';
$string['navexpandmycourses_desc'] = 'Diese Option legt fest, dass \'Meine Kurse\' standardmäßig beim Block \'Navigation\' im Dashboard aufgeklappt angezeigt werden.';
$string['navigationupgrade'] = 'Diese Aktualisierung liefert zwei neue Navigationsblöcke, die einige bisherige Blöcke (Administration, Kurse, Aktivitäten und Personen) ablösen. Wenn Sie spezielle Zugriffsrechte für diese Blöcke gesetzt haben, sollten Sie unbedingt prüfen, ob sich alles so verhält wie Sie es wünschen.';
$string['navshowallcourses'] = 'Alle Kurse anzeigen';
$string['navshowcategories'] = 'Kursbereiche anzeigen';
$string['navshowfrontpagemods'] = 'Aktivitäten der Startseite in Navigation anzeigen';
$string['navshowfrontpagemods_help'] = 'Wenn diese Option aktiviert ist, werden alle Aktivitäten der Startseite in der Navigation angezeigt.';
$string['navshowfullcoursenames'] = 'Vollständige Kursnamen anzeigen';
$string['navshowfullcoursenames_help'] = 'Wenn diese Option aktiviert ist, werden in der Navigation die vollständigen Kursnamen angezeigt, andernfalls nur die Kurznamen.';
$string['navshowmycoursecategories'] = 'Meine Kursbereiche anzeigen';
$string['navshowmycoursecategories_help'] = 'Wenn diese Option aktiviert ist, werden Kurse auf dem Dashboard in Kategorien angezeigt.';
$string['navsortmycoursessort'] = 'Meine Kurse anordnen';
$string['navsortmycoursessort_help'] = 'Diese Option legt fest, ob Kurse im Bereich \'Meine Kurse\' gezeigt werden und wie sie angeordnet sind. Standardmäßig wird eine alphabetische Sortierung vorgegeben (Einstellungen > Website-Administration > Kurse > Verwaltung).';
$string['neverdeleteruns'] = 'Durchläufe nicht löschen';
$string['nobookmarksforuser'] = 'Sie haben keine Lesezeichen.';
$string['nodatabase'] = 'Keine Datenbank';
$string['nohttpsformobilewarning'] = 'Es wird empfohlen, HTTPS mit einem gültigen Zertifikat zu aktivieren. Moodle Mobile versucht vorrangig, eine gesicherte Verbindung zu verwenden.';
$string['nomissingstrings'] = 'Keine fehlenden Texte';
$string['nonewsettings'] = 'Bei der Aktualisierung wurden keine neuen Einstellungen hinzugefügt.';
$string['nonexistentbookmark'] = 'Das gesuchte Lesezeichen gibt es nicht.';
$string['noresults'] = 'Keine Ergebnisse gefunden.';
$string['noroles'] = 'Keine Rollen';
$string['nosupportedlogstore'] = 'Nicht unterstützte Logdaten gefunden';
$string['notifications'] = 'Systemmitteilungen';
$string['notifyloginfailures'] = 'E-Mail bei Login-Fehlern an';
$string['notifyloginthreshold'] = 'Schwelle zur Benachrichtigung';
$string['notloggedinroleid'] = 'Rolle für Besucher';
$string['numberofmissingstrings'] = 'Anzahl der fehlenden Texte: {$a}';
$string['numberofstrings'] = 'Gesamtzahl der Texte: {$a->strings}<br />Fehlende Texte: {$a->missing} ({$a->missingpercent}&nbsp;%)';
$string['opcacherecommended'] = 'PHP Opcode Caching verbessert die Leistung und senkt den Speicherbedarf. Die PHP-Extension OPcache wird voll unterstützt.';
$string['opensslrecommended'] = 'Die optionale Installation der OpenSSL Bibliothek wird dringend empfohlen. Dadurch wird die Moodle-Netzwerk-Funktionalität ermöglicht.';
$string['opentogoogle'] = 'Offen für Google';
$string['optionalmaintenancemessage'] = 'Wartungsinformationen';
$string['order1'] = 'Erstens';
$string['order2'] = 'Zweitens';
$string['order3'] = 'Drittens';
$string['order4'] = 'Viertens';
$string['passwordchangelogout'] = 'Nach einer Kennwortänderung abmelden';
$string['passwordchangelogout_desc'] = 'Wenn diese Option aktiviert ist und wenn das Kennwort geändert wird, werden alle Browsersessions abgebrochen, außer derjenigen, in der das neue Kennwort eingegeben wurde. Diese Einstellung hat keine Auswirkungen auf die Kennwortänderungen per Bulk-Upload.';
$string['passwordpolicy'] = 'Kennwortregeln';
$string['passwordresettime'] = 'Max. Zeit zur Bestätigung einer Kennwortrücksetzung';
$string['passwordreuselimit'] = 'Wiederholungsbeschränkung für Kennwörter';
$string['passwordreuselimit_desc'] = 'Diese Option legt fest, wie oft Nutzer/innen ein anderes Kennwort verwenden müssen, bevor sie ein altes Kennwort wiederbenutzen dürfen. Die Hashwerte der bisher benutzten Kennwörter werden intern gespeichert. Diese Option funktioniert nicht mit allen externen Authentifizierungen.';
$string['pathtodot'] = 'Pfad zu <i>dot</i>';
$string['pathtodot_help'] = 'Pfad zu dot, üblicherweise /usr/bin/dot. Um Grafiken aus DOT-Dateien generieren zu können, muss das Programm dot installiert und hier darauf verwiesen sein. Dies wird aktuell ausschließlich für das Profiling in Moodle gebraucht.  (Entwicklung > Profiling)';
$string['pathtodu'] = 'Pfad zu <i>du</i>';
$string['pathtogs'] = 'Pfad zu Ghostscript';
$string['pathtogs_help'] = 'In den meisten Linux-Installationen kann die Einstellung \'/usr/bin/gs\' bleiben. Bei Windows könnte die Einstellung \'c:/gs/bin/gswin32c.exe\' richtig sein. (Der Pfad darf keine Leerzeichen enthalten. Falls nötig, kopieren Sie die Dateien \'gswin32c.exe\' und \'gsdll32.dll\' in ein neues Verzeichnis ohne Leerzeichen im Pfad.)';
$string['pathtopgdump'] = 'Pfad zu <i>pg_dump</i>';
$string['pathtopgdumpdesc'] = 'Sie benötigen diese Einstellung nur, wenn mehr als ein pg_dump auf dem System vorhanden ist (z.B. wenn mehr als eine Version von PostgreSQL installiert ist).';
$string['pathtopgdumpinvalid'] = 'Ungültiger Pfad zu pg_dump - entweder falscher Pfad oder nicht ausführbar';
$string['pathtopsql'] = 'Pfad zu <i>psql</i>';
$string['pathtopsqldesc'] = 'Sie benötigen diese Einstellung nur, wenn mehr als ein psql auf dem System vorhanden ist (z.B. wenn mehr als eine Version von PostgreSQL installiert ist).';
$string['pathtopsqlinvalid'] = 'Ungültiger Pfad zu psql - entweder falscher Pfad oder nicht ausführbar';
$string['pathtounoconv'] = 'Pfad zu unoconv';
$string['pathtounoconv_help'] = 'Pfad zum Konverter unoconv. Dieses Programm wandelt Formate von Dokumenten um, die von LibreOffice unterstützt werden. Dieses optionale Zusatzprogramm kann verwendet werden, um in Moodle automatisch zwischen verschiedenen Formaten zu wechseln und eine breitere Palette von Abgabedateien mit der Möglichkeit von PDF-Anmerkungen zu unterstützen.';
$string['pcreunicodewarning'] = 'Die PHP-Extension PCRE sollte installiert und kompatibel zu UTF-8 zu sein.';
$string['perfdebug'] = 'Performance';
$string['performance'] = 'Performance';
$string['pgcluster'] = 'PostgreSQL Cluster';
$string['pgclusterdescription'] = 'PostgreSQL Versions-/Cluster-Parameter für Kommandozeilenoperationen. Wenn Sie nur eine PostgreSQL auf Ihrem System verwenden oder sich nicht sicher sind, lassen Sie das Feld leer.';
$string['phpfloatproblem'] = 'Unerwartetes Problem bei der Behandlung von PHP-Dezimalzahlen (float) aufgetreten - {$a}';
$string['pleaserefreshregistration'] = 'Ihre Website ist registriert. Die Registrierung wurde zuletzt am {$a} aktualisiert. <br />Über die automatische Website-Registierung werden Ihre Daten regelmäßig aktualisiert. Sie können die Registrierung aber auch jederzeit manuell aktualisieren.';
$string['pleaserefreshregistrationunknown'] = 'Ihre Website ist registriert, aber das Registrierungsdatum ist nicht bekannt. Bitte aktualisieren Sie Ihre Registrierung manuell oder stellen Sie sicher, dass die automatische Registrierung als geplanter Vorgang aktiviert ist.';
$string['plugin'] = 'Plugin';
$string['plugins'] = 'Plugins';
$string['pluginscheck'] = 'Plugin Abhängigkeitprüfung';
$string['pluginscheckfailed'] = 'Die Abhängigkeitprüfung ist fehlgeschlagen für {$a->pluginslist}';
$string['pluginschecktodo'] = 'Bevor Sie die Installation dieser Version fortführen können, müssen alle Plugin-Anforderungen gelöst sein.';
$string['pluginsoverview'] = 'Plugin-Übersicht';
$string['pluginsoverviewsee'] = 'Weitere Details finden Sie in der <a href="{$a->url}">Plugin-Übersicht</a>.';
$string['profilecategory'] = 'Kategorie';
$string['profilecategoryname'] = 'Name der Kategorie (muss eindeutig sein)';
$string['profilecategorynamenotunique'] = 'Dieser Name wird bereits benutzt';
$string['profilecommonsettings'] = 'Standardeinstellungen';
$string['profileconfirmcategorydeletion'] = 'In dieser Kategorie gibt es {$a} Feld(er), die in die Kategorie darüber (oder darunter) verschoben werden. <br />Möchten Sie die Kategorie wirklich löschen?';
$string['profileconfirmfielddeletion'] = 'Für das zu löschende Feld gibt es {$a} Nutzereinträge. <br />Möchten Sie das Feld wirklich löschen?';
$string['profilecreatecategory'] = 'Neue Profilkategorie anlegen';
$string['profilecreatefield'] = 'Neues Profilfeld anlegen:';
$string['profilecreatenewcategory'] = 'Neue Kategorie anlegen';
$string['profilecreatenewfield'] = 'Neues Profilfeld \'{$a}\' anlegen';
$string['profiledefaultcategory'] = 'Weitere Profileinstellungen';
$string['profiledefaultchecked'] = 'Standardmäßig markiert';
$string['profiledefaultdata'] = 'Standardwert';
$string['profiledeletecategory'] = 'Kategorie löschen';
$string['profiledeletefield'] = 'Feld \'{$a}\' wird gelöscht';
$string['profiledescription'] = 'Beschreibung eines Feldes';
$string['profiledscript'] = 'Dieses Script wird gerade analysiert';
$string['profiledscriptview'] = 'Analyseinformationen für dieses Script anzeigen';
$string['profileeditcategory'] = 'Bearbeite Kategorie: {$a}';
$string['profileeditfield'] = 'Profilfeld {$a} bearbeiten';
$string['profilefield'] = 'Profilfeld';
$string['profilefieldcolumns'] = 'Spalten';
$string['profilefieldispassword'] = 'Ist dies ein Kennwortfeld?';
$string['profilefieldlink'] = 'Link';
$string['profilefieldlink_help'] = 'Um den Text in einen Link umzuwandeln, geben Sie eine URL mit $$ an, wobei $$ durch den Text ersetzt wird. Um z.B. eine Twitter-ID in einen Link umzuwandeln, schreiben Sie http://twitter.com/$$.';
$string['profilefieldlinktarget'] = 'Verlinkungsziel';
$string['profilefieldmaxlength'] = 'Maximale Länge';
$string['profilefieldrows'] = 'Zeilen';
$string['profilefields'] = 'Profilfelder';
$string['profilefieldsize'] = 'Größe anzeigen';
$string['profileforceunique'] = 'Sollen die Daten eindeutig sein?';
$string['profileinvaliddata'] = 'Ungültiger Wert';
$string['profilelocked'] = 'Ist dieses Feld gesperrt?';
$string['profilemenudefaultnotinoptions'] = 'Der Standardwert entspricht keiner der Optionen';
$string['profilemenunooptions'] = 'Keine Menü-Option vorhanden';
$string['profilemenuoptions'] = 'Menü-Optionen (eine pro Zeile)';
$string['profilemenutoofewoptions'] = 'Sie müssen mindestens 2 Optionen angeben';
$string['profilename'] = 'Name';
$string['profilenofieldsdefined'] = 'Es wurden keine Felder definiert';
$string['profilerequired'] = 'Ist dieses Feld notwendig?';
$string['profileroles'] = 'Rollen im Profil anzeigen';
$string['profilesforenrolledusersonly'] = 'Profilzugriff nur für eingetragene Nutzer/innen';
$string['profileshortname'] = 'Kurzbezeichnung (muss eindeutig sein)';
$string['profileshortnamenotunique'] = 'Diese Kurzbezeichnung wird bereits benutzt';
$string['profilesignup'] = 'Auf der Anmeldeseite zeigen?';
$string['profilespecificsettings'] = 'Weitere Einstellungen';
$string['profilevisible'] = 'Für wen ist dieses Feld sichtbar?';
$string['profilevisibleall'] = 'Sichtbar für alle';
$string['profilevisible_help'] = '<h2>Sichtbarkeit von Profilfeldern</h2>

<p>Jedem Einstellungsfeld kann eine von drei Sichtbarkeitseinstellungen gegeben werden: unsichtbar, alle und Nutzer/in. Die Einstellung "unsichtbar" wird normalerweise vom Administrator gesetzt, der private Aufzeichnungen über die Nutzer/innen notieren möchte. Die Einstellung "Nutzer/in" wird für ein Feld ausgewählt, das persönliche Daten enthält. Für alle anderen Informationen kann die Einstellung "alle" benutzt werden.</p>';
$string['profilevisiblenone'] = 'Nicht sichtbar';
$string['profilevisibleprivate'] = 'Sichtbar für Teilnehmer/innen';
$string['profiling'] = 'Analyse';
$string['profilingallowall'] = 'Kontinuierliche Analyse';
$string['profilingallowall_help'] = 'Wenn diese Option aktiviert ist, können Sie jederzeit den Parameter PROFILEALL überall benutzen (PGC), um die Analyse für alle ausgeführten Scripts einzuschalten. Analog dazu können Sie den Parameter PROFILEALLSTOP verwenden, um alles zu beenden.';
$string['profilingallowme'] = 'Selektive Analyse';
$string['profilingallowme_help'] = 'Wenn diese Option aktiviert ist, können Sie jederzeit den Parameter PROFILEME überall benutzen (PGC), um die Analyse für das ausgewählte Script einzuschalten. Analog dazu können Sie den Parameter DONTPROFILEME verwenden, um die Analyse zu unterbinden.';
$string['profilingautofrec'] = 'Automatische Analyse';
$string['profilingautofrec_help'] = 'Mit dieser Einstellung werden mehrere Einträge automatisch vorgenommen (u.z. zufällig auf der Basis der angegebenen Häufigkeit - 1 aus N). Der Ablauf wird zur weiteren Analyse gespeichert. Beachten Sie, dass dieser Analysetyp die Einstellungen include/exclude verwendet. Setzen Sie die Einstellung auf 0, um die automatische Analyse zu deaktivieren.';
$string['profilingenabled'] = 'Analyse aktivieren';
$string['profilingenabled_help'] = 'Wenn diese Option aktiviert ist, wird die Analyse von Scripts für die Website eingeschaltet. Sie können die Analysedurchführung mit weiteren Einstellungen festlegen.';
$string['profilingexcluded'] = 'Analyse ausschließen';
$string['profilingexcluded_help'] = 'Liste von URLs (Komma getrennt,wwwroot wird übersprungen,erreichbar), die bei der Profilerstellung ausgeschlossen werden.';
$string['profilingimportprefix'] = 'Präfix für Analyse-Importe';
$string['profilingimportprefix_desc'] = 'Zur leichteren Erkennung erhalten alle Analyse-Importe den angegebenen Wert vorangestellt.';
$string['profilingincluded'] = 'Diese Scripts analysieren';
$string['profilingincluded_help'] = 'Liste von URLs (Komma getrennt,wwwroot wird übersprungen,erreichbar), die bei der Profilerstellung automatisch verwandt werden. Beispiele: /index.php, /course/view.php. Akzeptiert wird auch * Wildcard an jeder Stelle. Beispiele: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Analyseprotokolle speichern';
$string['profilinglifetime_help'] = 'Legen Sie den Zeitraum fest, über den Sie ältere Analyseprotokolle behalten möchten. Ältere Protokolle werden automatisch gelöscht. Beachten Sie, dass keines der Protokolle als Referenz markiert werden kann.';
$string['protectusernames'] = 'Anmeldenamen schützen';
$string['proxybypass'] = 'Proxy für diese Server nicht verwenden';
$string['proxyhost'] = 'Proxy-Server';
$string['proxypassword'] = 'Proxy-Kennwort';
$string['proxyport'] = 'Proxy-Port';
$string['proxytype'] = 'Proxy-Typ';
$string['proxyuser'] = 'Proxy-Anmeldename';
$string['purgecaches'] = 'Cache löschen';
$string['purgecachesconfirm'] = '<p>Zur Leistungsoptimierung werden JavaScripts, Designs, Sprachdateien, gefilterte Texte, RSS Feeds und viele andere Daten in einem Cache zwischengespeichert. </p>
<p>Wenn Sie den Cache löschen, müssen alle zwischengespeicherten Daten erneuert und im Browser neu geladen werden. Auf diese Weise sehen Sie anschließend wirklich die aktuellen Werte und Darstellungen. Beim Löschen des Caches gehen keine Daten verloren, aber die Website könnte anfangs wesentlich langsamer reagieren.</p>';
$string['purgecachesfinished'] = 'Cache wurde gelöscht';
$string['question'] = 'Fragen';
$string['questionbehaviours'] = 'Frageverhalten';
$string['questioncwqpfscheck'] = 'Im Test sind eine oder mehrere \'Zufallsfragen\' so konfiguriert, dass
Fragen aus einem Mix von freigegebenen und nichtfreigegebenen Fragenkategorien ausgewählt werden sollen. Lesen Sie dazu bitte den <a href="{$a->reporturl}"> ausführlicheren Bericht</a> und die
<a href="{$a->docsurl}"> Moodle Dokumentation</a>.';
$string['questioncwqpfsok'] = 'Gut. Keine der \'Zufallsfragen\' in Ihren Tests ist so konfiguriert, dass
Fragen aus einem Mix von freigegebenen und nicht freigegebenen Fragenkategorien ausgewählt werden könnten.';
$string['questiontype'] = 'Fragetyp';
$string['questiontypes'] = 'Fragetypen';
$string['quizattemptsupgradedmessage'] = 'In Moodle 2.1 gab es eine umfangreiche Aktualisierung für die Testfragen. Es war allerdings möglich, die Aktualisierung teilweise zu einem späteren Zeitpunkt auszuführen. Vor dem Upgrade auf Moodle 2.7 muss diese Aktualisierung abgeschlossen sein.';
$string['recaptchaprivatekey'] = 'ReCaptcha: Secret  Key';
$string['recaptchapublickey'] = 'ReCaptcha: Site Key';
$string['register'] = 'Website registrieren';
$string['registermoodleorg'] = 'Website registrieren';
$string['registermoodleorgli1'] = 'Sie werden in eine Mailing-Liste eingetragen. Sie erhalten Informationen über sicherheitsrelevante Updates und neue Versionen.';
$string['registermoodleorgli2'] = 'Statistiken werden unter {$a} auf der internationalen Moodle-Seite dargestellt. Statistische Informationen aus Ihrer Seite werden dazu ausgewertet.';
$string['registerwithmoodleorg'] = 'Website registrieren';
$string['registration'] = 'Registrierung';
$string['registration_help'] = 'Registrieren Sie Ihre Website bei Moodle, um Sicherheitswarnungen und einen Zugang zu Moodle.net, unserer Kurs-Sharing-Plattform, zu bekommen.';
$string['registrationwarning'] = 'Diese Website ist noch nicht registriert.';
$string['releasenoteslink'] = 'Weitere Informationen über diese Version finden Sie online: <a target="_blank" href="{$a}">Versionsinformation</a>';
$string['rememberusername'] = 'Anmeldenamen merken';
$string['rememberusername_desc'] = 'Aktivieren Sie diese Option, wenn Sie für das Login den Anmeldenamen in einem Cookie speichern möchten. Cookies könnten als Datenschutzproblem betrachtet werden, wenn man sie ohne Einwilligung verwendet.';
$string['reportsmanage'] = 'Berichte verwalten';
$string['requestcategoryselection'] = 'Kategorieauswahl aktivieren';
$string['requiredentrieschanged'] = '<strong>WICHTIG - UNBEDINGT LESEN<br />Die Warnung wird ausschließlich bei dieser Aktualisierung gezeigt!</strong><br />
Infolge einer Fehlerkorrektur wird sich das Verhalten von Datenbankaktivitäten ändern, die die Einstellungen \'Required entries\' und \'Required entries before viewing settings\' nutzen.

Weitere Erklärungen entnehmen Sie bitte hier <a href="http://moodle.org/mod/forum/discuss.php?d=110928" target="_blank">the database module forum</a>. Zusätzliche Informationen zum beabsichtigten Verhalten: <a href="http://docs.moodle.org/en/Adding/editing_a_database#Required_entries" target="_blank">Moodle Docs</a>.
<br/><br/>Diese Änderung betrifft die folgenden Datenbanken in Ihrem System . Bitte sichern Sie die nachfolgende Liste und prüfen Sie nach der Aktualisierung, ob alle Aktivitäten noch wie beabsichtigt funktionieren.<br/><strong>{$a->text}</strong><br/>';
$string['requiremodintro'] = 'Beschreibung notwendig';
$string['requiremodintro_desc'] = 'Diese Option legt fest, dass für jede Aktivität eine Beschreibung angegeben werden muss.';
$string['requires'] = 'Erfordernisse';
$string['restorecourse'] = 'Kurs wiederherstellen';
$string['restorernewroleid'] = 'Rolle für Wiederhersteller/in in Kursen';
$string['restorernewroleid_help'] = 'Wenn ein/e Nutzer/in nicht bereits das Recht zum Verwalten des neu wiederhergestellten Kurses hat, wird die hier angegebene Rolle zugewiesen. Die Person wird u.U. dabei automatisch in den Kurs eingeschrieben. Wählen Sie \'keine\' falls bei der Wiederherstellung nicht automatisch eine Rolle im Kurs zugewiesen werden soll.';
$string['reverseproxy'] = 'Reverse Proxy';
$string['riskconfig'] = 'Nutzer/innen könnten Einstellungen für die Website und das Erscheinungsbild verändern.';
$string['riskconfigshort'] = 'Konfigurationsrisiko';
$string['riskdataloss'] = 'Nutzer/innen könnten große Mengen von Inhalten und Informationen zerstören';
$string['riskdatalossshort'] = 'Risiko des Datenverlusts';
$string['riskmanagetrust'] = 'Nutzer/innen könnten die Vertrauenseinstellungen anderer Nutzer/innen verändern.';
$string['riskmanagetrustshort'] = 'Vertrauenseinstellungen verwalten';
$string['riskpersonal'] = 'Nutzer/innen könnten Zugang zu persönlichen Informationen anderer Nutzer/innen erhalten.';
$string['riskpersonalshort'] = 'Gefahr für die Privatsphäre';
$string['riskspam'] = 'Nutzer/innen könnten Spam-Mails an andere  Nutzer/innen oder externe Adressen senden.';
$string['riskspamshort'] = 'Spam-Gefahr';
$string['riskxss'] = 'Nutzer/innen könnten Dateien und Texte einfügen, die Cross-Site-Scripting (XSS) ermöglichen.';
$string['riskxssshort'] = 'XSS-Gefahr';
$string['roleswithexceptions'] = '{$a->roles}, mit {$a->exceptions}';
$string['rssglobaldisabled'] = 'Auf Serverebene deaktiviert';
$string['save'] = 'Sichern';
$string['savechanges'] = 'Änderungen sichern';
$string['search'] = 'Suchen';
$string['searchengine'] = 'Suchmaschine';
$string['searchinsettings'] = 'In den Einstellungen suchen';
$string['searchresults'] = 'Suchergebnisse';
$string['searchsetupinfo'] = 'Einstellungen zur Suche';
$string['sectionerror'] = 'Bereichsfehler!';
$string['secureforms'] = 'Erweiterte Formularsicherheit benutzen';
$string['security'] = 'Sicherheit';
$string['selectdevice'] = 'Gerät wählen';
$string['selectsearchengine'] = 'Suchmaschine auswählen';
$string['selecttheme'] = 'Design für \'{$a}\' wählen';
$string['server'] = 'Server';
$string['serverchecks'] = 'Server-Überprüfung';
$string['serverlimit'] = 'Server-Grenze';
$string['sessionautostartwarning'] = '<p> Schwerwiegender Konfigurationsfehler entdeckt. Bitte Server Administrator informieren.</p><p>Für eine korrekte Funktionsweise ist eine Änderung von PHP-Einstellung für Moodle erforderlich. </p><p><code>session.auto_start</code> muss auf <code>off</code> gesetzt werden.</p><p>Die Einstellung erfolgt in der <code>php.ini</code>-Datei, in der <br /> Apache/IIS Konfiguration oder der <code>.htaccess</code>-Datei auf dem Server.</p>';
$string['sessioncookie'] = 'Cookie-Prefix';
$string['sessioncookiedomain'] = 'Cookie-Domain';
$string['sessioncookiepath'] = 'Cookie-Pfad';
$string['sessionhandling'] = 'Sitzungsinformation';
$string['sessiontimeout'] = 'Zeitüberschreitung';
$string['settingfileuploads'] = 'Datei-Upload ist für die normale Nutzung nötig - bitte aktivieren Sie dies in den PHP-Einstellungen.';
$string['settingmemorylimit'] = 'Unzureichende Speicherzuweisung - bitte setzen Sie eine höhere Speichergrenze memory_limit in den PHP-Einstellungen.';
$string['settingsafemode'] = 'Moodle ist nicht vollständig kompatibel mit dem Safe Mode. Bitten Sie Ihren Server-Administrator, diesen Modus auszuschalten. Rechnen Sie mit verschiedenen Problemen, falls Sie Moodle mit eingeschaltetem Safe Mode installieren.';
$string['setupsearchengine'] = 'Einstellungen für die Suchmaschine';
$string['showcommentscount'] = 'Kommentarzähler anzeigen';
$string['showdetails'] = 'Details anzeigen';
$string['showuseridentity'] = 'Nutzeridentität anzeigen';
$string['showuseridentity_desc'] = 'Bei der Nutzersuche und in Nutzerlisten werden diese Felder zusätzlich zum Namen angezeigt. Die Felder sind nur sichtbar für Nutzer/innen mit der Berechtigung moodle/site:viewuseridentity. (normalerweise Trainer/innen und Manager/innen). Die Option ist sinnvoll wenn die gewählten Felder als Pflichtfelder vorhanden sind (z.B. Klasse, Fach,...)';
$string['simplexmlrequired'] = 'Die PHP-Extension SimpleXML wird benötigt.';
$string['sitemaintenance'] = 'Wartungsmodus: Die Website ist momentan nicht verfügbar!';
$string['sitemaintenancemode'] = 'Wartungsmodus';
$string['sitemaintenanceoff'] = 'Der Wartungsmodus wurde beendet. Die Website ist wieder verfügbar.';
$string['sitemaintenanceon'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich.';
$string['sitemaintenanceoncli'] = 'Ihr System ist derzeit im CLI-Wartungsmodus. Ein Zugriff aus dem Internet ist nicht möglich.';
$string['sitemaintenancewarning'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich. <br /><a href="maintenance.php"> Wartungsmodus beenden </a>.';
$string['sitemaintenancewarning2'] = 'Die Website ist momentan im Wartungsmodus. Die Anmeldung ist ausschließlich für Administrator/innen möglich. <br /><a href="{$a}"> Wartungsmodus beenden </a>.';
$string['sitepolicies'] = 'Website-Rechte';
$string['sitepolicy'] = 'URL zur Zustimmungserklärung';
$string['sitepolicyguest'] = 'URL zur Zustimmungserklärung für Gäste';
$string['sitepolicyguest_help'] = 'Wenn Sie eine Zustimmungserklärung verwenden, die alle Gäste vor der Nutzung der Website akzeptieren müssen, können Sie hier die URL angeben. Diese Einstellung kann jede öffentliche URL enthalten. Probleme könnte es mit der Option \'Anmeldung notwendig\' geben, weil nicht angemeldete Personen keinen Zugriff auf Dateien der Website haben.';
$string['sitepolicy_help'] = 'Wenn Sie eine Zustimmungserklärung verwenden, die alle Personen vor der Nutzung der Website akzeptieren müssen, können Sie hier die URL angeben. Diese Einstellung kann jede öffentliche URL enthalten.';
$string['sitesectionhelp'] = 'Mit dieser Option wird ein Textabschnitt auf der Startseite angezeigt.';
$string['slasharguments'] = 'Slash-Parameter benutzen';
$string['slashargumentswarning'] = 'Es wird empfohlen, die Verwendung von Schrägstrich-Argumenten zu aktivieren. Zukünftig wird dies erforderlich sein. Weitere Einzelheiten finden Sie in der Dokumentation <a href="https://docs.moodle.org/en/admin/environment/slasharguments">Schrägstrich-Argumente</a> .';
$string['smartpix'] = 'Suche in den Bildern';
$string['soaprecommended'] = 'Die PHP-Extension soap sollte für Webservices und einige Plugins installiert sein.';
$string['sort_fullname'] = 'Vollständiger Kursname';
$string['sort_idnumber'] = 'ID-Nummer';
$string['sort_shortname'] = 'Kurzer Kursname';
$string['sort_sortorder'] = 'Sortierung';
$string['spellengine'] = 'Rechtschreibprüfung';
$string['spelllanguagelist'] = 'Liste zur Rechtschreibkontrolle';
$string['splrequired'] = 'Die PHP-Extension SPL wird benötigt.';
$string['stats'] = 'Statistiken';
$string['statsfirstrun'] = 'Maximale Verarbeitungsdauer';
$string['statsmaxruntime'] = 'Maximale Laufzeit';
$string['statsmoodleorg'] = 'Statistiken';
$string['statsruntimedays'] = 'Tage für Berechnung';
$string['statsruntimestart'] = 'Ausführung um';
$string['statsuserthreshold'] = 'Schwelle für die Nutzerzahl';
$string['stickyblocks'] = 'Feste Blöcke';
$string['stickyblockscourseview'] = 'Kursseite';
$string['stickyblocksduplicatenotice'] = 'Wenn Sie einen Block hier hinzufügen, so steht eine Kopie auf jeder einzelnen Seite zur Verfügung.<br />Der unveränderliche Block lässt sich nicht bearbeiten und nicht verschieben. Ein Duplikat des Blocks können Sie jedoch verändern und an einem beliebigen Platz ablegen.';
$string['stickyblocksmymoodle'] = 'Dashboard';
$string['stickyblockspagetype'] = 'Seitentyp zum Konfigurieren';
$string['strictformsrequired'] = 'Strenge Prüfung der Pflichtfelder';
$string['stripalltitletags'] = 'HTML-Tags aus allen Aktivitätsnamen entfernen';
$string['supportcontact'] = 'Supportanfragen';
$string['supportemail'] = 'Support-Mail';
$string['supportname'] = 'Support-Name';
$string['supportpage'] = 'Support-Seite';
$string['suspenduser'] = 'Nutzerkonto sperren';
$string['switchlang'] = 'Verzeichnis wechseln';
$string['systempaths'] = 'Systempfade';
$string['tablenosave'] = 'Änderungen in der obigen Tabelle werden automatisch gesichert.';
$string['tablesnosave'] = 'Änderungen in den obigen Tabellen werden automatisch gesichert.';
$string['tabselectedtofront'] = 'Tabellen mit Tabs: Soll die Reihe mit dem aktiven Tabulator im Vordergrund platziert werden?';
$string['tabselectedtofronttext'] = 'Bringe die ausgewählte Reihe in den Vordergrund';
$string['taskautomatedbackup'] = 'Automatische Sicherungen';
$string['taskbackupcleanup'] = 'Tabellen und Logdaten für Sicherungen bereinigen';
$string['taskbadgescron'] = 'Auszeichnungen vergeben';
$string['taskblogcron'] = 'Externe Blogs synchronisieren';
$string['taskcachecleanup'] = 'Abgelaufene Cache-Einträge entfernen';
$string['taskcachecron'] = 'Hintergrundprozess für Caches';
$string['taskcalendarcron'] = 'Mitteilungen zu Kalendereinträgen senden';
$string['taskcheckforupdates'] = 'Aktualisierungen prüfen';
$string['taskcompletiondaily'] = 'Abschlussmarkierung wenn begonnen';
$string['taskcompletionregular'] = 'Normale Abschlussdaten berechnen';
$string['taskcontextcleanup'] = 'Kontexte bereinigen';
$string['taskcreatecontexts'] = 'Fehlende Kontexte erzeugen';
$string['taskdeletecachetext'] = 'Alte Datensätze text_cache löschen';
$string['taskdeleteincompleteusers'] = 'Unvollständige Nutzerprofile löschen';
$string['taskdeleteunconfirmedusers'] = 'Unbestätigte Nutzerprofile löschen';
$string['taskeventscron'] = 'Hintergrundprozess für Ereignisse';
$string['taskfiletrashcleanup'] = 'Dateien endgültig löschen';
$string['taskglobalsearchindex'] = 'Indizierung für die globale Suche';
$string['taskglobalsearchoptimize'] = 'Index für Globale Suche optimieren';
$string['taskgradecron'] = 'Hintergrundprozess für Bewertungen';
$string['tasklegacycron'] = 'Cron-Verarbeitung für Plugins';
$string['taskmessagingcleanup'] = 'Hintergrundprozess für Mitteilungen';
$string['taskpasswordresetcleanup'] = 'Kennwortanforderungen löschen';
$string['taskplagiarismcron'] = 'Hintergrundprozess für den Legacy Cron in Plagiat-Plugins';
$string['taskportfoliocron'] = 'Hintergrundprozess für Portfolio-Plugins';
$string['taskquestioncron'] = 'Hintergrundprozess für Fragen-Engine';
$string['taskregistrationcron'] = 'Website-Registrierung';
$string['tasksendfailedloginnotifications'] = 'Mitteilungen zu fehlgeschlagenen Anmeldeversuchen senden';
$string['tasksendnewuserpasswords'] = 'Neues Nutzerkennwort senden';
$string['tasksessioncleanup'] = 'Alte Sessions bereinigen';
$string['taskstatscron'] = 'Hintergrundverarbeitung für Statistiken';
$string['tasktagcron'] = 'Hintergrundverarbeitung für Schlagwörter';
$string['tasktempfilecleanup'] = 'Veraltete temporäre Dateien löschen';
$string['tempdatafoldercleanup'] = 'Temporäre Dateien löschen, wenn älter als';
$string['testsiteupgradewarning'] = '';
$string['themedesignermode'] = 'Modus zur Designbearbeitung';
$string['themelist'] = 'Designliste';
$string['themenoselected'] = 'Kein Design ausgewählt';
$string['themeresetcaches'] = 'Design-Cache löschen';
$string['themeselect'] = 'Design wechseln';
$string['themeselector'] = 'Design wählen';
$string['themesettings'] = 'Einstellungen';
$string['therewereerrors'] = 'Es gibt Fehler in Ihren Daten';
$string['thirdpartylibrary'] = 'Bibliothek';
$string['thirdpartylibrarylocation'] = 'Ort';
$string['thirdpartylibs'] = 'Externe Bibliothek';
$string['timezone'] = 'Zeitzone';
$string['timezoneforced'] = 'Vom Administrator festgelegt';
$string['timezoneinvalid'] = 'Ungültige Zeitzone \'{$a}\'';
$string['timezoneisforcedto'] = 'Für alle Nutzer/innen festgelegt';
$string['timezonenotforced'] = 'Eigene Zeitzone wählbar';
$string['timezonephpdefault'] = 'Zeitzone in PHP ({$a})';
$string['timezoneserver'] = 'Serverzeitzone ({$a})';
$string['tokenizerrecommended'] = 'Die PHP-Extension Tokenizer sollte zur Verbesserung der Netzwerkfunktionalität installiert sein.';
$string['tools'] = 'Dienstprogramme';
$string['toolsmanage'] = 'Übersicht';
$string['unattendedoperation'] = 'Automatischer Ablauf';
$string['unbookmarkthispage'] = 'Lesezeichen zu dieser Seite entfernen';
$string['unicoderequired'] = 'Es ist notwendig, alle Daten im Format Unicode UTF-8 zu speichern. Neuinstallationen müssen mit Datenbanken vorgenommen werden, die als Standardzeichensatz UTF-8 benutzen. Wenn Sie ein Upgrade durchführen, sollten Sie die UTF-8-Migration starten (Admin-Seite).';
$string['uninstallplugin'] = 'Deinstallieren';
$string['unlockaccount'] = 'Konto freigeben';
$string['unoconvwarning'] = 'Die bei Ihnen installierte Version von \'unoconv\' wird nicht unterstützt. Moodle braucht für die Aufgabenbewertung mindestens die Version 0.7.';
$string['unsettheme'] = 'Design abwählen';
$string['unsupported'] = 'Kein Support';
$string['unsupporteddbstorageengine'] = 'Die benutzte Datenbank-Engine wird nicht weiter unterstützt.';
$string['unsupporteddbtablerowformat'] = 'Die Datenbank enthält Tabellen im Format \'Antelope\'. Diese Tabellen sollten unbedingt ins Format \'Barracuda\' konvertiert werden. Infos zur Konvertierung von InnoDB-Tabellen: <a href="https://docs.moodle.org/en/cli">Administration via command line</a>.';
$string['unsupportedphpversion7'] = 'PHP 7 wird nicht unterstützt.';
$string['unsupportedphpversion71'] = 'PHP 7.1 wird nicht unterstützt.';
$string['unsuspenduser'] = 'Nutzerkonto aktivieren';
$string['updateaccounts'] = 'Update bestehender Accounts';
$string['updateautocheck'] = 'Aktualisierungen prüfen';
$string['updateautocheck_desc'] = 'Wenn diese Option aktiviert ist, wird für Ihrer Website automatisch geprüft, ob für Moodle oder ein zusätzliches Plugin aktuellere Versionen verfügbar sind. Falls eine Aktualisierung vorhanden ist, werden die Administratoren benachrichtigt.';
$string['updateavailable'] = 'Eine neuere Moodle-Version ist verfügbar!';
$string['updateavailabledetailslink'] = 'Weitere Informationen: {$a->url}';
$string['updateavailableforplugin'] = 'Aktualisierung für Plugins verfügbar!';
$string['updateavailableinstall'] = 'Aktualisierung ausführen';
$string['updateavailableinstallall'] = 'Verfügbare Aktualisierungen ausführen ({$a})';
$string['updateavailableinstallallhead'] = 'Verfügbare Aktualisierungen werden installiert.';
$string['updateavailable_moreinfo'] = 'Weitere Informationen';
$string['updateavailablenot'] = 'Dieses Moodle ist aktuell.';
$string['updateavailablerecommendation'] = 'Nur wenn die Software der Website auf die letzte Version aktualisiert wird, enthält sie alle Sicherheits- und Fehlerkorrekturen.';
$string['updateavailable_release'] = 'Moodle {$a}';
$string['updateavailable_version'] = 'Version {$a}';
$string['updatecomponent'] = 'Komponente aktualisieren';
$string['updateminmaturity'] = 'Entwicklungsstand prüfen';
$string['updateminmaturity_desc'] = 'Auf Aktualisierungen wird hingewiesen, sobald der verfügbare Code den ausgewählten Entwicklungsstand erreicht. Wenn Plugins Ihren Entwicklungsstand nicht dokumentieren, werden Aktualisierungen von Plugins unabhängig von dieser Einstellung trotzdem aufgeführt.';
$string['updatenotificationfooter'] = 'Ihre Website \'{$a->siteurl}\' sucht automatisch nach verfügbaren Aktualisierungen und versendet entsprechende Mitteilungen an den Administrator. Die automatische Suche können Sie bei Bedarf deaktivieren. Den Versand der Mitteilungen können Sie im Bereich \'Meine Einstellungen\' anpassen.';
$string['updatenotifications'] = 'Mitteilungen zu Aktualisierungen';
$string['updatenotificationsubject'] = 'Aktualisierungen für Moodle sind verfügbar: ({$a->siteurl})';
$string['updatenotifybuilds'] = 'Neue Builds prüfen';
$string['updatenotifybuilds_desc'] = 'Diese Option legt fest, ob neuere \'Builds\' der aktuell installierten Version angezeigt werden sollen. Builds sind kontinuierliche Verbesserungen, die regelmäßig jede Woche veröffentlicht werden. Wenn diese Option deaktiviert ist, wird ein verfügbares Update nur gemeldet, wenn eine höhere Version veröffentlicht wurde. Die Prüfung der Plugins ist von dieser Einstellung nicht betroffen.';
$string['upgradeerror'] = 'Unbekannter Fehler beim Upgrade von {$a->plugin} zu Version {$a->version}. Fortsetzung unmöglich.';
$string['upgradeforumread'] = 'Ab Moodle 1.5 können Sie Forenbeiträge als gelesen/ungelesen markieren.<br />Für diese Funktion müssen die Datenbanktabellen aktualisiert werden. <a href="{$a}">Tabellen jetzt aktualisieren</a>.';
$string['upgradeforumreadinfo'] = 'Mit einer neuen Funktion in Moodle 1.5 können Forenbeiträge als gelesen/ungelesen markiert werden. Um diese Funktion zu verwenden, müssen die Datenbanktabellen aktualisiert werden. Je nach Größe der Datenbank kann dieser Vorgang längere Zeit (u.U. mehrere Stunden) erfordern. Führen Sie diesen Vorgang am besten in Zeiten mit wenigen Zugriffen aus. Die Website funktioniert während der Umstellung weiter. Die Nutzer/innen bemerken davon nichts. Wenn Sie den Vorgang einmal gestartet haben, darf er nicht unterbrochen werden. Lassen Sie das Browserfenster dabei offen. Sollten Sie das Browserfenster versehentlich schließen, können Sie den Prozess neu starten. <br />Wollen Sie nun starten?';
$string['upgradekeyreq'] = 'Aktualisierungsschlüssel notwendig';
$string['upgradekeyset'] = 'Aktualisierungsschlüssel (leer, um keinen zu setzen)';
$string['upgradelogs'] = 'Für die vollständige Funktionsfähigkeit müssen die alten Logdaten aktualisiert werden. <a href="{$a}">Weitere Informationen</a>';
$string['upgradelogsinfo'] = 'Die Art und Weise, in der Logdaten gespeichert werden, wurde verändert. Damit Sie Ihre alten Logdaten mit den Einzelaktivitäten einsehen können, müssen die alten Logdaten aktualisiert werden. Je nachdem, wie viele Daten auf Ihrer Seite gespeichert sind, kann dieser Vorgang eine längere Zeit beanspruchen (u.U. mehrere Stunden). Der Vorgang beansprucht die Datenbank bei umfangreichen Seiten stark. Wenn Sie den Vorgang einmal gestartet haben, müssen Sie ihn ohne Unterbrechung abschließen lassen. Das Browserfenster darf in dieser Zeit nicht geschlossen und die Internetverbindung nicht unterbrochen werden. Der Zugriff auf Ihre Website durch andere Anwender ist nicht beeinträchtigt. <br /><br />Wollen Sie nun Ihre Logdaten aktualisieren?';
$string['upgradepluginsfirst'] = 'Die verfügbaren Aktualisierungen sollten zuerst installiert werden.';
$string['upgradepluginsinfo'] = 'Plugins aktualisieren';
$string['upgradepluginsinfo_help'] = 'Für die installierten Plugins sind Aktualisierungen verfügbar! Die Aktualisierungen müssen manuell herunterladen und installiert werden. Erst dann sollten Sie die Aktualisierung der Datenbank starten.';
$string['upgradesettings'] = 'Neue Einstellungen';
$string['upgradesettingsintro'] = 'Die folgenden Optionen wurden bei der letzten Aktualisierung hinzugefügt. Ändern Sie (falls nötig) die standardmäßigen Vorgaben und sichern Sie die Einstellungen.';
$string['upgradestalefiles'] = 'Das Moodleverzeichnis enthält noch alte Dateien. Das Upgrade kann nicht fortgesetzt werden.';
$string['upgradestalefilesinfo'] = 'Die Aktualisierung wurde angehalten, weil PHP-Skripte aus unterschiedlichen Moodle-Versionen gefunden wurden. Dies könnte zu erheblichen Problemen im Betrieb führen.

Für eine saubere Installation wird folgendes Vorgehen empfohlen:

* benennen Sie das bestehende Verzeichnis \'moodle\' um in \'moodle-alt\'
* legen Sie ein neues Verzeichnis \'moodle\' an, das Sie als Standardpaket herunterladen oder über git bzw. cvs beziehen können.
* kopieren Sie die Datei \'config.php\' und alle nicht standardmäßigen Plugins von \'moodle-alt\' nach \'moodle\'

Sobald Sie ein sauberes Moodle-Verzeichnis haben, können Sie diese Seite aktualisieren und den Update-Prozess fortsetzen.

Diese Warnung tritt in den meisten Fällen auf, weil ein neues Standardpaket einfach in das alte Verzeichnis \'moodle\' kopiert wurde. Dabei werden zwar alte gegen neue Dateien ausgetauscht, aber keine überzähligen Dateien und Verzeichnisse entfernt.

Die Warnung kann auch bedeuten, dass bei einem unvollständigen Update über git, cvs oder svn nicht alle notwendigen Dateien aktualisiert wurden. Versuchen Sie die Aktualisierung erneut und warten Sie, bis alle Dateien vollständig geladen sind.

Weitere Informationen: <a href="{$a}">{$a}</a>.';
$string['upgradestart'] = 'Aktualisierung der Datenbank starten';
$string['upgradesure'] = '<p>Die installierten Moodle-Dateien wurden verändert. Ihr Moodle wird automatisch auf die Version <strong>{$a}</strong> aktualisiert. Nach der Aktualisierung können Sie nicht zu einer früheren Version zurückkehren. Beachten Sie bitte, dass der Prozess lange dauern könnte!</p>
<p>Sind Sie sicher, dass Sie die Aktualisierung ausführen wollen?</p>';
$string['upgradetimedout'] = 'Die Aktualisierung wurde wegen Zeitüberschreitung abgebrochen. Bitte starten Sie den Vorgang noch einmal.';
$string['upgradingdata'] = 'Daten werden aktualisiert...';
$string['upgradinglogs'] = 'Logdaten werden aktualisiert...';
$string['upgradingversion'] = 'Aktualisierung auf neue Version';
$string['upwards'] = 'aufwärts';
$string['useblogassociations'] = 'Blogverbund erlauben';
$string['useexternalyui'] = 'YUI Libraries online';
$string['user'] = 'Nutzer/in';
$string['userbulk'] = 'Nutzerverwaltung (Bulk)';
$string['userbulkdownload'] = 'Nutzer/innen exportieren als';
$string['userdefaultpreferences'] = 'Standardmäßige Nutzereinstellungen';
$string['userlist'] = 'Nutzerliste anzeigen';
$string['userpolicies'] = 'Nutzereigenschaften';
$string['userpreference'] = 'Nutzereinstellungen';
$string['userquota'] = 'Nutzerquota';
$string['users'] = 'Nutzer/innen';
$string['usesitenameforsitepages'] = 'Name des Systems als Bezeichnung der Startseite verwenden';
$string['usetags'] = 'Schlagwörter aktivieren';
$string['validateerror'] = 'Dieser Wert ist ungültig:';
$string['verifychangedemail'] = 'E-Mail-Domains bei Änderung prüfen';
$string['warningcurrentsetting'] = 'Aktueller Wert ist ungültig: {$a}';
$string['warningiconvbuggy'] = 'Die Library iconv unterstützt den //IGNORE modifier nicht. Sie sollten die PHP-Extension mbstring installieren, die stattdessen zur Bereinigung von Strings mit nicht UTF-8-konformen Zeichen.';
$string['webproxy'] = 'Web-Proxy';
$string['webproxyinfo'] = 'Füllen Sie die folgenden Optionen aus, falls Ihr Moodle-Server das Internet nicht direkt erreichen kann. Ein Internetzugang ist notwendig, um Updates, Sprachpakete, RSS-Feeds, Zeitzonen-Daten usw. laden zu können. Die PHP-Extension cURL wird dringend empfohlen!';
$string['xmlrpcrecommended'] = 'Die PHP-Extension xmlrpc ist für die Hub-Kommunikation notwendig, außerdem für die Webservices und das Moodle-Network sinnvoll.';
$string['yuicomboloading'] = 'YUI Combo Cache';
$string['ziprequired'] = 'Die PHP-Extension Zip ist notwendig. Die alten Pakete infoZip und PclZip werden nicht mehr benutzt.';
