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
 * Strings for component 'data', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   data
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ekintza';
$string['add'] = 'Gehitu sarrera';
$string['addcomment'] = 'Gehitu iruzkina';
$string['addentries'] = 'Gehitu sarrerak';
$string['addtemplate'] = 'Gehitu txantiloia';
$string['advancedsearch'] = 'Bilaketa aurreratua';
$string['allowcomments'] = 'Iruzkinak gehitu daitezke';
$string['alttext'] = 'Ordezko testua';
$string['approvalstatus'] = 'Onarpenaren egoera';
$string['approve'] = 'Onartu';
$string['approved'] = 'Onartuta';
$string['areacontent'] = 'Eremuak';
$string['ascending'] = 'Goranzkoa';
$string['asearchtemplate'] = 'Bilaketa aurreraturako txantiloia';
$string['atmaxentry'] = 'Onartutako sarrera kopuru handiena erantsi duzu!';
$string['authorfirstname'] = 'Egilearen izena';
$string['authorlastname'] = 'Egilearen deitura';
$string['autogenallforms'] = 'Lehenetsitako txantiloi guztiak sortu';
$string['autolinkurl'] = 'URLa automatikoki estekatu';
$string['availablefromdate'] = 'Noiztik eskuragarri';
$string['availabletags'] = 'Etiketa eskuragarriak';
$string['availabletags_help'] = 'Markak txantiloian dauden gakoak dira. Sarrerak editatu edo ikusi ondoren eremu edo botoiek ordezkatuko dituzte.

Eremuen formatua [[eremuaren izena]] da. Bestelako etiketen formatua ##etiketa## da.

Soilik "Eskuragarri dauden etiketak" zerrendan dauden etiketak erabil daitezke txantiloi honetan.';
$string['availabletodate'] = 'Noiz arte eskuragarri';
$string['availabletodatevalidation'] = 'Eskuragarri egoteko azken eguna ezin da hasiera baino lehenagokoa izan.';
$string['blank'] = 'Hutsik';
$string['buttons'] = 'Ekintzak';
$string['bynameondate'] = 'Egilea eta data: {$a->name} - {$a->date}';
$string['calendarend'] = '{$a}-(r)en itxiera-data:';
$string['calendarstart'] = '{$a}-(r)en hasiera-data';
$string['cancel'] = 'Utzi';
$string['cannotaccesspresentsother'] = 'Ez duzu beste erabiltzaile batzuen aurretiko ezarpenetara sartzeko baimenik';
$string['cannotadd'] = 'Ezin da sarrerarik gehitu';
$string['cannotdeletepreset'] = 'Errorea aurretiko ezarpena ezabatzean!';
$string['cannotoverwritepreset'] = 'Errorea aurretiko ezarpenak gainidaztean';
$string['cannotunziptopreset'] = 'Ezin izan da aurretiko ezarpenen karpeta deskonprimatu';
$string['checkbox'] = 'Aukera anitzeko laukitxoa';
$string['chooseexportfields'] = 'Aukeratu esportatu nahi duzun eremua';
$string['chooseexportformat'] = 'Aukeratu zein formatuta esportatu nahi duzun hona:';
$string['chooseorupload'] = 'Aukeratu fitxategia';
$string['columns'] = 'zutabeak';
$string['comment'] = 'Iruzkina';
$string['commentdeleted'] = 'Iruzkina ezabatu da';
$string['commentempty'] = 'Iruzkina hutsik zegoen';
$string['comments'] = 'Iruzkinak';
$string['commentsaved'] = 'Iruzkina gorde da';
$string['commentsn'] = '{$a} iruzkin';
$string['commentsoff'] = 'Iruzkinak ez daude gaituta';
$string['completionentries'] = 'Behartu sarrerak';
$string['completionentriescount'] = 'Sarrera-kopurua';
$string['completionentriesdesc'] = 'Beharrezko gutxieneko sarrera-kopurua: {$a}';
$string['configenablerssfeeds'] = 'Honek datu-base osorako RSS jarioen aukera indarrean jarriko du. Datu-base bakoitzeko RSS jarioak eskuz gaitu beharko dituzu.';
$string['confirmdeletefield'] = 'Eremu hau ezabatzear zaude, ziur al zaude?';
$string['confirmdeleterecord'] = 'Ziur al zaude sarrera hau ezabatu nahi duzula?';
$string['confirmdeleterecords'] = 'Ziur al zaude sarrera hauek ezabatu nahi dituzula?';
$string['csstemplate'] = 'CSS txantiloia';
$string['csvfailed'] = 'Ezin dira datu gordinak irakurri CSV fitxategi honetatik';
$string['csvfile'] = 'CSV fitxategia';
$string['csvimport'] = 'CSV fitxategia inportatu';
$string['csvimport_help'] = '<p>CSVk zera esan nahi du: Comma-Separated-Values (kakotxez banatutako baloreak) eta testu-trukaketarako ohiko formatua da.</p>
<p>Formatua testu laukoa da eta lehenengo lerroan eremuen izenak azaltzen dira. Ondoren datu guztiak datoz, bat lerroko.</p>
<p>Kakotxek eremuak mugatzen dituzte eta eremu-bukaerako lehenetsitako karaktererik ez dago (eremu-bukaerak sarrera bakoitza mugatzen duten karaktereak dira).</p>
<p>Sarrerak lerrotan banatu behar dira (normalean, zure editorearen RETURN edo ENTER sakatu beharko duzu). Tabuladoreak adierazteko t eta lerro berrietarako n erabil dezakezu. </p>
<p>Adibidez:</p>
<pre>
  izena,altuera,pisua
  Kai,180cm,80kg
  Kim,170cm,60kg
  Koo,190cm,20kg
