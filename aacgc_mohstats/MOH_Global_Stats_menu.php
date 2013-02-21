<?php

/*
#######################################
#     AACGC BFBC2 Stats               #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//---------------------------------------------------------------

$mohglobal_title .= "MOH Global Stats"; 

//---------------------------------------------------------------

$url = 'http://api.mohstats.com/api/pc?globalstats';
$postdata = '';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);

if ($pref['moh_enable_globalpc'] == "1"){
$iconpc = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png'></img>";
$playerspc = $data['players_pc'];
$playerspcon1 = number_format($data['online']['pc']['CleanSweep']);
$playerspcon2 = number_format($data['online']['pc']['CombatMission']);
$playerspcon3 = number_format($data['online']['pc']['KingOfTheHill']);
$playerspcon4 = number_format($data['online']['pc']['ObjectiveRaid']);
$playerspcon5 = number_format($data['online']['pc']['SectorControl']);
$playerspcon6 = number_format($data['online']['pc']['TeamAssault']);
$playerspcon7 = number_format($data['online']['pc']['Hardcore']);
$playerspcon8 = number_format($data['online']['pc']['HardcoreCleanSweep']);
$playerspcon9 = number_format($data['online']['pc']['HardcoreKingOfTheHill']);
$playerspconall = $data['online']['pc']['CleanSweep'] + 
		  $data['online']['pc']['CombatMission'] + 
		  $data['online']['pc']['KingOfTheHill'] +
		  $data['online']['pc']['ObjectiveRaid'] +
		  $data['online']['pc']['SectorControl'] +
		  $data['online']['pc']['TeamAssault'] +
		  $data['online']['pc']['Hardcore'] +
		  $data['online']['pc']['HardcoreCleanSweep'] +
		  $data['online']['pc']['HardcoreKingOfTheHill'];}

if ($pref['moh_enable_globalxbox'] == "1"){
$icon360 = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png'></img>";
$players360 = $data['players_360'];
$players360on1 = number_format($data['online']['360']['CleanSweep']);
$players360on2 = number_format($data['online']['360']['CombatMission']);
$players360on3 = number_format($data['online']['360']['KingOfTheHill']);
$players360on4 = number_format($data['online']['360']['ObjectiveRaid']);
$players360on5 = number_format($data['online']['360']['SectorControl']);
$players360on6 = number_format($data['online']['360']['TeamAssault']);
$players360on7 = number_format($data['online']['360']['Hardcore']);
$players360on8 = number_format($data['online']['360']['HardcoreCleanSweep']);
$players360on9 = number_format($data['online']['360']['HardcoreKingOfTheHill']);
$players360onall = $data['online']['360']['CleanSweep'] + 
		  $data['online']['360']['CombatMission'] + 
		  $data['online']['360']['KingOfTheHill'] +
		  $data['online']['360']['ObjectiveRaid'] +
		  $data['online']['360']['SectorControl'] +
		  $data['online']['360']['TeamAssault'] +
		  $data['online']['360']['Hardcore'] +
		  $data['online']['360']['HardcoreCleanSweep'] +
		  $data['online']['360']['HardcoreKingOfTheHill'];}

if ($pref['moh_enable_globalps'] == "1"){
$iconps3 = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png'></img>";
$playersps3 = $data['players_ps3'];
$playersps3on1 = number_format($data['online']['ps3']['CleanSweep']);
$playersps3on2 = number_format($data['online']['ps3']['CombatMission']);
$playersps3on3 = number_format($data['online']['ps3']['KingOfTheHill']);
$playersps3on4 = number_format($data['online']['ps3']['ObjectiveRaid']);
$playersps3on5 = number_format($data['online']['ps3']['SectorControl']);
$playersps3on6 = number_format($data['online']['ps3']['TeamAssault']);
$playersps3on7 = number_format($data['online']['ps3']['Hardcore']);
$playersps3on8 = number_format($data['online']['ps3']['HardcoreCleanSweep']);
$playersps3on9 = number_format($data['online']['ps3']['HardcoreKingOfTheHill']);
$playersps3onall = $data['online']['ps3']['CleanSweep'] + 
		  $data['online']['ps3']['CombatMission'] + 
		  $data['online']['ps3']['KingOfTheHill'] +
		  $data['online']['ps3']['ObjectiveRaid'] +
		  $data['online']['ps3']['SectorControl'] +
		  $data['online']['ps3']['TeamAssault'] +
		  $data['online']['ps3']['Hardcore'] +
		  $data['online']['ps3']['HardcoreCleanSweep'] +
		  $data['online']['ps3']['HardcoreKingOfTheHill'];}

$playersonall = $playerspconall + $players360onall + $playersps3onall;
$playersall = $playerspc + $players360 + $playersps3;

//---------------------------------------------------------------

$mohglobal_text .= "<table style='width:100%' class='forumheader3'>
<tr>
<td colspan='5'><center><a href='".e_PLUGIN."aacgc_mohstats/Member_Stats.php'><img src='".e_PLUGIN."aacgc_mohstats/images/mohmenubanner.jpg'></img></a></center></td>
</tr>
<tr>
<td class='forumheader3'>Gametype<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='forumheader3'><center>".$iconpc."<br>PC</center></td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='forumheader3'><center>".$icon360."<br>360</center></td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='forumheader3'><center>".$iconps3."<br>PS3</center></td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Clean Sweep<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon1."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on1."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on1."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Combat Mission<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon2."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on2."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on2."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Hot Zone<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon3."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on3."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on3."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Objective Raid<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon4."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on4."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on4."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Sector Control<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon5."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on5."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on5."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Team Assault<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon6."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on6."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on6."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Hardcore<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon7."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on7."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on7."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Clean Sweep Hardcore<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon8."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on8."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on8."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='indent'>Hot Zone Hardcore<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playerspcon9."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$players360on9."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='indent' style='text-align:right'>".$playersps3on9."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+

$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='forumheader3'>Online: ".number_format($playersonall)."<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($playerspconall)."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($players360onall)."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($playersps3onall)."</td>";}

$mohglobal_text .= "</tr>";

//---------------------------+
/*
$mohglobal_text .= "<tr>";

$mohglobal_text .= "<td class='forumheader3'>Total: ".number_format($playersall)."<td>";

if ($pref['moh_enable_globalpc'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($playerspc)."</td>";}

if ($pref['moh_enable_globalxbox'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($players360)."</td>";}

if ($pref['moh_enable_globalps'] == "1"){
$mohglobal_text .= "<td class='forumheader3' style='text-align:right'>".number_format($playersps3)."</td>";}

$mohglobal_text .= "</tr>";
*/
//---------------------------+

$mohglobal_text .= "</table>";


$ns -> tablerender($mohglobal_title, $mohglobal_text);


//---------------------------------------------------------------



?>