if ($pref['moh_enable_profile'] == "1"){

global $sql,$sql2,$user; 

$suser = "";
$USER_ID = "";


$url = $_SERVER["REQUEST_URI"];
$suser = explode(".", $url);
	if ($suser[1] == 'php?id') {
	$suser = $suser[2];}

$SUSER_ID = $suser;

if (USER){

$sql->db_Select("user_extended", "*", "user_extended_id='".intval($SUSER_ID)."'");
$row = $sql->db_Fetch();

if ($row['user_moh'] == ""){}
else
{
if ($row['user_mohtype'] == "PC"){$mohtype = "pc";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "ps3";}
$userid = $row['user_extended_id'];
$usermohname = $row['user_moh'];

if ($pref['moh_enable_platform'] == "1"){
if ($row['user_mohtype'] == "PC"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png'></img> PC";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png'></img> Xbox360";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png'></img> PS3";}}

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

$membername = $data['players']['0']['name'];
$skill = number_format($data['players']['0']['sk_main']);
$score = number_format($data['players']['0']['score']);
$kills = number_format($data['players']['0']['kills']); 
$deaths = number_format($data['players']['0']['deaths']);
$kdratio = round($data['players']['0']['kills']/$data['players']['0']['deaths'], 2); 
$accuracy = $data['players']['0']['accuracy'] * 100;
$ttime  = $data['players']['0']['time'];
$hours = intval(intval($ttime) / 3600);
$minutes = bcmod((intval($ttime) / 60),60);
$seconds = bcmod(intval($ttime),60);
$time = "".$hours."h ".$minutes."m ".$seconds."s";
//------------------------------------------------------

$mohuser .= "
<tr><td class='forumheader3' colspan='2'><div style='height:150px; width:400px; background-color:#000000; background-image: url(".e_PLUGIN."aacgc_mohstats/images/badge_bg.jpg); border:0px; background-repeat: no-repeat;'>
<table style='width:100%' cellspacing='2' cellpadding='2'>
<tr>
<td style='width:70%' colspan='2'> ".$membername."<br><br></td>
<td style='width:30%'></td>
</tr><tr>
<td colspan='2'> Platform: ".$platform."</td>
<td></td>
</tr><tr>
<td> Score: ".$score."</td>
<td> Skill: ".$skill."</td>
<td></td>
</tr><tr>
<td> Kills: ".$kills."</td>
<td> Deaths: ".$deaths."</td>
<td></td>
</tr><tr>
<td> K/D Ratio: ".$kdratio."</td>
<td> Accuracy: ".$accuracy."%</td>
<td></td>
</tr><tr>
<td colspan='2'> Time: ".$time."</td>
<td></td>
</tr><tr>
<td colspan='2'><br> <a href='".e_PLUGIN."aacgc_mohstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_mohstats/images/statslink.jpg'></img></a></td>
<td></td>
</tr>
</table></div></td></tr>";


return "".$mohuser."";}}}

}


