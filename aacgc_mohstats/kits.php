<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

$kit = $data['players']['0']['kits'];


//------------------------------------------------------

$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' colspan='5'><center><b><u>Kit Stats</u></b></center></td>
</tr><tr>
<td style='width:20%'><u></u></td>
<td style='width:20%'><u></u></td>
<td style='width:20%'><u></u></td>
<td style='width:20%'><u></u></td>
<td style='width:20%'><u></u></td>
</tr></table>";

$text .= "<div style='height:".$pref['moh_secth_kits']."; overflow:auto' class=''><table style='width:100%'><tr valign=top>";

//--------------# Rifleman #----------------------------------------

$ass = $kit['ass'];

$rifname = $ass['name'];
$rifrank = $ass['rank'];
$rifkills = number_format($ass['kills']);
$rifdeaths = number_format($ass['deaths']);
$rifttime = $ass['time'];
$rifhours = intval(intval($rifttime) / 3600);
$rifminutes = bcmod((intval($rifttime) / 60),60);
$rifseconds = bcmod(intval($rifttime),60);
$riftime = "".$rifhours."h ".$rifminutes."m ".$rifseconds."s";
$rifkdr = round($ass['kills']/$ass['deaths'], 2);
$rifkpm = number_format($ass['kills'] / ($rifttime / 60), 2);

$asslev = $ass['levels'];

$ch0 = $asslev['ch0'];
$ch1 = $asslev['ch1'];
$ch2 = $asslev['ch2'];
$ch3 = $asslev['ch3'];
$ch4 = $asslev['ch4'];
$ch5 = $asslev['ch5'];
$ch6 = $asslev['ch6'];
$ch7 = $asslev['ch7'];
$ch8 = $asslev['ch8'];
$ch9 = $asslev['ch9'];
$ch10 = $asslev['ch10'];
$ch11 = $asslev['ch11'];
$ch12 = $asslev['ch12'];
$ch13 = $asslev['ch13'];
$ch14 = $asslev['ch14'];

if($ch0['achieved'] == "1"){
$ch0ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch0achper = number_format(($ch0['curr'] / $ch0['target']) * 100, 2); 
$ch0ach = $ch0achper."%";}

if($ch1['achieved'] == "1"){
$ch1ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch1achper = number_format(($ch1['curr'] / $ch1['target']) * 100, 2); 
$ch1ach = $ch1achper."%";}

if($ch2['achieved'] == "1"){
$ch2ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch2achper = number_format(($ch2['curr'] / $ch2['target']) * 100, 2); 
$ch2ach = $ch2achper."%";}

if($ch3['achieved'] == "1"){
$ch3ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch3achper = number_format(($ch3['curr'] / $ch3['target']) * 100, 2); 
$ch3ach = $ch3achper."%";}

if($ch4['achieved'] == "1"){
$ch4ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch4achper = number_format(($ch4['curr'] / $ch4['target']) * 100, 2); 
$ch4ach = $ch4achper."%";}

if($ch5['achieved'] == "1"){
$ch5ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch5achper = number_format(($ch5['curr'] / $ch5['target']) * 100, 2); 
$ch5ach = $ch5achper."%";}

if($ch6['achieved'] == "1"){
$ch6ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch6achper = number_format(($ch6['curr'] / $ch6['target']) * 100, 2); 
$ch6ach = $ch6achper."%";}

if($ch7['achieved'] == "1"){
$ch7ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch7achper = number_format(($ch7['curr'] / $ch7['target']) * 100, 2); 
$ch7ach = $ch7achper."%";}

if($ch8['achieved'] == "1"){
$ch8ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch8achper = number_format(($ch8['curr'] / $ch8['target']) * 100, 2); 
$ch8ach = $ch8achper."%";}

if($ch9['achieved'] == "1"){
$ch9ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch9achper = number_format(($ch9['curr'] / $ch9['target']) * 100, 2); 
$ch9ach = $ch9achper."%";}

if($ch10['achieved'] == "1"){
$ch10ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch10achper = number_format(($ch10['curr'] / $ch10['target']) * 100, 2); 
$ch10ach = $ch10achper."%";}

if($ch11['achieved'] == "1"){
$ch11ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch11achper = number_format(($ch11['curr'] / $ch11['target']) * 100, 2); 
$ch11ach = $ch11achper."%";}

if($ch12['achieved'] == "1"){
$ch12ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch12achper = number_format(($ch12['curr'] / $ch12['target']) * 100, 2); 
$ch12ach = $ch12achper."%";}

