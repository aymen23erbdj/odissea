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
 * Strings for component 'backup', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'Kies om al dan niet automatische back-ups te doen. Als manueel is geselecteerd, dan zullen automatische back-ups enkel mogelijk zijn met het automatische back-ups Command Line Interface script. Dit kan dan manueel gedaan worden via de command line of via cron.';
$string['autoactivedisabled'] = 'Uitgeschakeld';
$string['autoactiveenabled'] = 'Ingeschakeld';
$string['autoactivemanual'] = 'Manueel';
$string['automatedbackupschedule'] = 'Planning';
$string['automatedbackupschedulehelp'] = 'Dagen van de week om automatische back-ups uit te voeren';
$string['automatedbackupsinactive'] = 'Automatische back-ups zijn niet ingeschakeled door de site-beheerder.';
$string['automatedbackupstatus'] = 'Status van geplande back-up';
$string['automateddeletedays'] = 'Verwijder backups ouder dan';
$string['automatedmaxkept'] = 'Maximum aantal te houden back-ups';
$string['automatedmaxkepthelp'] = 'Dit geeft het maximum aantal of recente automatische back-ups om bij te houden voor elke cursus. Oudere back-ups worden automatisch verwijderd.';
$string['automatedminkept'] = 'Minimum aantal te houden back-ups';
$string['automatedminkepthelp'] = 'Als back-ups ouder dan een bepaald aantal dage, verwijderd worden, dan kan het gebeuren dat een niet-actieve cursus zonder back-ups komt. Om dit te voorkomen kun je hier een minimaal te behouden aantal back-ups ingeven.';
$string['automatedsettings'] = 'Instellingen geplande back-up';
$string['automatedsetup'] = 'Instellingen automatische back-up';
$string['automatedstorage'] = 'Opslag automatische back-up';
$string['automatedstoragehelp'] = 'Kies de plaats waar automatische back-ups terecht moeten komen.';
$string['backupactivity'] = 'Back-up activiteit: {$a}';
$string['backupcourse'] = 'Back-up cursus: {$a}';
$string['backupcoursedetails'] = 'Cursusdetails';
$string['backupcoursesection'] = 'Sectie: {$a}';
$string['backupcoursesections'] = 'Cursussecties';
$string['backupdate'] = 'Back-updatum';
$string['backupdetails'] = 'Back-updetails';
$string['backupdetailsnonstandardinfo'] = 'Het gekozen bestand is geen standaard Moodle back-up bestand. Het terugzetproces zal proberen het bestand in standaard moodleformaat om te zetten en het dan terug te zetten.';
$string['backupformat'] = 'Formaat';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Onbekende opmaak';
$string['backuplog'] = 'Technische informatie en waarschuwingen';
$string['backupmode'] = 'Modus';
$string['backupmode10'] = 'Algemeen';
$string['backupmode20'] = 'Importeer';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Zelfde site';
$string['backupmode50'] = 'Geautomatiseerd';
$string['backupmode60'] = 'Geconverteerd';
$string['backupsection'] = 'Back-up cursussectie: {$a}';
$string['backupsettings'] = 'Back-upinstellingen';
$string['backupsitedetails'] = 'Site details';
$string['backupstage16action'] = 'Ga verder';
$string['backupstage1action'] = 'Volgende';
$string['backupstage2action'] = 'Volgende';
$string['backupstage4action'] = 'Back-up starten';
$string['backupstage8action'] = 'Ga verder';
$string['backuptype'] = 'Type';
$string['backuptypeactivity'] = 'Activiteit';
$string['backuptypecourse'] = 'Cursus';
$string['backuptypesection'] = 'Sectie';
$string['backupversion'] = 'Back-upversie';
$string['cannotfindassignablerole'] = 'De {$a} rol in het back-upbestand kan niet gekoppeld worden aan één van de rollen die je mag toewijzen.';
$string['choosefilefromactivitybackup'] = 'Back-upzone voor activiteiten';
$string['choosefilefromactivitybackup_help'] = 'Activiteitsback-ups, gemaakt met standaardinstellingen, worden hier bewaard.';
$string['choosefilefromautomatedbackup'] = 'Automatische back-ups';
$string['choosefilefromautomatedbackup_help'] = 'Bevat automatisch gegenereerde back-ups';
$string['choosefilefromcoursebackup'] = 'Cursus back-upzone';
$string['choosefilefromcoursebackup_help'] = 'Cursusback-ups, gemaakt met standaardinstellingen worden hier bewaard.';
$string['choosefilefromuserbackup'] = 'Private back-upzone';
$string['choosefilefromuserbackup_help'] = 'Back-upbestanden met geanonimiseerde informatie worden hier bewaard.';
$string['configgeneralactivities'] = 'Stelt de standaardinstelling  in voor het opnemen van activiteiten in een back-up';
$string['configgeneralanonymize'] = 'Indien ingeschakeld zal als standaardinstelling alle informatie die verwijst naar gebruikers anoniem gemaakt worden.';
$string['configgeneralbadges'] = 'Stelt de standaard in om badges op te nemen in een backup.';
$string['configgeneralblocks'] = 'Stelt de standaardinstelling  in voor het opnemen van blokken in een back-up';
$string['configgeneralcalendarevents'] = 'Standaardinstelling voor het opnemen van kalendergebeurtenissen in een back-up.';
$string['configgeneralcomments'] = 'Stelt de standaardinstelling  in voor het opnemen van commentaren in een back-up';
$string['configgeneralcompetencies'] = 'Standaardinstelling voor het opnemen van competenties in een back-up.';
$string['configgeneralfilters'] = 'Stelt de standaardinstelling  in voor het opnemen van filters in een back-up';
$string['configgeneralgroups'] = 'Stelt de standaard in om groepen en groeperingen mee op te nemen in een back-up.';
$string['configgeneralhistories'] = 'Stelt de standaardinstelling  in voor het opnemen van de gebruikersgeschiedenis in een back-up';
$string['configgenerallogs'] = 'Indien ingeschakeld zullen logs standaard in alle back-ups opgenomen worden';
$string['configgeneralquestionbank'] = 'Indien ingeschakeld zal de vragenpool standaard in de backups zitten.
MERK OP: Dit uitschakelen zal het backuppen van activiteiten die de vragenpool gebruiken, zoals testen, uitschakelen.';
$string['configgeneralroleassignments'] = 'Indien ingeschakeld zullen standaard alle roltoewijzigen opgenomen worden in back-ups';
$string['configgeneralusers'] = 'Stelt de standaardinstelling  in voor het opnemen van gebruikers in back-ups';
$string['configgeneraluserscompletion'] = 'Indien ingeschakeld zal de informatie over het voltooien van cursusonderdelen standaard in back-ups worden opgenomen.';
$string['config_keep_groups_and_groupings'] = 'Standaard de huidige groepen en groeperingen behouden';
$string['config_keep_roles_and_enrolments'] = 'Standaard de huidige rollen en aanmeldingen behouden';
$string['configloglifetime'] = 'Dit specifiëert hoelang je de back-up logs wil bijhouden. Oudere logs dan de hier opgegeven tijd worden automatisch verwijderd. Het wordt aangeraden deze waarde klein te houden, want back-uplogs kunnen zeer groot worden.';
$string['config_overwrite_conf'] = 'Gebruikers toestaan de huidige cursusconfiguratie te overschrijven';
$string['config_overwrite_course_fullname'] = 'Overschrijf standaard de cursusnaam met degene uit het back-upbestand. Dit vereist dat "Overschrijf cursusconfiguratie" geselecteerd is en dat de huidige gebruiker de mogelijkheid heeft om de cursusnaam te wijzigen (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Overschrijf standaard de korte cursusnaam met degene uit het back-upbestand. Dit vereist dat "Overschrijf cursusconfiguratie" geselecteerd is en dat de huidige gebruiker de mogelijkheid heeft om de korte cursusnaam te wijzigen (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Overschrijf standaard de cursus startdatum met degene uit het back-upbestand. Dit vereist dat "Overschrijf cursusconfiguratie" geselecteerd is en dat de huidige gebruiker de mogelijkheid heeft om de cursusdata te wijzigen tijdens het terugzetten (moodle/restore:rolldates)';
$string['configrestoreactivities'] = 'Zet de standaard voor het terugzetten van activiteiten.';
$string['configrestorebadges'] = 'Zet de standaard voor het terugzetten van badges';
$string['configrestoreblocks'] = 'Zet de standaard voor het terugzetten van blokken.';
$string['configrestorecalendarevents'] = 'Zet de standaard voor het terugzetten van kalendergebeurtenissen.';
$string['configrestorecomments'] = 'Zet de standaard voor het terugzetten van opmerkingen.';
$string['configrestorecompetencies'] = 'Zet de standaard voor het terugzetten van competenties.';
$string['configrestoreenrolments'] = 'Zet de standaard voor het terugzetten van aanmeldingsmethodes.';
$string['configrestorefilters'] = 'Zet de standaard voor het terugzetten van filters.';
$string['configrestoregroups'] = 'Zet de standaard voor het terugzetten van groepen en groeperingen als die in de back-up opgenomen waren.';
$string['configrestorehistories'] = 'Zet de standaard voor het terugzetten van gebruikersgeschiedenis als die in de back-up opgenomen was.';
$string['configrestorelogs'] = 'Indien ingeschakeld zullen logs standaard teruggezet worden als ze in de back-up opgenomen waren.';
$string['configrestoreroleassignments'] = 'Indien ingeschakeld zullen standaard roltoewijzingen teruggezet worden als ze in de back-up opgenomen waren.';
$string['configrestoreusers'] = 'Zet de standaard voor het terugzetten van gebruikers als ze in de back-up opgenomen waren.';
$string['configrestoreuserscompletion'] = 'Indien ingeschakeld zal voltooiingsinformatie standaard teruggezet worden als het opgenomen was in de back-up.';
$string['confirmcancel'] = 'Annuleer back-up';
$string['confirmcancelno'] = 'Blijf';
$string['confirmcancelquestion'] = 'Ben je zeker dat je wil annuleren? Alle informatie die je ingegeven hebt, zal verloren gaan.';
$string['confirmcancelyes'] = 'Annuleer';
$string['confirmnewcoursecontinue'] = 'Nieuwe cursus melding';
$string['confirmnewcoursecontinuequestion'] = 'Een tijdelijke (verborgen) cursus zal aangemaakt worden tijdens het terugzetproces. Om het terugzetten af te breken, klik op annuleren. Sluit je browser niet tijdens het terugzetten';
$string['coursecategory'] = 'Categorie waarin de cursus zal teruggezet worden';
$string['courseid'] = 'Oorspronkelijk ID';
$string['coursesettings'] = 'Cursusinstellingen';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Initiële instellingen';
$string['currentstage16'] = 'Volledig';
$string['currentstage2'] = 'Schema-instellingen';
$string['currentstage4'] = 'Nakijken en bevestigen';
$string['currentstage8'] = 'Back-up uitvoeren';
$string['enterasearch'] = 'Start een zoekopdracht';
$string['error_block_for_module_not_found'] = 'Verweesde blok instantie (id: {$a->bid}) voor cursus module (id: {$a->mid}) gevonden. Dit blok zal niet geback-uped worden.';
$string['errorcopyingbackupfile'] = 'Het kopiëren van het back-upbestand naar de tijdelijke map voor het terugzetten is mislukt.';
$string['error_course_module_not_found'] = 'Verweesde cursus module  (id: {$a}) gevonden. Deze module zal niet geback-upt worden.';
$string['errorfilenamemustbezip'] = 'De bestandsnaam die je opgeeft moet een ZIP-bestand zijn en de .mbz-extentie hebben';
$string['errorfilenamerequired'] = 'Je moet een geldige bestandsnaam opgeven voor deze back-up';
$string['errorfilenametoolong'] = 'De bestandsnaam moet korter zijn dan 255 tekens';
$string['errorinvalidformat'] = 'Onbekend back-upformaat';
$string['errorinvalidformatinfo'] = 'Het gekozen bestand is geen geldig Moodle back-upbestand en kan niet teruggezet worden.';
$string['errorminbackup20version'] = 'Dit back-upbestand is gemaakt met een ontwikkelversie van Moodle-back-up ({$a->backup}). De minimale vereiste is {$a->min}. Kan niet teruggezet worden.';
$string['errorrestorefrontpagebackup'] = 'Je kunt back-ups van de startpagina enkel op de startpagina terugzetten';
$string['executionsuccess'] = 'Je back-upbestand is klaar.';
$string['filealiasesrestorefailures'] = 'Aliases terugzetten mislukt';
$string['filealiasesrestorefailures_help'] = 'Aliases zijn symbolische links naar andere bestanden,  ook deze naar externe opslagruimten. In sommige gevallen kan Moodle ze niet terugzetten - bijvoorbeeld als een back-up van een andere site wordt teruggezet en het bestand waarnaar gerefereerd wordt niet bestaat.

