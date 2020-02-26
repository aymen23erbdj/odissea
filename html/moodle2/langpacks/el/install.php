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
 * Strings for component 'install', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Ο φάκελος admin έχει οριστεί λανθασμένα';
$string['admindirname'] = 'Φάκελος διαχειριστή';
$string['admindirsetting'] = 'Πολλοί λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin ως ειδική διεύθυνση URL για την πρόσβαση σε κάποιο πίνακα ελέγχου ή κάτι παρόμοιο. Δυστυχώς αυτό έρχεται σε σύγκρουση με την τυπική τοποθεσία των σελίδων διαχείρισης (admin) του Moodle.
Αυτό μπορεί να διορθωθεί με την μετονομασία του φακέλου admin στην εγκατάστασή σας, και βάζοντας αυτό το καινούργιο όνομα εδώ. Για παράδειγμα:
<br /> <br />
<b>moodleadmin</b>
<br /> <br />
Αυτό θα διορθώσει όλους τους συνδέσμους με το admin στην διεύθυνσή τους σε όλη την εγκατάσταση του Moodle σας.';
$string['admindirsettinghead'] = 'Προσδιορίζοντας τον φάκελο admin...';
$string['admindirsettingsub'] = 'Πολλοί λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin ως ειδική διεύθυνση URL για την πρόσβαση σε κάποιο πίνακα ελέγχου ή κάτι παρόμοιο. Δυστυχώς αυτό έρχεται σε σύγκρουση με την τυπική τοποθεσία των σελίδων διαχείρισης (admin) του Moodle.
Αυτό μπορεί να διορθωθεί με την μετονομασία του φακέλου admin στην εγκατάστασή σας, και βάζοντας αυτό το καινούργιο όνομα εδώ. Για παράδειγμα:
<br /> <br />
<b>moodleadmin</b>
<br /> <br />
Αυτό θα διορθώσει όλους τους συνδέσμους με το admin στην διεύθυνσή τους σε όλη την εγκατάσταση του Moodle σας.';
$string['availablelangs'] = 'Λίστα διαθέσιμων πακέτων γλωσσών';
$string['caution'] = 'Προσοχή';
$string['chooselanguage'] = 'Επιλογή γλώσσας';
$string['chooselanguagehead'] = 'Επιλογή γλώσσας';
$string['chooselanguagesub'] = 'Παρακαλούμε, επιλέξτε γλώσσα για την εγκατάσταση. Αυτή η γλώσσα θα χρησιμοποιηθεί επίσης ως προεπιλεγμένη γλώσσα για τον ιστότοπο, αν και μπορεί να αλλάξει αργότερα.';
$string['cliadminemail'] = 'Νέα διεύθυνση ηλε.ταχυδρομείου χρήστη διαχειριστή';
$string['cliadminpassword'] = 'Νέος κωδικός πρόσβασης διαχειριστή';
$string['cliadminusername'] = 'Όνομα χρήστη λογαριασμού διαχειριστή';
$string['clialreadyconfigured'] = 'Το αρχείο ρυθμίσεων config.php υπάρχει ήδη. Χρησιμοποιήστε το admin/cli/install_database.php για να εγκαταστήσετε το Moodle για αυτόν τον ιστότοπο.';
$string['clialreadyinstalled'] = 'Το αρχείο ρυθμίσεων config.php υπάρχει ήδη. Χρησιμοποιήστε το admin/cli/install_database.php για να αναβαθμίσετε το Moodle για αυτόν τον ιστότοπο.';
$string['cliinstallfinished'] = 'Η εγκατάσταση ολοκληρώθηκε με επιτυχία.';
$string['cliinstallheader'] = 'Moodle {$a} πρόγραμμα εγκατάστασης γραμμής εντολών';
$string['climustagreelicense'] = 'Σε μη διαδραστική κατάσταση λειτουργίας, πρέπει να συμφωνήσετε με την άδεια χρήσης, καθορίζοντας την επιλογή --agree-license option';
$string['cliskipdatabase'] = 'Παράλειψη εγκατάστασης βάσης δεδομένων.';
$string['clitablesexist'] = 'Οι πίνακες βάσεων δεδομένων υπάρχουν ήδη. Η εγκατάσταση από γραμμή εντολών δεν μπορεί να συνεχιστεί.';
$string['compatibilitysettings'] = 'Έλεγχος των PHP ρυθμίσεών σας...';
$string['compatibilitysettingshead'] = 'Έλεγχος των PHP ρυθμίσεών σας...';
$string['compatibilitysettingssub'] = 'Ο εξυπηρετητής σας πρέπει να περάσει όλες αυτές τις δοκιμές για να λειτουργεί το Moodle κανονικά';
$string['configfilenotwritten'] = 'Το σενάριο εγκατάστασης δεν μπόρεσε να δημιουργήσει αυτόματα ένα αρχείο config.php το οποίο να περιέχει τις επιλεγμένες ρυθμίσεις, μάλλον γιατί ο φάκελος του Moodle δεν είναι εγγράψιμος. Μπορείτε χειροκίνητα να αντιγράψετε τον παρακάτω κώδικα σε ένα αρχείο με όνομα config.php μέσα στο root φάκελο του Moodle.';
$string['configfilewritten'] = 'Το αρχείο config.php δημιουργήθηκε με επιτυχία';
$string['configurationcomplete'] = 'Ολοκληρώθηκαν οι ρυθμίσεις';
$string['configurationcompletehead'] = 'Ολοκληρώθηκαν οι ρυθμίσεις';
$string['configurationcompletesub'] = 'Το Moodle προσπάθησε να αποθηκεύσει τις ρυθμίσεις σε ένα αρχείο στο φάκελο (ρίζα) της εγκατάστασης του Moodle σας.';
$string['database'] = 'Βάση Δεδομένων';
$string['databasehead'] = 'Ρυθμίσεις Βάσης Δεδομένων';
$string['databasehost'] = 'Κεντρικός H/Y που φιλοξενεί την Βάση Δεδομένων';
$string['databasename'] = 'Όνομα Βάσης Δεδομένων';
$string['databasepass'] = 'Κωδικός πρόσβασης Βάσης Δεδομένων';
$string['databaseport'] = 'Θύρα (port) βάσης δεδομένων';
$string['databasesocket'] = 'Υποδοχή (socket) του Unix';
$string['databasetypehead'] = 'Επιλογή οδηγού βάσης δεδομένων';
$string['databasetypesub'] = 'Το Moodle υποστηρίζει αρκετούς τύπους εξυπηρετητών βάσης δεδομένων. Παρακαλούμε επικοινωνήστε τον διαχειριστή του εξυπηρετητή εάν δεν ξέρετε ποιόν τύπο να χρησιμοποιήσετε.';
$string['databaseuser'] = 'Χρήστης Βάσης Δεδομένων';
$string['dataroot'] = 'Φάκελος δεδομένων';
$string['datarooterror'] = 'Ο «φάκελος δεδομένων» που καθορίσατε δεν μπόρεσε να βρεθεί ή να δημιουργηθεί. Είτε διορθώστε το μονοπάτι είτε δημιουργήστε αυτόν τον φάκελο χειροκίνητα.';
$string['datarootpermission'] = 'Άδεια φακέλων/καταλόγων δεδομένων';
$string['datarootpublicerror'] = 'Ο φάκελος δεδομένων που ορίσατε είναι απευθείας προσβάσιμος μέσω ιστού, πρέπει να χρησιμοποιήσετε έναν διαφορετικό φάκελο.';
$string['dbconnectionerror'] = 'Δεν έγινε σύνδεση με τη βάση δεδομένων που ορίσατε. Παρακαλούμε ελέγξτε τις ρυθμίσεις της βάσης σας.';
$string['dbcreationerror'] = 'Σφάλμα δημιουργίας βάσης δεδομένων. Δε δημιουργήθηκε βάση με το επιθυμητό όνομα και τις προσδιορισμένες ρυθμίσεις';
$string['dbhost'] = 'Κεντρικός εξυπηρετητής';
$string['dbpass'] = 'Κωδικός πρόσβασης';
$string['dbport'] = 'Θύρα (port)';
$string['dbprefix'] = 'Πρόθεμα πινάκων';
$string['dbtype'] = 'Τύπος';
$string['directorysettings'] = '<p>Παρακαλούμε επιβεβαιώστε τις τοποθεσίες αυτής της εγκατάστασης Moodle.</p>