if($ch13['achieved'] == "1"){
$ch13ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch13achper = number_format(($ch13['curr'] / $ch13['target']) * 100, 2); 
$ch13ach = $ch13achper."%";}

if($ch14['achieved'] == "1"){
$ch14ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch14achper = number_format(($ch14['curr'] / $ch14['target']) * 100, 2); 
$ch14ach = $ch14achper."%";}

$text .= "<td style='width:33%' class='indent'>";

$text .= "<table style='width:100%'>";

$text .= "<tr>
	  <td colspan='2' class='forumheader3'>Rifleman</td>
	  </tr>";

$text .= "<tr>
	  <td style='width:60%;text-align:left' class='indent'>Rank:</td>
	  <td style='width:40%;text-align:right' class='indent'>".$rifrank."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Time:</td>
	  <td style='width:;text-align:right' class='indent'>".$riftime."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkills."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Deaths:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifdeaths."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>K/D Ratio:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkdr."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills/min:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkpm."</td>
	  </tr>
	  <tr>
	  <td colspan='2' class='forumheader3'>Rifleman Ranks</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>1.Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch0ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>2.Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch1ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>3.Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch2ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>4.Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch3ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>5.Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch4ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>6.Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch5ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>7.Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch6ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>8.Tier 1 Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch7ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>9.Tier 1 Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch8ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>10.Tier 1 Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch9ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>11.Tier 1 Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch10ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>12.Tier 1 Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch11ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>13.Tier 1 Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch12ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>14.Tier 1 Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch13ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>15.Tier 1 Warfighter</td>
	  <td style='width:;text-align:right' class='indent'>".$ch14ach."</td>
	  </tr>
";

$text .= "</table>";

$text .= "</td>";

//------------------------------------------------------------------

//--------------# Special Ops #----------------------------------------

$ass = $kit['spe'];

$rifname = $ass['name'];
$rifrank = $ass['rank'];
$rifkills = number_format($ass['kills']);
$rifdeaths = number_format($ass['deaths']);
$rifttime = $ass['time'];
$rifhours = intval(intval($rifttime) / 3600);
$rifminutes = bcmod((intval($rifttime) / 60),60);
$rifseconds = bcmod(intval($rifttime),60);
$riftime = "".$rifhours."h ".$rifminutes."m ".$rifseconds."s";
$rifkdr = round($ass['kills']/$ass['deaths'], 2);
$rifkpm = number_format($ass['kills'] / ($rifttime / 60), 2);

$asslev = $ass['levels'];

$ch0 = $asslev['ch0'];
$ch1 = $asslev['ch1'];
$ch2 = $asslev['ch2'];
$ch3 = $asslev['ch3'];
$ch4 = $asslev['ch4'];
$ch5 = $asslev['ch5'];
$ch6 = $asslev['ch6'];
$ch7 = $asslev['ch7'];
$ch8 = $asslev['ch8'];
$ch9 = $asslev['ch9'];
$ch10 = $asslev['ch10'];
$ch11 = $asslev['ch11'];
$ch12 = $asslev['ch12'];
$ch13 = $asslev['ch13'];
$ch14 = $asslev['ch14'];

if($ch0['achieved'] == "1"){
$ch0ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch0achper = number_format(($ch0['curr'] / $ch0['target']) * 100, 2); 
$ch0ach = $ch0achper."%";}

if($ch1['achieved'] == "1"){
$ch1ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch1achper = number_format(($ch1['curr'] / $ch1['target']) * 100, 2); 
$ch1ach = $ch1achper."%";}

if($ch2['achieved'] == "1"){
$ch2ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch2achper = number_format(($ch2['curr'] / $ch2['target']) * 100, 2); 
$ch2ach = $ch2achper."%";}

if($ch3['achieved'] == "1"){
$ch3ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch3achper = number_format(($ch3['curr'] / $ch3['target']) * 100, 2); 
$ch3ach = $ch3achper."%";}

if($ch4['achieved'] == "1"){
$ch4ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch4achper = number_format(($ch4['curr'] / $ch4['target']) * 100, 2); 
$ch4ach = $ch4achper."%";}

if($ch5['achieved'] == "1"){
$ch5ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch5achper = number_format(($ch5['curr'] / $ch5['target']) * 100, 2); 
$ch5ach = $ch5achper."%";}

if($ch6['achieved'] == "1"){
$ch6ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch6achper = number_format(($ch6['curr'] / $ch6['target']) * 100, 2); 
$ch6ach = $ch6achper."%";}

if($ch7['achieved'] == "1"){
$ch7ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch7achper = number_format(($ch7['curr'] / $ch7['target']) * 100, 2); 
$ch7ach = $ch7achper."%";}

