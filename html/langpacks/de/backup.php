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
 * Strings for component 'backup', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Der Sicherungsvorgang ist abgeschlossen';
$string['asyncbackupcompletebutton'] = 'Weiter';
$string['asyncbackupcompletedetail'] = 'Der Sicherungsvorgang ist erfolgreich abgeschlossen. <br />Sie finden die Sicherungsdatei auf der Seite  <a href="{$a}">Wiederherstellen</a>.';
$string['asyncbackuperror'] = 'Die Hintergrundverarbeitung ist fehlgeschlagen.';
$string['asyncbackuperrordetail'] = 'Die Hintergrundverarbeitung ist fehlgeschlagen. Wenden Sie sich an die Administrator/innen der Website.';
$string['asyncbackuppending'] = 'Der Sicherungsvorgang ist vorbereitet';
$string['asyncbackupprocessing'] = 'Der Sicherungsvorgang läuft ...';
$string['asyncbadexecution'] = 'Fehlerhafte Ausführung des Sicherungs-Controllers. Es ist {$a} und sollte 2 sein.';
$string['asynccheckprogress'] = 'Der Fortschritt wird jederzeit auf der Seite <a href="{$a}">Wiederherstellen</a> angezeigt.';
$string['asyncemailenable'] = 'Systemnachrichten aktivieren';
$string['asyncemailenabledetail'] = 'Die Option legt fest, ob Mitteilungen versendet werden, wenn eine asynchrone Sicherung oder Wiederherstellung abgeschlossen wird.';
$string['asyncgeneralsettings'] = 'Asynchrones Sichern/Wiederherstellen';
$string['asyncmessagebody'] = 'Mitteilung';
$string['asyncmessagebodydefault'] = 'Hallo {user_firstname},<br/> Ihre {operation} (ID: {backupid}) wurde erfolgreich abgeschlossen. <br/><br/>Sie können über nachfolgende URL darauf zugreifen: {link}.';
$string['asyncmessagebodydetail'] = 'Zu sendende Mitteilung, wenn eine asynchrone Sicherung oder Wiederherstellung abgeschlossen wird.';
$string['asyncmessagesubject'] = 'Betreff';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} erfolgreich abgeschlossen';
$string['asyncmessagesubjectdetail'] = 'Betreff der Mitteilung';
$string['asyncnowait'] = 'Sie müssen nicht warten. Der Prozess wird im Hintergrund ausgeführt.';
$string['asyncprocesspending'] = 'Vorgang anstehend';
$string['asyncrestorecomplete'] = 'Die Wiederherstellung ist abgeschlossen.';
$string['asyncrestorecompletebutton'] = 'Weiter';
$string['asyncrestorecompletedetail'] = 'Die Wiederherstellung ist erfolgreich abgeschlossen. Mit Weiter gelangen Sie zum <a href="{$a}">Kurs mit dem wiederhergestellten Element</a>.';
$string['asyncrestoreerror'] = 'Die Wiederherstellung ist fehlgeschlagen.';
$string['asyncrestoreerrordetail'] = 'Die Wiederherstellung ist fehlgeschlagen. Wenden Sie sich an die  Administrator/innen.';
$string['asyncrestoreinprogress'] = 'Laufende Wiederherstellung';
$string['asyncrestoreinprogress_help'] = 'Asynchrone Kurswiederherstellungen, die gerade laufen, werden hier angezeigt.';
$string['asyncrestorepending'] = 'Die Wiederherstellung ist vorbereitet';
$string['asyncrestoreprocessing'] = 'Die Wiederherstellung läuft';
$string['asyncreturn'] = 'Zurück zum Kurs';
$string['autoactivedescription'] = 'Wählen Sie, ob eine automatische Sicherung durchgeführt werden soll. Falls Sie die Option \'Manuell\' auswählen, sind automatische Sicherungen nur noch über das CLI-Script \'automated backups\' möglich. Dieses CLI-Script kann manuell in der Befehlszeile oder über einen Cronjob gestartet werden.';
$string['autoactivedisabled'] = 'Deaktiviert';
$string['autoactiveenabled'] = 'Aktiviert';
$string['autoactivemanual'] = 'Manuell';
$string['automatedbackupschedule'] = 'Planung';
$string['automatedbackupschedulehelp'] = 'Wählen Sie, an welchen Wochentagen die automatischen Sicherungen durchgeführt werden sollen.';
$string['automatedbackupsinactive'] = 'Automatische Sicherungen wurden von Administrator/innen nicht eingerichtet.';
$string['automatedbackupstatus'] = 'Status der geplanten Sicherung';
$string['automateddeletedays'] = 'Sicherungen löschen wenn älter als';
$string['automatedmaxkept'] = 'Maximale Anzahl von aufgehobenen Sicherungen';
$string['automatedmaxkepthelp'] = 'Diese Option legt die maximale Anzahl von automatisch erstellten Sicherungen fest, die in jedem Kurs abgelegt werden. Ältere Sicherungen werden automatisch gelöscht.';
$string['automatedminkept'] = 'Minimale Anzahl von aufgehobenen Sicherungen';
$string['automatedminkepthelp'] = 'Diese Option legt die minimale Anzahl von automatisch erstellten Sicherungen fest, die in jedem Kurs abgelegt werden. Dies verhindert, dass z.B. in einem inaktiven Kurs die letzte Sicherung gelöscht wird.';
$string['automatedsettings'] = 'Geplante Sicherungen';
$string['automatedsetup'] = 'Automatische Sicherungen';
$string['automatedstorage'] = 'Speicherplatz für automatisierte Sicherungen';
$string['automatedstoragehelp'] = 'Wählen SIe den Ort, an dem Sie die  automatisch erstellten Sicherungsdateien speichern möchten.';
$string['backupactivity'] = 'Aktivität sichern: {$a}';
$string['backupcourse'] = 'Kurs sichern: {$a}';
$string['backupcoursedetails'] = 'Kursdetails';
$string['backupcoursesection'] = 'Abschnitt: {$a}';
$string['backupcoursesections'] = 'Kursabschnitte';
$string['backupdate'] = 'Termin belegt';
$string['backupdetails'] = 'Sicherungsdetails';
$string['backupdetailsnonstandardinfo'] = 'Die ausgewählte Datei ist keine Moodlesicherung im Standardformat. Die Wiederherstellung wird versuchen, die Datei zuerst in das Standardformat umzuwandeln und anschließend die Wiederherstellung durchzuführen.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Unbekanntes Format';
$string['backuplog'] = 'Technische Hinweise';
$string['backupmode'] = 'Modus';
$string['backupmode10'] = 'Allgemeines';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Gleiche Website';
$string['backupmode50'] = 'Automatisiert';
$string['backupmode60'] = 'Umgewandelt';
$string['backupmode70'] = 'Asynchron';
$string['backupsection'] = 'Kursabschnitt sichern: {$a}';
$string['backupsettings'] = 'Sicherungseinstellungen';
$string['backupsitedetails'] = 'Details der Website';
$string['backupstage16action'] = 'Weiter';
$string['backupstage1action'] = 'Weiter';
$string['backupstage2action'] = 'Weiter';
$string['backupstage4action'] = 'Sicherung ausführen';
$string['backupstage8action'] = 'Weiter';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktivität';
$string['backuptypecourse'] = 'Kurs';
$string['backuptypesection'] = 'Abschnitt';
$string['backupversion'] = 'Sicherungsversion';
$string['cannotfindassignablerole'] = 'Die Rolle \'{$a}\' in der Sicherungsdatei kann nicht auf eine Rolle übertragen werden, die Sie zuweisen dürfen.';
$string['choosefilefromactivitybackup'] = 'Sicherungsbereich der Aktivität';
$string['choosefilefromactivitybackup_help'] = 'Voreingestellt ist die Speicherung  von Aktivitäten hier.';
$string['choosefilefromautomatedbackup'] = 'Automatisierte Sicherungen';
$string['choosefilefromautomatedbackup_help'] = 'Enthält automatisch erzeugte Sicherungsdateien';
$string['choosefilefromcoursebackup'] = 'Sicherungsbereich des Kurses';
$string['choosefilefromcoursebackup_help'] = 'Voreingestellt ist, dass Kurssicherungsdateien hier abgelegt werden.';
$string['choosefilefromuserbackup'] = 'Sicherungsbereich des Nutzers';
$string['choosefilefromuserbackup_help'] = 'Sicherungsdateien mit der Option \'anonymisierte Nutzereinträge\' werden hier gespeichert.';
$string['configgeneralactivities'] = 'Standard für die Einbeziehung von Aktivitäten in eine Sicherung';
$string['configgeneralanonymize'] = 'Standard für die Anonymisierung aller nutzerbezogenen Informationen in eine Sicherung';
$string['configgeneralbadges'] = 'Diese Option legt fest, ob Badges in eine Sicherung einbezogen werden.';
$string['configgeneralblocks'] = 'Standard für die Einbeziehung von Blöcken in eine Sicherung';
$string['configgeneralcalendarevents'] = 'Diese Option legt die Standardeinstellung für die Einbeziehung von Kalendereinträgen in Kurssicherungen fest.';
$string['configgeneralcomments'] = 'Standard für die Einbeziehung von Kommentaren in eine Sicherung';
$string['configgeneralcompetencies'] = 'Diese Option legt die Standardeinstellung für die Einbeziehung von Kompetenzen in Kurssicherungen fest.';
$string['configgeneralfiles'] = 'Setzt den Standard für die Aufnahme von Dateien in ein Backup. Hinweis: Wenn Sie diese Einstellung deaktivieren, wird ein Backup erstellt, das nur Verweise auf Dateien enthält. Dies ist kein Problem, wenn die Sicherung auf dem gleichen System wiederhergestellt wird und die Dateien nicht gemäß der Einstellung \'Papierkorb-Dateien bereinigen\' (filescleanupperiod) gelöscht wurden.';
$string['configgeneralfilters'] = 'Standard für die Einbeziehung von Filtern in eine Sicherung';
$string['configgeneralgroups'] = 'Diese Option legt die Standardeinstellung für Gruppen und Gruppierungen in Kurssicherungen fest.';
$string['configgeneralhistories'] = 'Standard für die Einbeziehung von Nutzerverläufen in eine Sicherung';
$string['configgenerallogs'] = 'Standard für die Einbeziehung von Logdaten in eine Sicherung';
$string['configgeneralquestionbank'] = 'Falls diese Option aktiv ist, wird die Fragensammlung  in Kurssicherungen einbezogen. Wenn die Option deaktiviert wird, können Aktivitäten nicht gesichert werden, die auf die Fragensammlung zugreifen, z.B. Tests.';
$string['configgeneralroleassignments'] = 'Standard für die Einbeziehung von Rollenzuweisungen in eine Sicherung';
$string['configgeneralusers'] = 'Standard für die Einbeziehung von Nutzerkonten in eine Sicherung';
$string['configgeneraluserscompletion'] = 'Standard für die Einbeziehung von Fortschrittsinformationen in eine Sicherung';
$string['config_keep_groups_and_groupings'] = 'Die aktuellen Gruppen und Gruppierungen beibehalten';
$string['config_keep_roles_and_enrolments'] = 'Die aktuellen Rollen und Einschreibungen beibehalten';
$string['configloglifetime'] = 'Diese Zeitdauer gibt an, für welchen Zeitraum die Logdaten der Sicherungen gespeichert werden. Ältere Logdaten werden automatisch gelöscht. Dieser Wert sollte möglichst klein gehalten werden, weil die Logdaten sehr viel Platz brauchen.';
$string['config_overwrite_conf'] = 'Nutzer/in erlauben, die Kurseinstellungen zu überschreiben';
$string['config_overwrite_course_fullname'] = 'Voreingestellt ist, dass der aktuelle Kursname mit dem Kursnamen aus der Sicherungsdatei überschrieben wird. Um den Kursnamen zu ändern (moodle/course:changefullname) muss auch \'Kurseinstellungen überschreiben\' aktiviert sein.';
$string['config_overwrite_course_shortname'] = 'Der aktuelle Kurskurzname wird mit dem Kurskurznamen aus der Sicherungsdatei überschrieben. Um das Recht zu haben, den Kurskurznamen zu ändern (moodle/course:changeshortname) muss auch \'Kurseinstellungen überschreiben\' aktiviert sein.';
$string['config_overwrite_course_startdate'] = 'Der aktuelle Kursbeginn wird mit dem Kursbeginn aus der Sicherungsdatei überschrieben. Um das Recht zu haben, den Kursbeginn zu ändern (moodle/restore:rolldates) muss auch \'Kurseinstellungen überschreiben\' aktiviert sein.';
$string['configrestoreactivities'] = 'Standard für die Wiederherstellung von Aktivitäten setzen';
$string['configrestorebadges'] = 'Standard für die Wiederherstellung von Badges setzen';
$string['configrestoreblocks'] = 'Standard für die Wiederherstellung von Blöcken setzen';
$string['configrestorecalendarevents'] = 'Standard für die Wiederherstellung von Kalendereinträgen setzen';
$string['configrestorecomments'] = 'Standard für die Wiederherstellung von Kommentaren setzen';
$string['configrestorecompetencies'] = 'Standard für die Wiederherstellung von Kompetenzen setzen';
$string['configrestoreenrolments'] = 'Standard für die Wiederherstellung von Einschreibemethoden setzen';
$string['configrestorefilters'] = 'Standard für die Wiederherstellung von Filtern setzen';
$string['configrestoregroups'] = 'Standard für die Wiederherstellung von Gruppen und Gruppierungen setzen, falls diese in der Sicherung enthalten sind.';
$string['configrestorehistories'] = 'Standard für die Wiederherstellung von Nutzerverläufen setzen, falls sie in der Sicherung enthalten sind.';
$string['configrestorelogs'] = 'Diese Option legt fest, dass Logdaten wiederhergestellt werden, falls sie in der Sicherung enthalten sind.';
$string['configrestoreroleassignments'] = 'Diese Option legt fest, dass Rollenzuweisungen wiederhergestellt werden, falls sie in der Sicherung enthalten sind.';
$string['configrestoreusers'] = 'Standard für die Wiederherstellung von Nutzerkonten setzen, falls sie in der Sicherung enthalten sind.';
$string['configrestoreuserscompletion'] = 'Diese Option legt fest, dass Informationen zum Nutzerabschluss wiederhergestellt werden, falls sie in der Sicherung enthalten sind.';
$string['confirmcancel'] = 'Sicherung abbrechen';
$string['confirmcancelimport'] = 'Import abbrechen';
$string['confirmcancelno'] = 'Fortsetzen';
$string['confirmcancelquestion'] = 'Soll der Vorgang wirklich abgebrochen werden? Alle eingegebenen Informationen werden gelöscht.';
$string['confirmcancelrestore'] = 'Wiederherstellung abbrechen';
$string['confirmcancelyes'] = 'Abbrechen';
$string['confirmnewcoursecontinue'] = 'Warnung für neuen Kurs';
$string['confirmnewcoursecontinuequestion'] = 'Während der Kurswiederherstellung wird ein temporärer (verborgener) Kurs angelegt. Um die Wiederherstellung abzubrechen, klicken Sie auf "Abbrechen". Bitte lassen Sie den Browser während der Wiederherstellung geöffnet.';
$string['coursecategory'] = 'Kursbereich, in dem der Kurs wiederhergestellt wird';
$string['courseid'] = 'Original-ID';
$string['coursesettings'] = 'Kurseinstellungen';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Einstellungen';
$string['currentstage16'] = 'Fertigstellen';
$string['currentstage2'] = 'Einstellungen';
$string['currentstage4'] = 'Kontrollieren und bestätigen';
$string['currentstage8'] = 'Sicherung ausführen';
$string['enableasyncbackup'] = 'Asynchrone Sicherungen erlauben';
$string['enableasyncbackup_help'] = 'Wenn diese Option aktiviert ist, werden alle Sicherungs- und Wiederherstellungsvorgänge asynchron durchgeführt. Importe und Exporte sind davon nicht betroffen. Asynchrone Sicherungen und Wiederherstellungen ermöglichen es, während einer Sicherung oder einer Wiederherstellung andere Operationen durchzuführen.';
$string['enterasearch'] = 'Suche eingeben';
$string['error_block_for_module_not_found'] = 'Verwaiste Blockinstanz (ID: {$a->bid}) zum Kursmodul (ID {$a->mid}) gefunden. Dieser Block wird nicht gesichert.';
$string['errorcopyingbackupfile'] = 'Duplizieren der Sicherungsdatei in den temporären Ordner vor der Wiederherstellung fehlgeschlagen';
$string['error_course_module_not_found'] = 'Verwaistes Kursmodul (ID: {$a}) gefunden. Dieses Modul wird nicht gesichert.';
$string['errorfilenamemustbezip'] = 'Die Datei muss eine komprimierte Datei sein und die Dateiendung .mbz haben.';
$string['errorfilenamerequired'] = 'Sie müssen einen gültigen Dateinamen für diese Sicherung angeben';
$string['errorfilenametoolong'] = 'Der Dateiname muss weniger als 255 Zeichen haben.';
$string['errorinvalidformat'] = 'Unbekanntes Sicherungsformat';
$string['errorinvalidformatinfo'] = 'Die ausgewählte Datei ist keine gültige Moodlesicherung und kann nicht zur Wiederherstellung verwendet werden';
$string['errorminbackup20version'] = 'Diese Sicherungsdatei wurde mit einer Entwicklungsversion des Moodle-Backups ({$a->backup}) erstellt. Für die Wiederherstellung ist mindestens {$a->min} notwendig.';
$string['errorrestorefrontpagebackup'] = 'Sicherungen einer Startseite können nur auf der Startseite wiederhergestellt werden.';
$string['executionsuccess'] = 'Ihre Sicherung wurde erfolgreich abgeschlossen.';
$string['failed'] = 'Sicherung fehlgeschlagen';
$string['filealiasesrestorefailures'] = 'Fehler bei der Alias-Wiederherstellung';
$string['filealiasesrestorefailures_help'] = 'Aliases sind symbolische Links zu anderen Dateien, auch Dateien in externen Repositories. In einigen Fällen kann Moodle diese Aliases nicht wiederherstellen, z.B. wenn eine Sicherung in einem anderen System wiederhergestellt wird oder die verlinkte Datei nicht existiert.';
$string['filealiasesrestorefailuresinfo'] = 'Aliases aus der Sicherungsdatei konnten nicht wiederhergestellt werden. Die nachfolgende Liste enthält deren angenommenen Speicherorte und die Quelldatei aus dem Ursprungssystem.';
$string['filename'] = 'Dateiname';
$string['filereferencesincluded'] = 'In der Sicherung sind Dateiverweise zu externen Inhalten enthalten. Diese Dateiverweise werden nicht funktionieren, wenn die Sicherung in einer anderen Website wiederhergestellt wird.';
$string['filereferencesnotsamesite'] = 'Die Sicherung stammt von einer anderen Website. Dateiverweise können nicht wiederhergestellt werden.';
$string['filereferencessamesite'] = 'Die Sicherung stammt von der gleichen Website. Dateiverweise können wiederhergestellt werden.';
$string['generalactivities'] = 'Aktivitäten einbeziehen';
$string['generalanonymize'] = 'Informationen anonymisieren';
$string['generalbackdefaults'] = 'Einstellungen für die Sicherung';
$string['generalbadges'] = 'Badges einbeziehen';
$string['generalblocks'] = 'Blöcke einbeziehen';
$string['generalcalendarevents'] = 'Kalender einbeziehen';
$string['generalcomments'] = 'Kommentare einbeziehen';
$string['generalcompetencies'] = 'Kompetenzen einbeziehen';
$string['generalenrolments'] = 'Einschreibemethoden einbeziehen';
$string['generalfiles'] = 'Dateien einbeziehen';
$string['generalfilters'] = 'Filter einbeziehen';
$string['generalgradehistories'] = 'Verlauf einbeziehen';
$string['generalgroups'] = 'Gruppen und Gruppierungen einbeziehen';
$string['generalhistories'] = 'Verlauf einbeziehen';
$string['generallogs'] = 'Logdaten einbeziehen';
$string['generalquestionbank'] = 'Fragensammlung einbeziehen';
$string['generalrestoredefaults'] = 'Einstellungen für die Wiederherstellung';
$string['generalrestoresettings'] = 'Allgemeines';
$string['generalroleassignments'] = 'Rollenzuweisungen einbeziehen';
$string['generalsettings'] = 'Allgemeines';
$string['generalusers'] = 'Nutzer/innen einbeziehen';
$string['generaluserscompletion'] = 'Fortschrittsinformationen einbeziehen';
$string['hidetypes'] = 'Typ-Optionen verbergen';
$string['importbackupstage16action'] = 'Fortsetzen';
$string['importbackupstage1action'] = 'Weiter';
$string['importbackupstage2action'] = 'Weiter';
$string['importbackupstage4action'] = 'Import durchführen';
$string['importbackupstage8action'] = 'Fortsetzen';
$string['importcurrentstage0'] = 'Kursauswahl';
$string['importcurrentstage1'] = 'Grundeinstellung';
$string['importcurrentstage16'] = 'Fertig';
$string['importcurrentstage2'] = 'Schema-Einstellungen';
$string['importcurrentstage4'] = 'Bestätigung und Prüfung';
$string['importcurrentstage8'] = 'Import durchführen';
$string['importfile'] = 'Sicherungsdatei importieren';
$string['importgeneralduplicateadminallowed'] = 'Zulassen, dass Administrator/innen den Konflikt lösen';
$string['importgeneralduplicateadminallowed_desc'] = 'Wenn es auf dem System einen Nutzeraccount mit dem Anmeldenamen \'admin\' gibt, kann es beim Wiederherstellen einer Sicherung einen Konflikt geben, sofern darin ebenfalls ein solcher Nutzer vorhanden ist.  Mit dieser Einstellung kann der Konflikt gelöst werden. Es wird dann eine neuer Nutzername \'admin_xyz\' erzeugt.';
$string['importgeneralmaxresults'] = 'Max. Anzahl von Kursen für den Import';
$string['importgeneralmaxresults_desc'] = 'Diese Option legt fest, wie viele Kurse im ersten Schritt des Importprozesses maximal angezeigt werden.';
$string['importgeneralsettings'] = 'Einstellungen für den Import';
$string['importrootsettings'] = 'Einstellungen für den Import';
$string['importsettings'] = 'Einstellungen für den Import';
$string['importsuccess'] = 'Der Import abgeschlossen. Klicken Sie auf Weiter, um in den Kurs zu gelangen.';
$string['includeactivities'] = 'Einbeziehen:';
$string['includeditems'] = 'Einbezogene Elemente:';
$string['includefilereferences'] = 'Dateiverweise zu externen Inhalten';
$string['includesection'] = 'Abschnitt {$a}';
$string['includeuserinfo'] = 'Nutzerdaten';
$string['inprogress'] = 'Sicherung läuft';
$string['jumptofinalstep'] = 'Weitere Einstellungen überspringen';
$string['keep'] = 'Behalten';
$string['locked'] = 'Gesperrt';
$string['lockedbyconfig'] = 'Diese Einstellung wurde durch eine Sicherungseinstellung gesperrt';
$string['lockedbyhierarchy'] = 'Gesperrt durch Abhängigkeiten';
$string['lockedbypermission'] = 'Sie haben nicht das Recht, diese Einstellung zu ändern.';
$string['loglifetime'] = 'Logdaten behalten für';
$string['managefiles'] = 'Sicherungsdateien verwalten';
$string['mergerestoredefaults'] = 'Standard wiederherstellen, wenn mit einem anderen Kurs zusammengeführt wird';
$string['missingfilesinpool'] = 'Einige Dateien konnten während der Sicherung nicht gespeichert werden. Es ist nicht möglich, diese Dateien beim Wiederherstellen wieder automatisch einzubinden.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Moodle-Version';
$string['morecoursesearchresults'] = 'Mehr als {$a} Kurse wurden gefunden. Es werden die ersten {$a} Ergebnisse angezeigt.';
$string['moreresults'] = 'Zu viele Suchergebnisse - bitte präzisieren Sie die Suchanfrage';
$string['nomatchingcourses'] = 'Kein Kurs zum Anzeigen';
$string['norestoreoptions'] = 'Keine Kategorien oder existierende Kurse, in denen Sie wiederherstellen könnten ';
$string['originalwwwroot'] = 'URL der Sicherung';
$string['overwrite'] = 'Überschreiben';
$string['pendingasyncdeletedetail'] = 'Dieser Kurs hat eine asynchrones Kurssicherung ausstehend. <br/>Kurse können nicht gelöscht werden, bis diese Sicherung abgeschlossen ist.';
$string['pendingasyncdetail'] = 'Asynchrone Kurssicherungen erlauben es, jeweils nur eine ausstehende Sicherung für eine Ressource durchzuführen. <br/>Mehrere asynchrone Sicherungen derselben Ressource können nicht in die Warteschlange gestellt werden, da dies wahrscheinlich zu mehreren Sicherungen mit demselben Inhalt führen würde.';
$string['pendingasyncedit'] = 'Für diesen Kurs steht eine asynchrone Sicherung an. Bearbeiten Sie diesen Kurs erst, wenn die Sicherung abgeschlossen ist.';
$string['pendingasyncerror'] = 'Für diese Ressource anstehende Sicherung';
$string['preparingdata'] = 'Daten werden vorbereitet';
$string['preparingui'] = 'Übersicht wird vorbereitet';
$string['previousstage'] = 'Zurück';
$string['privacy:metadata:backup_controllers'] = 'Liste der Backup-Operationen';
$string['privacy:metadata:backup_controllers:itemid'] = 'ID des Kurses';
$string['privacy:metadata:backup_controllers:operation'] = 'Ausgeführte Operation, z.B. Wiederherstellen';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Datum der Erstellung der Aktion';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Das Datum, zu dem die Aktion bearbeitet wurde';
$string['privacy:metadata:backup_controllers:type'] = 'Itemtyp der bearbeitet wurde, z.B. Aktivität';
$string['privacy:metadata:backup:detailsofarchive'] = 'Das Archiv kannn verschiedene Nutzerdaten aus einem Kurs enthalten, z.B. Bewertungen, Einschreibungen und Aktivitätsdaten';
$string['privacy:metadata:backup:externalpurpose'] = 'Der Zweck dieses Archives ist es, Informationen zu speichern, die evtl. später wiederhergestellt werden können.';
$string['qcategory2coursefallback'] = 'Die Fragenkategorie "{$a->name}" in der Sicherungsdatei ist ursprünglich eine System- bzw. Kurskategorie. Bei der Wiederherstellung wird sie im Kurskontext erstellt.';
$string['qcategorycannotberestored'] = 'Die Fragenkategorie "{$a->name}" kann bei der Wiederherstellung nicht erstellt werden';
$string['question2coursefallback'] = 'Die Fragenkategorie "{$a->name}" in der Sicherungsdatei ist ursprünglich eine System- bzw. Kurskategorie. Bei der Wiederherstellung wird sie im Kurskontext erstellt.';
$string['questionegorycannotberestored'] = 'Die Fragen "{$a->name}" können bei der Wiederherstellung nicht erstellt werden';
$string['recyclebin_desc'] = 'Diese Einstellungen werden auch auf den Papierkorb angewendet.';
$string['replacerestoredefaults'] = 'Standard wiederherstellen, wenn in einem anderen Kurs wiederhergestellt wird und die bisherigen Kursinhalte gelöscht werden';
$string['restoreactivity'] = 'Aktivität wiederherstellen';
$string['restorecourse'] = 'Kurs wiederherstellen';
$string['restorecoursesettings'] = 'Kurseinstellungen';
$string['restoreexecutionsuccess'] = 'Der Kurs wurde erfolgreich wiederhergestellt. Klicken Sie auf Weiter, um in den Kurs zu gelangen.';
$string['restorefileweremissing'] = 'Einige Dateien konnten nicht wiederhergestellt werden. Sie fehlten im Backup.';
$string['restorenewcoursefullname'] = 'Neuer Kursname';
$string['restorenewcourseshortname'] = 'Kurzer Kursname des neuen Kurses';
$string['restorenewcoursestartdate'] = 'Neuer Kursbeginn';
$string['restorerolemappings'] = 'Wiederherstellen Rollenzuordnungen';
$string['restorerootsettings'] = 'Einstellungen wiederherstellen';
$string['restoresection'] = 'Abschnitt wiederherstellen';
$string['restorestage1'] = 'Bestätigen';
$string['restorestage16'] = 'Überprüfen';
$string['restorestage16action'] = 'Wiederherstellung ausführen';
$string['restorestage1action'] = 'Weiter';
$string['restorestage2'] = 'Ziel';
$string['restorestage2action'] = 'Weiter';
$string['restorestage32'] = 'Ausführen';
$string['restorestage32action'] = 'Weiter';
$string['restorestage4'] = 'Einstellungen';
$string['restorestage4action'] = 'Weiter';
$string['restorestage64'] = 'Fertig';
$string['restorestage64action'] = 'Weiter';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Weiter';
$string['restoretarget'] = 'Wiederherstellungsziel';
$string['restoretocourse'] = 'Zum Kurs wiederherstellen:';
$string['restoretocurrentcourse'] = 'In diesen Kurs wiederherstellen';
$string['restoretocurrentcourseadding'] = 'Den gesicherten Kurs mit diesem Kurs verschmelzen';
$string['restoretocurrentcoursedeleting'] = 'Alle Inhalte dieses Kurses löschen und dann wiederherstellen';
$string['restoretoexistingcourse'] = 'In einem vorhandenen Kurs wiederherstellen';
$string['restoretoexistingcourseadding'] = 'Den gesicherten Kurs mit einem bestehenden Kurs verschmelzen';
$string['restoretoexistingcoursedeleting'] = 'Alle Inhalte eines vorhandenen Kurses löschen und dann wiederherstellen';
$string['restoretonewcourse'] = 'Als neuen Kurs wiederherstellen';
$string['restoringcourse'] = 'Kurs wird wiederhergestellt';
$string['restoringcourseshortname'] = 'Kurs wird wiederhergestellt';
$string['rootenrolmanual'] = 'Wiederherstellen mit manueller Einschreibung';
$string['rootsettingactivities'] = 'Aktivitäten einbeziehen';
$string['rootsettinganonymize'] = 'Nutzerinformationen anonymisieren';
$string['rootsettingbadges'] = 'Badges einbeziehen';
$string['rootsettingblocks'] = 'Blöcke einbeziehen';
$string['rootsettingcalendarevents'] = 'Kalender einbeziehen';
$string['rootsettingcomments'] = 'Kommentare einbeziehen';
$string['rootsettingcompetencies'] = 'Kompetenzen einbeziehen';
$string['rootsettingcustomfield'] = 'Kursfelder einbeziehen';
$string['rootsettingenrolments'] = 'Einschreibemethoden einbeziehen';
$string['rootsettingenrolments_always'] = 'Ja, immer';
$string['rootsettingenrolments_never'] = 'Nein, Nutzer/innen als manuelle Einschreibung wiederherstellen';
$string['rootsettingenrolments_withusers'] = 'Ja, aber nur wenn Nutzer/innen einbezogen sind';
$string['rootsettingfiles'] = 'Dateien einbeziehen';
$string['rootsettingfilters'] = 'Filter einbeziehen';
$string['rootsettinggradehistories'] = 'Bewertungsverlauf einbeziehen';
$string['rootsettinggroups'] = 'Gruppen und Gruppierungen einbeziehen';
$string['rootsettingimscc1'] = 'Als IMS Common Cartridge 1.0 konvertieren';
$string['rootsettingimscc11'] = 'Als IMS Common Cartridge 1.1 konvertieren';
$string['rootsettinglogs'] = 'Kurslogdaten  einbeziehen';
$string['rootsettingquestionbank'] = 'Fragensammlung einbeziehen';
$string['rootsettingroleassignments'] = 'Rollenzuweisungen einbeziehen';
$string['rootsettings'] = 'Sicherungseinstellungen';
$string['rootsettingusers'] = 'Eingeschriebene Nutzer/innen einbeziehen';
$string['rootsettinguserscompletion'] = 'Nutzerabschlussdetails einbeziehen';
$string['samesitenotification'] = 'Diese Sicherung wurde nur mit Verweisen auf Dateien erstellt, nicht mit den Dateien selbst. Die Wiederherstellung wird ausschließlich auf dieser Website funktionieren.';
$string['sectionactivities'] = 'Aktivitäten';
$string['sectioninc'] = 'In die Sicherung einbezogen (ohne Nutzerinformationen)';
$string['sectionincanduser'] = 'In die Sicherung einbezogen (mit Nutzerinformationen)';
$string['selectacategory'] = 'Kursbereich auswählen';
$string['selectacourse'] = 'Kurs auswählen';
$string['setting_course_fullname'] = 'Kursname';
$string['setting_course_shortname'] = 'Kurzer Kursname';
$string['setting_course_startdate'] = 'Kursbeginn';
$string['setting_keep_groups_and_groupings'] = 'Aktuelle Gruppen und Gruppierungen behalten';
$string['setting_keep_roles_and_enrolments'] = 'Aktuelle Rollen und Einschreibungen behalten';
$string['setting_overwrite_conf'] = 'Kurseinstellungen überschreiben';
$string['setting_overwrite_course_fullname'] = 'Kursnamen überschreiben';
$string['setting_overwrite_course_shortname'] = 'Kurze Kursnamen überschreiben';
$string['setting_overwrite_course_startdate'] = 'Kursbeginn überschreiben';
$string['showtypes'] = 'Typ-Optionen anzeigen';
$string['sitecourseformatwarning'] = 'Sicherungen einer Startseite können nur auf der Startseite wiederhergestellt werden.';
$string['skiphidden'] = 'Verborgene Kurse überspringen';
$string['skiphiddenhelp'] = 'Wählen Sie, ob verborgene Kurse gesichert werden sollen oder nicht.';
$string['skipmodifdays'] = 'Unveränderte Kurse überspringen';
$string['skipmodifdayshelp'] = 'Wählen Sie, ob Kurse, die sich x Tage nicht verändert haben, gesichert werden sollen oder nicht.';
$string['skipmodifprev'] = 'Seit der letzten Sicherung unveränderte Kurse überspringen';
$string['skipmodifprevhelp'] = 'Wählen Sie, ob Kurse, die sich seit der letzten Sicherung nicht geändert haben, gesichert oder übersprungen werden sollen. Dazu ist das Logging erforderlich.';
$string['status'] = 'Status';
$string['storagecourseandexternal'] = 'Dateibereich für Kurssicherungen und angegebenes Verzeichnis';
$string['storagecourseonly'] = 'Dateibereich für Kurssicherungen';
$string['storageexternalonly'] = 'Angegebenes Verzeichnis für automatisierte Sicherungen';
$string['successful'] = 'Sicherung erfolgreich';
$string['successfulrestore'] = 'Wiederherstellung erfolgreich';
$string['timetaken'] = 'Verbrauchte Zeit';
$string['title'] = 'Titel';
$string['totalcategorysearchresults'] = 'Kategorien gesamt: {$a}';
$string['totalcoursesearchresults'] = 'Kurse gesamt: {$a}';
$string['undefinedrolemapping'] = 'Für den Grundtypus \'{$a}\' ist keine Rollenzuordnung definiert';
$string['unnamedsection'] = 'Unbenannter Abschnitt';
$string['userinfo'] = 'Nutzerinfo';