<p><b>Διεύθυνση ιστού:</b>
Προσδιορίστε την πλήρη διεύθυνση ιστού από την οποία θα γίνεται η πρόσβαση στο Moodle. Αν ο ιστότοπός σας είναι προσβάσιμος μέσω πολλαπλών διευθύνσεων URL τότε επιλέξτε την πιο φυσική που θα χρησιμοποιούσαν οι μαθητές σας. Μην συμπεριλάβετε τον χαρακτήρα καθέτου (ή πλάγιας γραμμής «/») στο τέλος της διεύθυνσης URL.</p>

<p><b>Φάκελος Moodle:</b>
Προσδιορίστε το πλήρες μονοπάτι του φακέλου αυτής της εγκατάστασης. Βεβαιωθείτε ότι τα πεζά/κεφαλαία είναι σωστά.</p>

<p><b>Φάκελος Δεδομένων:</b>
Χρειάζεστε ένα μέρος όπου το Moodle θα μπορεί να αποθηκεύει τα ανεβασμένα αρχεία. Αυτός ο φάκελος θα πρέπει να είναι αναγνώσιμος ΚΑΙ ΕΓΓΡΑΨΙΜΟΣ από τον χρήστη του εξυπηρετητή ιστού (συνήθως «nobody» ή «apache»), αλλά δεν πρέπει να είναι προσβάσιμος κατευθείαν από τον ιστό. Η εγκατάσταση θα προσπαθήσει να τον δημιουργήσει αν δεν υπάρχει.</p>';
$string['directorysettingshead'] = 'Παρακαλούμε επιβεβαιώστε τις τοποθεσίες αυτής της εγκατάστασης Moodle.';
$string['directorysettingssub'] = '<b>Διεύθυνση ιστού:</b>
Προσδιορίστε την πλήρη διεύθυνση ιστού από την οποία θα γίνεται η πρόσβαση στο Moodle. Αν ο ιστότοπός σας είναι προσβάσιμος μέσω πολλαπλών URL τότε επιλέξτε την πιο φυσική που θα χρησιμοποιούσαν οι μαθητές σας. Μην συμπεριλάβετε τον χαρακτήρα καθέτου (ή πλάγιας γραμμής «/») στο τέλος της URL διεύθυνσης.
<br />
<br />
<b>Φάκελος Moodle:</b>
Προσδιορίστε το πλήρες μονοπάτι του φακέλου αυτής της εγκατάστασης. Βεβαιωθείτε ότι τα πεζά/κεφαλαία είναι σωστά.
<br />
<br />
<b>Φάκελος Δεδομένων:</b>
Χρειάζεστε ένα μέρος όπου το Moodle θα μπορεί να αποθηκεύει τα ανεβασμένα αρχεία. Αυτός ο φάκελος θα πρέπει να είναι αναγνώσιμος ΚΑΙ ΕΓΓΡΑΨΙΜΟΣ από τον χρήστη του εξυπηρετητή ιστού (συνήθως «nobody» ή «apache»), αλλά δεν πρέπει να είναι προσβάσιμος κατευθείαν από τον ιστό. Η εγκατάσταση θα προσπαθήσει να τον δημιουργήσει αν δεν υπάρχει.';
$string['dirroot'] = 'Φάκελος Moodle';
$string['dirrooterror'] = 'Η ρύθμιση «Φάκελος Moodle» φαίνεται να είναι εσφαλμένη - δεν βρέθηκε εγκατάσταση Moodle εκεί. Η παρακάτω τιμή έχει επαναρχικοποιηθεί.';
$string['download'] = 'Λήψη';
$string['downloadlanguagebutton'] = 'Λήψη του πακέτου γλώσσας «{$a}»';
$string['downloadlanguagehead'] = 'Λήψη πακέτου γλώσσας';
$string['downloadlanguagenotneeded'] = 'Μπορείτε να συνεχίσετε την εγκατάσταση χρησιμοποιώντας το προεπιλεγμένο πακέτο γλώσσας, «{$a}».';
$string['downloadlanguagesub'] = 'Τώρα έχετε την επιλογή της λήψης ενός γλωσσικού πακέτου και συνέχιση της εγκατάστασης σε αυτή τη γλώσσα.<br /><br /> Εάν δεν μπορέσετε να κατεβάσετε το γλωσσικό πακέτο, η εγκατάσταση θα προχωρήσει στα αγγλικά. (Μόλις η εγκατάσταση ολοκληρωθεί, θα έχετε την δυνατότητα να κατεβάσετε και να εγκαταστήσετε επιπλέον γλωσσικά πακέτα.)';
$string['doyouagree'] = 'Συμφωνείτε ; (ναι/όχι):';
$string['environmenthead'] = 'Έλεγχος περιβάλλοντος...';
$string['environmentsub'] = 'Έλεγχος εάν τα διάφορα τμήματα του συστήματός σας ταιριάζουν με τις απαιτήσεις συστήματος';
$string['environmentsub2'] = 'Κάθε έκδοση Moodle έχει κάποια ελάχιστη απαίτηση σχετικά με την έκδοση της PHP και ενός αριθμού από αναγκαίες επεκτάσεις PHP.
Ο πλήρης έλεγχος του περιβάλλοντος πραγματοποιείται πριν κάθε εγκατάσταση και αναβάθμιση. Παρακαλούμε επικοινωνήστε με τον διαχειριστή του εξυπηρετητή εάν δεν ξέρετε πως να εγκαταστήσετε νέα έκδοση της PHP ή να ενεργοποιήσετε επεκτάσεις της.';
$string['errorsinenvironment'] = 'Ο έλεγχος του περιβάλλοντος απέτυχε!';
$string['fail'] = 'Αποτυχία';
$string['fileuploads'] = 'Ανέβασμα αρχείων';
$string['fileuploadserror'] = 'Αυτό πρέπει να είναι ενεργοποιημένο';
$string['fileuploadshelp'] = '<p>Το ανέβασμα αρχείων φαίνεται να είναι απενεργοποιημένο στον εξυπηρετητή σας.</p>

