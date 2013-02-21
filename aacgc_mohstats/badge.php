<?php

/*
#######################################
#     AACGC MOH Stats                 #                
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/

//-----------------------------------------------------
if ($row['user_mohtype'] == "Windows"){$mohtype = "pc";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "ps3";}
$usermohname = $row['user_moh'];
//-----------------------------------------------------
$url = 'http://api.mohstats.com/api/'.$mohtype.'';
$postdata = 'players='.$usermohname.'&fields=all';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$data = curl_exec($ch);
curl_close($ch);
$data = json_decode($data,true);
//-----------------------------------------------------
$membername = $data['players']['0']['name'];
$rank = $data['players']['0']['rank'];  
$rankname = $data['players']['0']['rank_name']; 
$level = $data['players']['0']['level'];
//------------------------------------------------------

$text .= "<div style='height=400px; background-image:url(".e_PLUGIN."aacgc_mohstats/images/badge_bg.jpg); background-position: center top; background-repeat:no-repeat; background-attachment: fixed;'><table style='width:100%'>";

$text .= "
<tr>
<td style='width:20%'>Username:</td>
<td style='width:60%'>".$avatar." ".$username." (".$membername.")</center></td>
</tr><tr>
<td>Rank:</td>
<td>(".$rank.") ".$rankname."</td>
</tr><tr>
<td>Level:</td>
<td>".$level."</td>
</tr>
";

$text .= "</table></div>";

//-----------------------------------------------------

?>