</pre>
<p>Kontuz! Baliteke eremu-formatu guztiak onargarriak ez izatea.</p>';
$string['csvwithselecteddelimiter'] = '<acronym title="Comma Separated Values">CSV</acronym> testua eta aukeratutako banatzailea';
$string['data:addinstance'] = 'Gehitu datu-base berria';
$string['data:approve'] = 'Onartu eta bertan behera utzi onartutako sarrerak';
$string['data:comment'] = 'Iruzkinak idatzi';
$string['data:exportallentries'] = 'Datu-baseko sarrera guztiak esportatu ';
$string['data:exportentry'] = 'Datu-baseko sarrera bat esportatu ';
$string['data:exportownentry'] = 'Datu-baseko norberaren sarrera esportatu ';
$string['data:exportuserinfo'] = 'Eportatu erabiltzailearen infomazioa';
$string['data:managecomments'] = 'Iruzkinak kudeatu';
$string['data:manageentries'] = 'Sarrerak kudeatu';
$string['data:managetemplates'] = 'Txantiloiak kudeatu';
$string['data:manageuserpresets'] = 'Txantiloien aurretiko ezarpenak kudeatu';
$string['data:rate'] = 'Sarrerak kalifikatu';
$string['data:readentry'] = 'Sarrerak irakurri';
$string['data:view'] = 'Ikusi datu-basearen aktibitatea';
$string['data:viewallratings'] = 'Erabiltzaileek emandako kalifikazio guztiak ikusi';
$string['data:viewalluserpresets'] = 'Erabiltzaile guztien aurretiko ezarpenak ikusi';
$string['data:viewanyrating'] = 'Besteren batek denera jasotako kalifikazioak ikusi';
$string['data:viewentry'] = 'Sarrerak ikusi';
$string['data:viewrating'] = 'Denera jasotako kalifikazioak ikusi';
$string['data:writeentry'] = 'Sarrerak idatzi';
$string['date'] = 'Data';
$string['dateentered'] = 'Sartutako dataren arabera';
$string['defaultfielddelimiter'] = '(koma da lehenetsitako karakterea)';
$string['defaultfieldenclosure'] = '(ez dago lehenetsitakorik)';
$string['defaultsortfield'] = 'Lehenetsitako ordenatze-eremua';
$string['delcheck'] = 'Ezabaketa masiborako laukitxoa';
$string['delete'] = 'Ezabatu';
$string['deleteallentries'] = 'Sarrera guztiak ezabatu';
$string['deletecomment'] = 'Ziur al zaude iruzkin hau ezabatu nahi duzula?';
$string['deleted'] = 'Ezabatuta';
$string['deletefield'] = 'Eremua ezabatu da';
$string['deletenotenrolled'] = 'Matrikulatu gabeko erabiltzaileen sarrerak ezabatu';
$string['deletewarning'] = 'Ziur al zaude aurretiko ezarpen hau ezabatu nahi duzula?';
$string['descending'] = 'Beheranzkoa';
$string['directorynotapreset'] = '{$a->directory} Aurretiko ezarpenik ez: galdutako fitxategiak: {$a->missing_files}';
$string['disapprove'] = 'Onarpena desegin';
$string['download'] = 'Jaitsi';
$string['edit'] = 'Editatu';
$string['editcomment'] = 'Iruzkina editatu';
$string['editentry'] = 'Sarrera editatu';
$string['editordisable'] = 'Editorea desgaitu';
$string['editorenable'] = 'Editorea gaitu';
$string['emptyadd'] = 'Txantiloia eranstekoa hutsik dago, lehenetsitako formularioa sortzen...';
$string['emptyaddform'] = 'Ez duzu eremuren bat bete!';
$string['enabletemplateeditorcheck'] = 'Ziur zaude editorea gaitu nahi duzula? Honek edukia aldatzea eragin dezake txantiloia gordetzean.';
$string['entries'] = 'Sarrerak';
$string['entrieslefttoadd'] = '{$a->entriesleft} sarrera gehiago gehitu behar dituzu jarduera hau osatzeko.';
$string['entrieslefttoaddtoview'] = '{$a->entrieslefttoview} sarrera gehiago gehitu behar dituzu beste partaideen sarrerak ikusi ahal izateko.';
$string['entry'] = 'Sarrera';
$string['entrysaved'] = 'Zure sarrera gorde egin da';
$string['errormustbeteacher'] = 'Orri hau erabiltzeko irakasle izan behar duzu!';
$string['errormustsupplyvalue'] = 'Hemen balio bat eman behar duzu.';
$string['errorpresetexists'] = 'Dagoeneko bada aurretiko ezarpen bat aukeratutako izena duena';
$string['eventfieldcreated'] = 'Eremua sortua';
$string['eventfielddeleted'] = 'Eremua ezabatua';
$string['eventfieldupdated'] = 'Eremua eguneratua';
$string['eventrecordcreated'] = 'Erregistroa sortua';
$string['eventrecorddeleted'] = 'Erregistroa ezabatua';
$string['eventrecordupdated'] = 'Erregistroa eguneratua';
$string['eventtemplateupdated'] = 'Txantiloia eguneratu da';
$string['eventtemplateviewed'] = 'Txantiloia ikusi da';
$string['example'] = 'Datu-basea moduluaren adibidea';
$string['excel'] = 'Excel';
$string['expired'] = 'Sentitzen dugu, jarduera hau {$a} datan itxi zen eta dagoeneko ez dago eskuragarri';
$string['export'] = 'Esportatu';
$string['exportaszip'] = 'Esportatu zip gisa';
$string['exportaszip_help'] = '<p>Honek txantiloiak zure ordenagailura jaisten uzten dizu. Beste datu-base batera eraman ahalko dituzu "Zip fitxategitik inportatu" izeneko aukeraz baliatuta.</p>';
$string['exportedtozip'] = 'Behin behineko zipera esportatuta...';
$string['exportentries'] = 'Sarrerak esportatu';
$string['exportownentries'] = 'Zeure sarrerak bakarrik esportatu nahi dituzu? ({$a->mine}/{$a->all})';
$string['failedpresetdelete'] = 'Errorea aurretiko ezarpena ezabatzean!';
$string['fieldadded'] = 'Eremua gehitu da';
$string['fieldallowautolink'] = 'Esteka automatikoa onartu da';
$string['fielddeleted'] = 'Eremua ezabatu da';
$string['fielddelimiter'] = 'Eremu-bereizlea';
$string['fielddescription'] = 'Eremuaren deskribapena';
$string['fieldenclosure'] = 'Eremu-itxitura';
$string['fieldheight'] = 'Altuera';
$string['fieldheightlistview'] = 'Altuera zerrenda-ikuspegian';
$string['fieldheightsingleview'] = 'Altuera ikuspegi xumean';
$string['fieldids'] = 'Eremuak';
$string['fieldmappings'] = 'Eremu-loturak';
$string['fieldmappings_help'] = 'Menu honek datuak aldez aurretik dagoen datu-base bateko datuak mantentzeko aukera ematen dizu. Eremu bateko datuak mantentzeko, eremu hori eremu berriarekin lotu behar duzu, eta horrela datuak bertan agertuko dira. Hutsik ere utzi ahal da eremu bat, bertan informaziorik ez kopiatuta. Beste batekin lotu gabeko eremu zaharrak galdu egingo dira eta bertako datuak ezabatuko dira.
Eremuak lotzeko mota berekoak izan behar dira, zabaltzen den menu bakoitzak eremu ezberdinak dituelako. Horretaz gain, kontuz ibili behar duzu eremu zahar bat eremu berri bat baino gehiagorekin ez lotzeko.';
$string['fieldname'] = 'Eremuaren izena';
$string['fieldnotmatched'] = 'Zure fitxategiaren ondoko eremuak ezezagunak dira datu-base honetan: {$a}';
$string['fieldoptions'] = 'Aukerak (bat lerroko)';
$string['fields'] = 'Eremuak';
$string['fieldupdated'] = 'Eremu eguneratua';
$string['fieldwidth'] = 'Zabalera';
$string['fieldwidthlistview'] = 'Zabalera zerrenda-ikuspegian';
$string['fieldwidthsingleview'] = 'Zabalera ikuspegi xumean';
$string['file'] = 'Fitxategia';
$string['fileencoding'] = 'Kodifikazioa';
$string['filesnotgenerated'] = 'Ez dira fitxategi guztiak sortu: {$a}';
$string['filtername'] = 'Datu-basearen esteka automatikoa';
$string['footer'] = 'Orri-oina';
$string['forcelinkname'] = 'Estekarako behartutako izena';
$string['foundnorecords'] = 'Ez dago erregistrorik (<a href="{$a->reseturl}">Garbitu iragazkiak</a>)';
$string['foundrecords'] = 'Erregistroak: {$a->num}/{$a->max} (<a href="{$a->reseturl}">Garbitu iragazkiak</a>)';
$string['fromfile'] = 'Inportatu zip fitxategitik';
$string['fromfile_help'] = '<p>Erabil ezazu aukera hau Esportatu aukeraren bidez zure ordenagailuan gordetako aurretiko ezarpenak igotzeko</p>';
$string['generateerror'] = 'Ez dira fitxategi guztiak sortu!';
$string['header'] = 'Goiburua';
$string['headeraddtemplate'] = 'Sarrerak sartzeko itxura definitzen du';
$string['headerasearchtemplate'] = 'Definitu Bilaketa aurreraturako interfazea';
$string['headercsstemplate'] = 'Beste txantiloietarako CSS estiloak definitzen ditu';
$string['headerjstemplate'] = 'Gainontzeko txantiloietarako Javascript pertsonalizatua definitzen du';
$string['headerlisttemplate'] = 'Sarrera anitzeko nabigazio-itxura definitzen du';
$string['headerrsstemplate'] = 'RSS jarioen sarreren itxura definitzen du';
$string['headersingletemplate'] = 'Sarrera baterako nabigazio-itxura definitzen du';
$string['importentries'] = 'Sarrerak inportatu';
$string['importsuccess'] = 'Aurretiko ezarpena egoki aplikatu da';
$string['includeapproval'] = 'Sartu onarpen-egoera';
$string['includetags'] = 'Sartu etiketak';
$string['includetime'] = 'Sartu denbora gehituta/aldatuta';
$string['includeuserdetails'] = 'Sartu erabiltzaile-xehetasunak';
$string['indicator:cognitivedepth'] = 'Gaitasun kognitiboa datu-baseetan';
$string['indicator:cognitivedepth_help'] = 'Adierazle hau ikasleak Datu-basea motako jardueretan lortutako sakonera kognitiboan oinarrituta dago.';
$string['indicator:socialbreadth'] = 'Gaitasun soziala datu-baseetan';
$string['indicator:socialbreadth_help'] = 'Helburu hau ikasleak Datu-basea motako jardueretan lortutako zabalera sozialean oinarrituta dago.';
$string['insufficiententries'] = 'datu-base hau ikusteko sarrera gehiago beharrezkoak dira';
$string['intro'] = 'Deskribapena';
$string['invalidaccess'] = 'Orri honetarako sarbidea ez da zuzena izan';
$string['invalidfieldid'] = 'Eremuaren IDa ezegokia da';
$string['invalidfieldname'] = 'Eremu honetarako beste izen bat aukeratu, mesedez';
$string['invalidfieldtype'] = 'Eremu mota ezegokia da';
$string['invalidid'] = 'Datuen IDa ezegokia da';
$string['invalidpreset'] = '{$a} ez da aurretiko ezarpena.';
$string['invalidrecord'] = 'Erregistroa ezegokia da';
$string['invalidurl'] = 'Sartu duzun URLa ez da onargarria';
$string['jstemplate'] = 'Javascript txantiloia';
$string['latitude'] = 'Latitudea';
$string['latlong'] = 'Latitudea/Longitudea';
$string['latlongboth'] = 'Latitudea eta longitudea beharrekoak dira.';
$string['latlongdownloadallhint'] = 'Sarrera guztietarako esteka KML gisa jaitsi';
$string['latlongkmllabelling'] = 'Nola etiketatu itemak KML fitxategietan (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Erakutsi beharreko zerbitzuak konektatu';
$string['latlongotherfields'] = 'Bestelako eremuak';
$string['list'] = 'Ikusi zerrenda';
$string['listtemplate'] = 'Zerrenda-txantiloia';
$string['longitude'] = 'Longitudea';
$string['manageapproved'] = 'Baimendu onartutako sarreren edizioa';
$string['manageapproved_help'] = 'Ezgaitzen bada aurrerantzean sortu zituen erabiltzaileak ezingo ditu onartutako sarrerak editatu edo ezabatu. Ezarpen honek ez dauka eraginik \'Onarpenik behar da\' egon ezean.';
$string['mapexistingfield'] = 'Mapatu {$a}-(e)ra';
$string['mapnewfield'] = 'Beste eremu bat sortu';
$string['mappingwarning'] = 'Eremu berrira mapeatu gabeko eremu zahar guztiak galdu egingo dira eta ezabatu egingo dira eremu horietako datuak';
$string['maxentries'] = 'Gehieneko sarrera-kopurua';
$string['maxentries_help'] = '<p>Jarduera honetan partaide bakoitzak bidal dezakeen gehienezko sarrera-kopurua.</p>';
$string['maxsize'] = 'Gehienezko tamaina';
$string['menu'] = 'Menua';
$string['menuchoose'] = 'Aukeratu...';
$string['missingdata'] = 'Objektuaren edo datuen IDa eman behar duzu eremu-motan';
$string['missingfield'] = 'Programatze-errorea: zehaztu behar duzu eremua edota datua eremu-mota definitzerakoan.';
$string['modulename'] = 'Datu-basea';
$string['modulename_help'] = 'Datu-basea jarduera moduluak irakasleei edo ikasleei edozein gairen inguruko sarreren bilduma bat sortu, erakutsi eta bilatzeko aukera ematen die. Sarreren egitura irakasleek definitzen dituzten eremuen bidez eratzen da. Eremuak mota askotakoak izan daitezke, besteak beste kontrol-laukitxoak, aukera-botoiak, aukera-menuak, testu edo zenbaki eremuak, URLak, irudiak eta igotako fitxategiak.

