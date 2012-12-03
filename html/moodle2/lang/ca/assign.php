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
 * Strings for component 'assign', language 'ca', branch 'MOODLE_23_STABLE'
 *
 * @package   assign
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Afegeix tramesa';
$string['allowsubmissions'] = 'Permet a l\'usuari continuar realitzant trameses per a aquesta tasca.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Els detalls de la tasca i el formulari de la tramesa estaran disponibles des de <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Permet trameses des de';
$string['allowsubmissionsfromdate_help'] = 'Si està activat, l\'estudiantat no podrà fer trameses abans d\'aquesta data. Si està desactivat, l\'alumnat podrà començar la tramesa immediatament.';
$string['allowsubmissionsfromdatesummary'] = 'Aquesta tasca acceptarà trameses des de <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Permet canvis en la tramesa';
$string['alwaysshowdescription'] = 'Mostra sempre la descripció';
$string['alwaysshowdescription_help'] = 'Si està desactivat, la descripció de la tasca de dalt només serà visible a l\'estudiantat a partir de la data "Permet trameses des de".';
$string['assign:addinstance'] = 'Afegeix una nova tasca';
$string['assign:exportownsubmission'] = 'Exporta les trameses pròpies';
$string['assignfeedback'] = 'Connector de retroacció';
$string['assignfeedbackpluginname'] = 'Connector de retroacció';
$string['assign:grade'] = 'Qualificar tasca';
$string['assignmentisdue'] = 'La tasca ha vençut';
$string['assignmentmail'] = '{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca \'{$a->assignment}\' Podeu veure-la adjunta a la vostra tramesa de la tasca:

