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

* @ Package           : ASCOOS CMS - Frontend
* @ Subpackage        : Block Manager - Article Author 
* @ ASCOOS Version    : Lite - 1.0.0
* @ File Name         : /blocks/article_author/index.php
* @ File No.          : 5 - $release: 1.0 - $revision: 0 - $build: 0
* @ Created Date      : 2012-08-06 20:00:00 UTC+2 
* @ Updated Date      : 
* @ Author            : Drogidis Christos
* @ Author email      : webmaster@alexsoft.gr
* @ Author website    : www.alexsoft.gr
*/

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");

global $cms_site, $objDatabase, $objLang, $ASCOOS, $app, $my, $option, $task, $aid, $objDual;

if ( ($option == 'articles') && ($task == 'view') )
{
	$article_id 	= $aid;
	
	$show_username 			= $block->getParam('bool', 'show_username', 1 );
	$show_avatar 			= $block->getParam('bool', 'show_avatar', 1 );
	$show_star 				= $block->getParam('bool', 'show_star', 1 );
	$show_details			= $block->getParam('bool', 'show_details', 1 );
		$show_title 		= $block->getParam('bool', 'show_title', 0 );
		$show_register		= $block->getParam('bool', 'show_register', 0 );
		$show_occupation 	= $block->getParam('bool', 'show_occupation', 1 );
		$show_website 		= $block->getParam('bool', 'show_website', 1 );
		$show_signature		= $block->getParam('bool', 'show_signature', 1 );
		$show_address_info 	= $block->getParam('bool', 'show_address_info', 0 );
			$show_address 	= $block->getParam('bool', 'show_address', 1 );
			$show_zip 		= $block->getParam('bool', 'show_zip', 1 );
			$show_city 		= $block->getParam('bool', 'show_city', 1 );
			$show_state 	= $block->getParam('bool', 'show_state', 1 );
			$show_country 	= $block->getParam('bool', 'show_country', 1 );
		$show_posts			= $block->getParam('bool', 'show_posts', 1 );
	$theme		 			= $block->getParam('lstr', 'theme','default' );

	$block->loadTheme($theme);

	$query = "SELECT access, groupid, created_by, created_by_alias FROM #__articles WHERE article_id=".$article_id." AND lang_id = ".$ASCOOS['lang']->id." LIMIT 1";
	$objDatabase->setSQLQuery( $query );
	$article_author = $objDatabase->getAssoc();
	unset($query);
	
	if ($objDual->checkAccess($article_author))
	{
		if ($article_author['created_by'] > 0)
		{
			$where = array();
			$select = array();
			$from = array();
		
			// Εάν θέλουμε να εμφανίσουμε τα αστέρια της ομάδας του συγγραφέα.
			if ($show_star)
			{
				$select[]	= "g.stars AS gstar";
				$from[]		= "#__groups AS g";
				$where[]	= "g.id = u.groupid";
			}
		
			if ($show_details)
			{
				if ($show_title)		$select[] = "ud.title";
				if ($show_register)		$select[] = "u.register";
				if ($show_occupation)	$select[] = "ud.occupation";
				if ($show_website)		$select[] = "ud.websiteTitle";
				if ($show_website)		$select[] = "ud.website";
				if ($show_posts)		$select[] = "ud.posts";
				if ($show_address_info)
				{
					if ($show_address)		$select[] = "ud.address";
					if ($show_zip)			$select[] = "ud.zip";
					if ($show_city)			$select[] = "ud.city";
					if ($show_state)		$select[] = "ud.state";
					if ($show_country)		$select[] = "ud.country";
				}
				if ($show_signature)	$select[] = "ud.signature";
				$from[] = "#__users_details AS ud";
				$where[] = "ud.id = u.id";
			}

			$select[] = "u.id";
			$select[] = "u.username";
			$select[] = "u.show_name";
			$select[] = "u.nickname";
			$select[] = "u.firstname";
			$select[] = "u.lastname";
			$select[] = "u.groupid";
			$select[] = "u.register";
			$from[] = "#__users AS u";
			$where[] = "u.id=".$article_author['created_by'];

			$user_query = ""
				.(count( $select ) ? "\nSELECT " . implode( ", ", $select ) : "")
				. (count( $from ) ? "\nFROM " . implode( ", ", $from ) : "")
				. (count( $where ) ? "\nWHERE " . implode( ' AND ', $where ) : "")
				."\nLIMIT 1";
			$objDatabase->setSQLQuery( $user_query );
			$user = $objDatabase->getAssoc();
			
			if ($show_posts) {
				$posts = json_decode($user['posts'], true);	
				if (array_key_exists('articles', $posts)) $article_posts = $posts['articles'] / (int)((time() - $user['register']) / 86400);
				if (array_key_exists('comfor', $posts)) $comfor_posts = $posts['comfor'] / (int)((time() - $user['register']) / 86400);
				if (array_key_exists('comments', $posts)) $comment_posts = $posts['comments'] / (int)((time() - $user['register']) / 86400);
			}
		}
		
		if ($article_author['created_by_alias'] != '') $author_name = $article_author['created_by_alias'];	
		else if ($article_author['created_by'] > 0) $author_name = $objDual->getShowUserName($user);
		else $author_name = $objLang->unknow;				
?>
<div class="block-article-author-<?php echo $theme; ?>">
	<?php if ($block->getVar('show_title')) { ?>
	<div class="header">
		<h3><?php echo $block->getTitle(); ?></h3>
    </div>
    <div class="clear"></div>
    <?php } ?>
   
	<div class="text">
    	<div class="table">
        	<div class="row">
				<?php if ($show_avatar) { ?> <div class="avatar"><img src="<?php echo ascoos_getAvatar( $user ); ?>" alt="<?php echo $author_name; ?>" /></div> <?php } ?>
				<div class="ucell">
					<p class="username"><?php echo $author_name; ?></p>
                    <?php if ($show_star) { ?><p class="gstar star<?php echo $user['gstar']; ?>"> </p><?php } ?>
                </div>
            </div>
        </div>
	    <div class="clear"></div>


	<?php if ( $show_details ) { ?>

    	<?php if ( $show_posts || $show_title || $show_register || $show_occupation || $show_website ) { ?>        
    	<div class="table">
        	<?php if ( $show_title && !empty($user['title']) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('title'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo $user['title']; ?></div>
            </div>
            <?php } ?>
		    <?php if ( $show_register && $user['register'] ) { ?>
    	    <div class="row">
				<div class="cell"><?php echo $block->getLangVar('register'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo ascoos_strftime($objLang->date_format['default_date2'], $user['register']); ?></div>
	        </div>
		    <?php } ?>
        	<?php if ( $show_occupation && !empty($user['occupation']) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('occupation'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo $user['occupation']; ?></div>
            </div>
            <?php } ?>
        	<?php if ( $show_website && !empty($user['website']) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('website'); ?></div>
				<div class="cell">: </div>
				<div class="cell website"><a target="_blank" href="<?php echo $user['website']; ?>" rel="nofollow" title="<?php echo ascoos_langCorrectItem($user['websiteTitle'], 'topic', true); ?>"><?php echo ascoos_langCorrectItem($user['websiteTitle'], 'topic', true); ?></a></div>
            </div>
            <?php } ?>
        </div>
	    <div class="clear"></div>

    	<?php if ( $show_posts) { ?>        
    	<div class="table">
        	<?php if ( $show_posts && ($posts['articles'] > 0) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('article_posts'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo sprintf( $block->getLangVar('posts_num'), $posts['articles'], $article_posts, 3, ',', '.'); ?></div>
            </div>
            <?php } ?>

        	<?php if ( $show_posts && ($posts['comfor'] > 0) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('comfor_posts'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo sprintf($block->getLangVar('posts_num'), $posts['comfor'], $comfor_posts, 3, ',', '.'); ?></div>
            </div>
            <?php } ?>

        	<?php if ( $show_posts && ($posts['comments'] > 0) ) { ?>
            <div class="row">
				<div class="cell"><?php echo $block->getLangVar('comment_posts'); ?></div>
				<div class="cell">: </div>
				<div class="cell"><?php echo sprintf($block->getLangVar('posts_num'), $posts['comments'], $comment_posts, 3, ',', '.'); ?></div>
            </div>
            <?php } ?>
        </div>
	    <div class="clear"></div>
        <?php } ?>
    <?php } ?>

        
		<?php if ($show_address_info) { ?>
    	<div class="table">
        	<div class="row">
				<div class="cell address">
				<?php 
				echo "<h3>".$block->getLangVar('address')."</h3>";		
				if ($show_address && !empty($user['address'])) echo "<p>".$user['address']."</p>";
				if ($show_zip && !empty($user['zip'])) echo "<p>".$user['zip'].", ".$user['city']."</p>";
				if ($show_state && !empty($user['state'])) echo "<p>".$user['state']."</p>";
				if ($show_country && !empty($user['country'])) echo "<p>".$objLang->countryArray[$user['country']]."</p>";
				?>
        	    </div>
            </div>
        </div>
	    <div class="clear"></div>
        <?php } ?>

       	<?php if ( $show_signature && !empty($user['signature']) ) { ?>
    	<div class="table">
            <div class="row">
				<div class="cell signature"><?php echo $user['signature']; ?></div>
            </div>
        </div>
	    <div class="clear"></div>
        <?php } ?>
	<?php } ?>        
	</div>
</div> 
<?php } }?>