Datu-baseko sarrerak zerrendatu, ikusi edo editatzean informazioa erakusteko diseinua datu-baseen txantiloien bidez kontrolatu daiteke. Datu-base jarduerak ikastaroen artean aurrezarpen moduan partekatu daitezke eta irakasleek datu-base sarrerak inportatu eta esportatu ditzakete.

Datu-baserako esteka automatikoak egiteko iragazkia piztuta badago, datu-basean dagoen edozein sarrera automatikoki estekatuko da ikastaroan hitz edo esaldi horiek agertzen direnean.

Irakasleek sarreretan iruzkinak egitea ahalbide dezake. Irakasleek sarrerak kalifika ditzakete, baita ikasleek ere (parekoen arteko ebaluazioa). Ebaluazioak batu daitezke behin-betiko ebaluazioa lortzeko, eta azken hau izango da kalifikazio-liburuan gordeko dena.

Datu-base jarduerak erabilera anitzak izan ditzake, hala nola

* Elkarlanean egindako bildumak sortzeko (web-estekak, liburuak, liburu-kritikak, aldizkari-erreferentziak,...)
* Ikasleek sortutako edukiak erakusteko (argazkiak, posterrak, web-guneak, olerkiak,...) eta beren iruzkinak eta kritikak jasotzeko.';
$string['modulenameplural'] = 'Datu-baseak';
$string['more'] = 'Gehiago';
$string['moreurl'] = 'URL gehiago';
$string['movezipfailed'] = 'Zip-a ezin da mugitu';
$string['multientry'] = 'Sarrera bikoiztua';
$string['multimenu'] = 'Menu (aukera anitza)';
$string['multipletags'] = 'Marka asko aurkitu dira! Txantiloia ez da gorde';
$string['namecheckbox'] = 'Aukera anitzeko laukitxoa';
$string['namedate'] = 'Data';
$string['namefile'] = 'Fitxategia';
$string['namelatlong'] = 'Latitude/Longitude eremua';
$string['namemenu'] = 'Menua';
$string['namemultimenu'] = 'Aukera anitzeko menua';
$string['namenumber'] = 'Zenbakia';
$string['namepicture'] = 'Irudia';
$string['nameradiobutton'] = 'Aukera bakarreko botoia eremua';
$string['nametext'] = 'Testua';
$string['nametextarea'] = 'Testu-eremua';
$string['nameurl'] = 'URLa';
$string['newentry'] = 'Sarrera berria';
$string['newfield'] = 'Beste eremu bat sortu';
$string['newfield_help'] = '<p>Pantaila honetan datu-basea osatuko duten eremuak sor ditzakezu.</p>

