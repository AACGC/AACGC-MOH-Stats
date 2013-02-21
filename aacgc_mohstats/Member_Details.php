<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

require_once("../../class2.php");
require_once(HEADERF);

if (e_QUERY) {
        $tmp = explode('.', e_QUERY);
        $action = $tmp[0];
        $sub_action = $tmp[1];
        $id = $tmp[2];
        unset($tmp);
}

if ($pref['moh_enable_gold'] == "1"){$gold_obj = new gold();}

//---------------------------------------------------------------

$title .= "Medal of Honor Member Details"; 

//---------------------------------------------------------------

$sql ->db_Select("user_extended", "*", "user_extended_id='".intval($sub_action)."'");
$row = $sql->db_Fetch();
$sql2 ->db_Select("user", "*", "user_id='".intval($row['user_extended_id'])."'");
$row2 = $sql2->db_Fetch();
if ($pref['moh_enable_gold'] == "1"){
$username = "".$gold_obj->show_orb($row2['user_id'])."";}
else
{$username = "".$row2['user_name']."";}
if ($pref['moh_enable_avatar'] == "1"){
if ($row2['user_image'] == "")
{$avatar = "";}
else
{$useravatar = $row2[user_image];
require_once(e_HANDLER."avatar_handler.php");
$useravatar = avatar($useravatar);
$avatar = "<img src='".$useravatar."' width=15px></img>";}}
$mohname = $row['user_moh'];
//-----------------------------------------------------
if ($row['user_mohtype'] == "PC"){$mohtype = "pc";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "ps3";}
//-----------------------------------------------------
$url = 'http://api.mohstats.com/api/'.$mohtype.'?';
$postdata = 'players='.$mohname.'&fields=all';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);
//------------------------------------------------------
$text .= "<table style='width:100%' class='forumheader3'>";
$text .= "
<tr>
<td><center><img src='".e_PLUGIN."aacgc_mohstats/images/mohbanner.jpg'></img></center></td>
</tr>";
//--------------------------------------------------------

$text .= "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
<script type='text/javascript' src='mohdetails.js'></script>
<script type='text/javascript'>
animatedcollapse.addDiv('wv', 'fade=10,group=mohdeatils,persist=1,height=".$pref['moh_secth_weapons']."')
animatedcollapse.addDiv('rm', 'fade=10,group=mohdeatils,height=".$pref['moh_secth_vehicles']."')
animatedcollapse.addDiv('kits', 'fade=10,group=mohdeatils,height=".$pref['moh_secth_kits']."')
animatedcollapse.addDiv('achiev', 'fade=10,group=mohdeatils,height=".$pref['moh_secth_achs']."')
animatedcollapse.ontoggle=function($, divobj, state){}
animatedcollapse.init()
</script>";

//---------------# General #------------------------------
$text .= "<tr><td>";
require_once("".e_PLUGIN."aacgc_mohstats/general.php");
$text .= "</td></tr>";
//--------------------------------------------------------

//---------------# Buttons #------------------------------

$text .= "<tr><td><br><br><table style='width:100%' class='indent'><tr>";

$text .= "
<td class=''><center><a href='#' rel='toggle[wv]' data-openimage='".e_PLUGIN."aacgc_mohstats/images/button_vw.jpg' data-closedimage='".e_PLUGIN."aacgc_mohstats/images/button_vw.jpg'><img src='".e_PLUGIN."aacgc_mohstats/images/button_vw.jpg'></img></a></center></td>
<td class=''><center><a href='#' rel='toggle[kits]' data-openimage='".e_PLUGIN."aacgc_mohstats/images/button_kits.jpg' data-closedimage='".e_PLUGIN."aacgc_mohstats/images/button_kits.jpg'><img src='".e_PLUGIN."aacgc_mohstats/images/button_kits.jpg'></img></a></center></td>
<td class=''><center><a href='#' rel='toggle[rm]' data-openimage='".e_PLUGIN."aacgc_mohstats/images/button_rm.jpg' data-closedimage='".e_PLUGIN."aacgc_mohstats/images/button_rm.jpg'><img src='".e_PLUGIN."aacgc_mohstats/images/button_rm.jpg'></img></a></center></td>
<td class=''><center><a href='#' rel='toggle[achiev]' data-openimage='".e_PLUGIN."aacgc_mohstats/images/button_ach.jpg' data-closedimage='".e_PLUGIN."aacgc_mohstats/images/button_ach.jpg'><img src='".e_PLUGIN."aacgc_mohstats/images/button_ach.jpg'></img></a></center></td>
";

$text .= "</tr></table><br><br></td></tr>";

//---------------------------------------------------------

$text .= "<tr><td>";

//---------------# Weapons & Vehicles #------------------------------

$text .= "<div id='wv' style='display:none'><center>";

require_once("".e_PLUGIN."aacgc_mohstats/wv.php");

$text .= "</div>";

//---------------# Kits #------------------------------

$text .= "<div id='kits' style='display:none'><center>";

require_once("".e_PLUGIN."aacgc_mohstats/kits.php");

$text .= "</div>";

//---------------# Ribbons & Medals #----------------------------------

$text .= "<div id='rm' style='display:none'><center>";

require_once("".e_PLUGIN."aacgc_mohstats/rm.php");

$text .= "</div>";

//---------------# Achievements #--------------------------

$text .= "<div id='achiev' style='display:none'><center>";

require_once("".e_PLUGIN."aacgc_mohstats/achievements.php");

$text .= "</div>";

//---------------------------------------------------------

$text .= "</td></tr>";

//--------------------------------------------------------
$text .= "</table>";
//--------------------------------------------------------


$text .= "<br><br><br><br><center>[ <a href='".e_PLUGIN."aacgc_mohstats/Member_Stats.php'>Back To Member List</a> ]</center>";

//--#AACGC Plugin Copyright&reg; - DO NOT REMOVE BELOW THIS LINE
require(e_PLUGIN . 'aacgc_mohstats/plugin.php');
$text .= "<br><br><br><br><br><br><br>
<a href='http://www.aacgc.com' target='_blank'><font size='1'>".$eplug_name." V".$eplug_version."  &reg;</a>  ---  ( <a href='http://mohstats.com/api' target='_blank'>Powered by mohstats.com</a> )</font>";
//---------------------------------------------------------------
$ns -> tablerender($title, $text);
//---------------------------------------------------------------
require_once(FOOTERF);
?>
