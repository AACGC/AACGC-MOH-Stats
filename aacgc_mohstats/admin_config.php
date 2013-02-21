<?php


/*
#######################################
#     e107 website system plguin      #
#     AACGC MOH Stats                 #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/



require_once("../../class2.php");
if (!defined('e107_INIT'))
{exit;}
if (!getperms("P"))
{header("location:" . e_HTTP . "index.php");
exit;}
require_once(e_ADMIN . "auth.php");
if (!defined('ADMIN_WIDTH'))
{define(ADMIN_WIDTH, "width:100%;");}

if (e_QUERY == "update")
{
 
    $pref['moh_height'] = $_POST['moh_height'];
    $pref['moh_speed'] = $_POST['moh_speed'];
    $pref['moh_mouseoverspeed'] = $_POST['moh_mouseoverspeed'];
    $pref['moh_mouseoutspeed'] = $_POST['moh_mouseoutspeed'];
    $pref['moh_avatar_size'] = $_POST['moh_avatar_size'];
    $pref['moh_rendperpage'] = $_POST['moh_rendperpage'];

    $pref['moh_secth_wv'] = $_POST['moh_secth_wv'];
    $pref['moh_secth_kits'] = $_POST['moh_secth_kits'];
    $pref['moh_secth_rm'] = $_POST['moh_secth_rm'];
    $pref['moh_secth_achs'] = $_POST['moh_secth_achs'];



if (isset($_POST['moh_enable_forum'])) 
{$pref['moh_enable_forum'] = 1;}
else
{$pref['moh_enable_forum'] = 0;}

if (isset($_POST['moh_enable_profile'])) 
{$pref['moh_enable_profile'] = 1;}
else
{$pref['moh_enable_profile'] = 0;}

if (isset($_POST['moh_enable_gold'])) 
{$pref['moh_enable_gold'] = 1;}
else
{$pref['moh_enable_gold'] = 0;}

if (isset($_POST['moh_enable_avatar'])) 
{$pref['moh_enable_avatar'] = 1;}
else
{$pref['moh_enable_avatar'] = 0;}


if (isset($_POST['moh_enable_globalpc'])) 
{$pref['moh_enable_globalpc'] = 1;}
else
{$pref['moh_enable_globalpc'] = 0;}

if (isset($_POST['moh_enable_globalxbox'])) 
{$pref['moh_enable_globalxbox'] = 1;}
else
{$pref['moh_enable_globalxbox'] = 0;}

if (isset($_POST['moh_enable_globalps'])) 
{$pref['moh_enable_globalps'] = 1;}
else
{$pref['moh_enable_globalps'] = 0;}



    save_prefs();
    $led_msgtext = "Settings Saved";
}

$admin_title = "AACGC MOH Stats (settings)";
//--------------------------------------------------------------------


$text .= "
<form method='post' action='" . e_SELF . "?update' id='confnwb'>
	<table style='" . ADMIN_WIDTH . "' class='fborder'>


		<tr>
			<td colspan='3' class='fcaption'><b>Main Page Settings:</b></td>
		</tr>
                

              <tr>
		        <td style='width:30%' class='forumheader3'>Show Users Avatar:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_avatar'] == 1 ? "<input type='checkbox' name='moh_enable_avatar' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_avatar' value='0' />")."</td>
	        </tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Avatar Size:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_avatar_size' value='" . $tp->toFORM($pref['moh_avatar_size']) . "' />px</td>
		</tr>

              <tr>
		        <td style='width:30%' class='forumheader3'>Number Of Users To Show Per Page:</td>
		        <td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_rendperpage' value='" . $tp->toFORM($pref['moh_rendperpage']) . "' /></td>
	        </tr>





		<tr>
			<td colspan='3' class='fcaption'><b>Member Detail Page Settings:</b></td>
		</tr>

		<tr>
	<td style='width:30%' class='forumheader3'>Weapon / Vehicle Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_secth_wv' value='" . $tp->toFORM($pref['moh_secth_wv']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>

		<tr>
	<td style='width:30%' class='forumheader3'>Kit Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_secth_kits' value='" . $tp->toFORM($pref['moh_secth_kits']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>

		<tr>
	<td style='width:30%' class='forumheader3'>Ribbon / Medal Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_secth_rm' value='" . $tp->toFORM($pref['moh_secth_rm']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>

		<tr>
	<td style='width:30%' class='forumheader3'>Achievements Stats Section Height:</td>
	<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_secth_achs' value='" . $tp->toFORM($pref['moh_secth_achs']) . "' /> (Ex. 300px or auto for full)</td>
		</tr>







		<tr>
			<td colspan='3' class='fcaption'><b>Scrolling Member Stats Menu Settings:</b></td>
		</tr>


		<tr>
			<td style='width:30%' class='forumheader3'>Menu Height:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_height' value='" . $tp->toFORM($pref['moh_height']) . "' />px  (pixles)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Start:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_speed' value='" . $tp->toFORM($pref['moh_speed']) . "' />  (1 for slow, 10 for fast)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Mouseover:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_mouseoverspeed' value='" . $tp->toFORM($pref['moh_mouseoverspeed']) . "' />  (1 for slow, 10 for fast, 0 for it to stop)</td>
		</tr>
		<tr>
			<td style='width:30%' class='forumheader3'>Scroll Speed On Mouseout:</td>
			<td colspan='2'  class='forumheader3'><input class='tbox' type='text' size='10' name='moh_mouseoutspeed' value='" . $tp->toFORM($pref['moh_mouseoutspeed']) . "' />  (1 for slow, 10 for fast)</td>
		</tr>




		<tr>
			<td colspan='3' class='fcaption'><b>Global Stats Menu Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global PC Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_globalpc'] == 1 ? "<input type='checkbox' name='moh_enable_globalpc' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_globalpc' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global Xbox360 Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_globalxbox'] == 1 ? "<input type='checkbox' name='moh_enable_globalxbox' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_globalxbox' value='0' />")."</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Global PS3 Stats:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_globalps'] == 1 ? "<input type='checkbox' name='moh_enable_globalps' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_globalps' value='0' />")."</td>
	        </tr>




		<tr>
			<td colspan='3' class='fcaption'><b>Extra Settings:</b></td>
		</tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Stats Badge In Forums:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_forum'] == 1 ? "<input type='checkbox' name='moh_enable_forum' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_forum' value='0' />")." (Only works with some themes, check the AACGC FAQs for more info)</td>
	        </tr>
                <tr>
		        <td style='width:30%' class='forumheader3'>Show Stats Badge In Profiles:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_profile'] == 1 ? "<input type='checkbox' name='moh_enable_profile' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_profile' value='0' />")." (Only works with default e107 profiles)</td>
	        </tr>

                <tr>
		        <td style='width:30%' class='forumheader3'>Show Gold Orbs as Usernames:</td>
		        <td colspan=2 class='forumheader3'>".($pref['moh_enable_gold'] == 1 ? "<input type='checkbox' name='moh_enable_gold' value='1' checked='checked' />" : "<input type='checkbox' name='moh_enable_gold' value='0' />")." (Must Have Gold Orbs Installed)</td>
	        </tr>

		
                <tr>
			<td colspan='3' class='fcaption' style='text-align: left;'><input type='submit' name='update' value='Save Settings' class='button' /></td>
		</tr>





</table>
</form>";



$ns->tablerender($admin_title, $text);
require_once(e_ADMIN . "footer.php");
?>