<p>Eremu bakoitzak datu-mota ezberdinak onartzen ditu eta horretarako hainbat interfaz eskaintzen ditu.</p>';
$string['noaccess'] = 'Orri honetara ez duzu sarbiderik';
$string['nodefinedfields'] = 'Aurretiko ezarpen berriak ez du definitutako eremurik!';
$string['nofieldcontent'] = 'Ez da eremuaren edukia aurkitu';
$string['nofieldindatabase'] = 'Datu-base honetarako eremurik ez da definitu, batzuk erantsi mesedez';
$string['nolisttemplate'] = 'Oraindik ez da zerrenda-txantiloia zehaztu';
$string['nomatch'] = 'Ez da sarrera egokirik aurkitu!';
$string['nomaximum'] = 'Gehienezkorik ez';
$string['norecords'] = 'Datu-basean sarrerarik ez';
$string['nosingletemplate'] = 'Banakako txantiloia ez da oraindik zehaztu';
$string['notapproved'] = 'Sarrera ez da oraindik onartu';
$string['notinjectivemap'] = 'Ez dago mapa injektiborik';
$string['notopenyet'] = 'Sentitzen dugu, jarduera hau ez dago eskuragarri {$a} arte';
$string['number'] = 'Zenbakia';
$string['numberrssarticles'] = 'Sarrerak RSS jarioan';
$string['numnotapproved'] = 'Onarpenaren zain';
$string['numrecords'] = '{$a} sarrera(k)';
$string['ods'] = '<acronym title="OpenDocument Spreadsheet">ODS</acronym> (OpenOffice)';
$string['optionaldescription'] = 'Deskribapen motza (aukerzkoa)';
$string['optionalfilename'] = 'Fitxategi-izena (aukerakoa)';
$string['other'] = 'Beste bat';
$string['overrwritedesc'] = 'Gainidatzi aurretiko ezarpena dagoeneko existitzen bada';
$string['overwrite'] = 'Gainidatzi';
$string['overwritesettings'] = 'Gainidatzi oraingo ezarpenak';
$string['page-mod-data-x'] = 'Datu-basearen edozein orri';
$string['pagesize'] = 'Sarrerak orriko';
$string['participants'] = 'Partaideak';
$string['picture'] = 'Irudia';
$string['pleaseaddsome'] = 'Mesedez, sortu baten bat azpian edo <a href="{$a}"> aukeratu aurrez definitutako multzo bat </a> hasteko.';
$string['pluginadministration'] = 'Datu-basea jardueraren kudeaketa';
$string['pluginname'] = 'Datu-basea';
$string['portfolionotfile'] = 'Esportatu portfolio batera eta ez fitxategi batera (csn eta leap2a  bakarrik)';
$string['presetinfo'] = 'Aurretiko ezarpen gisa gordetzean publikatu egingo da txantiloi hau. Beste erabiltzaile batzuek erabili ahal izango dute euren datu-baseetan.';
$string['presets'] = 'Aurretiko ezarpenak';
$string['privacy:metadata:commentpurpose'] = 'Datu-baseko sarrerez iruzkinak';
$string['privacy:metadata:data_content'] = 'Datu-base jarduera-moduluko eremu baten erantzuna adierazten du.';
$string['privacy:metadata:data_content:content'] = 'Edukia';
$string['privacy:metadata:data_content:content1'] = 'Eduki gehigarria 1';
$string['privacy:metadata:data_content:content2'] = 'Eduki gehigarria 2';
$string['privacy:metadata:data_content:content3'] = 'Eduki gehigarria 3';
$string['privacy:metadata:data_content:content4'] = 'Eduki gehigarria 4';
$string['privacy:metadata:data_content:fieldid'] = 'Eremuaren definizioaren IDa';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Datu-base jarduera-modulurako eremuak';
$string['privacy:metadata:data_records'] = 'Datu-base jarduera-moduluko sarrerak adierazten ditu.';
$string['privacy:metadata:data_records:approved'] = 'Onespen-egoera';
$string['privacy:metadata:data_records:groupid'] = 'Taldea';
$string['privacy:metadata:data_records:timecreated'] = 'Erregistroa sortu zeneko unea';
$string['privacy:metadata:data_records:timemodified'] = 'Sarrera noiz aldatu den';
$string['privacy:metadata:data_records:userid'] = 'Sarrera nork sortu duen';
$string['privacy:metadata:filepurpose'] = 'Datu-basearen sarrerari erantsitako fitxategia';
$string['privacy:metadata:ratingpurpose'] = 'Datu-basearen sarreren kalifikazioak';
$string['privacy:metadata:tagpurpose'] = 'Datu-basearen sarreren etiketak';
$string['radiobutton'] = 'Aukera bakarreko botoia';
$string['recordapproved'] = 'Sarrera onartu da';
$string['recorddeleted'] = 'Sarrera ezabatu da';
$string['recorddisapproved'] = 'Onartu gabeko sarrera';
$string['recordsnotsaved'] = 'Ez da sarrerarik gorde. Igotako fitxategiaren formatua aztertu, mesedez.';
$string['recordssaved'] = 'sarrerak gorde dira';
$string['removealldatatags'] = 'Ezabatu datu-baseko etiketa guztiak';
$string['requireapproval'] = 'Onarpenik behar da';
$string['requireapproval_help'] = '<p>Ikasleek sarrerak ikusi aurretik, irakasleak onartu behar lituzke? Aukera hau erabilgarria izan daiteke moderazioa egiteko.</p>';
$string['required'] = 'Beharrekoa';
$string['requiredentries'] = 'Onarpenik behar da (zaharkitua)';
$string['requiredentries_help'] = 'Gaituz gero, mezu bat erakusten da osatzeko beharrezkoa den sarrera kopurua adieraziz. Kontuan izan ezarpen hau ez dagoela osaketa jarraipenarekin lotuta.

