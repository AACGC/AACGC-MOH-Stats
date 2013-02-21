<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

$ach = $data['players']['0']['achievements'];

//------------------------------------------------------

$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3'><center><b><u>Achievements</u></b></center></td>
</tr>
</table>";

$text .= "<div style='height:".$pref['moh_secth_achs']."; overflow:auto' class=''>
	  <table style='width:100%'>";

//------------------------------------------------------

$ta01 = $ach['ta01'];
$ta02 = $ach['ta02'];
$ta03 = $ach['ta03'];
$ta04 = $ach['ta04'];
$ta05 = $ach['ta05'];
$ta06 = $ach['ta06'];
$ta07 = $ach['ta07'];
$ta08 = $ach['ta08'];
$ta09 = $ach['ta09'];
$ta10 = $ach['ta10'];
$ta11 = $ach['ta11'];
$ta13 = $ach['ta13'];
$ta14 = $ach['ta14'];
$ta15 = $ach['ta15'];
$ta16 = $ach['ta16'];
$ta17 = $ach['ta17'];
$ta20 = $ach['ta20'];
$ta21 = $ach['ta21'];
$ta22 = $ach['ta22'];
$ta23 = $ach['ta23'];

if($ta01['achieved'] == "1")
{$ta01ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta01achper = number_format(($ta01['curr'] / $ta01['target']) * 100, 2);
$ta01ach = $ta01achper."%";}

if($ta02['achieved'] == "1")
{$ta02ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta02achper = number_format(($ta02['curr'] / $ta02['target']) * 100, 2);
$ta02ach = $ta02achper."%";}

if($ta03['achieved'] == "1")
{$ta03ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta03achper = number_format(($ta03['curr'] / $ta03['target']) * 100, 2);
$ta03ach = $ta03achper."%";}

if($ta04['achieved'] == "1")
{$ta04ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta04achper = number_format(($ta04['curr'] / $ta04['target']) * 100, 2);
$ta04ach = $ta04achper."%";}

if($ta05['achieved'] == "1")
{$ta05ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta05achper = number_format(($ta05['curr'] / $ta05['target']) * 100, 2);
$ta05ach = $ta05achper."%";}

if($ta06['achieved'] == "1")
{$ta06ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta06achper = number_format(($ta06['curr'] / $ta06['target']) * 100, 2);
$ta06ach = $ta06achper."%";}

if($ta07['achieved'] == "1")
{$ta07ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta07achper = number_format(($ta07['curr'] / $ta07['target']) * 100, 2);
$ta07ach = $ta07achper."%";}

if($ta08['achieved'] == "1")
{$ta08ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta08achper = number_format(($ta08['curr'] / $ta08['target']) * 100, 2);
$ta08ach = $ta08achper."%";}

if($ta09['achieved'] == "1")
{$ta09ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta09achper = number_format(($ta09['curr'] / $ta09['target']) * 100, 2);
$ta09ach = $ta09achper."%";}

if($ta10['achieved'] == "1")
{$ta10ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta10achper = number_format(($ta10['curr'] / $ta10['target']) * 100, 2);
$ta10ach = $ta10achper."%";}

if($ta11['achieved'] == "1")
{$ta11ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta11achper = number_format(($ta11['curr'] / $ta11['target']) * 100, 2);
$ta11ach = $ta11achper."%";}

if($ta13['achieved'] == "1")
{$ta13ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta13achper = number_format(($ta13['curr'] / $ta13['target']) * 100, 2);
$ta13ach = $ta13achper."%";}

if($ta14['achieved'] == "1")
{$ta14ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta14achper = number_format(($ta14['curr'] / $ta14['target']) * 100, 2);
$ta14ach = $ta14achper."%";}

if($ta15['achieved'] == "1")
{$ta15ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta15achper = number_format(($ta15['curr'] / $ta15['target']) * 100, 2);
$ta15ach = $ta15achper."%";}

if($ta16['achieved'] == "1")
{$ta16ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta16achper = number_format(($ta16['curr'] / $ta16['target']) * 100, 2);
$ta16ach = $ta16achper."%";}

if($ta17['achieved'] == "1")
{$ta17ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta17achper = number_format(($ta17['curr'] / $ta17['target']) * 100, 2);
$ta17ach = $ta17achper."%";}

if($ta20['achieved'] == "1")
{$ta20ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta20achper = number_format(($ta20['curr'] / $ta20['target']) * 100, 2);
$ta20ach = $ta20achper."%";}

if($ta21['achieved'] == "1")
{$ta21ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta21achper = number_format(($ta21['curr'] / $ta21['target']) * 100, 2);
$ta21ach = $ta21achper."%";}

if($ta22['achieved'] == "1")
{$ta22ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta22achper = number_format(($ta22['curr'] / $ta22['target']) * 100, 2);
$ta22ach = $ta22achper."%";}

if($ta23['achieved'] == "1")
{$ta23ach = "<img src='".e_PLUGIN."aacgc_mohstats/images/tick.png' />";}
else
{$ta23achper = number_format(($ta23['curr'] / $ta23['target']) * 100, 2);
$ta23ach = $ta23achper."%";}

//------------------------------------------------------

$text .= "<tr>
	  <td class='forumheader3' colspan='2'>Achievement</td>
	  <td class='forumheader3'>Description</td>
	  <td class='forumheader3'>Awarded</td>
	  </tr>";


$text .= "<tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a01.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta01['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta01['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta01ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a02.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta02['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta02['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta02ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a03.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta03['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta03['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta03ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a04.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta04['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta04['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta04ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a05.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta05['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta05['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta05ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a06.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta06['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta06['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta06ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a07.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta07['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta07['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta07ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a08.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta08['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta08['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta08ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a09.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta09['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta09['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta09ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a10.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta10['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta10['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta10ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a11.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta11['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta11['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta11ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a13.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta13['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta13['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta13ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a14.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta14['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta14['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta14ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a15.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta15['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta15['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta15ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a16.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta16['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta16['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta16ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a17.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta17['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta17['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta17ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a20.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta20['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta20['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta20ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a21.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta21['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta21['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta21ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a22.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta22['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta22['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta22ach."</td>
	  </tr>
	  <tr>
	  <td style='width:0%' class='indent'><img src='".e_PLUGIN."aacgc_mohstats/achievements/a23.png' /></td>
	  <td style='width:30%;text-align:left' class='indent'>".$ta23['name']."</td>
	  <td style='width:70%;text-align:left' class='indent'>".$ta23['desc']."</td>
	  <td style='width:0%' class='indent'>".$ta23ach."</td>
	  </tr>
";

//------------------------------------------------------

$text .= "</table></div>";

?>
