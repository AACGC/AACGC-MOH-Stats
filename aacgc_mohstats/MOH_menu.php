<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC MOH Stats               #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


if ($pref['moh_enable_gold'] == "1"){$gold_obj = new gold();}

//-----------------Menu Title--------------------------------+

$moh_title .= "MOH Member Stats";

//-----------------------------------------------------------+


$moh_text .= "

<script type=\"text/javascript\">
function mohup(){moh.direction = \"up\";}
function mohdown(){moh.direction = \"down\";}
function mohstop(){moh.stop();}
function mohstart(){moh.start();}
</script>

<table style='width:100%' class='forumheader3'>
<tr>
<td colspan='3'><center><a href='".e_PLUGIN."aacgc_mohstats/Member_Stats.php'><img src='".e_PLUGIN."aacgc_mohstats/images/mohmenubanner.jpg'></img></a></center></td>
</tr><tr>
<td style='width:100%' class=''><u>User | Platform</u></td>
<td style='width:0%; text-align:right' class=''><u>Skill</u></td>
<td style='width:0%; text-align:center' class=''><u>Score</u></td>
</tr><tr>
<td colspan='3'>
<marquee height='".$pref['moh_height']."px' id='moh' scrollamount='".$pref['moh_speed']."' onMouseover='this.scrollAmount=".$pref['moh_mouseoverspeed']."' onMouseout='this.scrollAmount=".$pref['moh_mouseoutspeed']."' direction='up' loop='true'>
<table style='width:100%'>";


$sql ->db_Select("user_extended", "*", "user_moh!='' ORDER BY user_extended_id ASC");
while($row = $sql->db_Fetch()){
$sql2 = new db;
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
$avatar = "<img src='".$useravatar."' width='15px', height='15px'></img>";}}

if ($row['user_mohtype'] == "PC"){$mohtype = "pc";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "ps3";}
$userid = $row['user_extended_id'];
$usermohname = $row['user_moh'];

if ($row['user_mohtype'] == "PC"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png' align=right></img>";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png' align=right></img>";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png' align=right></img>";}

$url = 'http://api.mohstats.com/api/'.$mohtype.'?';
$postdata = 'players='.$usermohname.'&fields=general';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);

$skill = number_format($data['players']['0']['sk_main']);
$score = number_format($data['players']['0']['score']);

$moh_text .= "
<tr>
<td style='width:100%' class='indent'>".$avatar ." <a href='".e_PLUGIN."aacgc_mohstats/Member_Details.php?det.".$userid."'>".$username."</a>".$platform."</td>
<td style='width:0%; text-align:right' class='indent'>".$skill."</td>
<td style='width:0%; text-align:right' class='indent'>".$score."</td>
</tr>
";}


$moh_text .= "</table></marquee></td></tr></table>
<br><br>
<table style='width:100%' class=''><tr><td>
<center>
<input class=\"button\" value=\"Start\" onClick=\"mohstart();\" type=\"button\">
<input class=\"button\" value=\"Stop\" onClick=\"mohstop();\" type=\"button\">
<input class=\"button\" value=\"Up\" onClick=\"mohup();\" type=\"button\">
<input class=\"button\" value=\"Down\" onClick=\"mohdown();\" type=\"button\">
</center>
</td></tr></table>
<br>
";


$ns -> tablerender($moh_title, $moh_text);


?>