{$a->url}';
$string['assignmentmailhtml'] = '{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca<i>\'{$a->assignment}\'</i> <br /><br /> Podeu veure-la adjunta a la vostra <a href="{$a->url}">tramesa de la tasca</a>.';
$string['assignmentmailsmall'] = '{$a->grader} ha enviat una retroacció per a la vostra tramesa de la tasca \'{$a->assignment}\' Podeu veure-la adjunta a la vostra tramesa';
$string['assignmentname'] = 'Nom de la tasca';
$string['assignmentplugins'] = 'Connectors de tasca';
$string['assignmentsperpage'] = 'Tasques per pàgina';
$string['assignsubmission'] = 'Connector de tramesa';
$string['assignsubmissionpluginname'] = 'Connector de tramesa';
$string['assign:submit'] = 'Trametre tasca';
$string['assign:view'] = 'Veure tasca';
$string['availability'] = 'Disponibilitat';
$string['backtoassignment'] = 'Torna a la tasca';
$string['batchoperationconfirmlock'] = 'Bloca totes les trameses seleccionades';
$string['batchoperationconfirmreverttodraft'] = 'Reverteix les trameses seleccionades a esborrany?';
$string['batchoperationconfirmunlock'] = 'Desbloca totes les trameses seleccionades?';
$string['batchoperationlock'] = 'bloca les trameses';
$string['batchoperationreverttodraft'] = 'reverteix les trameses a esborrany';
$string['batchoperationsdescription'] = 'Amb la selecció...';
$string['batchoperationunlock'] = 'desbloca les trameses';
$string['comment'] = 'Comentari';
$string['configshowrecentsubmissions'] = 'Tothom pot veure les notificacions de trameses en els informes d\'activitat recent.';
$string['confirmbatchgradingoperation'] = 'Esteu segurs que voleu {$a->operation} per als {$a->count} estudiants?';
$string['confirmsubmission'] = 'Esteu segurs que voleu trametre el vostre treball per a qualificar? Ja no podreu realitzar més canvis.';
$string['conversionexception'] = 'No s\'ha pogut convertir la tasca. L\'excepció fou: {$a}.';
$string['couldnotconvertgrade'] = 'No s\'ha pogut convertir la qualificació de la tasca de l\'usuari {$a}.';
$string['couldnotconvertsubmission'] = 'No s\'ha pogut convertir la tramesa de la tasca de l\'usuari {$a}.';
$string['couldnotcreatecoursemodule'] = 'No s\'ha pogut crear el mòdul de curs.';
$string['couldnotcreatenewassignmentinstance'] = 'No s\'ha pogut crear una instància nova de la tasca.';
$string['couldnotfindassignmenttoupgrade'] = 'No s\'ha pogut trobar una instància antiga de la tasca per a actualitzar.';
$string['currentgrade'] = 'Qualificació actual en el llibre de qualificacions';
$string['defaultplugins'] = 'Paràmetres per defecte de la tasca';
$string['defaultplugins_help'] = 'Aquests paràmetres defineixen els valors per defecte per a totes les tasques noves.';
$string['deletepluginareyousure'] = 'Suprimeix connector de tasca {$a}: esteu segurs?';
$string['deletepluginareyousuremessage'] = 'Esteu apunt de suprimir completament el connector de tasca {$a}. Açò suprimirà completament qualsevol cosa en la base de dades associada amb aquest connector de tasca. Esteu SEGURS que voleu continuar?';
$string['deletingplugin'] = 'S\'està suprimint el connector {$a}.';
$string['description'] = 'Descripció';
$string['downloadall'] = 'Descarrega totes les trameses';
$string['duedate'] = 'Data de venciment';
$string['duedate_help'] = 'Açò és quan la tasca venç. Es permet retard en la tramesa, però qualsevol tramesa enviada després d\'aquesta data es marcarà com a retard.';
$string['duedateno'] = 'Sense data de venciment';
$string['duedatereached'] = 'La data de venciment de la tasca ja ha passat';
$string['duedatevalidation'] = 'La data de venciment ha de ser posterior a la data de trameses permeses des de.';
$string['editaction'] = 'Accions...';
$string['editsubmission'] = 'Edita la meva tramesa';
$string['enabled'] = 'Habilitat';
$string['errornosubmissions'] = 'No hi ha tasques per baixar';
$string['errorquickgradingvsadvancedgrading'] = 'Les qualificacions no s\'han desat perquè aquesta tasca està emprant ara qualificacions avançades';
$string['errorrecordmodified'] = 'Les qualificacions no s\'han desat perquè algú ha modificat un o més registres abans que carregàreu la pàgina';
$string['feedback'] = 'Retroacció';
$string['feedbackavailablehtml'] = '{$a->username} ha enviat una retroacció per a la vostra tramesa de la tasca \'<i>{$a->assignment}</i>\'<br /><br />  Podeu veure-la adjunta a la vostra <a href="{$a->url}">tramesa de la tasca</a>.';
$string['feedbackavailablesmall'] = '{$a->username} ha donat retroacció per a la tasca {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} ha enviat una retroacció per a la vostra tramesa de la tasca \'{$a->assignment}\'
Podeu veure-la adjunta a la vostra tramesa de la tasca: {$a->url}';
$string['feedbackplugin'] = 'Connector de retroacció';
$string['feedbackpluginforgradebook'] = 'El connector de retroacció posarà comentaris en el butlletí de qualificacions.';
$string['feedbackpluginforgradebook_help'] = 'Només un connector de retroacció de tasca pot posar retroacció en el butlletí de qualificacions.';
$string['feedbackplugins'] = 'Connectors de retroacció';
$string['feedbacksettings'] = 'Paràmetres de retroacció';
$string['filesubmissions'] = 'Trameses de fitxer';
$string['filter'] = 'Filtra';
$string['filternone'] = 'No filtres';
$string['filterrequiregrading'] = 'Requereix qualificació';
$string['filtersubmitted'] = 'S\'ha tramès';
$string['gradeabovemaximum'] = 'La qualificació ha de ser menor o igual que {$a}.';
$string['gradebelowzero'] = 'La qualificació ha de ser major o igual que zero.';
$string['graded'] = 'Qualificada';
$string['gradedby'] = 'Qualificat per';
$string['gradedon'] = 'Qualificat el';
$string['gradeoutof'] = 'Qualificació sobre {$a}';
$string['gradeoutofhelp'] = 'Qualificació';
$string['gradeoutofhelp_help'] = 'Introduïu la qualificació per a la tramesa de l\'estudiant ací. Podeu incloure decimals.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} ha actualitzat la tramesa  de la tasca <i>"{$a->assignment}" a les {$a->timeupdated}</i>.<br /><br />
Està <a href="{$a->url}">disponible al web</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} ha actualitzat la seva tramesa per a la tasca {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} ha actualitzat la tramesa  de la tasca "{$a->assignment}" a les {$a->timeupdated}