if($ch8['achieved'] == "1"){
$ch8ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch8achper = number_format(($ch8['curr'] / $ch8['target']) * 100, 2); 
$ch8ach = $ch8achper."%";}

if($ch9['achieved'] == "1"){
$ch9ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch9achper = number_format(($ch9['curr'] / $ch9['target']) * 100, 2); 
$ch9ach = $ch9achper."%";}

if($ch10['achieved'] == "1"){
$ch10ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch10achper = number_format(($ch10['curr'] / $ch10['target']) * 100, 2); 
$ch10ach = $ch10achper."%";}

if($ch11['achieved'] == "1"){
$ch11ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch11achper = number_format(($ch11['curr'] / $ch11['target']) * 100, 2); 
$ch11ach = $ch11achper."%";}

if($ch12['achieved'] == "1"){
$ch12ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch12achper = number_format(($ch12['curr'] / $ch12['target']) * 100, 2); 
$ch12ach = $ch12achper."%";}

if($ch13['achieved'] == "1"){
$ch13ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch13achper = number_format(($ch13['curr'] / $ch13['target']) * 100, 2); 
$ch13ach = $ch13achper."%";}

if($ch14['achieved'] == "1"){
$ch14ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch14achper = number_format(($ch14['curr'] / $ch14['target']) * 100, 2); 
$ch14ach = $ch14achper."%";}

$text .= "<td style='width:34%' class='indent'>";

$text .= "<table style='width:100%'>";

$text .= "<tr>
	  <td colspan='2' class='forumheader3'>Special Ops</td>
	  </tr>";

$text .= "<tr>
	  <td style='width:60%;text-align:left' class='indent'>Rank:</td>
	  <td style='width:40%;text-align:right' class='indent'>".$rifrank."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Time:</td>
	  <td style='width:;text-align:right' class='indent'>".$riftime."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkills."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Deaths:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifdeaths."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>K/D Ratio:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkdr."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills/min:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkpm."</td>
	  </tr>
	  <tr>
	  <td colspan='2' class='forumheader3'>Special Ops Ranks</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>1.Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch0ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>2.Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch1ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>3.Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch2ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>4.Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch3ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>5.Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch4ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>6.Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch5ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>7.Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch6ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>8.Tier 1 Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch7ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>9.Tier 1 Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch8ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>10.Tier 1 Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch9ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>11.Tier 1 Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch10ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>12.Tier 1 Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch11ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>13.Tier 1 Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch12ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>14.Tier 1 Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch13ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>15.Tier 1 Warfighter</td>
	  <td style='width:;text-align:right' class='indent'>".$ch14ach."</td>
	  </tr>
";

$text .= "</table>";

$text .= "</td>";
//------------------------------------------------------------------

//--------------# Recon #----------------------------------------

$ass = $kit['rec'];

$rifname = $ass['name'];
$rifrank = $ass['rank'];
$rifkills = number_format($ass['kills']);
$rifdeaths = number_format($ass['deaths']);
$rifttime = $ass['time'];
$rifhours = intval(intval($rifttime) / 3600);
$rifminutes = bcmod((intval($rifttime) / 60),60);
$rifseconds = bcmod(intval($rifttime),60);
$riftime = "".$rifhours."h ".$rifminutes."m ".$rifseconds."s";
$rifkdr = round($ass['kills']/$ass['deaths'], 2);
$rifkpm = number_format($ass['kills'] / ($rifttime / 60), 2);

$asslev = $ass['levels'];

$ch0 = $asslev['ch0'];
$ch1 = $asslev['ch1'];
$ch2 = $asslev['ch2'];
$ch3 = $asslev['ch3'];
$ch4 = $asslev['ch4'];
$ch5 = $asslev['ch5'];
$ch6 = $asslev['ch6'];
$ch7 = $asslev['ch7'];
$ch8 = $asslev['ch8'];
$ch9 = $asslev['ch9'];
$ch10 = $asslev['ch10'];
$ch11 = $asslev['ch11'];
$ch12 = $asslev['ch12'];
$ch13 = $asslev['ch13'];
$ch14 = $asslev['ch14'];

if($ch0['achieved'] == "1"){
$ch0ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch0achper = number_format(($ch0['curr'] / $ch0['target']) * 100, 2); 
$ch0ach = $ch0achper."%";}

if($ch1['achieved'] == "1"){
$ch1ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch1achper = number_format(($ch1['curr'] / $ch1['target']) * 100, 2); 
$ch1ach = $ch1achper."%";}

