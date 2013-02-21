<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

//-----------------------------------------------------
$membername = $data['players']['0']['name'];
$skill = number_format($data['players']['0']['sk_main']);
$score = number_format($data['players']['0']['score']);
$ttime  = $data['players']['0']['time'];
$hours = intval(intval($ttime) / 3600);
$minutes = bcmod((intval($ttime) / 60),60);
$seconds = bcmod(intval($ttime),60);
$time = "".$hours."h ".$minutes."m ".$seconds."s";
$kills = number_format($data['players']['0']['kills']); 
$deaths = number_format($data['players']['0']['deaths']);
$kdratio = round($data['players']['0']['kills']/$data['players']['0']['deaths'], 2);
$bestscore = number_format($data['players']['0']['highestScoreStreak']);
$bestrscore = number_format($data['players']['0']['bestIARScore']);
$scorepm = number_format($data['players']['0']['score_per_minute']);
$games = number_format($data['players']['0']['games']);
$lastupdated = date("M d, Y h:ia", $data['players']['0']['date_update']);
$totalupdates = number_format($data['players']['0']['count_updates']);
$supporta = number_format($data['players']['0']['supportActionsUsed']);
$ribbons = number_format($data['players']['0']['rib']);
$medals = number_format($data['players']['0']['med']);
$achieves = number_format($data['players']['0']['ach']);
$clantag = $data['players']['0']['clantag'];

$awardscore = number_format($data['players']['0']['sc_award']);
$bonusscore = number_format($data['players']['0']['sc_bonus']);
$generalscore = number_format($data['players']['0']['sc_general']);
$objscore = number_format($data['players']['0']['sc_objective']);
$squadscore = number_format($data['players']['0']['sc_squad']);
$teamscore = number_format($data['players']['0']['sc_team']);

$accuracy = $data['players']['0']['accuracy'] * 100;
$wins = number_format($data['players']['0']['wins']);
$lost = number_format($data['players']['0']['losses']);
$wlratio = round($data['players']['0']['wins']/$data['players']['0']['losses'], 2);
$teamkills = number_format($data['players']['0']['teamkills']);

$tagames = number_format($data['players']['0']['teams']['att']['games']);
$tawins = number_format($data['players']['0']['teams']['att']['wins']);
$talost = number_format($data['players']['0']['teams']['att']['losses']);
$tawlratio = round($data['players']['0']['teams']['att']['wins']/$data['players']['0']['teams']['att']['losses'], 2);
$tdgames = number_format($data['players']['0']['teams']['def']['games']);
$tdwins = number_format($data['players']['0']['teams']['def']['wins']);
$tdlost = number_format($data['players']['0']['teams']['def']['losses']);
$tdwlratio = round($data['players']['0']['teams']['def']['wins']/$data['players']['0']['teams']['def']['losses'], 2);

$dodesc = $data['players']['0']['gamemodes']['Do']['desc'];
$dot = $data['players']['0']['gamemodes']['Do']['time'];
$dohours = intval(intval($dot) / 3600);
$dominutes = bcmod((intval($dot) / 60),60);
$doseconds = bcmod(intval($dot),60);
$dotime = "".$dohours."h ".$dominutes."m ".$doseconds."s";
$edesc = $data['players']['0']['gamemodes']['E']['desc'];
$et = $data['players']['0']['gamemodes']['E']['time'];
$ehours = intval(intval($et) / 3600);
$eminutes = bcmod((intval($et) / 60),60);
$eseconds = bcmod(intval($et),60);
$etime = "".$ehours."h ".$eminutes."m ".$eseconds."s";
$odesc = $data['players']['0']['gamemodes']['O']['desc'];
$ot = $data['players']['0']['gamemodes']['O']['time'];
$ohours = intval(intval($ot) / 3600);
$ominutes = bcmod((intval($ot) / 60),60);
$oseconds = bcmod(intval($ot),60);
$otime = "".$ohours."h ".$ominutes."m ".$oseconds."s";
$rdesc = $data['players']['0']['gamemodes']['R']['desc'];
$rt = $data['players']['0']['gamemodes']['R']['time'];
$rhours = intval(intval($rt) / 3600);
$rminutes = bcmod((intval($rt) / 60),60);
$rseconds = bcmod(intval($rt),60);
$rtime = "".$rhours."h ".$rminutes."m ".$rseconds."s";
$tadesc = $data['players']['0']['gamemodes']['T']['desc'];
$tat = $data['players']['0']['gamemodes']['T']['time'];
$tahours = intval(intval($tat) / 3600);
$taminutes = bcmod((intval($tat) / 60),60);
$taseconds = bcmod(intval($tat),60);
$tatime = "".$tahours."h ".$taminutes."m ".$taseconds."s";
$kdesc = $data['players']['0']['gamemodes']['K']['desc'];
$ktime = $data['players']['0']['gamemodes']['K']['time'];
$khours = intval(intval($kt) / 3600);
$kminutes = bcmod((intval($kt) / 60),60);
$kseconds = bcmod(intval($kt),60);
$ktime = "".$khours."h ".$kminutes."m ".$kseconds."s";