<p>Το Moodle μπορεί να εγκατασταθεί, αλλά χωρίς αυτή τη δυνατότητα, δε θα μπορείτε να ανεβάσετε αρχεία μαθημάτων ή καινούργιες εικόνες για τα προφίλ χρηστών.</p>

<p> Για να ενεργοποιήσετε το ανέβασμα αρχείων (εσείς ή ο διαχειριστής) πρέπει να επεξεργαστείτε το κύριο php.ini αρχείο του συστήματός σας και να αλλάξετε τη ρύθμιση για <b>file_uploads</b> σε «1».</p>';
$string['inputdatadirectory'] = 'Φάκελος δεδομένων :';
$string['inputwebadress'] = 'Διεύθυνση Ιστού :';
$string['inputwebdirectory'] = 'Κατάλογος Moodle:';
$string['installation'] = 'Εγκατάσταση';
$string['invaliddbprefix'] = 'Μη έγκυρο πρόθεμα. Το πρόθεμα μπορεί να αποτελείται μόνο από πεζά γράμματα και κάτω παύλες.';
$string['langdownloaderror'] = 'Δυστυχώς η γλώσσα «{$a}» δεν είναι εγκατεστημένη. Η εγκατάσταση θα συνεχιστεί στα αγγλικά.';
$string['langdownloadok'] = 'Η γλώσσα «{$a}» εγκαταστάθηκε με επιτυχία. Η εγκατάσταση θα συνεχιστεί σε αυτή τη γλώσσα.';
$string['memorylimit'] = 'Όριο μνήμης';
$string['memorylimiterror'] = 'Το memory limit της PHP έχει οριστεί πολύ χαμηλά ... ίσως αντιμετωπίσετε προβλήματα στη συνέχεια.';
$string['memorylimithelp'] = '<p>Το όριο μνήμης της PHP στον εξυπηρετητή σας είναι ορισμένο αυτή τη στιγμή στα {$a}.</p>

