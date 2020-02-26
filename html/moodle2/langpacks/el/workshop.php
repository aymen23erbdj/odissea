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
 * Strings for component 'workshop', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Επανυπολογισμός βαθμών';
$string['aggregation'] = 'Συνάθροιση βαθμών';
$string['allocate'] = 'Εκχώρηση υποβολών';
$string['allocatedetails'] = 'αναμένονται: {$a->expected}<br />υποβλήθηκαν: {$a->submitted}<br />προς εκχώρηση: {$a->allocate}';
$string['allocation'] = 'Εκχώρηση υποβολής';
$string['allocationconfigured'] = 'Η εκχώρηση ρυθμίστηκε';
$string['allocationdone'] = 'Η εκχώρηση πραγματοποιήθηκε';
$string['allocationerror'] = 'Σφάλμα εκχώρησης';
$string['allowedfiletypesforoverallfeedback'] = 'Επιτρεπόμενοι τύποι αρχείου συνημμένου ανατροφοδότησης';
$string['allowedfiletypesforoverallfeedback_help'] = 'Οι τύποι αρχείων συνημμένου ανατροφοδότησης μπορούν να περιορίζονται παρέχοντας μια λίστα επιτρεπόμενων τύπων αρχείων. Αν το πεδίο μείνει κενό τότε όλοι οι τύποι αρχείων επιτρέπονται.';
$string['allowedfiletypesforoverallfeedback_link'] = 'διαχείριση/εργαλείο/τύποιαρχείων/ευρετήριο';
$string['allowedfiletypesforsubmission'] = 'Επιτρεπόμενοι τύποι αρχείων συνημμένων υποβολής';
$string['allowedfiletypesforsubmission_help'] = 'Οι τύποι αρχείων συνημμένων υποβολής μπορούν να περιορίζονται παρέχοντας μια λίστα επιτρεπόμενων τύπων αρχείων. Αν το πεδίο μείνει κενό τότε όλοι οι τύποι αρχείων επιτρέπονται.';
$string['allowedfiletypesforsubmission_link'] = 'διαχείριση/εργαλείο/τύποιαρχείων/ευρετήριο';
$string['allsubmissions'] = 'Όλες οι υποβολές ({$a})';
$string['alreadygraded'] = 'Ήδη βαθμολογημένο';
$string['areaconclusion'] = 'Κείμενο κατάληξης';
$string['areainstructauthors'] = 'Οδηγίες για την υποβολή';
$string['areainstructreviewers'] = 'Οδηγίες για την αξιολόγηση';
$string['areaoverallfeedbackattachment'] = 'Συνημμένα συνολικής ανατροφοδότησης';
$string['areaoverallfeedbackcontent'] = 'Κείμενα συνολικής ανατροφοδότησης';
$string['areasubmissionattachment'] = 'Συνημμένα υποβολής';
$string['areasubmissioncontent'] = 'Κείμενα υποβολής';
$string['assess'] = 'Αξιολόγηση';
$string['assessedexample'] = 'Αξιολογημένο παράδειγμα υποβολής';
$string['assessedsubmission'] = 'Αξιολογημένη υποβολή';
$string['assessingexample'] = 'Αξιολόγηση παραδείγματος υποβολής...';
$string['assessingsubmission'] = 'Αξιολόγηση υποβολής...';
$string['assessment'] = 'Αξιολόγηση';
$string['assessmentby'] = 'από τον/την <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Αξιολόγηση από τον/την {$a}';
$string['assessmentbyyourself'] = 'Η αξιολόγησή σας';
$string['assessmentdeleted'] = 'Ακύρωση εκχώρησης αξιολόγησης';
$string['assessmentend'] = 'Καταληκτική ημερομηνία αξιολόγησης';
$string['assessmentendbeforestart'] = 'Η προθεσμία για την αξιολόγηση δεν μπορεί να προσδιοριστεί πριν από την ημερομηνία έναρξης αξιολόγησης';
$string['assessmentenddatetime'] = 'Προθεσμία αξιολόγησης: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} προθεσμία για αξιολόγηση';
$string['assessmentform'] = 'Φόρμα αξιολόγησης';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Αξιολόγηση</a> της <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Αξιολόγηση αναφοράς';
$string['assessmentreferenceconflict'] = 'Δεν είναι δυνατόν να αξιολογήσετε ένα παράδειγμα υποβολής για την οποία υποβάλατε μια αξιολόγηση αναφοράς.';
$string['assessmentreferenceneeded'] = 'Πρέπει να αξιολογήσετε αυτό το παράδειγμα υποβολής για να δώσετε μια αξιολόγηση αναφοράς. Κάντε κλικ στο κουμπί «Συνέχεια» για να αξιολογήσετε την υποβολή.';
$string['assessments'] = 'Αξιολογήσεις';
$string['assessmentsettings'] = 'Ρυθμίσεις αξιολόγησης';
$string['assessmentstart'] = 'Ανοιχτό για αξιολόγηση από';
$string['assessmentstartdatetime'] = 'Ανοιχτό για αξιολόγηση από {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} έναρξη για αξιολόγηση';
$string['assessmentweight'] = 'Συντελεστής βαρύτητας αξιολόγησης';
$string['assignedassessments'] = 'Υποβολές προς αξιολόγηση που έχουν ανατεθεί';
$string['assignedassessmentsnone'] = 'Δεν σας έχει ανατεθεί υποβολή για αξιολόγηση';
$string['backtoeditform'] = 'Επιστροφή στη φόρμα επεξεργασίας';
$string['byfullname'] = 'από τον/την <a href="{$a->url}">{$a->name}</a>';
$string['byfullnamewithoutlink'] = 'από τον/την {$a}';
$string['calculategradinggrades'] = 'Υπολογίστε τους βαθμούς αξιολόγησης';
$string['calculategradinggradesdetails'] = 'αναμενόμενo: {$a->expected}<br />υπολογιζόμενο: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Υπολογίστε τους βαθμούς υποβολής';
$string['calculatesubmissiongradesdetails'] = 'αναμενόμενo: {$a->expected}<br />υπολογιζόμενο: {$a->calculated}';
$string['chooseuser'] = 'Επιλέξτε χρήστη...';
$string['clearaggregatedgrades'] = 'Διαγράψτε όλους τους συναθροισμένους βαθμούς';
$string['clearaggregatedgradesconfirm'] = 'Σίγουρα θέλετε να εκκαθαρίσετε τους υπολογισμένους βαθμούς για υποβολές και βαθμούς για αξιολόγηση;';
$string['clearaggregatedgrades_help'] = 'Οι συναθροισμένοι βαθμοί υποβολής και οι βαθμοί αξιολόγησης θα επαναρχικοποιηθούν. Μπορείτε να υπολογίσετε εκ νέου αυτούς τους βαθμούς από την αρχή στη φάση αξιολόγησης της βαθμολόγησης ξανά.';
$string['clearassessments'] = 'Καθαρισμός αξιολογήσεων';
$string['clearassessmentsconfirm'] = 'Σίγουρα θέλετε να διαγράψετε όλους τους βαθμούς αξιολόγησης; Δεν θα έχετε τη δυνατότητα να επαναφέρετε τις πληροφορίες μόνοι σας. Οι εξεταστές θα πρέπει να επαναξιολογήσουν τις υποβολές που τους εκχωρήθηκαν.';
$string['clearassessments_help'] = 'Οι υπολογισθείσες βαθμίδες υποβολής και βαθμοί αξιολόγησης θα επαναρυθμιστούν. Οι πληροφορίες σχετικά με τον τρόπο με τον οποίο πληρούνται τα έντυπα αξιολόγησης εξακολουθούν να τηρούνται, αλλά όλοι οι αναθεωρητές πρέπει να ανοίξουν ξανά τη φόρμα αξιολόγησης και να την αποθηκεύσουν ξανά για να ξαναφθάνουν τα αποτελέσματα.';
$string['conclusion'] = 'Κατάληξη';
$string['conclusion_help'] = 'Το κείμενο κατάληξης εμφανίζεται στους συμμετέχοντες στο τέλος της δραστηριότητας.';
$string['configexamplesmode'] = 'Προεπιλεγμένος τρόπος αξιολόγησης παραδειγμάτων στα εργαστήρια';
$string['configgrade'] = 'Προεπιλεγμένος μέγιστος βαθμός για υποβολή στα εργαστήρια';
$string['configgradedecimals'] = 'Προεπιλεγμένος αριθμός ψηφίων που πρέπει να εμφανίζονται μετά την υποδιαστολή κατά την εμφάνιση των βαθμών.';
$string['configgradinggrade'] = 'Προεπιλεγμένος μέγιστος βαθμός για την αξιολόγηση στα εργαστήρια';
$string['configmaxbytes'] = 'Προεπιλεγμένο μέγιστο μέγεθος αρχείου υποβολής για όλα τα εργαστήρια στον ιστότοπο (υπόκειται στα όρια του μαθήματος και άλλες τοπικές ρυθμίσεις)';
$string['configstrategy'] = 'Προεπιλεγμένη στρατηγική βαθμολόγησης για τα εργαστήρια';
$string['createsubmission'] = 'Έναρξη προετοιμασίας της υποβολής σας';
$string['daysago'] = '{$a} ημέρες πριν';
$string['daysleft'] = '{$a} μέρες ακόμα';
$string['daystoday'] = 'σήμερα';
$string['daystomorrow'] = 'αύριο';
$string['daysyesterday'] = 'εχθές';
$string['deadlinesignored'] = 'Οι χρονικοί περιορισμοί δεν εφαρμόζονται σε εσάς';
$string['deletesubmission'] = 'Διαγραφή υποβολής';
$string['editassessmentform'] = 'Επεξεργασία φόρμας αξιολόγησης';
$string['editassessmentformstrategy'] = 'Επεξεργασία φόρμας αξιολόγησης ({$a})';
$string['editingassessmentform'] = 'Επεξεργασία φόρμας αξιολόγησης...';
$string['editingsubmission'] = 'Επεξεργασία υποβολής...';
$string['editsubmission'] = 'Επεξεργασία υποβολής';
$string['err_multiplesubmissions'] = 'Κατά την επεξεργασία αυτής της φόρμας έχει αποθηκευτεί μια άλλη έκδοση της υποβολής. Οι πολλαπλές υποβολές ανά χρήστη δεν επιτρέπονται.';
$string['err_removegrademappings'] = 'Δεν είναι δυνατή η κατάργηση των αχρησιμοποίητων αντιστοιχιών βαθμού';
$string['err_unknownfileextension'] = 'Άγνωστη επέκταση αρχείου: {$a}';
$string['err_wrongfileextension'] = 'Κάποια αρχεία ({$a->wrongfiles}) δεν μπορούν να ανεβούν. Επιτρέπονται μόνο οι τύποι αρχείων {$a->whitelist}.';
$string['evaluategradeswait'] = 'Περιμένετε μέχρι να αποτιμηθούν οι αξιολογήσεις και να υπολογιστούν οι βαθμοί';
$string['evaluation'] = 'Αξιολόγηση βαθμολόγησης';
$string['evaluationmethod'] = 'Μέθοδος αποτίμησης βαθμολόγησης';
$string['evaluationmethod_help'] = 'Η μέθοδος αποτίμησης της βαθμολόγησης καθορίζει τον τρόπο με τον οποίο υπολογίζεται ο βαθμός της αξιολόγησης. Μπορείτε να το αφήσετε να επανυπολογίζει τους βαθμούς επανειλημμένα με διαφορετικές ρυθμίσεις εκτός αν είστε ικανοποιημένοι με το αποτέλεσμα.';
$string['evaluationsettings'] = 'Ρυθμίσεις αποτίμησης αξιολόγησης';
$string['eventassessableuploaded'] = 'Μια υποβολή ανέβηκε.';
$string['eventassessmentevaluated'] = 'Η αξιολόγηση αποτιμήθηκε';
$string['eventassessmentevaluationsreset'] = 'Επαναφορά αποτιμήσεων αξιολόγησης';
$string['eventassessmentreevaluated'] = 'Η αξιολόγηση επαναξιολογήθηκε';
$string['eventphaseswitched'] = 'Εναλλαγή φάσης';
$string['eventsubmissionassessed'] = 'Η υποβολή αξιολογήθηκε';
$string['eventsubmissionassessmentsreset'] = 'Οι αξιολογήσεις υποβολής εκκαθαρίστηκαν';
$string['eventsubmissioncreated'] = 'Η υποβολή δημιουργήθηκε';
$string['eventsubmissiondeleted'] = 'Η υποβολή διαγράφηκε';
$string['eventsubmissionreassessed'] = 'Η υποβολή ξανα-αξιολογήθηκε';
$string['eventsubmissionupdated'] = 'Η υποβολή ενημερώθηκε';
$string['eventsubmissionviewed'] = 'Η υποβολή εμφανίστηκε';
$string['example'] = 'Παράδειγμα υποβολής';
$string['exampleadd'] = 'Προσθήκη παραδείγματος υποβολής';
$string['exampleassess'] = 'Αξιολόγηση παραδείγματος υποβολής';
$string['exampleassessments'] = 'Παραδείγματα υποβολής προς αξιολόγηση';
$string['exampleassesstask'] = 'Παραδείγματα αξιολόγησης';
$string['exampleassesstaskdetails'] = 'αναμενόμενος: {$a->expected}<br />αποτίμηση: {$a->assessed}';
$string['examplecomparing'] = 'Σύγκριση αξιολογήσεων παραδειγμάτων υποβολών';
$string['exampledelete'] = 'Διαγραφή παραδείγματος';
$string['exampledeleteconfirm'] = 'Είστε σίγουροι ότι θέλετε να διαγραφεί το ακόλουθο παράδειγμα υποβολής; Κάντε κλικ στο πλήκτρο «Συνέχεια» για να διαγραφεί η υποβολή.';
$string['exampleedit'] = 'Επεξεργασία παραδείγματος';
$string['exampleediting'] = 'Επεξεργασία παραδείγματος...';
$string['exampleneedassessed'] = 'Πρέπει πρώτα να αξιολογήσετε όλα τα παραδείγματα υποβολών';
$string['exampleneedsubmission'] = 'Πρέπει πρώτα να υποβάλετε την εργασία σας και να αξιολογήσετε όλα τα παραδείγματα υποβολών';
$string['examplesbeforeassessment'] = 'Τα παραδείγματα είναι διαθέσιμα μετά την δική μας υποβολή και πρέπει να αξιολογηθούν πριν την αξιολόγηση (ομοτίμων) των υπολοίπων (εργασιών συμμαθητών)';
$string['examplesbeforesubmission'] = 'Τα παραδείγματα πρέπει να αξιολογούνται πριν την δική μας υποβολή';
$string['examplesmode'] = 'Τρόπος αξιολόγησης παραδειγμάτων';
$string['examplesubmissions'] = 'Παραδείγματα υποβολών';
$string['examplesvoluntary'] = 'Η αξιολόγηση στα παραδείγματα υποβολών είναι προαιρετική';
$string['exportsubmission'] = 'Εξαγωγή αυτής της σελίδας';
$string['feedbackauthor'] = 'Ανατροφοδότηση για τον συγγραφέα';
$string['feedbackauthorattachment'] = 'Συνημμένο';
$string['feedbackby'] = 'Ανατροφοδότηση από {$a}';
$string['feedbackreviewer'] = 'Ανατροφοδότηση για τον αξιολογητή';
$string['feedbacksettings'] = 'Επανατροφοδότηση';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Βαθμοί που δόθηκαν';
$string['gradecalculated'] = 'Υπολογισμός βαθμού για υποβολή';
$string['gradedecimals'] = 'Θέσεις δεκαδικών στους βαθμούς';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Βαθμός: {$a->received} από {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (αξιολόγηση)';
$string['gradeitemsubmission'] = '{$a->workshopname} (υποβολή)';
$string['gradeover'] = 'Παράκαμψη βαθμού για υποβολή';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Αναφορά βαθμών εργαστηρίου';
$string['gradetopassgrading'] = 'Βαθμός επιτυχίας αξιολόγησης';
$string['gradetopasssubmission'] = 'Βαθμός επιτυχίας υποβολής (περνάει)';
$string['gradinggrade'] = 'Βαθμός για την αξιολόγηση';
$string['gradinggradecalculated'] = 'Υπολογισμένος βαθμός για την αξιολόγηση';
$string['gradinggrade_help'] = 'Αυτή η ρύθμιση καθορίζει τον μέγιστο βαθμό που μπορεί να ληφθεί για την αξιολόγηση υποβολής.';
$string['gradinggradeof'] = 'Βαθμός για την αξιολόγηση (από {$a})';
$string['gradinggradeover'] = 'Παράκαμψη βαθμού για εκτίμηση';
$string['gradingsettings'] = 'Ρυθμίσεις βαθμολόγησης';
$string['groupnoallowed'] = 'Δεν (σας) επιτρέπεται η πρόσβαση σε οποιαδήποτε ομάδα σε αυτό το εργαστήριο';
$string['iamsure'] = 'Ναι, είμαι βέβαιος';
$string['indicator:cognitivedepth'] = 'Βάθος κατανόησης Εργαστηρίου';
$string['indicator:cognitivedepth_help'] = 'Αυτός ο δείκτης βασίζεται στο βάθος κατανόησης που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα Εργαστηρίου.';
$string['indicator:socialbreadth'] = 'Κοινωνικό εύρος Εργαστηρίου';
$string['indicator:socialbreadth_help'] = 'Αυτός ο δείκτης βασίζεται στο κοινωνικό εύρος που επιτεύχθηκε από τον μαθητή σε μια δραστηριότητα Εργαστηρίου.';
$string['info'] = 'Πληροφορίες';
$string['instructauthors'] = 'Οδηγίες για την υποβολή';
$string['instructreviewers'] = 'Οδηγίες για την αξιολόγηση';
$string['introduction'] = 'Περιγραφή';
$string['latesubmissions'] = 'Καθυστερημένες υποβολές';
$string['latesubmissionsallowed'] = 'Επιτρέπονται καθυστερημένες υποβολές';
$string['latesubmissions_desc'] = 'Επιτρέπονται υποβολές μετά την καταληκτική ημερομηνία';
$string['latesubmissions_help'] = 'Εάν ενεργοποιηθεί, ένας συγγραφέας μπορεί να υποβάλει την δουλειά του μετά την προθεσμία υποβολών ή κατά τη διάρκεια της φάσης αξιολόγησης. Στις καθυστερημένες υποβολές όμως δεν μπορούν να γίνουν αλλαγές.';
$string['maxbytes'] = 'Μέγιστο μέγεθος συνημμένου υποβολής';
$string['modulename'] = 'Εργαστήριο';
$string['modulename_help'] = 'Το άρθρωμα δραστηριότητας εργαστηρίου επιτρέπει τη συλλογή, την ανασκόπηση και την αξιολόγηση από ομοτίμους της εργασίας των μαθητών. Οι μαθητές μπορούν να υποβάλουν οποιοδήποτε ψηφιακό περιεχόμενο (αρχεία), όπως έγγραφα ή υπολογιστικά φύλλα, και μπορούν επίσης να πληκτρολογήσουν κείμενο απευθείας σε ένα πεδίο χρησιμοποιώντας τον επεξεργαστή κειμένου. Οι υποβολές αξιολογούνται χρησιμοποιώντας μια φόρμα αξιολόγησης πολλαπλών κριτηρίων που ορίζεται από τον διδάσκοντα. Στη διαδικασία αξιολόγησης από ομοτίμους και στην κατανόηση του εντύπου αξιολόγησης μπορεί να γίνει εξάσκηση εκ των προτέρων με παραδείγματα υποβολών που παρέχονται από τον διδάσκοντα, μαζί με μια αξιολόγηση αναφοράς. Οι μαθητές έχουν την ευκαιρία να αξιολογήσουν μία ή περισσότερες από τις υποβολές των συμμαθητών τους. Οι υποβολές και οι αξιολογήσεις μπορεί να γίνονται ανώνυμα εάν απαιτείται. Οι μαθητές παίρνουν δύο βαθμούς σε μια εργαστηριακή δραστηριότητα - ένα βαθμό για την υποβολή τους και ένα βαθμό για την αξιολόγηση των υποβολών τους. Και οι δύο βαθμοί καταγράφονται στο βαθμολόγιο.';
$string['modulename_link'] = 'άρθρωμα/εργαστήριο/εμφάνιση';
$string['modulenameplural'] = 'Εργαστήρια';
$string['myassessments'] = 'Οι αξιολογήσεις μου';
$string['mysubmission'] = 'Η υποβολή μου';
$string['nattachments'] = 'Μέγιστος αριθμός συνημμένων ανά υποβολή';
$string['noexamples'] = 'Δεν υπάρχουν παραδείγματα για αυτό το εργαστήριο';
$string['noexamplesformready'] = 'Πρέπει να ορίσετε τη φόρμα αξιολόγησης πριν να παρέχετε παραδείγματα υποβολής';
$string['nogradeyet'] = 'Χωρίς βαθμό ακόμη';
$string['nosubmissionfound'] = 'Δεν βρέθηκε υποβολή για αυτόν τον χρήστη';
$string['nosubmissions'] = 'Δεν υπάρχουν υποβολές ακόμα για αυτό το εργαστήριο';
$string['nosubmissiontype'] = 'Τουλάχιστον ένας τύπος υποβολής πρέπει να είναι διαθέσιμος';
$string['notassessed'] = 'Δεν έχει αξιολογηθεί ακόμη';
$string['nothingfound'] = 'Τίποτα για εμφάνιση';
$string['nothingtoreview'] = 'Τίποτα για ανασκόπηση';
$string['notoverridden'] = 'Δεν παρακάμπτεται';
$string['noworkshops'] = 'Δεν υπάρχουν εργαστήρια στο μάθημα';
$string['noyoursubmission'] = 'Δεν έχετε υποβάλει την εργασία σας ακόμα';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Συνολική ανατροφοδότηση';
$string['overallfeedbackfiles'] = 'Μέγιστος αριθμός συνημμένων συνολικής ανατροφοδότησης';
$string['overallfeedbackmaxbytes'] = 'Μέγιστο μέγεθος συνημμένου συνολικής ανατροφοδότησης';
$string['overallfeedbackmode'] = 'Κατάσταση λειτουργίας συνολικής ανατροφοδότησης';
$string['overallfeedbackmode_0'] = 'Απενεργοποιημένο';
$string['overallfeedbackmode_1'] = 'Ενεργοποιημένο και προαιρετικό';
$string['overallfeedbackmode_2'] = 'Ενεργοποιημένο και απαιτούμενο';
$string['overallfeedbackmode_help'] = 'Αν ενεργοποιηθεί, εμφανίζεται ένα πεδίο κειμένου στο κάτω μέρος της φόρμας αξιολόγησης. Οι αξιολογητές μπορούν να υποβάλουν τη συνολική αξιολόγηση της υποβολής εκεί ή να παράσχουν επιπρόσθετες εξηγήσεις για την εκτίμησή τους.';
$string['page-mod-workshop-x'] = 'Οποιαδήποτε σελίδα αρθρώματος εργαστηρίου';
$string['participant'] = 'Συμμετέχοντας';
$string['participantrevierof'] = 'Ο συμμετέχων είναι εξεταστής του/της';
$string['participantreviewedby'] = 'Ο συμμετέχων εξετάζεται από τον/την';
$string['phaseassessment'] = 'Φάση αξιολόγησης';
$string['phaseclosed'] = 'Λήξη';
$string['phaseevaluation'] = 'Φάση αποτίμησης βαθμολόγησης';
$string['phasesetup'] = 'Φάση εγκατάστασης';
$string['phasesoverlap'] = 'Η φάση υποβολής και η φάση αξιολόγησης δεν μπορούν να αλληλεπικαλύπτονται';
$string['phasesubmission'] = 'Φάση υποβολής';
$string['pluginadministration'] = 'Διαχείριση εργαστηρίου';
$string['pluginname'] = 'Εργαστήριο';
$string['prepareexamples'] = 'Προετοιμάστε παραδείγματα υποβολών';
$string['previewassessmentform'] = 'Προεπισκόπηση';
$string['privacy:metadata:aggregatedgradinggrade'] = 'Συναθροισμένος βαθμός για όλες τις αξιολογήσεις που πραγματοποίησε ο χρήστης στη συγκεκριμένη δραστηριότητα του εργαστηρίου';
$string['privacy:metadata:assessmentgrade'] = 'Συναθροισμένη βαθμολογία για την υποβολή που προτείνεται από την παρούσα αξιολόγηση';
$string['privacy:metadata:assessmentgradinggrade'] = 'Βαθμός για την παροχή αυτής της αξιολόγησης';
$string['privacy:metadata:assessmentgradinggradeover'] = 'Χειροκίνητη παράκαμψη της τιμής του βαθμού για την παροχή αυτής της εκτίμησης/αξιολόγησης';
$string['privacy:metadata:assessmentid'] = 'Αναγνωριστικό της εργασίας';
$string['privacy:metadata:authorid'] = 'Αναγνωριστικό του συγγραφέα της υποβολής';
$string['privacy:metadata:dimensiongrade'] = 'Βαθμός στη δεδομένη διάσταση αξιολόγησης';
$string['privacy:metadata:dimensionid'] = 'Αναγνωριστικό της διάστασης αξιολόγησης';
$string['privacy:metadata:example'] = 'Εάν αυτή η εγγραφή αντιπροσωπεύει παράδειγμα υποβολής';
$string['privacy:metadata:feedbackauthor'] = 'Ανατροφοδότηση για τον συγγραφέα';
$string['privacy:metadata:feedbackauthorformat'] = 'Μορφότυπος κειμένου της ανατροφοδότησης για τον συγγραφέα';
$string['privacy:metadata:feedbackreviewer'] = 'Ανατροφοδότηση για τον χρήστη που παρέχει την αξιολόγηση';
$string['privacy:metadata:feedbackreviewerformat'] = 'Μορφότυπος κειμένου της ανατροφοδότησης για τον χρήστη που παρέχει την αξιολόγηση';
$string['privacy:metadata:late'] = 'Αν η υποβολή έχει υποβληθεί μετά την εκπνοή της προθεσμίας';
$string['privacy:metadata:peercomment'] = 'Σχόλιο σχετικά με το βαθμό που δόθηκε από τον χρήστη που παρέχει την αξιολόγηση';
$string['privacy:metadata:peercommentformat'] = 'Μορφότυπος κειμένου του σχολίου σχετικά με το βαθμό που δόθηκε';
$string['privacy:metadata:preference:perpage'] = 'Αριθμός υποβολών που ο χρήστης προτιμά να δει σε μια σελίδα';
$string['privacy:metadata:published'] = 'Αν η υποβολή πρέπει να δημοσιευθεί σε όλους τους συμμετέχοντες μόλις κλείσει το εργαστήριο';
$string['privacy:metadata:reviewerid'] = 'Αναγνωριστικό του χρήστη που παρέχει την αξιολόγηση';
$string['privacy:metadata:strategy'] = 'Όνομα υπο-πρόσθετου της βαθμολογικής στρατηγικής που ερμηνεύει τις τιμές εγγραφής';
$string['privacy:metadata:submissioncontent'] = 'Περιεχόμενο της υποβολής';
$string['privacy:metadata:submissioncontentformat'] = 'Μορφότυπος κειμένου του περιεχομένου υποβολής';
$string['privacy:metadata:submissiongrade'] = 'Συναθροισμένος βαθμός για την υποβολή γραμμένος ως δεκαδικός αριθμός από το διάστημα 0..100';
$string['privacy:metadata:submissiongradeover'] = 'Χειροκίνητη παράκαμψη της τιμής της συναθροισμένης βαθμολογίας';
$string['privacy:metadata:submissionid'] = 'Αναγνωριστικό της υποβολής';
$string['privacy:metadata:submissiontitle'] = 'Τίτλος της υποβολής';
$string['privacy:metadata:subsystem:corefiles'] = 'Το άρθρωμα «Εργαστήριο» αποθηκεύει τα αρχεία που είναι ενσωματωμένα/προσαρτημένα στο κείμενο υποβολής';
$string['privacy:metadata:subsystem:coreplagiarism'] = 'Το άρθρωμα εργαστηρίου διαθέτει ενσωματωμένη υποστήριξη για συστήματα πρόληψης λογοκλοπής';
$string['privacy:metadata:timeaggregated'] = 'Όταν ο συναθροισμένος βαθμός υπολογίστηκε τελευταία φορά';
$string['privacy:metadata:timecreated'] = 'Όταν αυτή η εγγραφή δημιουργήθηκε στη βάση δεδομένων';
$string['privacy:metadata:timemodified'] = 'Πότε τροποποιήθηκε αυτή η εγγραφή στην βάση δεδομένων';
$string['privacy:metadata:userid'] = 'Αναγνωριστικό του χρήστη για τον οποίο υπολογίζεται ο συναθροισμένος βαθμός';
$string['privacy:metadata:weight'] = 'Συντελεστής βαρύτητας της αξιολόγησης';
$string['privacy:metadata:workshopaggregations'] = 'Διατηρεί συναθροισμένους βαθμούς για αξιολόγηση';
$string['privacy:metadata:workshopassessments'] = 'Διατηρεί πληροφορίες σχετικά με τις εκχωρήσεις αξιολόγησης των υποβολών αρθρώματος εργαστηρίου';
$string['privacy:metadata:workshopgrades'] = 'Διατηρεί πληροφορίες για το πώς τα έντυπα αξιολόγησης συμπληρώθηκαν με βαθμούς και σχόλια';
$string['privacy:metadata:workshopid'] = 'Αναγνωριστικό της δραστηριότητας του εργαστηρίου';
$string['privacy:metadata:workshopsubmissions'] = 'Διατηρεί πληροφορίες σχετικά με υποβολές αρθρώματος εργαστηρίου';
$string['privacy:request:delete:content'] = 'Το περιεχόμενο διαγράφηκε κατόπιν αιτήματος του χρήστη.';
$string['privacy:request:delete:title'] = '[Διαγράφηκε]';
$string['publishedsubmissions'] = 'Δημοσιευμένες υποβολές';
$string['publishsubmission'] = 'Δημοσίευση υποβολής';
$string['publishsubmission_help'] = 'Οι δημοσιευμένες υποβολές διατίθενται στους υπόλοιπους όταν το εργαστήριο είναι κλειστό.';
$string['reassess'] = 'Επαναξιολόγηση';
$string['receivedgrades'] = 'Βαθμοί που ελήφθησαν';
$string['recentassessments'] = 'Εργασίες εργαστηρίου:';
$string['recentsubmissions'] = 'Υποβολές εργαστηρίου';
$string['resetassessments'] = 'Διαγραφή όλων των αξιολογήσεων';
$string['resetassessments_help'] = 'Μπορείτε να διαλέξετε να διαγράψετε μόνο τις αξιολογήσεις που έχουν εκχωρηθεί χωρίς να επηρεάσετε τις υποβολές. Εάν πρόκειται να διαγραφούν οι υποβολές, οι αξιολογήσεις τους θα διαγραφούν σιωπηρά και αυτή η επιλογή θα αγνοηθεί. Σημειώστε ότι αυτό περιλαμβάνει επίσης αξιολογήσεις των παραδειγμάτων υποβολής.';
$string['resetphase'] = 'Εναλλαγή στη φάση εγκατάστασης';
$string['resetphase_help'] = 'Εάν είναι ενεργοποιημένο, όλα τα εργαστήρια θα τεθούν στην αρχική φάση εγκατάστασης.';
$string['resetsubmissions'] = 'Διαγράψτε όλες τις υποβολές';
$string['resetsubmissions_help'] = 'Όλες οι υποβολές και οι αξιολογήσεις τους θα διαγραφούν. Αυτό δεν επηρεάζει τις υποβολές παραδειγμάτων.';
$string['saveandclose'] = 'Αποθήκευση και κλείσειμο';
$string['saveandcontinue'] = 'Αποθήκευσε και συνέχισε την επεξεργασία';
$string['saveandpreview'] = 'Αποθήκευση και προεπισκόπηση';
$string['saveandshownext'] = 'Αποθήκευση και εμφάνιση επόμενου';
$string['search:activity'] = 'Εργαστήριο - πληροφορίες δραστηριότητας';
$string['selfassessmentdisabled'] = 'Η αυτοαξιολόγηση είναι απενεργοποιημένη';
$string['showingperpage'] = 'Εμφάνιση {$a} στοιχείων ανά σελίδα';
$string['showingperpagechange'] = 'Αλλαγή...';
$string['someuserswosubmission'] = 'Υπάρχει ένας τουλάχιστον συγγραφέας που δεν έχει υποβάλει ακόμα την εργασία του';
$string['sortasc'] = 'Αύξουσα ταξινόμηση';
$string['sortdesc'] = 'Φθίνουσα ταξινόμηση';
$string['strategy'] = 'Στρατηγική βαθμολόγησης';
$string['strategyhaschanged'] = 'Η στρατηγική βαθμολόγησης των εργαστηρίων έχει αλλάξει μετά το άνοιγμα της φόρμας για επεξεργασία.';
$string['strategy_help'] = 'Η στρατηγική βαθμολόγησης καθορίζει την μορφή αξιολόγησης που χρησιμοποιείται και τη μέθοδο βαθμολόγησης των υποβολών. Υπάρχουν 4 επιλογές:

* Αθροιστική βαθμολόγηση - Δίνονται σχόλια και ένας βαθμός όσον αφορά καθορισμένες πτυχές.
* Σχόλια - Δίνονται σχόλια σύμφωνα με τις καθορισμένες πτυχές αλλά δεν μπορεί να δοθεί βαθμός.
* Αριθμός λαθών - Δίνονται σχόλια και μια αξιολόγηση τύπου ναι/όχι σύμφωνα με τους καθορισμένους ισχυρισμούς.
* Ρουμπρίκα - Δίνεται μια αξιολόγηση επιπέδου, σύμφωνα με καθορισμένα κριτήρια (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric).';
$string['submission'] = 'Υποβολή';
$string['submissionattachment'] = 'Συνημμένο';
$string['submissionby'] = 'Υποβολή από {$a}';
$string['submissioncontent'] = 'Περιεχόμενο υποβολής';
$string['submissiondeleteconfirm'] = 'Σίγουρα θέλετε να διαγράψετε την παρακάτω υποβολή;';
$string['submissiondeleteconfirmassess'] = 'Σίγουρα θέλετε να διαγράψετε την παρακάτω υποβολή; Σημειώστε ότι αυτό θα διαγράψει επίσης {$a->count} αξιολογήσεις που σχετίζονται με αυτήν την υποβολή, οι οποίες ενδέχεται να επηρεάσουν τους βαθμούς των εξεταστών.';
$string['submissionend'] = 'Καταληκτική ημερομηνία υποβολών';
$string['submissionendbeforestart'] = 'Η καταληκτική ημερομηνία υποβολών δεν μπορεί να καθοριστεί πριν από την ημερομηνία έναρξης υποβολών';
$string['submissionenddatetime'] = 'Καταληκτική ημερομηνία υποβολών: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} προθεσμία υποβολών';
$string['submissionendswitch'] = 'Μετάβαση στην επόμενη φάση μετά την προθεσμία υποβολής';
$string['submissionendswitch_help'] = 'Εάν ενεργοποιηθεί και έχει καθοριστεί η προθεσμία υποβολής, το εργαστήριο θα μεταβαίνει αυτόματα στη φάση αξιολόγησης μετά την προθεσμία υποβολής.

Αν ενεργοποιήσετε αυτήν τη λειτουργία, συνιστάται επίσης να ρυθμίσετε και τη μέθοδο προγραμματισμένης εκχώρησης. Εάν δεν εκχωρηθούν οι υποβολές, δεν μπορεί να γίνει καμία αξιολόγηση ακόμη και αν το ίδιο το εργαστήριο είναι στη φάση της αξιολόγησης.';
$string['submissiongrade'] = 'Βαθμός για την υποβολή';
$string['submissiongrade_help'] = 'Αυτή η ρύθμιση καθορίζει τον μέγιστο βαθμό που μπορεί να ληφθεί για την υποβληθείσα δουλειά.';
$string['submissiongradeof'] = 'Βαθμός για την υποβολή (από {$a})';
$string['submissionlastmodified'] = 'Τελευταία τροποποίηση';
$string['submissionrequiredcontent'] = 'Πρέπει να εισαγάγετε κάποιο κείμενο ή να προσθέσετε ένα αρχείο.';
$string['submissionrequiredfile'] = 'Πρέπει να προσθέσετε ένα αρχείο ή να εισαγάγετε κάποιο κείμενο.';
$string['submissionsettings'] = 'Ρυθμίσεις υποβολής';
$string['submissionsreport'] = 'Αναφορά υποβολών εργαστηρίου';
$string['submissionstart'] = 'Ανοιχτό για υποβολές από';
$string['submissionstartdatetime'] = 'Ανοιχτό για υποβολές από {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} έναρξη για υποβολές';
$string['submissiontitle'] = 'Τίτλος';
$string['submissiontypedisabled'] = 'Αυτός ο τύπος υποβολής είναι απενεργοποιημένος για αυτό το εργαστήριο.';
$string['submissiontypefileavailable'] = 'Επισύναψη αρχείου <span class="accesshide">διαθέσιμη</span>';
$string['submissiontypefilerequired'] = 'pan class="accesshide">Επισύναψη αρχείου </span>Απαιτείται';
$string['submissiontypes'] = 'Τύποι υποβολής';
$string['submissiontypetextavailable'] = 'Κείμενο εντός σύνδεσης <span class="accesshide">διαθέσιμο</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Κείμενο εντός σύνδεσης</span> απαιτείται';
$string['submittednotsubmitted'] = 'Υποβλήθηκαν ({$a->submitted}) / δεν υποβλήθηκαν ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Μέθοδος εκχώρησης υποβολών';
$string['subplugintype_workshopallocation_plural'] = 'Μέθοδοι εκχώρησης υποβολών';
$string['subplugintype_workshopeval'] = 'Μέθοδος αποτίμησης βαθμολόγησης';
$string['subplugintype_workshopeval_plural'] = 'Μέθοδοι αξιολόγησης βαθμολογιών';
$string['subplugintype_workshopform'] = 'Στρατηγική βαθμολόγησης';
$string['subplugintype_workshopform_plural'] = 'Στρατηγικές βαθμολόγησης';
$string['switchingphase'] = 'Αλλαγή φάσης...';
$string['switchphase'] = 'Αλλαγή φάσης';
$string['switchphase10'] = 'Μετάβαση σε φάση εγκατάστασης';
$string['switchphase10info'] = 'Πρόκειται να κάνετε το εργαστήριο να μεταβεί στην <strong>Φάση ρυθμίσεων</strong>. Σε αυτή τη φάση, οι χρήστες δεν μπορούν να τροποποιήσουν τις υποβολές τους ή τις αξιολογήσεις τους. Οι διδάσκοντες μπορούν να χρησιμοποιήσουν αυτή τη φάση για να αλλάξουν ρυθμίσεις του εργαστηρίου, να τροποποιήσουν την στρατηγική βαθμολόγησης ή να πειράξουν τις φόρμες αξιολόγησης.';
$string['switchphase20'] = 'Μετάβαση στη φάση υποβολής';
$string['switchphase20info'] = 'Πρόκειται να κάνετε το εργαστήριο να μεταβεί στην <strong>Φάση υποβολής</strong>. Οι μαθητές μπορούν να υποβάλουν τις εργασίες τους κατά τη διάρκεια αυτής της φάσης (εντός των ημερομηνιών ελέγχου πρόσβασης υποβολής, εάν έχουν οριστεί). Οι διδάσκοντες μπορούν να εκχωρήσουν υποβολές για εξέταση από ομότιμους.';
$string['switchphase30'] = 'Μετάβαση στη φάση αξιολόγησης';
$string['switchphase30auto'] = 'Το εργαστήριο θα μεταβαίνει αυτόματα στη φάση αξιολόγησης μετά από {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Πρόκειται να κάνετε το εργαστήριο να μεταβεί στην <strong>Φάση αξιολόγησης</strong>. Σε αυτή τη φάση, οι εξεταστές μπορούν να αξιολογήσουν τις υποβολές που τους έχουν εκχωρηθεί (εντός των ημερομηνιών ελέγχου πρόσβασης της αξιολόγησης, εάν έχουν οριστεί).';
$string['switchphase40'] = 'Μετάβαση στη φάση αποτίμησης';
$string['switchphase40info'] = 'Πρόκειται να κάνετε το εργαστήριο να μεταβεί στην <strong>Φάση αποτίμησης βαθμολόγησης</strong>. Σε αυτή τη φάση, οι χρήστες δεν μπορούν να τροποποιήσουν τις υποβολές τους ή τις αξιολογήσεις τους. Οι διδάσκοντες μπορούν να χρησιμοποιήσουν τα εργαλεία αποτίμησης βαθμολόγησης για να υπολογίσουν τελικούς βαθμούς και να παρέχουν ανατροφοδότηση για τους εξεταστές.';
$string['switchphase50'] = 'Κλείσιμο εργαστηρίου';
$string['switchphase50info'] = 'Πρόκειται να κλείσετε το εργαστήριο. Αυτό θα οδηγήσει σε υπολογισμό των βαθμών που εμφανίζονται στο βαθμολόγιο. Οι μαθητές μπορούν να δουν τις υποβολές τους και τις αξιολογήσεις της υποβολής τους.';
$string['switchphaseauto'] = 'Η μετάβαση έχει προγραμματιστεί';
$string['switchphasenext'] = 'Μετάβαση στην επόμενη φάση';
$string['taskassesspeers'] = 'Αξιολόγηση ομοτίμων';
$string['taskassesspeersdetails'] = 'σύνολο: {$a->total}<br />σε εκκρεμότητα: {$a->todo}';
$string['taskassessself'] = 'Αυτοαξιολόγηση';
$string['taskconclusion'] = 'Δώστε μια κατάληξη για την δραστηριότητα';
$string['taskdone'] = 'Η εργασία εκτελέστηκε';
$string['taskfail'] = 'Η εργασία απέτυχε';
$string['taskinfo'] = 'Πληροφορίες εργασίας';
$string['taskinstructauthors'] = 'Παροχή οδηγιών για την υποβολή';
$string['taskinstructreviewers'] = 'Παροχή οδηγιών για την αξιολόγηση';
$string['taskintro'] = 'Ορίστε την περιγραφή εργαστηρίου';
$string['tasksubmit'] = 'Υποβολή της εργασίας σας';
$string['tasktodo'] = 'Εργασία προς εκτέλεση';
$string['toolbox'] = 'Εργαλειοθήκη εργαστηρίου';
$string['undersetup'] = 'Το εργαστήριο αυτή τη στιγμή βρίσκεται σε κατάσταση ρυθμίσεων. Παρακαλούμε, περιμένετε μέχρι να μεταβεί στην επόμενη φάση.';
$string['useexamples'] = 'Χρήση παραδειγμάτων';
$string['useexamples_desc'] = 'Παρέχονται δείγματα από υποβολές για πρακτική (εξάσκηση) στην αξιολόγηση';
$string['useexamples_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να προσπαθήσουν να αξιολογήσουν ένα ή περισσότερα δείγματα υποβολών και να συγκρίνουν τις αξιολογήσεις τους με την αξιολόγηση αναφοράς. Ο βαθμός δεν υπολογίζεται στον βαθμό για την αξιολόγηση.';
$string['usepeerassessment'] = 'Χρήση συνεργατικής αξιολόγησης';
$string['usepeerassessment_desc'] = 'Οι εκπαιδευόμενοι μπορούν να αξιολόγουν την δουλειά των άλλων';
$string['usepeerassessment_help'] = 'Εάν ενεργοποιηθεί, σε ένα χρήστη μπορούν να εκχωρηθούν υποβολές άλλων χρηστών για να τις αξιολογήσει και θα λάβει ένα βαθμό για τις αξιολογήσεις, επιπλέον του βαθμού για την δική του υποβολή.';
$string['userdatecreated'] = 'υποβλήθηκε σε <span>{$a}</span>';
$string['userdatemodified'] = 'τροποποιήθηκε <span>{$a}</span>';
$string['userplan'] = 'Σχεδιασμός εργαστηρίου';
$string['userplanaccessibilityskip'] = 'Μετάβαση στις τρέχουσες εργασίες';
$string['userplanaccessibilitytitle'] = 'Χρονοδιάγραμμα εργαστηρίου με {$a} φάσεις';
$string['userplancurrentphase'] = 'Τρέχουσα φάση';
$string['userplan_help'] = 'Το χρονοδιάγραμμα εργαστηρίου παρουσιάζει όλες τις φάσεις της δραστηριότητας και λίστες με τις εργασίες για κάθε φάση. Η τρέχουσα φάση επισημαίνεται και η ολοκλήρωση της εργασίας υποδεικνύεται με ένα τικ (&checkmark;, &check;).';
$string['useselfassessment'] = 'Χρήση αυτο-αξιολόγησης';
$string['useselfassessment_desc'] = 'Οι μαθητές μπορούν να αξιολόγουν την δική τους δουλειά';
$string['useselfassessment_help'] = 'Εάν ενεργοποιηθεί, σε ένα χρήστη μπορεί να εκχωρηθεί η δική του υποβολή για να την αξιολογήσει και θα λάβει ένα βαθμό για την αξιολόγηση, επιπλέον του βαθμού για την υποβολή του.';
$string['viewworkshopsummary'] = 'Εμφάνιση περίληψης εργαστηρίου';
$string['weightinfo'] = 'Συντελεστής βαρύτητας: {$a}';
$string['withoutsubmission'] = 'Βαθμολογητής χωρίς δική του υποβολή';
$string['workshop:addinstance'] = 'Προσθήκη νέου εργαστηρίου';
$string['workshop:allocate'] = 'Εκχώρηση υποβολών προς εξέταση';
$string['workshop:deletesubmissions'] = 'Διαγραφή υποβολών';
$string['workshop:editdimensions'] = 'Επεξεργασία φορμών αξιολόγησης';
$string['workshop:exportsubmissions'] = 'Εξαγωγή υποβολών';
$string['workshop:ignoredeadlines'] = 'Αγνόησε τους περιορισμούς χρόνου';
$string['workshop:manageexamples'] = 'Διαχείριση παραδειγμάτων υποβολών';
$string['workshopname'] = 'Όνομα εργαστηρίου';
$string['workshop:overridegrades'] = 'Παράκαμψη των υπολογισμένων βαθμολογιών';
$string['workshop:peerassess'] = 'Συνεργατική αξιολόγηση';
$string['workshop:publishsubmissions'] = 'Δημοσίευση υποβολών';
$string['workshop:submit'] = 'Υποβολή';
$string['workshop:switchphase'] = 'Αλλαγή φάσης';
$string['workshop:view'] = 'Εμφάνιση εργαστηρίου';
$string['workshop:viewallassessments'] = 'Εμφάνιση όλων των αξιολογήσεων';
$string['workshop:viewallsubmissions'] = 'Εμφάνιση όλων των υποβολών';
$string['workshop:viewauthornames'] = 'Εμφάνιση ονομάτων συγγραφέων';
$string['workshop:viewauthorpublished'] = 'Εμφάνιση συγγραφέων που έχουν δημοσιεύσει υποβολές';
$string['workshop:viewpublishedsubmissions'] = 'Εμφάνιση δημοσιευμένων υποβολών';
$string['workshop:viewreviewernames'] = 'Εμφάνιση των ονομάτων των αξιολογητών';
$string['yourassessmentfor'] = 'Η αξιολόγησή σας για {$a}';
$string['yourgrades'] = 'Οι βαθμοί σας';
$string['yoursubmission'] = 'Η υποβολή σας';