if ($row['user_mohtype'] == "PC"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png' align=left></img> PC";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png' align=left></img> Xbox360";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='15px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png' align=left></img> PS3";}

//------------------------------------------------------

$text .= "<table style='width:100%'>";

$text .= "<tr valign=top>
	  <td style='width:34%' rowspan='2' class='indent'>";

//----------# General #-------+
$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' style='width:100%' colspan='2'><center>General Data</center></td>
</tr><tr>
<td class='indent'>Username:</td>
<td class='indent'>".$avatar." <a href='".e_BASE."user.php?id.".$row2['user_id']."'>".$username."</a></td>
</tr><tr>
<td class='indent'>MOH Username:</td>
<td class='indent'>".$membername."</td>
</tr><tr>
<td class='indent'>Platform:</td>
<td class='indent'>".$platform."</td>
</tr><tr>
<td class='indent'>Clantag:</td>
<td class='indent'>".$clantag."</td>
</tr><tr>
<td class='indent'>Skill:</td>
<td class='indent'>".$skill."</td>
</tr><tr>
<td class='indent'>Score:</td>
<td class='indent'>".$score."</td>
</tr><tr>
<td class='indent'>Time Played:</td>
<td class='indent'>".$time."</td>
</tr><tr>
<td class='indent'>Kills:</td>
<td class='indent'>".$kills."</td>
</tr><tr>
<td class='indent'>Deaths:</td>
<td class='indent'>".$deaths."</td>
</tr><tr>
<td class='indent'>K/D Ratio:</td>
<td class='indent'>".$kdratio."</td>
</tr><tr>
<td class='indent'>Games:</td>
<td class='indent'>".$games."</td>
</tr><tr>
<td class='indent'>Support Actions:</td>
<td class='indent'>".$supporta."</td>
</tr><tr>
<td class='indent'>Ribbons:</td>
<td class='indent'>".$ribbons."</td>
</tr><tr>
<td class='indent'>Medals:</td>
<td class='indent'>".$medals."</td>
</tr><tr>
<td class='indent'>Achievements:</td>
<td class='indent'>".$achieves."</td>
</tr><tr>
<td class='indent'>Total Updates:</td>
<td class='indent'>".$totalupdates."</td>
</tr><tr>
<td class='indent'>Last Updated:</td>
<td class='indent'>".$lastupdated."</td>
</tr>
</table>
";
//-------+

$text .= "</td><td style='width:33%' class='indent'>";

