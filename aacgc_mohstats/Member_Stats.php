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

if ($pref['moh_enable_gold'] == "1"){$gold_obj = new gold();}

//---------------------------------------------------------------

$title .= "Medal of Honor Member Stats"; 

//---------------------------------------------------------------


//--------------# Multipage Script #---------------------------
if ($pref['moh_rendperpage'] != '') 
{$rowsPerPage = $pref['moh_rendperpage'];} 
else 
{$rowsPerPage = "10";}
if(isset($_GET['rowspp']))
{$rowsPerPage = intval($_GET['rowspp']);}
$pageNum = 1;
if(isset($_GET['page']))
{$pageNum = intval($_GET['page']);}
$offset = ($pageNum - 1) * $rowsPerPage;
$query = @mysql_query("SELECT user_moh FROM ".MPREFIX."user_extended where user_moh!=''");
$numrows = mysql_num_rows($query);
if(isset($_POST['page'])) 
{$rowsPerPage = intval($_POST['page']);}
$maxPage = ceil($numrows/$rowsPerPage);
$self = $_SERVER['PHP_SELF'];
$nav  = '';
for($page = 1; $page <= $maxPage; $page++) {
if ($page == $pageNum) 
{$nav .= " $page ";} 
else 
{$nav .= " <a href=\"$self?page=".$page."&rowspp=".$rowsPerPage."\">$page</a> ";}}
if ($pageNum > 1) 
{$page  = $pageNum - 1;
$prev  = " <a href=\"$self?page=$page&rowspp=$rowsPerPage\">Previous</a> ";} 
else 
{$prev  = "";}
if ($pageNum < $maxPage) 
{$page = $pageNum + 1;
$next = " <a href=\"$self?page=$page&rowspp=$rowsPerPage\">Next Page</a> ";} 
else 
{$next = "";}

$limit = "LIMIT ".$offset.", ".$rowsPerPage."";
//---------------------------------------------------------------


$text .= "
<table style='width:100%' class='forumheader3'>
<tr>
<td colspan='10'><center><img src='".e_PLUGIN."aacgc_mohstats/images/mohbanner.jpg'></img></center><br><br></td>
</tr>
<tr>
<td style='' class='forumheader3'>User</td>
<td style='text-align:center' class='forumheader3'>Platform</td>
<td style='text-align:right' class='forumheader3'>Skill</td>
<td style='text-align:right' class='forumheader3'>Score</td>
<td style='text-align:center' class='forumheader3'>Time</td>
<td style='text-align:right' class='forumheader3'>Kills</td>
<td style='text-align:right' class='forumheader3'>Deaths</td>
<td style='text-align:right' class='forumheader3'>K/D Ratio</td>
<td style='text-align:right' class='forumheader3'>Games</td>
<td style='' class='forumheader3'></td>
</tr>
";


$sql ->db_Select("user_extended", "user_extended_id,user_moh,user_mohtype", "user_moh!='' ORDER BY user_extended_id ASC $limit");
while($row = $sql->db_Fetch()){

$userid = $row['user_extended_id'];
$usermohname = $row['user_moh'];

if ($row['user_mohtype'] == "PC"){$mohtype = "pc";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "ps3";}
$url = 'http://api.mohstats.com/api/'.$mohtype.'?';
$postdata = 'players='.$usermohname.'&fields=general';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);

if($data['players']['0']['name'] == ""){}
else {
//-------------------------------------------------------

$sql2 ->db_Select("user", "*", "user_id='".intval($row['user_extended_id'])."'");
$row2 = $sql2->db_Fetch();

if ($pref['moh_enable_gold'] == "1")
{$username = "".$gold_obj->show_orb($row2['user_id'])."";}
else
{$username = "".$row2['user_name']."";}

if ($pref['moh_enable_avatar'] == "1"){
if ($row2['user_image'] == "")
{$avatar = "";}
else
{$useravatar = $row2[user_image];
require_once(e_HANDLER."avatar_handler.php");
$useravatar = avatar($useravatar);
$avatar = "<img src='".$useravatar."' width=".$pref['moh_avatar_size']."px></img>";}}

if ($row['user_mohtype'] == "PC"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png'></img> PC";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png'></img> Xbox360";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png'></img> PS3";}

$membername = "(".$data['players']['0']['name'].")";
$skill = number_format($data['players']['0']['sk_main']); 
$score = number_format($data['players']['0']['score']);
$ttime = $data['players']['0']['time'];
$hours = intval(intval($ttime) / 3600);
$minutes = bcmod((intval($ttime) / 60),60);
$seconds = bcmod(intval($ttime),60);
$time = "".$hours."h ".$minutes."m ".$seconds."s";
$kills = $data['players']['0']['kills'];
$deaths = $data['players']['0']['deaths'];
$kdratio = round($kills/$deaths, 2);
$games = number_format($data['players']['0']['games']);

$statslink = "<a href='".e_PLUGIN."aacgc_mohstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_mohstats/images/statslink.jpg'></img></a>";

$text .= "<tr>
<td style='width:35%; text-align:left' class='indent'>".$avatar." <a href='".e_BASE."user.php?id.".$userid."'>".$username."</a> ".$membername."</td>
<td class='indent' style='width:0%; text-align:center'>".$platform."</td>
<td class='indent' style='width:10%; text-align:right'>".$skill."</td>
<td class='indent' style='width:10%; text-align:right'>".$score."</td>
<td class='indent' style='width:15%; text-align:center'>".$time."</td>
<td class='indent' style='width:10%; text-align:right'>".number_format($kills)."</td>
<td class='indent' style='width:10%; text-align:right'>".number_format($deaths)."</td>
<td class='indent' style='width:10%; text-align:right'>".$kdratio."</td>
<td class='indent' style='width:10%; text-align:right'>".$games."</td>
<td class='indent' style='width:0%'><center>".$statslink."</center></td>
</tr>";}}

$text .= "</table>";


//--#AACGC Plugin Copyright&reg; - DO NOT REMOVE BELOW THIS LINE
require(e_PLUGIN . 'aacgc_mohstats/plugin.php');
$copyright .= "<br><br><br><br><br><br><br>
<a href='http://www.aacgc.com' target='_blank'><font size='1'>".$eplug_name." V".$eplug_version."  &reg;</a>  ---  ( <a href='http://mohstats.com/api' target='_blank'>Powered by mohstats.com</a> )</font>";
//---------------------------------------------------------------

$ns -> tablerender($title, $text."<br><br>".$prev.$nav.$next.$copyright);




//----------------------------------------------------------------------------------

require_once(FOOTERF);
