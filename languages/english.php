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
* @ File No.           : 8 - $release: 1.0 - $revision: 0 - $build: 0
* @ Created Date       : 2012-08-06 20:00:00 UTC+2 
* @ Updated Date       : 
* @ Author             : Drogidis Christos
* @ Author email       : webmaster@alexsoft.gr
* @ Author website     : www.alexsoft.gr
* @ Translator         : Kourtidis George
* @ Translator email   : 
* @ Translator website : 
* @ Translate Date     : 
*/

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

class TBlock_article_author_Language extends TObject
{
	public $blockname = "Article Author";
	public $about_author = "The author of the article";
	public $title = "Title";
	public $register = "Registration";
	public $occupation = "Occupation";
	public $website = "Website";
	public $address = "ADDRESS";
	public $article_posts = "Articles";
	public $comment_posts = "Comment";
	public $comfor_posts = "Discussions";
	public $posts_num = "%d (%01.3f / day)";

	public $APL_license = "Ascoos General License (AGL)";
	public $APL_author = "CHRIS DROGKIDIS";
	public $APL_creation = "";
	public $APL_copyright = "ALEXSOFT SOFTWARE";
	public $APL_translator = "KOURTIDIS GEORGE";
	public $APL_translatorEmail = "";
	public $APL_translatorUrl = "";
	public $APL_desc = "This section (Block) displays information about the author of this article.";

	public $APL_paramgroup_general_label = "▼ &nbsp; General Parameters";
	public $APL_paramgroup_general_label_info = "<strong>GENERAL PARAMETERS</strong><br />--------------------------------------<br /><br />In this frame you can shape the general parameters of appearance of section.";
	public $APL_show_username_label = "View author's name";
	public $APL_show_username_desc = "<strong>NAME OF WRITER</strong><br />--------------------------------------<br /><br />Want to see the name of the author of the article?<br /><br />The appearance will become accordingly with the rules of appearance that have been given in the profile of user.";
	public $APL_show_avatar_label = "View author's avatar";
	public $APL_show_avatar_desc = "<strong>VIEW AVATAR</strong><br />--------------------------------------<br /><br />Want to display the avatar of the author of the article?<br /><br />Be aware that this will result in the appearance of the avatar of the real user who upload the article and not the alias based alternative.";
	public $APL_show_star_label = "View Stars of User Group";
	public $APL_show_star_desc = "<strong>STARS USER GROUP</strong><br />--------------------------------------<br /><br />Want to see the stars of the user group?<br /><br />It will be supposed you know that this will have as result the appearance of stars of group of the real user that went up the article.";
	public $APL_theme_label = "Theme of Block";
	public $APL_theme_placeholder = "Select theme of block";
	public $APL_theme_desc = "<strong>BLOCK THEME</strong><br />--------------------------------------<br /><br />Select the themes that will implement the block &laquo;%s&raquo;.<br /><br />Each block has at least a predetermined display issue with the name &laquo;Default&raquo;";

	public $APL_paramgroup_details_label = "▼ &nbsp; Parameters details Author";
	public $APL_paramgroup_details_label_info = "<strong>PARAMETERS DETAILS</strong><br />--------------------------------------<br /><br />In this context you can configure the display more details of the author.";
	public $APL_show_details_label = "View details author?";
	public $APL_show_details_desc = "<strong>AUTHOR DETAILS</strong><br />--------------------------------------<br /><br />Want to display details about the writer of the article?<br /><br />It will be supposed you know that this will have as result the appearance of elements of real user that went up the article, as these elements have been given in his profile.";
	public $APL_show_title_label = "View title address";
	public $APL_show_title_desc = "<strong>DISCREET TITLE</strong><br />--------------------------------------<br /><br />Want to see the distinctive title of author of the article?<br /><br />Be aware that this will result in the appearance of the distinctive title of the actual user who brought the article as he has been given to his profile.";
	public $APL_show_register_label = "View Register Date";
	public $APL_show_register_desc = "<strong>REGISTER DATE</strong><br />--------------------------------------<br /><br />Want to presented the date of registration of writer of article, in the web page? <br /><br />Be aware that this will result in the appearance of the date of registration of the actual user who brought the article, as reflected in the profile.";
	public $APL_show_occupation_label = "View Occupation";
	public $APL_show_occupation_desc = "<strong>OCCUPATION</strong><br />--------------------------------------<br /><br />Want to see the current occupation of the author of the article?<br /><br />It will be supposed you know that this will have as result the appearance of professional activity of real user that has posted the article, as this has been given in his profile.";
	public $APL_show_website_label = "View Website";
	public $APL_show_website_desc = "<strong>WEBSITE</strong><br />--------------------------------------<br /><br />Want to see the website of the author of the article?";
	public $APL_show_posts_label = "View user posts number";
	public $APL_show_posts_desc = "<strong>NUMBER OF DISPATCH OF TEXTS</strong><br />--------------------------------------<br /><br />Want to show missions articles, news, etc. of the author of the article in website?";
	public $APL_show_signature_label = "View Signature";
	public $APL_show_signature_desc = "<strong>SIGNATURE</strong><br />--------------------------------------<br /><br />Want to see the signature of the author of the article?<br /><br />
Be aware that this will result in the appearance of the signature that has given to his profile.";

	public $APL_paramgroup_address_label = "▼ &nbsp; Parameters of Appearance of Address";
	public $APL_paramgroup_address_label_info = "<strong>PARAMETERS MANAGER</strong><br />--------------------------------------<br /><br />In this context you can configure the appearance of the address of the author.";
	public $APL_show_address_info_label = "View details address";
	public $APL_show_address_info_desc = "<strong>DETAILS ADDRESS</strong><br />--------------------------------------<br /><br />Want to display details of the address of the author of the article?<br /><br />
It will be supposed you know that this will have as result the appearance of real address of real user that went up the article, as this has been given in his profile.";
	public $APL_show_address_label = "View address";
	public $APL_show_address_desc = "<strong>ADDRESS</strong><br />--------------------------------------<br /><br />Want to see the address-based author of the article?";
	public $APL_show_zip_label = "View postcode";
	public $APL_show_zip_desc = "<strong>POSTAL CODE</strong><br />--------------------------------------<br /><br />Want to see the city postcode of the author of the article?";
	public $APL_show_city_label = "View city";
	public $APL_show_city_desc = "<strong>CITY</strong><br />--------------------------------------<br /><br />Want to see the city-based author of the article?";
	public $APL_show_state_label = "View county or state";
	public $APL_show_state_desc = "<strong>COUNTRY - STATE</strong><br />--------------------------------------<br /><br />Want to see the county or the state-based author of the article?";
	public $APL_show_country_label = "View country";
	public $APL_show_country_desc = "<strong>COUNTRY</strong><br />--------------------------------------<br /><br />Want to see the country-based author of the article?";
}
?>