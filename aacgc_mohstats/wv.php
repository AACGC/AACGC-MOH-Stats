<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/


//------------------------------------------------------

$text .= "
<table style='width:100%'>
<tr>
<td class='forumheader3' colspan='7'><center><b><u>Weapon / Vehicle Stats</u></b></center></td>
</tr>
</table>";

$text .= "<div style='height:".$pref['moh_secth_wv']."; overflow:auto' class=''>
	  <table style='width:100%'>";

//------------------------------------------------------

$wv = $data['players']['0']['weapons'];

//---------------------# Melee #---------------------------------

$mel = $wv['mel'];

//----------# Knife #-----------+

$knvname = $mel['knv']['name'];
$knvkills = number_format($mel['knv']['kills']);
$knvttime = $mel['knv']['time'];
$knvhours = intval(intval($knvttime) / 3600);
$knvminutes = bcmod((intval($knvttime) / 60),60);
$knvseconds = bcmod(intval($knvttime),60);
$knvtime = "".$knvhours."h ".$knvminutes."m ".$knvseconds."s";
$knvkpm = number_format($mel['knv']['kills'] / ($knvttime / 60), 2);

//----------# Axe #-----------+

$axename = $mel['axe']['name'];
$axekills = number_format($mel['axe']['kills']);
$axettime = $mel['axe']['time'];
$axehours = intval(intval($axettime) / 3600);
$axeminutes = bcmod((intval($axettime) / 60),60);
$axeseconds = bcmod(intval($axettime),60);
$axetime = "".$axehours."h ".$axeminutes."m ".$axeseconds."s";
$axekpm = number_format($mel['axe']['kills'] / ($axettime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Melee</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$knvname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$knvkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$knvtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$knvkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$axename."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$axekills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$axetime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$axekpm."</td>
	  </tr>
";


//------------------------------------------------------



//---------------------# Hand Guns #---------------------------------

$hg = $wv['hg'];

//----------# M9 #-----------+

$m9name = $hg['m9']['name'];
$m9kills = number_format($hg['m9']['kills']);
$m9ttime = $hg['m9']['time'];
$m9hours = intval(intval($m9ttime) / 3600);
$m9minutes = bcmod((intval($m9ttime) / 60),60);
$m9seconds = bcmod(intval($m9ttime),60);
$m9time = "".$m9hours."h ".$m9minutes."m ".$m9seconds."s";
$m9kpm = number_format($hg['m9']['kills'] / ($m9ttime / 60), 2);

//----------# Tariq #-----------+

$tariqname = $hg['tariq']['name'];
$tariqkills = number_format($hg['tariq']['kills']);
$tariqttime = $hg['tariq']['time'];
$tariqhours = intval(intval($tariqttime) / 3600);
$tariqminutes = bcmod((intval($tariqttime) / 60),60);
$tariqseconds = bcmod(intval($tariqttime),60);
$tariqtime = "".$tariqhours."h ".$tariqminutes."m ".$tariqseconds."s";
$tariqkpm = number_format($hg['tariq']['kills'] / ($tariqttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Hand Guns</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m9name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m9kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m9time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m9kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$tariqname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$tariqkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$tariqtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$tariqkpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Light Machine Guns #---------------------------------

$lmgs = $wv['LMGs'];

//----------# M249 #-----------+

$m249name = $lmgs['m249']['name'];
$m249kills = number_format($lmgs['m249']['kills']);
$m249ttime = $lmgs['m249']['time'];
$m249hours = intval(intval($m249ttime) / 3600);
$m249minutes = bcmod((intval($m249ttime) / 60),60);
$m249seconds = bcmod(intval($m249ttime),60);
$m249time = "".$m249hours."h ".$m249minutes."m ".$m249seconds."s";
$m249kpm = number_format($lmgs['m249']['kills'] / ($m249ttime / 60), 2);

//----------# PKM #-----------+

$pknname = $lmgs['pkn']['name'];
$pknkills = number_format($lmgs['pkn']['kills']);
$pknttime = $lmgs['pkn']['time'];
$pknhours = intval(intval($pknttime) / 3600);
$pknminutes = bcmod((intval($pknttime) / 60),60);
$pknseconds = bcmod(intval($pknttime),60);
$pkntime = "".$pknhours."h ".$pknminutes."m ".$pknseconds."s";
$pknkpm = number_format($lmgs['pkn']['kills'] / ($pknttime / 60), 2);

//----------# M60 #-----------+

$m60name = $lmgs['m60']['name'];
$m60kills = number_format($lmgs['m60']['kills']);
$m60ttime = $lmgs['m60']['time'];
$m60hours = intval(intval($m60ttime) / 3600);
$m60minutes = bcmod((intval($m60ttime) / 60),60);
$m60seconds = bcmod(intval($m60ttime),60);
$m60time = "".$m60hours."h ".$m60minutes."m ".$m60seconds."s";
$m60kpm = number_format($lmgs['m60']['kills'] / ($m60ttime / 60), 2);

//----------# RPK #-----------+

$rpkname = $lmgs['rpk']['name'];
$rpkkills = number_format($lmgs['rpk']['kills']);
$rpkttime = $lmgs['rpk']['time'];
$rpkhours = intval(intval($rpkttime) / 3600);
$rpkminutes = bcmod((intval($rpkttime) / 60),60);
$rpkseconds = bcmod(intval($rpkttime),60);
$rpktime = "".$rpkhours."h ".$rpkminutes."m ".$rpkseconds."s";
$rpkkpm = number_format($lmgs['rpk']['kills'] / ($rpkttime / 60), 2);

//----------# M240 #-----------+

$m240name = $lmgs['m240']['name'];
$m240kills = number_format($lmgs['m240']['kills']);
$m240ttime = $lmgs['m240']['time'];
$m240hours = intval(intval($m240ttime) / 3600);
$m240minutes = bcmod((intval($m240ttime) / 60),60);
$m240seconds = bcmod(intval($m240ttime),60);
$m240time = "".$m240hours."h ".$m240minutes."m ".$m240seconds."s";
$m240kpm = number_format($lmgs['m240']['kills'] / ($m240ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Light Machine Guns</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m249name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m249kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m249time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m249kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$pknname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$pknkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$pkntime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$pknkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m60name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m60kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m60time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m60kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$rpkname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rpkkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$rpktime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rpkkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m240name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m240kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m240time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m240kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Assault #---------------------------------

$ass = $wv['ass'];

//----------# M16 #-----------+

$m16name = $ass['m16']['name'];
$m16kills = number_format($ass['m16']['kills']);
$m16ttime = $ass['m16']['time'];
$m16hours = intval(intval($m16ttime) / 3600);
$m16minutes = bcmod((intval($m16ttime) / 60),60);
$m16seconds = bcmod(intval($m16ttime),60);
$m16time = "".$m16hours."h ".$m16minutes."m ".$m16seconds."s";
$m16kpm = number_format($ass['m16']['kills'] / ($m16ttime / 60), 2);

//----------# AK47 #-----------+

$ak47name = $ass['ak47']['name'];
$ak47kills = number_format($ass['ak47']['kills']);
$ak47ttime = $ass['ak47']['time'];
$ak47hours = intval(intval($ak47ttime) / 3600);
$ak47minutes = bcmod((intval($ak47ttime) / 60),60);
$ak47seconds = bcmod(intval($ak47ttime),60);
$ak47time = "".$ak47hours."h ".$ak47minutes."m ".$ak47seconds."s";
$ak47kpm = number_format($ass['ak47']['kills'] / ($ak47ttime / 60), 2);

//----------# F2000 #-----------+

$f2000name = $ass['f2000']['name'];
$f2000kills = number_format($ass['f2000']['kills']);
$f2000ttime = $ass['f2000']['time'];
$f2000hours = intval(intval($f2000ttime) / 3600);
$f2000minutes = bcmod((intval($f2000ttime) / 60),60);
$f2000seconds = bcmod(intval($f2000ttime),60);
$f2000time = "".$f2000hours."h ".$f2000minutes."m ".$f2000seconds."s";
$f2000kpm = number_format($ass['f2000']['kills'] / ($f2000ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Assault</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m16name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m16kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m16time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m16kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$ak47name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$ak47kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$ak47time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$ak47kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$f2000name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$f2000kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$f2000time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$f2000kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Carbine #---------------------------------

$spe = $wv['spe'];

//----------# M4 #-----------+

$m4name = $spe['M4']['name'];
$m4kills = number_format($spe['M4']['kills']);
$m4ttime = $spe['M4']['time'];
$m4hours = intval(intval($m4ttime) / 3600);
$m4minutes = bcmod((intval($m4ttime) / 60),60);
$m4seconds = bcmod(intval($m4ttime),60);
$m4time = "".$m4hours."h ".$m4minutes."m ".$m4seconds."s";
$m4kpm = number_format($spe['M4']['kills'] / ($m4ttime / 60), 2);

//----------# AKS74u #-----------+

$aks74uname = $spe['aks74u']['name'];
$aks74ukills = number_format($spe['aks74u']['kills']);
$aks74uttime = $spe['aks74u']['time'];
$aks74uhours = intval(intval($aks74uttime) / 3600);
$aks74uminutes = bcmod((intval($aks74uttime) / 60),60);
$aks74useconds = bcmod(intval($aks74uttime),60);
$aks74utime = "".$aks74uhours."h ".$aks74uminutes."m ".$aks74useconds."s";
$aks74ukpm = number_format($spe['aks74u']['kills'] / ($aks74uttime / 60), 2);

//----------# MP7 #-----------+

$mp7name = $spe['mp7']['name'];
$mp7kills = number_format($spe['mp7']['kills']);
$mp7ttime = $spe['mp7']['time'];
$mp7hours = intval(intval($mp7ttime) / 3600);
$mp7minutes = bcmod((intval($mp7ttime) / 60),60);
$mp7seconds = bcmod(intval($mp7ttime),60);
$mp7time = "".$mp7hours."h ".$mp7minutes."m ".$mp7seconds."s";
$mp7kpm = number_format($spe['mp7']['kills'] / ($mp7ttime / 60), 2);

//----------# P90 #-----------+

$p90name = $spe['p90']['name'];
$p90kills = number_format($spe['p90']['kills']);
$p90ttime = $spe['p90']['time'];
$p90hours = intval(intval($p90ttime) / 3600);
$p90minutes = bcmod((intval($p90ttime) / 60),60);
$p90seconds = bcmod(intval($p90ttime),60);
$p90time = "".$p90hours."h ".$p90minutes."m ".$p90seconds."s";
$p90kpm = number_format($spe['p90']['kills'] / ($p90ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Carbine</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m4name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m4kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m4time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m4kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$aks74uname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$aks74ukills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$aks74utime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$aks74ukpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$mp7name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mp7kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$mp7time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mp7kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$p90name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$p90kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$p90time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$p90kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Shotguns #---------------------------------

$dem = $wv['dem'];

//----------# T194 #-----------+

$t194name = $dem['t194']['name'];
$t194kills = number_format($dem['t194']['kills']);
$t194ttime = $dem['t194']['time'];
$t194hours = intval(intval($t194ttime) / 3600);
$t194minutes = bcmod((intval($t194ttime) / 60),60);
$t194seconds = bcmod(intval($t194ttime),60);
$t194time = "".$t194hours."h ".$t194minutes."m ".$t194seconds."s";
$t194kpm = number_format($dem['t194']['kills'] / ($t194ttime / 60), 2);

//----------# 870MCS #-----------+

$mcsname = $dem['mcs']['name'];
$mcskills = number_format($dem['mcs']['kills']);
$mcsttime = $dem['mcs']['time'];
$mcshours = intval(intval($mcsttime) / 3600);
$mcsminutes = bcmod((intval($mcsttime) / 60),60);
$mcsseconds = bcmod(intval($mcsttime),60);
$mcstime = "".$mcshours."h ".$mcsminutes."m ".$mcsseconds."s";
$mcskpm = number_format($dem['mcs']['kills'] / ($mcsttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Shotguns</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$t194name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$t194kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$t194time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$t194kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$mcsname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mcskills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$mcstime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mcskpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Sniper #---------------------------------

$rec = $wv['rec'];

//----------# SVD #-----------+

$svdname = $rec['svd']['name'];
$svdkills = number_format($rec['svd']['kills']);
$svdttime = $rec['svd']['time'];
$svdhours = intval(intval($svdttime) / 3600);
$svdminutes = bcmod((intval($svdttime) / 60),60);
$svdseconds = bcmod(intval($svdttime),60);
$svdtime = "".$svdhours."h ".$svdminutes."m ".$svdseconds."s";
$svdkpm = number_format($rec['svd']['kills'] / ($svdttime / 60), 2);

//----------# M21 #-----------+

$m21name = $rec['m21']['name'];
$m21kills = number_format($rec['m21']['kills']);
$m21ttime = $rec['m21']['time'];
$m21hours = intval(intval($ttime) / 3600);
$m21minutes = bcmod((intval($ttime) / 60),60);
$m21seconds = bcmod(intval($ttime),60);
$m21time = "".$m21hours."h ".$m21minutes."m ".$m21seconds."s";
$m21kpm = number_format($rec['m21']['kills'] / ($m21ttime / 60), 2);

//----------# SV98 #-----------+

$sv98name = $rec['sv98']['name'];
$sv98kills = number_format($rec['sv98']['kills']);
$sv98ttime = $rec['sv98']['time'];
$sv98hours = intval(intval($sv98ttime) / 3600);
$sv98minutes = bcmod((intval($sv98ttime) / 60),60);
$sv98seconds = bcmod(intval($sv98ttime),60);
$sv98time = "".$sv98hours."h ".$sv98minutes."m ".$sv98seconds."s";
$sv98kpm = number_format($rec['sv98']['kills'] / ($sv98ttime / 60), 2);

//----------# M24 #-----------+

$m24name = $rec['m24']['name'];
$m24kills = number_format($rec['m24']['kills']);
$m24ttime = $rec['m24']['time'];
$m24hours = intval(intval($m24ttime) / 3600);
$m24minutes = bcmod((intval($m24ttime) / 60),60);
$m24seconds = bcmod(intval($m24ttime),60);
$m24time = "".$m24hours."h ".$m24minutes."m ".$m24seconds."s";
$m24kpm = number_format($rec['m24']['kills'] / ($m24ttime / 60), 2);

//----------# G3 #-----------+

$g3name = $rec['g3']['name'];
$g3kills = number_format($rec['g3']['kills']);
$g3ttime = $rec['g3']['time'];
$g3hours = intval(intval($g3ttime) / 3600);
$g3minutes = bcmod((intval($g3ttime) / 60),60);
$g3seconds = bcmod(intval($g3ttime),60);
$g3time = "".$g3hours."h ".$g3minutes."m ".$g3seconds."s";
$g3kpm = number_format($rec['g3']['kills'] / ($g3ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Sniper</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$svdname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$svdkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$svdtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$svdkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m21name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m21kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m21time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m21kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$sv98name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$sv98kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$sv98time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$sv98kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m24name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m24kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m24time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m24kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$g3name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$g3kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$g3time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$g3kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Rocket Launcher #---------------------------------

$rpg = $wv['rpg'];

//----------# RPG7 Rocket Launcher #-----------+

$rpgname = $rpg['rpg7']['name'];
$rpgkills = number_format($rpg['rpg7']['kills']);
$rpgttime = $rpg['rpg7']['time'];
$rpghours = intval(intval($rpgttime) / 3600);
$rpgminutes = bcmod((intval($rpgttime) / 60),60);
$rpgseconds = bcmod(intval($rpgttime),60);
$rpgtime = "".$rpghours."h ".$rpgminutes."m ".$rpgseconds."s";
$rpgkpm = number_format($rpg['rpg7']['kills'] / ($rpgttime / 60), 2);

//----------# M136 Rocket Launcher #-----------+

$m136name = $rpg['m136']['name'];
$m136kills = number_format($rpg['m136']['kills']);
$m136ttime = $rpg['m136']['time'];
$m136hours = intval(intval($m136ttime) / 3600);
$m136minutes = bcmod((intval($m136ttime) / 60),60);
$m136seconds = bcmod(intval($m136ttime),60);
$m136time = "".$m136hours."h ".$m136minutes."m ".$m136seconds."s";
$m136kpm = number_format($rpg['m136']['kills'] / ($m136ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Rocket Launchers</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$rpgname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rpgkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$rpgtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rpgkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m136name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m136kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m136time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m136kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Explosives #---------------------------------

$exp = $wv['exp'];

//----------# C4 #-----------+
 
$c4name = $exp['c4']['name'];
$c4kills = number_format($exp['c4']['kills']);
$c4ttime = $exp['c4']['time'];
$c4hours = intval(intval($c4ttime) / 3600);
$c4minutes = bcmod((intval($c4ttime) / 60),60);
$c4seconds = bcmod(intval($c4ttime),60);
$c4time = "".$c4hours."h ".$c4minutes."m ".$c4seconds."s";
$c4kpm = number_format($exp['c4']['kills'] / ($c4ttime / 60), 2);

//----------# Grenade #-----------+

$hgrname = $exp['hgr']['name'];
$hgrkills = number_format($exp['hgr']['kills']);
$hgrttime = $exp['hgr']['time'];
$hgrhours = intval(intval($hgrttime) / 3600);
$hgrminutes = bcmod((intval($hgrttime) / 60),60);
$hgrseconds = bcmod(intval($hgrttime),60);
$hgrtime = "".$hgrhours."h ".$hgrminutes."m ".$hgrseconds."s";
$hgrkpm = number_format($exp['hgr']['kills'] / ($hgrttime / 60), 2);

//----------# 40mm Grenade launcher #-----------+

$mmglname = $exp['40mmgl']['name'];
$mmglkills = number_format($exp['40mmgl']['kills']);
$mmglttime = $exp['40mmgl']['time'];
$mmglhours = intval(intval($mmglttime) / 3600);
$mmglminutes = bcmod((intval($mmglttime) / 60),60);
$mmglseconds = bcmod(intval($mmglttime),60);
$mmgltime = "".$mmglhours."h ".$mmglminutes."m ".$mmglseconds."s";
$mmglkpm = number_format($exp['40mmgl']['kills'] / ($mmglttime / 60), 2);

//----------#  #-----------+

$shgname = $exp['shg']['name'];
$shgkills = number_format($exp['shg']['kills']);
$shgttime = $exp['shg']['time'];
$shghours = intval(intval($shgttime) / 3600);
$shgminutes = bcmod((intval($shgttime) / 60),60);
$shgseconds = bcmod(intval($shgttime),60);
$shgtime = "".$shghours."h ".$shgminutes."m ".$shgseconds."s";
$shgkpm = number_format($exp['shg']['kills'] / ($shgttime / 60), 2);

//----------#  #-----------+


$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Explosives</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$c4name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$c4kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$c4time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$c4kpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$hgrname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$hgrkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$hgrtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$hgrkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$mmglname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mmglkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$mmgltime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$mmglkpm."</td>
	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$shgname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$shgkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$shgtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$shgkpm."</td>
	  </tr>
";

//------------------------------------------------------

//---------------------# Vehicles #---------------------------------

$veh = $wv['veh'];

//----------# M3A3 #-----------+

$m3a3name = $veh['m3a3']['name'];
$m3a3kills = number_format($veh['m3a3']['kills']);
$m3a3ttime = $veh['m3a3']['time'];
$m3a3hours = intval(intval($m3a3ttime) / 3600);
$m3a3minutes = bcmod((intval($m3a3ttime) / 60),60);
$m3a3seconds = bcmod(intval($m3a3ttime),60);
$m3a3time = "".$m3a3hours."h ".$m3a3minutes."m ".$m3a3seconds."s";
$m3a3kpm = number_format($veh['m3a3']['kills'] / ($m3a3ttime / 60), 2);

//----------#  #-----------+

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Vehicles</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$m3a3name."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m3a3kills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$m3a3time."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$m3a3kpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Stationary #---------------------------------

$statv = $wv['statv'];

//----------# HMG #-----------+

$statvname = $statv['hmg']['name'];
$statvkills = number_format($statv['hmg']['kills']);
$statvttime = $statv['hmg']['time'];
$statvhours = intval(intval($statvttime) / 3600);
$statvminutes = bcmod((intval($statvttime) / 60),60);
$statvseconds = bcmod(intval($statvttime),60);
$statvtime = "".$statvhours."h ".$statvminutes."m ".$statvseconds."s";
$statvkpm = number_format($statv['hmg']['kills'] / ($statvttime / 60), 2);

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Stationary</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$statvname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$statvkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$statvtime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$statvkpm."</td>
	  </tr>
";


//------------------------------------------------------


//---------------------# Special #---------------------------------

$spc = $wv['spc'];

//----------# Roadkill #-----------+

$rokname = $spc['rok']['name'];
$rokkills = number_format($spc['rok']['kills']);
$rokttime = $spc['rok']['time'];
$rokhours = intval(intval($rokttime) / 3600);
$rokminutes = bcmod((intval($rokttime) / 60),60);
$rokseconds = bcmod(intval($rokttime),60);
$roktime = "".$rokhours."h ".$rokminutes."m ".$rokseconds."s";
$rokkpm = number_format($spc['rok']['kills'] / ($rokttime / 60), 2);

$text .= "<tr>
	  <td class='forumheader3' colspan='4'><center><u>Special</u></center></td>
	  </tr>
	  <tr>
  	  <td class='forumheader3' style='width:40%; text-align:left'><u>Weapon</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kills</u></td>
  	  <td class='forumheader3' style='width:20%; text-align:right'><u>Time</u></td>
  	  <td class='forumheader3' style='width:0%; text-align:right'><u>Kpm</u></td>
  	  </tr>
	  <tr>
	  <td class='indent' style='width:40%; text-align:left'>".$rokname."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rokkills."</td>
	  <td class='indent' style='width:20%; text-align:right'>".$roktime."</td>
	  <td class='indent' style='width:0%; text-align:right'>".$rokkpm."</td>
	  </tr>

";


//------------------------------------------------------

$text .= "</table></div>";



?>