Meer details en de werkelijke reden van het falen kan gevonden kunnen gevonden in het restore log bestand.';
$string['filealiasesrestorefailuresinfo'] = 'Sommige aliases in het back-upbestand konden niet teruggezet worden. Volgende lijst bevat hun verwachte locatie en het bronbestand waarnaar ze verwijzen op de oorspronkelijke site.';
$string['filename'] = 'Bestandsnaam';
$string['filereferencesincluded'] = 'Er zijn bestandsreferenties naar externe inhoud opgenomen in het back-upbestand. Die zullen niet werken als de back-up wordt teruggezet op een andere site.';
$string['filereferencesnotsamesite'] = 'De back-up is afkomstig van een andere site. Bestandsverwijzingen kunnen niet teruggezet worden';
$string['filereferencessamesite'] = 'Back-up is van deze site, bestandsverwijzingen kunnen teruggezet worden';
$string['generalactivities'] = 'Activiteiten en bronnen mee opnemen';
$string['generalanonymize'] = 'Informatie anoniem maken';
$string['generalbackdefaults'] = 'Algemene standaardinstellingen voor back-up';
$string['generalbadges'] = 'Badges mee opnemen';
$string['generalblocks'] = 'Blokken mee opnemen';
$string['generalcalendarevents'] = 'Kalendergebeurtenissen mee opnemen';
$string['generalcomments'] = 'Commentaren mee opnemen';
$string['generalcompetencies'] = 'Competenties mee opnemen';
$string['generalenrolments'] = 'Aanmeldingsmethodes mee opnemen';
$string['generalfilters'] = 'Filters mee opnemen';
$string['generalgradehistories'] = 'Geschiedenis toevoegen';
$string['generalgroups'] = 'Groepen en groeperingen mee opnemen';
$string['generalhistories'] = 'Geschiedenis mee opnemen';
$string['generallogs'] = 'Logs mee opnemen';
$string['generalquestionbank'] = 'Vragenpool ook backuppen';
$string['generalrestoredefaults'] = 'Algemene standaardinstellingen voor terugzetten.';
$string['generalrestoresettings'] = 'Algemene instellingen voor terugzetten.';
$string['generalroleassignments'] = 'Roltoewijzingen mee opnemen';
$string['generalsettings'] = 'Algemene back-upinstellingen';
$string['generalusers'] = 'Gebruikers mee opnemen';
$string['generaluserscompletion'] = 'Informatie over voltooide onderdelen van gebruikers mee opnemen';
$string['hidetypes'] = 'Verberg type-opties';
$string['importbackupstage16action'] = 'Ga verder';
$string['importbackupstage1action'] = 'Volgende';
$string['importbackupstage2action'] = 'Volgende';
$string['importbackupstage4action'] = 'Importeer';
$string['importbackupstage8action'] = 'Ga verder';
$string['importcurrentstage0'] = 'Cursus selectie';
$string['importcurrentstage1'] = 'Initiële instellingen';
$string['importcurrentstage16'] = 'Volledig';
$string['importcurrentstage2'] = 'Schema instellingen';
$string['importcurrentstage4'] = 'Bevestiging en nakijken';
$string['importcurrentstage8'] = 'Importeer';
$string['importfile'] = 'Importeer een back-upbestand';
$string['importgeneralduplicateadminallowed'] = 'Admin-conflict oplossen toestaan';
$string['importgeneralduplicateadminallowed_desc'] = 'Als de site een gebruiker heeft met als gebruikersnaam \'admin\', dan kan het terugzetten van een backup-bestand waarin een account zit met gebruikersnaam \'admin\' een conflict veroorzaken. Als deze instelling ingeschakeld is, dan zal het conflict opgelost worden door de gebruikersnaam in het backup-bestand te wijzigen naar \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Maximaal aantal cursussen in de lijst om te importeren';
$string['importgeneralmaxresults_desc'] = 'Dit controleert het aantal cursussen in de lijst tijdens de eerste stap van het importproces.';
$string['importgeneralsettings'] = 'Algemene standaardwaarden bij importeren';
$string['importsettings'] = 'Algemene importinstellingen';
$string['importsuccess'] = 'Importeren klaar. Klik op ga verder om terug te keren naar de cursus';
$string['includeactivities'] = 'Mee back-uppen:';
$string['includeditems'] = 'Ingesloten items:';
$string['includefilereferences'] = 'Bestandsverwijizingen naar externe inhoud';
$string['includesection'] = 'Sectie {$a}';
$string['includeuserinfo'] = 'Gebruikersinformatie';
$string['jumptofinalstep'] = 'Ga naar laatste stap';
$string['keep'] = 'Bijhouden';
$string['locked'] = 'Geblokkeerd';
$string['lockedbyconfig'] = 'Deze instelling is geblokkeerd door de standaard back-upinstellingen';
$string['lockedbyhierarchy'] = 'Geblokkeerd door afhankelijkheden';
$string['lockedbypermission'] = 'Je hebt onvoldoende rechten om deze instelling te wijzigen';
$string['loglifetime'] = 'Bewaar logs';
$string['managefiles'] = 'Beheer back-upbestanden';
$string['mergerestoredefaults'] = 'Standaardinstellingen terugzetten bij het samenvoegen met een andere cursus';
$string['missingfilesinpool'] = 'Sommige bestanden konden niet bewaard worden tijdens deze back-up. Het zal daarom niet mogelijk zijn om ze terug te zetten.';
$string['module'] = 'Module';
$string['moodleversion'] = 'Moodle versie';
$string['morecoursesearchresults'] = 'Meer dan {$a} cursussen gevonden. De eerste {$a} resultaten worden getoond.';
$string['moreresults'] = 'Teveel zoekresultaten. Maak je zoekterm meer specifiek.';
$string['nomatchingcourses'] = 'Er zijn geen cursussen om te tonen';
$string['norestoreoptions'] = 'Er zijn geen categorieën of bestaande cursussen waarnaar je kan terugzetten.';
$string['originalwwwroot'] = 'URL van de back-up';
$string['overwrite'] = 'Overschrijven';
$string['preparingdata'] = 'Data voorbereiden';
$string['preparingui'] = 'Tonen van de pagina voorbereiden';
$string['previousstage'] = 'Vorige';
$string['qcategory2coursefallback'] = 'De vragencategorie "{$a->name}" die oorspronkelijk op systeem/cursus categorie context in het back-up bestand zat, zal in de cursus context gemaakt worden bij het terugzetten.';
$string['qcategorycannotberestored'] = 'De vragencategorie "{$a->name}" kan tijdens het terugzetten niet gemaakt worden';
$string['question2coursefallback'] = 'De vragencategorie "{$a->name}" die oorspronkelijk op systeem/cursus categorie context in het back-up bestand zat, zal in de cursus context gemaakt worden bij het terugzetten;';
$string['questionegorycannotberestored'] = 'De vragen "{$a->name}" kunnen niet gemaakt worden tijdens het terugzetten.';
$string['replacerestoredefaults'] = 'Herstel standaardinstellingen wanneer er teruggezet wordt in een andere cursus waarbij inhoud verwijderd wordt';
$string['restoreactivity'] = 'Activiteit terugzetten';
$string['restorecourse'] = 'Cursus terugzetten';
$string['restorecoursesettings'] = 'Cursusinstellingen';
$string['restoreexecutionsuccess'] = 'De cursus is met succes teruggezet, klikken op de onderstaande knop brengt je naar de cursus die je teruggezet hebt.';
$string['restorefileweremissing'] = 'Sommige bestanden konden niet teruggezet worden omdat ze ontbraken in de back-up.';
$string['restorenewcoursefullname'] = 'Nieuwe cursusnaam';
$string['restorenewcourseshortname'] = 'Nieuwe korte naam voor cursus';
$string['restorenewcoursestartdate'] = 'Nieuwe start datum';
$string['restorerolemappings'] = 'Rolkoppelingen terugzetten';
$string['restorerootsettings'] = 'Instellingen terugzetten';
$string['restoresection'] = 'Sectie terugzetten';
$string['restorestage1'] = 'Bevestig';
$string['restorestage16'] = 'Bekijk';
$string['restorestage16action'] = 'Zet terug';
$string['restorestage1action'] = 'Volgende';
$string['restorestage2'] = 'Bestemming';
$string['restorestage2action'] = 'Volgende';
$string['restorestage32'] = 'Proces';
$string['restorestage32action'] = 'Ga verder';
$string['restorestage4'] = 'Instellingen';
$string['restorestage4action'] = 'Volgende';
$string['restorestage64'] = 'Volledig';
$string['restorestage64action'] = 'Ga verder';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Volgende';
$string['restoretarget'] = 'Terugzetten naar';
$string['restoretocourse'] = 'Terugzetten naar cursus:';
$string['restoretocurrentcourse'] = 'Zet terug in deze cursus';
$string['restoretocurrentcourseadding'] = 'Voeg de back-up cursus in deze cursus';
$string['restoretocurrentcoursedeleting'] = 'Verwijder de inhoud van deze cursus en zet dan terug';
$string['restoretoexistingcourse'] = 'Zet terug in een bestaande cursus';
$string['restoretoexistingcourseadding'] = 'Voeg samen met een bestaande cursus';
$string['restoretoexistingcoursedeleting'] = 'Verwijder de inhoud van de bestaande cursus en zet dan terug';
$string['restoretonewcourse'] = 'Zet terug als nieuwe cursus';
$string['restoringcourse'] = 'Cursus aan het terugzetten';
$string['restoringcourseshortname'] = 'terugzetten';
$string['rootenrolmanual'] = 'Zet terug als manuele aanmeldingen';
$string['rootsettingactivities'] = 'Activiteiten en bronnen invoegen';
$string['rootsettinganonymize'] = 'Maak gebruikersinfo anoniem';
$string['rootsettingbadges'] = 'Badges mee opnemen';
$string['rootsettingblocks'] = 'Blokken invoegen';
$string['rootsettingcalendarevents'] = 'Kalendergebeurtenissen mee opnemen';
$string['rootsettingcomments'] = 'Commentaar invoegen';
$string['rootsettingcompetencies'] = 'Competenties mee opnemen';
$string['rootsettingenrolments'] = 'Aanmeldingsmethoden mee opnemen';
$string['rootsettingenrolments_always'] = 'Ja, altijd';
$string['rootsettingenrolments_never'] = 'Nee, zet gebruikers terug als manuele aanmeldingen';
$string['rootsettingenrolments_withusers'] = 'Ja, maar enkel als gebruikers mee opgenomen zijn';
$string['rootsettingfilters'] = 'Filters invoegen';
$string['rootsettinggradehistories'] = 'Cijfergeschiedenis invoegen';
$string['rootsettinggroups'] = 'Groepen en groeperingen mee opnemen';
$string['rootsettingimscc1'] = 'Converteer naar IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Converteer naar IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = 'Cursuslogs invoegen';
$string['rootsettingquestionbank'] = 'Vragenpool ook backuppen';
$string['rootsettingroleassignments'] = 'Roltoewijzingen van gebruikers invoegen';
$string['rootsettings'] = 'Back-up-instellingen';
$string['rootsettingusers'] = 'Aangemelde gebruikers invoegen';
$string['rootsettinguserscompletion'] = 'Details over voltooien van gebruikers invoegen';
$string['sectionactivities'] = 'Activiteiten';
$string['sectioninc'] = 'Ingevoegd in back-up (geen gebruikersinformatie)';
$string['sectionincanduser'] = 'In back-up samen met gebruikersinformatie';
$string['selectacategory'] = 'Selecteer een categorie';
$string['selectacourse'] = 'Selecteer een cursus';
$string['setting_course_fullname'] = 'Cursusnaam';
$string['setting_course_shortname'] = 'Cursus korte naam';
$string['setting_course_startdate'] = 'Cursus startdatum';
$string['setting_keep_groups_and_groupings'] = 'Huidige groepen en groeperingen behouden';
$string['setting_keep_roles_and_enrolments'] = 'Huidige rollen en aanmeldingen behouden';
$string['setting_overwrite_conf'] = 'Overschrijf cursusconfiguratie';
$string['setting_overwrite_course_fullname'] = 'Overschrijf volledige naam van de cursus';
$string['setting_overwrite_course_shortname'] = 'Overschrijf cursus korte naam';
$string['setting_overwrite_course_startdate'] = 'Overschrijf cursus startdatum';
$string['showtypes'] = 'Toon type-opties';
$string['sitecourseformatwarning'] = 'Dit is een back-up voor de startpagina. Merk op dat die enkel op de startpagina kan teruggezet worden.';
$string['skiphidden'] = 'Sla verborgen cursussen over';
$string['skiphiddenhelp'] = 'Kies om verborgen cursussen al dan niet over te slaan bij een back-up';
$string['skipmodifdays'] = 'Sla cursussen over die niet gewijzigd zijn sinds';
$string['skipmodifdayshelp'] = 'Kies om cursussen over te slaan die niet gewijzigd zijn sinds een bepaald aantal dagen.';
$string['skipmodifprev'] = 'Sla cursussen over die niet gewijzigd zijn sinds de vorige back-up';
$string['skipmodifprevhelp'] = 'Kies om al dan niet cursussen over te slaan die niet gewijzigd zijn sinds de vorige back-up. Hiervoor moeten logs ingeschakeld zijn.';
$string['storagecourseandexternal'] = 'Cursusback-ups in cursusbestandszone en alternatieve map';
$string['storagecourseonly'] = 'Cursusback-ups in cursusbestandszone';
$string['storageexternalonly'] = 'Alternatieve map voor automatische back-ups';
$string['timetaken'] = 'Gebruikte tijd';
$string['title'] = 'Titel';
$string['totalcategorysearchresults'] = 'Totaal aantal categorieën: {$a}';
$string['totalcoursesearchresults'] = 'Totaal aantal cursussen: {$a}';
$string['unnamedsection'] = 'Sectie zonder naam';
$string['userinfo'] = 'Gebruikersinfo';