Està disponible aquí:

{$a->url}';
$string['gradestudent'] = 'Qualifica l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['grading'] = 'Qualificació';
$string['gradingoptions'] = 'Opcions';
$string['gradingstatus'] = 'Estat de la qualificació';
$string['gradingstudentprogress'] = 'Qualificació de l\'estudiant {$a->index} de {$a->count}';
$string['gradingsummary'] = 'Resum de la qualificació';
$string['hideshow'] = 'Mostra/Oculta';
$string['instructionfiles'] = 'Fitxers amb instruccions';
$string['invalidfloatforgrade'] = 'La qualificació donada no es comprèn: {$a}';
$string['invalidgradeforscale'] = 'La qualificació proporcionada no era vàlida per a l\'escala actual';
$string['lastmodifiedgrade'] = 'Darrera modificació (qualificació)';
$string['lastmodifiedsubmission'] = 'Darrera modificació (tramesa)';
$string['locksubmissionforstudent'] = 'Impedeix més trameses de l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Bloca les trameses';
$string['manageassignfeedbackplugins'] = 'Gestiona els connectors de retroacció de la tasca';
$string['manageassignsubmissionplugins'] = 'Gestiona els connectors de tramesa de la tasca';
$string['messageprovider:assign_notification'] = 'Notificacions de la tasca';
$string['modulename'] = 'Tasca';
$string['modulename_help'] = 'El mòdul d\'activitat tasca permet al professorat comunicar les instruccions, recollir els treballs i proporcionar qualificacions i retroacció.

L\'estudiantat pot trametre qualsevol contingut digital (fitxers), com ara documents de processador de textos, fulls de càlcul, imatges o clips d\'àudio i vídeo. Alternativament, o a més a més, la tasca pot requerir que l\'estudiantat teclegi el text directament a l\'editor de text. Una tasca també pot utilitzar-se per recordar a l\'estudiantat les tasques del "món real" que han de completar fóra de línia, com ara obres d\'art, i per tant que no requereixen de cap tipus de contingut digital.

