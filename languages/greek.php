<?php
/*
  __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
| (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
                                                                  
*************************************************************************************
* @ Project ASCOOS                                                                  *
* @ Copyright (C) 2007 - 2012 AlexSoft Software.                                    *
* @ Address: Konstantinoupoleos 88, GR 68100, Alexandroupolis, Evros, Greece        *
* @ Tel: +30 2551 031999                                                            *
* @ Creator: Drogidis Christos                                                      *
* @ ASCOOS CMS Site: www.ascoos.com                                                 *
* @ Creator Site: www.alexsoft.gr                                                   *
* @ emails: webmaster@ascoos.com, webmaster@alexsoft.gr                             *
* @ license site: http://www.alexsoft.gr/licence/ascoos/index.php                   *
* @ Copyrighted Commercial Software                                                 *
* @ Program ASCOOS CMS Manager                                                      *
*************************************************************************************

* @ Package            : ASCOOS CMS - Frontend
* @ Subpackage         : Block Manager - Article Author
* @ ASCOOS Version     : Lite - 1.0.0
* @ File Name          : /blocks/article_author/languages/greek.php
* @ File No.           : 7 - $release: 1.0 - $revision: 0 - $build: 0
* @ Created Date       : 2012-08-06 20:00:00 UTC+2 
* @ Updated Date       : 
* @ Author             : Drogidis Christos
* @ Author email       : webmaster@alexsoft.gr
* @ Author website     : www.alexsoft.gr
* @ Translator         : 
* @ Translator email   : 
* @ Translator website : 
* @ Translate Date     : 
*/

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_article_author_Language extends TObject
{
	public $blockname = "Συντάκτης Άρθρου";
	public $about_author = "Ο συντάκτης του Άρθρου";
	public $title = "Τίτλος";
	public $register = "Εγγραφή";
	public $occupation = "Επάγγελμα";
	public $website = "Ιστοσελίδα";
	public $address = "ΔΙΕΥΘΥΝΣΗ";
	public $article_posts = "Άρθρα";
	public $comment_posts = "Σχόλια";
	public $comfor_posts = "Συζητήσεις";
	public $posts_num = "%d (%01.3f / ημέρα)";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "ΔΡΟΓΚΙΔΗΣ ΧΡΗΣΤΟΣ";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT ΛΟΓΙΣΜΙΚΟ";
	public $APL_translator = "";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "Η ενότητα (Block) αυτή, εμφανίζει πληροφορίες για τον συγγραφέα του τρέχοντος άρθρου.";

	public $APL_paramgroup_general_label = "▼ &nbsp; Γενικοί Παράμετροι";
	public $APL_paramgroup_general_label_info = "<strong>ΓΕΝΙΚΟΙ ΠΑΡΑΜΕΤΡΟΙ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις γενικές παραμέτρους εμφάνισης της ενότητας.";
	public $APL_show_username_label = "Εμφάνιση ονόματος συγγραφέα";
	public $APL_show_username_desc = "<strong>ΟΝΟΜΑ ΣΥΓΓΡΑΦΕΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται το όνομα του συγγραφέα του άρθρου;<br /><br />Η εμφάνιση θα γίνει σύμφωνα με τους κανόνες εμφάνισης που έχουν δοθεί στο προφίλ του χρήστη.";
	public $APL_show_avatar_label = "Εμφάνιση avatar συγγραφέα";
	public $APL_show_avatar_desc = "<strong>ΕΜΦΑΝΙΣΗ AVATAR</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται το avatar του συγγραφέα του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση του avatar του πραγματικού χρήστη που ανέβασε το άρθρο και όχι του εναλλακτικού βάσει ψευδωνύμου.";
	public $APL_show_star_label = "Εμφάνιση Αστεριών Ομάδας Χρήστη";
	public $APL_show_star_desc = "<strong>ΑΣΤΕΡΙΑ ΟΜΑΔΑΣ ΧΡΗΣΤΗ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζονται τα αστέρια της ομαδας χρήστη;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση των αστεριών της ομάδας του πραγματικού χρήστη που ανέβασε το άρθρο.";
	public $APL_theme_label = "Θέμα εμφάνισης Ενότητας";
	public $APL_theme_placeholder = "Επιλέξτε θέμα εμφάνισης της ενότητας";
	public $APL_theme_desc = "<strong>ΘΕΜΑ ΕΜΦΑΝΙΣΗΣ ΕΝΟΤΗΤΑΣ</strong><br />--------------------------------------<br /><br />Επιλέξτε το θέμα εμφάνισης που θα υλοποιηθεί η ενότητα &laquo;%s&raquo;.<br /><br />Κάθε ενότητα έχει τουλάχιστο το προκαθορισμένο θέμα εμφάνισης με την ονομασία &laquo;Default&raquo;";

	public $APL_paramgroup_details_label = "▼ &nbsp; Παράμετροι Λεπτομερειών Συγγραφέα";
	public $APL_paramgroup_details_label_info = "<strong>ΠΑΡΑΜΕΤΡΟΙ ΛΕΠΤΟΜΕΡΕΙΩΝ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις παραμέτρους εμφάνισης πιο λεπτομερών στοιχειών του συγγραφέα.";
	public $APL_show_details_label = "Εμφάνιση Λεπτομερειών Συγγραφέα;";
	public $APL_show_details_desc = "<strong>ΛΕΠΤΟΜΕΡΕΙΕΣ ΣΥΓΓΡΑΦΕΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζονται λεπτομέρειες για τον συγγραφέα του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση στοιχείων του πραγματικού χρήστη που ανήρτησε το άρθρο, όπως αυτά έχουν δοθεί στο προφίλ του.";
	public $APL_show_title_label = "Εμφάνιση Τίτλου προσφώνησης";
	public $APL_show_title_desc = "<strong>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο διακριτικός τίτλος του συγγραφέα του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση του διακριτικού τίτλου του πραγματικού χρήστη που ανήρτησε το άρθρο, όπως αυτός έχει δοθεί στο προφίλ του.";
	public $APL_show_register_label = "Εμφάνιση Ημερομηνίας Εγγραφής";
	public $APL_show_register_desc = "<strong>ΗΜΕΡΟΜΗΝΙΑ ΕΓΓΡΑΦΗΣ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η ημερομηνία εγγραφής του συγγραφέα του άρθρου στην ιστοσελίδα;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση της ημερομηνίας εγγραφής του πραγματικού χρήστη που ανήρτησε το άρθρο, όπως αυτή αποτυπώνεται στο προφίλ του.";
	public $APL_show_occupation_label = "Εμφάνιση Δραστηριότητας";
	public $APL_show_occupation_desc = "<strong>ΔΡΑΣΤΗΡΙΟΤΗΤΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η τρέχουσα επαγγελματική δραστηριότητα του συγγραφέα του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση της επαγγελματικής δραστηριότητας του πραγματικού χρήστη που έχει αναρτήσει το άρθρο, όπως αυτή έχει δοθεί στο προφίλ του.";
	public $APL_show_website_label = "Εμφάνιση Ιστοσελίδας";
	public $APL_show_website_desc = "<strong>ΙΣΤΟΣΕΛΙΔΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η ιστοσελίδα του συγγραφέα του άρθρου;";
	public $APL_show_posts_label = "Εμφάνιση αριθμού μηνυμάτων χρήστη";
	public $APL_show_posts_desc = "<strong>ΑΡΙΘΜΟΣ ΜΗΝΥΜΑΤΩΝ ΧΡΗΣΤΗ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζονται οι αποστολές άρθρων, συζητήσεων κλπ του συγγραφέα του άρθρου στην ιστοσελίδα;";
	public $APL_show_signature_label = "Εμφάνιση Υπογραφής";
	public $APL_show_signature_desc = "<strong>ΥΠΟΓΡΑΦΗ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η υπογραφή του συγγραφέα του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση της υπογραφής που έχει δώσει στο προφίλ του.";

	public $APL_paramgroup_address_label = "▼ &nbsp; Παράμετροι Εμφάνισης Διεύθυνσης";
	public $APL_paramgroup_address_label_info = "<strong>ΠΑΡΑΜΕΤΡΟΙ ΔΙΕΥΘΥΝΣΗΣ</strong><br />--------------------------------------<br /><br />Στο πλαίσιο αυτό μπορείτε να διαμορφώσετε τις παραμέτρους εμφάνισης της διεύθυνσης του συγγραφέα.";
	public $APL_show_address_info_label = "Εμφάνιση Λεπτομερειών Διεύθυνσης";
	public $APL_show_address_info_desc = "<strong>ΕΜΦΑΝΙΣΗ ΛΕΠΤΟΜΕΡΕΙΩΝ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζονται λεπτομέρειες της διεύθυνση όπου εδρεύει ο συγγραφέας του άρθρου;<br /><br />Θα πρέπει να γνωρίζετε ότι αυτό θα έχει ως αποτέλεσμα την εμφάνιση της πραγματικής διεύθυνσης του πραγματικού χρήστη που ανήρτησε το άρθρο, όπως αυτή έχει δοθεί στο προφίλ του.";
	public $APL_show_address_label = "Εμφάνιση διεύθυνσης";
	public $APL_show_address_desc = "<strong>ΔΙΕΥΘΥΝΣΗ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η διεύθυνση που εδρεύει ο συγγραφέας του άρθρου;";
	public $APL_show_zip_label = "Εμφάνιση ταχυδρομικού κώδικα";
	public $APL_show_zip_desc = "<strong>ΤΑΧΥΔΡΟΜΙΚΟΣ ΚΩΔΙΚΑΣ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο ταχυδρομικός κώδικας της πόλης όπου εδρεύει ο συγγραφέας του άρθρου;";
	public $APL_show_city_label = "Εμφάνιση πόλης";
	public $APL_show_city_desc = "<strong>ΠΟΛΗ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η πόλη που εδρεύει ο συγγραφέας του άρθρου;";
	public $APL_show_state_label = "Εμφάνιση νομού ή πολιτείας";
	public $APL_show_state_desc = "<strong>ΝΟΜΟΣ - ΠΟΛΙΤΕΙΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται ο νόμος ή η πολιτεία που εδρεύει ο συγγραφέας του άρθρου;";
	public $APL_show_country_label = "Εμφάνιση χώρας";
	public $APL_show_country_desc = "<strong>ΧΩΡΑ</strong><br />--------------------------------------<br /><br />Θέλετε να εμφανίζεται η χώρα που εδρεύει ο συγγραφέας του άρθρου;";
}
?>