if($ch2['achieved'] == "1"){
$ch2ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch2achper = number_format(($ch2['curr'] / $ch2['target']) * 100, 2); 
$ch2ach = $ch2achper."%";}

if($ch3['achieved'] == "1"){
$ch3ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch3achper = number_format(($ch3['curr'] / $ch3['target']) * 100, 2); 
$ch3ach = $ch3achper."%";}

if($ch4['achieved'] == "1"){
$ch4ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch4achper = number_format(($ch4['curr'] / $ch4['target']) * 100, 2); 
$ch4ach = $ch4achper."%";}

if($ch5['achieved'] == "1"){
$ch5ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch5achper = number_format(($ch5['curr'] / $ch5['target']) * 100, 2); 
$ch5ach = $ch5achper."%";}

if($ch6['achieved'] == "1"){
$ch6ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch6achper = number_format(($ch6['curr'] / $ch6['target']) * 100, 2); 
$ch6ach = $ch6achper."%";}

if($ch7['achieved'] == "1"){
$ch7ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch7achper = number_format(($ch7['curr'] / $ch7['target']) * 100, 2); 
$ch7ach = $ch7achper."%";}

if($ch8['achieved'] == "1"){
$ch8ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch8achper = number_format(($ch8['curr'] / $ch8['target']) * 100, 2); 
$ch8ach = $ch8achper."%";}

if($ch9['achieved'] == "1"){
$ch9ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch9achper = number_format(($ch9['curr'] / $ch9['target']) * 100, 2); 
$ch9ach = $ch9achper."%";}

if($ch10['achieved'] == "1"){
$ch10ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch10achper = number_format(($ch10['curr'] / $ch10['target']) * 100, 2); 
$ch10ach = $ch10achper."%";}

if($ch11['achieved'] == "1"){
$ch11ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch11achper = number_format(($ch11['curr'] / $ch11['target']) * 100, 2); 
$ch11ach = $ch11achper."%";}

if($ch12['achieved'] == "1"){
$ch12ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch12achper = number_format(($ch12['curr'] / $ch12['target']) * 100, 2); 
$ch12ach = $ch12achper."%";}

if($ch13['achieved'] == "1"){
$ch13ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch13achper = number_format(($ch13['curr'] / $ch13['target']) * 100, 2); 
$ch13ach = $ch13achper."%";}

if($ch14['achieved'] == "1"){
$ch14ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ch14achper = number_format(($ch14['curr'] / $ch14['target']) * 100, 2); 
$ch14ach = $ch14achper."%";}

$text .= "<td style='width:33%' class='indent'>";

$text .= "<table style='width:100%'>";

$text .= "<tr>
	  <td colspan='2' class='forumheader3'>Recon</td>
	  </tr>";

$text .= "<tr>
	  <td style='width:60%;text-align:left' class='indent'>Rank:</td>
	  <td style='width:40%;text-align:right' class='indent'>".$rifrank."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Time:</td>
	  <td style='width:;text-align:right' class='indent'>".$riftime."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkills."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Deaths:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifdeaths."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>K/D Ratio:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkdr."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>Kills/min:</td>
	  <td style='width:;text-align:right' class='indent'>".$rifkpm."</td>
	  </tr>
	  <tr>
	  <td colspan='2' class='forumheader3'>Recon Ranks</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>1.Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch0ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>2.Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch1ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>3.Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch2ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>4.Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch3ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>5.Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch4ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>6.Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch5ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>7.Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch6ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>8.Tier 1 Recruit</td>
	  <td style='width:;text-align:right' class='indent'>".$ch7ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>9.Tier 1 Regular</td>
	  <td style='width:;text-align:right' class='indent'>".$ch8ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>10.Tier 1 Expert</td>
	  <td style='width:;text-align:right' class='indent'>".$ch9ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>11.Tier 1 Veteran</td>
	  <td style='width:;text-align:right' class='indent'>".$ch10ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>12.Tier 1 Operator</td>
	  <td style='width:;text-align:right' class='indent'>".$ch11ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>13.Tier 1 Commander</td>
	  <td style='width:;text-align:right' class='indent'>".$ch12ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>14.Tier 1 Elite</td>
	  <td style='width:;text-align:right' class='indent'>".$ch13ach."</td>
	  </tr>
	  <tr>
	  <td style='width:;text-align:left' class='indent'>15.Tier 1 Warfighter</td>
	  <td style='width:;text-align:right' class='indent'>".$ch14ach."</td>
	  </tr>
";

$text .= "</table>";

$text .= "</td>";

//------------------------------------------------------------------


$text .= "</tr></table></div>";

?>