Jarduera osatzeko beharrezkoak diren sarrerak zehazteko, jardueraren osaketaren jarraipenerako \'Sarrerak behar dira\' ezarpen berria erabili beharko litzateke. Ezarpen hau guztiz ezabatzeko, zerora ezari eta ondoren aldaketak gorde itzazu.

Mesedez horren ordez \'Sarrerak behar dira\' ezarpen berria erabili ezazu.';
$string['requiredentriestoview'] = 'Ikusi aurretik behar diren sarrerak';
$string['requiredentriestoview_help'] = 'Datu-basearen gainerako sarrerak ikusi baino lehen, partaideek bidali behar duten sarrera-kopurua zehaztu behar da hemen.

Oharra: sarrera-kopuru bat derrigortzen bada, esteka automatikoak egiteko iragazkia desgaitu beharko litzateke, honek ezin baitu jakin erabiltzaileak eskatutako sarrera kopurura iritsi den.';
$string['requiredentrieswarning'] = 'Ezarpen hau jarduera-osaketako "Behartu sarrerak" ezarpenarekin ordezkatu da.';
$string['requiredfield'] = 'Beharrezko eremua';
$string['resetsettings'] = 'Garbitu iragazkiak';
$string['resettemplate'] = 'Berrabiarazi txantiloia';
$string['resizingimages'] = 'Irudi txikien tamaina aldatzen';
$string['rows'] = 'errenkadak';
$string['rssglobaldisabled'] = 'Desgaituta. Gunearen konfigurazio-aldagaiak ikusi.';
$string['rsstemplate'] = 'RSS txantiloia';
$string['rsstitletemplate'] = 'RSS txantiloiaren izenburua';
$string['save'] = 'Gorde';
$string['saveandadd'] = 'Gorde eta gehitu beste bat';
$string['saveandview'] = 'Gorde eta ikusi';
$string['saveaspreset'] = 'Gorde aurretiko ezarpen gisa';
$string['saveaspreset_help'] = '<p>Honek oraingo txantiloia aurretiko ezerpen gisa argitaratzen
du guneko edonork ikusi eta erabili ahal izateko moduan. Aurretiko
ezarpenen zerrendan agertuko da. Edozein momentutan kendu ahal izango duzu.</p>';
$string['savesettings'] = 'Gorde ezarpenak';
$string['savesuccess'] = 'Egoki gordeta. Zure aurretiko ezarpena eskuragarri dago orain gune osoan.';
$string['savetemplate'] = 'Txantiloia gorde';
$string['search'] = 'Bilatu';
$string['search:activity'] = 'Datu-basea - jardueraren informazioa';
$string['search:entry'] = 'Datu-basea - sarrerak';
$string['selectedrequired'] = 'Aukeratutako guztia beharrezkoa';
$string['showall'] = 'Erakutsi sarrera guztiak';
$string['single'] = 'Ikusi banaka';
$string['singletemplate'] = 'Banakako txantiloia';
$string['subplugintype_datafield'] = 'Datu-basearen eremu-mota';
$string['subplugintype_datafield_plural'] = 'Datu-basearen eremu-motak';
$string['subplugintype_datapreset'] = 'Aurretiko ezarpena';
$string['subplugintype_datapreset_plural'] = 'Aurretiko ezarpenak';
$string['tagarea_data_records'] = 'Datu-erregistroak';
$string['tags'] = 'Etiketak';
$string['tagsdeleted'] = 'Datu-baseko etiketak ezabatu dira';
$string['teachersandstudents'] = '{$a->teachers} eta {$a->students}';
$string['templates'] = 'Txantiloiak';
$string['templatesaved'] = 'Txantiloia gordeta';
$string['text'] = 'Testua';
$string['textarea'] = 'Testu-eremua';
$string['timeadded'] = 'Gehitze-data';
$string['timemodified'] = 'Aldatze-data';
$string['todatabase'] = 'datu- base honetara.';
$string['type'] = 'Fitxategi-mota';
$string['undefinedprocessactionmethod'] = 'Data_Preset-en ez da ekintza-metodorik definitu "{$a}" ekintza kudeatzeko.';
$string['unsupportedexport'] = '({$a->fieldtype}) ezin da esportatu.';
$string['updatefield'] = 'Jadanik dagoen eremua eguneratu';
$string['uploadfile'] = 'Igo fitxategia';
$string['uploadrecords'] = 'Datuak fitxategi batetik igo';
$string['uploadrecords_help'] = 'Sarrerak testu-fitxategien bitartez igo daitezke. Fitxategiaren formatuak honelakoa izan behar du:

* Fitxategiko errenkada bakoitzak erregistro bana du
* Erregistro bakoitza komaz (edo bestelako bereizle batez) banatutako datu-multzo bat da
* Fitxategiko lehen errenkadak eremuen izenen zerrenda izango du, fitxategiko beste erregistroen formatua zehaztuko duena

Eremu-itxitura erregistro bakoitzaren eremu bakoitza inguratzen duen karaktere bat da. Normalean ezarri gabe utzi daiteke.';
$string['url'] = 'Url';
$string['usedate'] = 'Sartu bilaketan.';
$string['usestandard'] = 'Erabili aurretiko ezarpena';
$string['usestandard_help'] = '<p>Erabili gune mailan erabili moduko txantiloia.</p>
<p> Bestalde, aurretiko ezarpena \'Gorde aurretiko ezarpen gisa\'
erabilita biltegian gorde baduzu ezabatu egin ahal duzu.</p>';
$string['viewfromdate'] = 'Noiztik irakurgarri';
$string['viewtodate'] = 'Noiz arte irakurgarri';
$string['viewtodatevalidation'] = 'Irakurgarri egoteko azken eguna ezin da hasiera baino lehenagokoa izan.';
$string['wrongdataid'] = 'id datu okerrak';