<p>Αυτό μπορεί να προκαλέσει προβλήματα μνήμης στο Moodle στη συνέχεια, ειδικά αν έχετε πολλά ενεργοποιημένα αρθρώματα και/ή πολλούς χρήστες.</p>

<p>Προτείνεται η ρύθμιση της PHP με μεγαλύτερο όριο, αν αυτό είναι δυνατό, π.χ. 40M. Υπάρχουν πολλοί τρόποι να το κάνετε αυτό, τους οποίους μπορείτε να δοκιμάσετε:</p>
<ol>
<li>Αν έχετε τη δυνατότητα, κάνετε επαναμεταγλώττιση της PHP με την παράμετρο <i>--enable-memory-limit</i>. Αυτό θα επιτρέψει στο Moodle να ορίσει μόνο του το όριο μνήμης.</li>
<li>Αν έχετε πρόσβαση στο αρχείο php.ini, μπορείτε να αλλάξετε τη ρύθμιση <b>memory_limit</b> σε 40M. Αν δεν έχετε πρόσβαση ζητήστε από το διαχειριστή να το κάνει για εσάς.</li>
<li>Σε κάποιους εξυπηρετητές PHP μπορείτε να δημιουργήσετε ένα αρχείο .htaccess στο φάκελο του Moodle που να περιέχει την παρακάτω γραμμή:
<blockquote>php_value memory_limit 40M</div></blockquote>
<p>Ωστόσο, σε κάποιους εξυπηρετητές αυτό θα εμποδίσει τη λειτουργία <b>όλων</b> των σελίδων PHP (θα βλέπετε σφάλματα όταν ανοίγετε τις σελίδες), οπότε θα πρέπει να διαγράψετε το αρχείο .htaccess.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση MySQLi, έτσι ώστε να μπορεί να επικοινωνεί με τη MySQL. Παρακαλούμε ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP. Η επέκταση MySQLi δεν είναι διαθέσιμη για την PHP 4.';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Η βάση δεδομένων είναι εκεί όπου αποθηκεύονται οι περισσότερες από τις ρυθμίσεις και τα δεδομένα του Moodle και πρέπει να διαμορφωθεί εδώ.</p> <p>Το όνομα της βάσης δεδομένων, το όνομα χρήστη και ο κωδικός πρόσβασης είναι υποχρεωτικά πεδία. Το πρόθεμα πίνακα είναι προαιρετικό.</p>
<p>Το όνομα της βάσης δεδομένων μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες, δολάριο ($) και κάτω παύλα (_).</p>
<p>Αν η βάση δεδομένων δεν υπάρχει αυτή τη στιγμή και ο χρήστης που έχετε καθορίσει έχει το δικαίωμα, το Moodle θα προσπαθήσει να δημιουργήσει μια νέα βάση δεδομένων με τα σωστά δικαιώματα και ρυθμίσεις.</p>
<p>Αυτό το πρόγραμμα οδήγησης δεν είναι συμβατό με την μηχανή παλαιού τύπου MyISAM.</p>';
$string['nativemysqli'] = 'Βελτιωμένη MySQL (native/mysqli)';
$string['nativemysqlihelp'] = 'Τώρα πρέπει να ρυθμίσετε την βάση δεδομένων όπου τα περισσότερα δεδομένα του Moodle θα αποθηκευθούν. Η βάση δεδομένων μπορεί να δημιουργηθεί εάν ο χρήστης της βάσης έχει τα απαραίτητα δικαιώματα, και τα ονόματα χρήστη και ο κωδικός πρόσβασης υπάρχουν ήδη. Το πρόθεμα πινάκων είναι προαιρετικό.';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Τώρα πρέπει να διαμορφώσετε τη βάση δεδομένων όπου θα αποθηκευτούν τα περισσότερα δεδομένα του Moodle. Αυτή η βάση δεδομένων πρέπει να έχει ήδη δημιουργηθεί και να δημιουργηθεί όνομα χρήστη και κωδικός για πρόσβαση σε αυτήν. Το πρόθεμα πίνακα είναι υποχρεωτικό.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Η βάση δεδομένων είναι το μέρος που αποθηκεύονται τα περισσότερα δεδομένα και ρυθμίσεις του Moodle και πρέπει να διαμορφωθεί εδώ.</p>
<p>Το όνομα βάσης δεδομένων, το όνομα χρήστη, ο κωδικός πρόσβασης και το πρόθεμα είναι απαιτούμενα πεδία.</p>
<p>Η βάση δεδομένων πρέπει να υπάρχει ήδη και ο χρήστης πρέπει να έχει πρόσβαση τόσο στην ανάγνωση όσο και στην εγγραφή σε αυτήν.</ p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Τώρα πρέπει να διαμορφώσετε τη βάση δεδομένων όπου θα αποθηκευτούν τα περισσότερα δεδομένα του Moodle. Αυτή η βάση δεδομένων πρέπει να έχει ήδη δημιουργηθεί και να δημιουργηθεί όνομα χρήστη και κωδικός για πρόσβαση σε αυτήν. Το πρόθεμα πίνακα είναι υποχρεωτικό.';
$string['nativesqlsrvnodriver'] = 'Οι οδηγοί της Microsoft για τον SQL Server για PHP δεν έχουν εγκατασταθεί ή δεν έχουν ρυθμιστεί σωστά.';
$string['ociextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση OCI8, έτσι ώστε να μπορεί να επικοινωνεί με τη Oracle. Παρακαλούμε ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['pass'] = 'Πέρασμα';
$string['paths'] = 'Διαδρομές';
$string['pathserrcreatedataroot'] = 'Ο Φάκελος δεδομένων ({$a->dataroot}) δεν μπορεί να δημιουργθεί από το πρόγραμμα εγκατάστασης.';
$string['pathshead'] = 'Επιβεβαίωση Διαδρομών';
$string['pathsrodataroot'] = 'Ο Φάκελος Δεδομένων δεν είναι εγγράψιμος.';
$string['pathsroparentdataroot'] = 'Ο γονικός φάκελος ({$a->parent}) δεν είναι εγγράψιμος. Ο φάκελος δεδομένων ({$a->dataroot}) δεν μπορεί να δημιουργθεί από το πρόγραμμα εγκατάστασης.';
$string['pathssubadmindir'] = 'Κάποιοι λίγοι κεντρικοί υπολογιστές ιστού χρησιμοποιούν το /admin ως ειδική διεύθυνση URL για την πρόσβαση σε κάποιο πίνακα ελέγχου ή κάτι τέτοιο. Δυστυχώς αυτό έρχεται σε αντίθεση με την τυπική τοποθεσία των σελίδων διαχείρισης (admin) του Moodle. Αυτό μπορεί να διορθωθεί με την μετονομασία του admin φακέλου στην εγκατάστασή σας, και βάζοντας αυτό το καινούργιο όνομα εδώ. Για παράδειγμα: <em>moodleadmin</em>. Αυτό θα διορθώσει όλους τους συνδέσμους με το admin στην διεύθυνσή τους σε όλη την εγκατάσταση του Moodle σας.';
$string['pathssubdataroot'] = '<p>Ένας φάκελος όπου το Moodle θα αποθηκεύει όλα τα ανεβασμένα από τους χρήστες αρχεία.</p> <p>Αυτος ο φάκελος θα πρέπει να είναι αναγνώσιμος ΚΑΙ ΕΓΓΡΑΨΙΜΟΣ από τον χρήστη του εξυπηρετητή ιστού (συνήθως «nobody» ή «apache»).</p> <p>Δεν πρέπει να είναι προσβάσιμος κατευθείαν από τον ιστό.</p> <p>Αν ο φάκελος δεν υπάρχει, η διαδικασία εγκατάστασης θα προσπαθήσει να τον δημιουργήσει.</p>';
$string['pathssubdirroot'] = '<p>Η πλήρης διαδρομή του φακέλου που περιέχει τα αρχεία κώδικα του Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Η πλήρης διεύθυνση από την οποία θα γίνεται η πρόσβαση στο Moodle, δηλαδή η διεύθυνση που οι χρήστες θα εισάγουν στην γραμμή διεύθυνσης του περιηγητή, για να έχουν πρόσβαση στου Moodle.</p>
<p>Δεν είναι δυνατόν να έχετε πρόβαση στο Moodle χρησιμοποιώντας πολλαπλές διευθύνσεις. Εάν ο ιστότοπος θα είναι προσβάσιμος μέσω πολλαπλών διευθύνσεων τότε επιλέξτε την ευκολότερη και εγκαταστήστε μια μόνιμη ανακατεύθυνση για καθεμία από τις άλλες διευθύνσεις.</p>
<p>Εάν ο ιστότοπός σας είναι προσβάσιμος τόσο από το Διαδίκτυο όσο και από ένα εσωτερικό δίκτυο (που συχνά λέγεται intranet) τότε χρησιμοποιήστε εδώ την δημόσια διεύθυνση.</p>
<p>Αν η τρέχουσα διεύθυνση δεν είναι σωστή, παρακαλούμε αλλάξτε την URL διεύθυνση στην γραμμή διευθύνσεων του περιηγητή σας και επανεκκινήστε την εγκατάσταση.</p>';
$string['pathsunsecuredataroot'] = 'Η τοποθεσία του Φάκελου Δεδομένων δεν είναι ασφαλής';
$string['pathswrongadmindir'] = 'Ο φάκελος Admin δεν υπάρχει';
$string['pgsqlextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση PGSQL, έτσι ώστε να μπορεί να επικοινωνεί με το PostgreSQL. Παρακαλούμε ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['phpextension'] = 'Επέκταση {$a} της PHP';
$string['phpversion'] = 'Έκδοση της PHP';
$string['phpversionhelp'] = 'p>Το Moodle απαιτεί η έκδοση της PHP να είναι τουλάχιστον 5.6.5 ή 7.1 (η 7.0.x έχει κάποιους περιορισμούς στη μηχανή).</p>
<p>Αυτή τη στιγμή έχετε την έκδοση {$a}</p>
<p>Πρέπει να αναβαθμίσετε την PHP ή να μεταφερθείτε σε έναν κεντρικό Η/Υ με μια νεότερη έκδοση της PHP!</p>';
$string['releasenoteslink'] = 'Για πληροφορίες σχετικά με αυτή την έκδοση του Moodle, παρακαλούμε δείτε τις σημειώσεις διανομής/έκδοσης στο {$a}';
$string['safemode'] = 'Ασφαλής λειτουργία';
$string['safemodeerror'] = 'Το Moodle μπορεί να έχει προβλήματα με την κατάσταση ασφαλούς λειτουργίας ενεργοποιημένη';
$string['safemodehelp'] = '<p>Το Moodle μπορεί να έχει διάφορα προβλήματα με την ασφαλή κατάσταση λειτουργίας ενεργοποιημένη, όχι ελάχιστο το οποίων είναι, το να μην μπορεί να δημιουργήσει νέα αρχεία.</p>

<p>Η ασφαλής κατάσταση λειτουργίας είναι συνήθως ενεργοποιημένη σε παρανοϊκούς δημόσιους κεντρικούς υπολογιστές ιστού, οπότε ίσως χρειαστεί να βρείτε ένα νέο υπολογιστή ιστού για να φιλοξενήσει τον ιστότοπό σας.</p>

<p>Μπορείτε αν θέλετε να συνεχίσετε με την εγκατάσταση, ωστόσο να είστε προετοιμασμένοι για προβλήματα στο μέλλον.</p>';
$string['sessionautostart'] = 'Αυτόματη έναρξη συνόδου';
$string['sessionautostarterror'] = 'Αυτό πρέπει να είναι απενεργοποιημένο';
$string['sessionautostarthelp'] = '<p>Το Moodle απαιτεί την υποστήριξη συνόδων και δεν μπορεί να λειτουργήσει χωρίς αυτήν.</p>

<p>Οι σύνοδοι μπορούν να ενεργοποιηθούν στο αρχείο php.ini ... αναζητήστε την παράμετρο session.auto_start</p>';
$string['sqliteextensionisnotpresentinphp'] = 'Η PHP δεν έχει ρυθμιστεί σωστά με την επέκταση SQLite. Παρακαλούμε ελέγξτε το αρχείο php.ini ή κάντε επαναμεταγλώττιση την PHP.';
$string['upgradingqtypeplugin'] = 'Αναβάθμιση πρόσθετου ερώτηση/τύπος';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Βλέπετε αυτή τη σελίδα γιατί εγκαταστήσατε και ξεκινήσατε με επιτυχία το πακέτο <strong>{$a->packname} {$a->packversion}</strong> στον υπολογιστή σας. Συγχαρητήρια!';
$string['welcomep30'] = 'Αυτή η έκδοση/διανομή <strong>{$a->installername}</strong> περιλαμβάνει τις εφαρμογές για τη δημιουργία ενός περιβάλλοντος μέσα στο οποίο θα λειτουργεί το <strong>Moodle</strong>, ονομαστικά:';
$string['welcomep40'] = 'Το πακέτο περιλαμβάνει επίσης το <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Η χρήση όλων των εφαρμογών σε αυτό το πακέτο υπόκειται στις αντίστοιχες άδειες. Ολόκληρο το πακέτο <strong>{$a->installername}</strong> είναι <a href="https://www.opensource.org/docs/definition_plain.html">λογισμικό ανοικτού κώδικα</a> και διανέμεται με την <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a> άδεια.';
$string['welcomep60'] = 'Οι παρακάτω σελίδες θα σας καθοδηγήσουν με εύκολα βήματα στην εγκατάσταση και ρύθμιση του <strong>Moodle</strong> στον Η/Υ σας. Μπορείτε να δεχθείτε τις προεπιλεγμένες ρυθμίσεις ή προαιρετικά, να τις τροποποιήσετε ανάλογα με τις ανάγκες σας.';
$string['welcomep70'] = 'Πατήστε το κουμπί «Συνέχεια» για να συνεχίσετε με την εγκατάσταση του <strong>Moodle</strong>.';
$string['wwwroot'] = 'Διεύθυνση ιστού';
$string['wwwrooterror'] = 'Η «Διεύθυνση ιστού» δεν είναι έγκυρη - αυτή η εγκατάσταση του Moodle δεν φαίνεται να είναι εκεί. Η παρακάτω τιμή έχει επαναρχικοποιηθεί.';