//----------# Scores #-------+
$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' style='width:100%' colspan='2'><center>Scores</center></td>
</tr><tr>
<td class='indent'>Award score:</td>
<td class='indent' style='text-align:right'>".$awardscore."</td>
</tr><tr>
<td class='indent'>Bonus score:</td>
<td class='indent' style='text-align:right'>".$bonusscore."</td>
</tr><tr>
<td class='indent'>General Score:</td>
<td class='indent' style='text-align:right'>".$generalscore."</td>
</tr><tr>
<td class='indent'>Objective Score:</td>
<td class='indent' style='text-align:right'>".$objscore."</td>
</tr><tr>
<td class='indent'>Squad Score:</td>
<td class='indent' style='text-align:right'>".$squadscore."</td>
</tr><tr>
<td class='indent'>Team Score:</td>
<td class='indent' style='text-align:right'>".$teamscore."</td>
</tr><tr>
<td class='indent'>Best Score Streak:</td>
<td class='indent' style='text-align:right'>".$bestscore."</td>
</tr><tr>
<td class='indent'>Best Round Score:</td>
<td class='indent' style='text-align:right'>".$bestrscore."</td>
</tr><tr>
<td class='indent'>Score Per Min:</td>
<td class='indent' style='text-align:right'>".$scorepm."</td>
</tr>
</table>";

//-------------------+

$text .= "</td><td style='width:33%' class='indent'>";

//----------# Misc #-------+
$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' style='width:100%' colspan='2'><center>Misc</center></td>
</tr><tr>
<td class='indent'>Accuracy:</td>
<td class='indent' style='text-align:right'>".$accuracy."%</td>
</tr><tr>
<td class='indent'>Wins:</td>
<td class='indent' style='text-align:right'>".$wins."</td>
</tr><tr>
<td class='indent'>Losses:</td>
<td class='indent' style='text-align:right'>".$lost."</td>
</tr><tr>
<td class='indent'>W/L Ratio:</td>
<td class='indent' style='text-align:right'>".$wlratio."</td>
</tr><tr>
<td class='indent'>Teamkills:</td>
<td class='indent' style='text-align:right'>".$teamkills."</td>
</tr>
</table>";

//-------+

//----------# Teams #-------+
$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' style='width:100%' colspan='5'><center>Teams</center></td>
</tr><tr>
<td class='forumheader3'>Team</td>
<td class='forumheader3'>Games</td>
<td class='forumheader3'>Wins</td>
<td class='forumheader3'>Loss</td>
<td class='forumheader3'>W/L</td>
</tr><tr>
<td class='indent'>Attacker:</td>
<td class='indent' style='text-align:right'>".$tagames."</td>
<td class='indent' style='text-align:right'>".$tawins."</td>
<td class='indent' style='text-align:right'>".$talost."</td>
<td class='indent' style='text-align:right'>".$tawlratio."</td>
</tr><tr>
<td class='indent'>Defender:</td>
<td class='indent' style='text-align:right'>".$tdgames."</td>
<td class='indent' style='text-align:right'>".$tdwins."</td>
<td class='indent' style='text-align:right'>".$tdlost."</td>
<td class='indent' style='text-align:right'>".$tdwlratio."</td>
</tr>
</table>";

//-------+

$text .= "</td></tr><td colspan='2' class='indent'>";

//----------# Game Modes #-------+
$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' style='width:100%' colspan='3'><center>Game Modes</center></td>
</tr><tr>
<td class='forumheader3'>Name</td>
<td class='forumheader3'>Type</td>
<td class='forumheader3'>Time</td>
</tr><tr>
<td class='indent'>Sector Control:</td>
<td class='indent'>".$dodesc."</td>
<td class='indent'>".$dotime."</td>
</tr><tr>
<td class='indent'>Clean Sweep:</td>
<td class='indent'>".$edesc."</td>
<td class='indent'>".$etime."</td>
</tr><tr>
<td class='indent'>Objective Raid:</td>
<td class='indent'>".$odesc."</td>
<td class='indent'>".$otime."</td>
</tr><tr>
<td class='indent'>Combat Mission:</td>
<td class='indent'>".$rdesc."</td>
<td class='indent'>".$rtime."</td>
</tr><tr>
<td class='indent'>Team Assault:</td>
<td class='indent'>".$tadesc."</td>
<td class='indent'>".$tatime."</td>
</tr><tr>
<td class='indent'>Hot Zone:</td>
<td class='indent'>".$kdesc."</td>
<td class='indent'>".$ktime."</td>
</tr>
</table>";

//-------+

$text .= "</td></tr>";

$text .= "</table>";

//-----------------------------------------------------

?>