En la revisió de les tasques, el professorat pot deixar comentaris i pujar fitxers de retroacció, com ara trameses corregides de l\'estudiantat, documents amb comentaris o retroacció d\'àudio parlat. Les tasques poden qualificar-se amb una escala numèrica o personalitzada o amb un mètode de qualificació avançada, com ara una rúbrica. Les qualificacions finals es registren en el butlletí de qualificacions.';
$string['modulenameplural'] = 'Tasques';
$string['mysubmission'] = 'La meva tramesa:';
$string['newsubmissions'] = 'Tasques trameses';
$string['nofiles'] = 'No hi ha fitxers.';
$string['nograde'] = 'No hi ha qualificació.';
$string['noonlinesubmissions'] = 'Aquesta tasca no requereix que trameteu res en línia.';
$string['nosavebutnext'] = 'Següent';
$string['nosubmission'] = 'No s\'ha tramés res per a aquesta tasca';
$string['notgraded'] = 'Sense qualificació';
$string['notgradedyet'] = 'No s\'ha qualificat encara';
$string['notifications'] = 'Notificacions';
$string['notsubmittedyet'] = 'No s\'ha tramès encara';
$string['nousersselected'] = 'Cap usuari seleccionat';
$string['numberofdraftsubmissions'] = 'Esborranys';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmissionsneedgrading'] = 'Necessiten qualificació';
$string['numberofsubmittedassignments'] = 'S\'han tramès';
$string['offline'] = 'No es requereix cap tramesa en línia';
$string['outlinegrade'] = 'Qualificació: {$a}';
$string['overdue'] = '<font color="red"> {$a} ha enviat la tasca amb retard</font>';
$string['page-mod-assign-view'] = 'Pàgina principal del mòdul de tasques';
$string['page-mod-assign-x'] = 'Pàgina de qualsevol mòdul de tasques';
$string['pluginadministration'] = 'Administració de la tasca';
$string['pluginname'] = 'Tasca';
$string['preventlatesubmissions'] = 'Impedeix trameses fora de termini';
$string['preventlatesubmissions_help'] = 'Si està activat, l\'estudiantat no podrà fer la tramesa  després de la data de venciment. Si està desactivat,  l\'estudiantat podrà trametre les tasques després de la data de venciment.';
$string['preventsubmissions'] = 'Impedeix que l\'usuari faci més trameses per a aquesta tasca.';
$string['preventsubmissionsshort'] = 'Impedeix canvis en la tramesa';
$string['previous'] = 'Anterior';
$string['quickgrading'] = 'Qualificació ràpida';
$string['quickgradingchangessaved'] = 'S\'han desat els canvis en la qualificació';
$string['quickgrading_help'] = 'La qualificació ràpida us permet assignar qualificacions (i competències) directament en la taula de trameses. La qualificació ràpida no és compatible amb la qualificació avançada i no es recomana quan qualifiquen diverses persones.';
$string['quickgradingresult'] = 'Qualificació ràpida';
$string['reverttodraft'] = 'Reverteix la tramesa a l\'estat d\'esborrany.';
$string['reverttodraftforstudent'] = 'Reverteix la tramesa a esborrany per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraftshort'] = 'Reverteix la tramesa a esborrany.';
$string['reviewed'] = 'Revisada';
$string['saveallquickgradingchanges'] = 'Desa tots els canvis de la qualificació ràpida';
$string['savechanges'] = 'Desa els canvis';
$string['savenext'] = 'Desa i mostra el següent';
$string['selectlink'] = 'Seleccioneu...';
$string['sendlatenotifications'] = 'Notifica a qui qualifica el retard en les trameses';
$string['sendlatenotifications_help'] = 'Si està activat, qui qualifica (normalment, el professorat) rep un missatge cada vegada que un estudiant envia un treball amb retard. Es poden configurar els mètodes de missatgeria.';
$string['sendnotifications'] = 'Notifica de les trameses a qui qualifica';
$string['sendnotifications_help'] = 'Si està activat, qui qualifica (normalment, el professorat) rep un missatge cada vegada que un estudiant envia un treball aviat, a temps o amb retard. Es poden configurar els mètodes de missatgeria.';
$string['sendsubmissionreceipts'] = 'Envia la confirmació de la tramesa a l\'estudiantat';
$string['sendsubmissionreceipts_help'] = 'Aquest canvi permetrà la confirmació de la tramesa per a l\'estudiantat. L\'estudiantat rebrà una notificació cada vegada que trameti una tasca amb èxit.';
$string['settings'] = 'Paràmetres de la tasca';
$string['showrecentsubmissions'] = 'Mostra les trameses recents';
$string['submission'] = 'Tramesa';
$string['submissiondrafts'] = 'Requereix que l\'estudiantat faci clic al botó Tramet';
$string['submissiondrafts_help'] = 'Si està activat, l\'estudiantat haurà de fer clic al botó Tramet per a establir la seva tramesa com a final. Això permet a l\'estudiantat mantenir una versió d\'esborrany de la tramesa en el sistema.';
$string['submissionnotready'] = 'Aquesta tasca no està preparada per a trametre\'s:';
$string['submissionplugins'] = 'Connectors de tramesa';
$string['submissionreceipthtml'] = 'Heu realitzat una tramesa de la tasca  \'<i>{$a->assignment}</i>\'<br /><br />Podeu veure l\'estat de la vostra <a href="{$a->url}">tramesa de la tasca</a>.';
$string['submissionreceipts'] = 'Envia confirmacions de la tramesa';
$string['submissionreceiptsmall'] = 'Heu realitzat la tramesa de la tasca {$a->assignment}';
$string['submissionreceipttext'] = 'Heu realitzat una tramesa de la tasca \'{$a->assignment}\'
Podeu veure l\'estat de la vostra tramesa de la tasca: {$a->url}';
$string['submissions'] = 'Trameses';
$string['submissionsclosed'] = 'Trameses tancades';
$string['submissionsettings'] = 'Paràmetres de la tramesa';
$string['submissionslocked'] = 'Aquesta tasca no accepta trameses';
$string['submissionslockedshort'] = 'No es permeten canvis en la tramesa';
$string['submissionsnotgraded'] = 'Trameses sense qualificar: {$a}';
$string['submissionstatus'] = 'Estat de la tramesa';
$string['submissionstatus_'] = 'No hi ha tramesa';
$string['submissionstatus_draft'] = 'Esborrany (no tramès)';
$string['submissionstatusheading'] = 'Estat de la tramesa';
$string['submissionstatus_marked'] = 'Qualificada';
$string['submissionstatus_new'] = 'Nova tramesa';
$string['submissionstatus_submitted'] = 'S\'ha tramès per a qualificar';
$string['submitaction'] = 'Tramet';
$string['submitassignment'] = 'Trametre tasca';
$string['submitassignment_help'] = 'Un cop s\'haja tramès la tasca no podreu fer més canvis';
$string['submitted'] = 'S\'ha tramès';
$string['submittedearly'] = 'La tasca s\'ha tramès {$a} aviat';
$string['submittedlate'] = 'La tasca s\'ha tramès {$a} tard';
$string['submittedlateshort'] = '{$a} tard';
$string['textinstructions'] = 'Instruccions de la tasca';
$string['timemodified'] = 'Darrera modificació';
$string['timeremaining'] = 'Temps restant';
$string['unlocksubmissionforstudent'] = 'Permet trameses per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Desbloca les trameses';
$string['updategrade'] = 'Actualitza la qualificació';
$string['updatetable'] = 'Desa i actualitza la taula';
$string['upgradenotimplemented'] = 'No s\'ha implementat l\'actualització per al connector ({$a->type} {$a->subtype})';
$string['viewfeedback'] = 'Visualitza la retroacció';
$string['viewfeedbackforuser'] = 'Visualitza la retroacció de l\'usuari: {$a}';
$string['viewfullgradingpage'] = 'Obri la pàgina de qualificació completa per a proporcionar retroacció';
$string['viewgradebook'] = 'Visualitza el butlletí de qualificacions';
$string['viewgrading'] = 'Visualitza/Qualifica totes les trameses';
$string['viewgradingformforstudent'] = 'Visualitza la pàgina de qualificació per a l\'estudiant: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Visualitza la pròpia pàgina de tramesa de la tasca';
$string['viewownsubmissionstatus'] = 'Visualitza la pròpia pàgina d\'estat de la tramesa';
$string['viewsubmission'] = 'Visualitza la tramesa';
$string['viewsubmissionforuser'] = 'Visualitza la tramesa per a l\'usuari: {$a}';
$string['viewsubmissiongradingtable'] = 'Visualitza la taula de qualificacions de la tramesa';