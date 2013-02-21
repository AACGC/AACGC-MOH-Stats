<?php

/*
#######################################
#     e107 website system plguin      #
#     AACGC MOH Stats                 #    
#     by M@CH!N3                      #
#     http://www.AACGC.com            #
#######################################
*/



require_once('../../class2.php');
if (!defined('e107_INIT'))
{exit;}
if (!getperms('P'))
{header('location:' . e_HTTP . 'index.php');
exit;}
require_once(e_ADMIN . 'auth.php');
if (!defined('ADMIN_WIDTH'))
{define(ADMIN_WIDTH, 'width:100%;');}
require(e_PLUGIN . 'aacgc_mohstats/plugin.php');




$plugin_text = "
<table class='fborder' style='" . ADMIN_WIDTH . "'>
<tr><td class='fcaption'>
Created by All American Computer Gamers Community (AACGC)
</td></tr>
<tr><td class='forumheader3' style='width:15%;' >
Now that you have the AACGC MOH Stats Plugin installed you need to create 2 extended user fields (user_moh , user_mohtype), to do this go to your main e107 admin area (NOT the MOH plugin area) and you should see an icon named Extended User Fields. In there on the menu to your right you should have an option Add New Field. once you click that you need to fill in the options as follows:
<br><br>
for the first user field (user_moh):
<br><br>
Field name: user_moh (note is already has user_ added for you so all you need to type is moh)
<br>
Field text: MOH Username
<br>
Field Type: text box 
<br>
Required: No - Show on signup page 
<br>
Applicable: Members 
<br>
Read access: Everyone (public) 
<br>
Write access: Members 
<br>
Allow user to hide: No 
<br><br>
for the second user field (user_mohtype):
<br><br>
Field name: user_mohtype (note is already has user_ added for you so all you need to type is mohtype) 
<br>
Field text: MOH Platform
<br>
Field Type: Radio Buttons
<br>
Values:
<br> 
PC
<br>
PS3
<br>
Xbox360
<br><br>
(make sure you have Captol letters like shown for each value)
<br><br>
Required: No - Show on signup page 
<br>
Applicable: Members
<br>
Read access: Everyone (public)
<br>
Write access: Members 
<br>
Allow user to hide: No 
<br><br>
Once you have created both extended user fileds users can then add their MOH username in their profile settings and select what platform they play on. 


</td></tr>
</table>";


$ns->tablerender("AACGC Plugin Install / Setup Information", $plugin_text);


require_once(e_ADMIN . 'footer.php');

?>
