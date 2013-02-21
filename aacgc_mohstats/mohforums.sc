if ($pref['moh_enable_forum'] == "1"){

global $post_info, $sql;

$postowner  = $post_info['user_id'];



$sql->db_Select("user_extended", "*", "user_extended_id='".intval($postowner)."'");
while($row = $sql->db_Fetch()){

if ($row['user_moh'] == ""){}
else
{

if ($row['user_mohtype'] == "PC"){$mohtype = "Windows";}
if ($row['user_mohtype'] == "Xbox360"){$mohtype = "Xbox360";}
if ($row['user_mohtype'] == "PS3"){$mohtype = "PS3";}
$userid = $row['user_extended_id'];
$usermohname = $row['user_moh'];

if ($pref['moh_enable_platform'] == "1"){
if ($row['user_mohtype'] == "PC"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png' align=right></img>";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png' align=right></img>";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png' align=right></img>";}}

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

if ($row['user_mohtype'] == "PC"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/windows.png'></img> PC";}
if ($row['user_mohtype'] == "Xbox360"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/Xbox360.png'></img> Xbox360";}
if ($row['user_mohtype'] == "PS3"){
$platform = "<img width='10px' src='".e_PLUGIN."aacgc_mohstats/images/PS3.png'></img> PS3";}
//------------------------------------------------------



$mohforumms .= "<div style='height:58px; width:210px; background-image: url(".e_PLUGIN."aacgc_mohstats/images/forum_badge.jpg); border:0px; background-repeat: no-repeat;'>
<table style='width:100%'>
<tr>
<td colspan='2'> ".$membername."</td>
</tr><tr>
<td> Platform: ".$platform."</td>
<td></td>
</tr><tr>
<td><a href='".e_PLUGIN."aacgc_mohstats/Member_Details.php?det.".$userid."'><img src='".e_PLUGIN."aacgc_mohstats/images/statslink.jpg'></img></a></td>
<td></td>
</tr>
</table></div>";

}}

return "".$mohforumms."";

}}