<?php

if (!defined('e107_INIT'))
{exit;}

/*
#######################################
#     e107 website system plguin      #
#     AACGC MOH Stats                 #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


$eplug_name = "AACGC MOH Stats";
$eplug_version = "1.1";
$eplug_author = "M@CHIN3";
$eplug_url = "http://www.aacgc.com";
$eplug_email = "admin@aacgc.com";
$eplug_description = "Shows all users Medal of Honor stats on a page, also comes with scolling menu. Option to show in forum post, option to show username and avatar above stats on list page.For Full Instructions On Setting Up This Plugin Please Visit The AACGC FAQs.";
$eplug_compatible = "e107v7";
$eplug_readme = ""; 
$eplug_compliant = true;
$eplug_status = false;
$eplug_latest = false;

// Name of the plugin's folder -------------------------------------------------------------------------------------
$eplug_folder = "aacgc_mohstats";

// Main of menu item for plugin ----------------------------------------------------------------------------------
$eplug_menu_name = "";

// Name of the admin configuration file -----------------------------------------------------------------

$eplug_conffile = "admin_main.php";

// Icon image and caption text -----------------------------------------------------------------

$eplug_icon = $eplug_folder . "/images/icon_32.png";
$eplug_icon_small = $eplug_folder . "/images/icon_16.png";
$eplug_caption = "AACGC MOH Stats";


// Preferences --------------
$eplug_prefs = array(
"moh_height" => "300",
"moh_speed" => "3",
"moh_mouseoverspeed" => "0",
"moh_mouseoutspeed" => "3",
"moh_avatar_size" => "25",
"moh_rendperpage" => "10",
"moh_secth_wv" => "auto",
"moh_secth_kits" => "auto",
"moh_secth_rm" => "auto",
"moh_secth_achs" => "auto",
"moh_enable_forum" => "1",
"moh_enable_profile" => "1",
"moh_enable_gold" => "0",
"moh_enable_avatar" => "1",
"moh_enable_globalpc" => "1",
"moh_enable_globalxbox" => "1",
"moh_enable_globalps" => "1",
);

// DB Tables ----------------

$eplug_table_names = "";
$eplug_tables = "";


// Create a link in main menu (yes=TRUE, no=FALSE) -------------------------------------------------------------
$eplug_link = true;
$eplug_link_name = "MOH Stats";
$eplug_link_url = "".e_PLUGIN."aacgc_mohstats/Member_Stats.php";

// Text to display after plugin successfully installed -----------------------------------------------------------------

$eplug_done = "Install Complete!";


// upgrading ... //

$upgrade_add_prefs = array(
"moh_height" => "300",
"moh_speed" => "3",
"moh_mouseoverspeed" => "0",
"moh_mouseoutspeed" => "3",
"moh_avatar_size" => "25",
"moh_rendperpage" => "10",
"moh_secth_wv" => "auto",
"moh_secth_kits" => "auto",
"moh_secth_rm" => "auto",
"moh_secth_achs" => "auto",
"moh_enable_forum" => "1",
"moh_enable_profile" => "1",
"moh_enable_gold" => "0",
"moh_enable_avatar" => "1",
"moh_enable_globalpc" => "1",
"moh_enable_globalxbox" => "1",
"moh_enable_globalps" => "1",
);

$upgrade_remove_prefs = "";
$upgrade_alter_tables = "";
$eplug_upgrade_done = "Upgrade Complete! Best Default Settings Have Been Set!";

?>
